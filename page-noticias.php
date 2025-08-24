<?php
/**
 * Template Name: Página Noticias
 * Description: Página para el contenido de las noticias.
 */

get_header();

// 1) Leer filtros desde la URL
$current_page   = max( 1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page') );
$search_query   = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
$category_slug  = isset($_GET['category']) ? sanitize_title($_GET['category']) : '';

// Convertir slug a ID (para WP_Query con 'cat') si viene categoría
$cat_id = 0;
if ( $category_slug ) {
    $term = get_term_by('slug', $category_slug, 'category');
    if ( $term && ! is_wp_error($term) ) {
        $cat_id = (int) $term->term_id;
    }
}

// 2) Armar argumentos de la query
$args = array(
    'post_type'           => 'noticia',
    'post_status'         => 'publish',
    'paged'               => $current_page,
    's'                   => $search_query,
    'ignore_sticky_posts' => true,
    'orderby'             => 'date',
    'order'               => 'DESC',
);

// Filtrar por categoría si corresponde
if ( $cat_id > 0 ) {
    $args['cat'] = $cat_id;
}

// 3) Ejecutar query
$news_query = new WP_Query($args);

// 4) Traer todas las categorías (para los botones)
$cats = get_categories(array(
    'taxonomy'   => 'category',
    'hide_empty' => true,
));

// Helper para armar URLs de filtro preservando “s” y reseteando página
function rcd_build_filter_url($params = array()) {
    $base = get_permalink(); // esta es la URL de la página Noticias
    $query = array();

    if ( !empty($_GET['s']) ) {
        $query['s'] = sanitize_text_field($_GET['s']);
    }
    if ( !empty($params['category']) ) {
        $query['category'] = sanitize_title($params['category']);
    }
    // nunca llevamos “paged” en los filtros para no caer en páginas vacías
    return add_query_arg( $query, $base );
}

?>
<main>

    <!-- Breadcrumb -->
    <section class="py-4 bg-bg-secondary border-b border-border-subtle">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-text-secondary hover:text-accent transition-colors duration-300">Inicio</a>
                <span class="text-text-secondary">/</span>
                <span class="text-accent">Noticias</span>
            </nav>
        </div>
    </section>

    <!-- Hero -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight mb-6">
                    Últimas <span class="text-accent">Noticias</span>
                </h1>
                <p class="text-xl text-text-secondary leading-relaxed mb-8">
                    Mantente al día con actualizaciones, cambios normativos y análisis especializados.
                </p>
            </div>
        </div>
    </section>

    <!-- Filtros y Búsqueda -->
    <section class="py-8 bg-bg-secondary border-b border-border-subtle">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">

                <!-- Filtros por categoría -->
                <div class="flex flex-wrap gap-3">
                    <?php
                    // Botón “Todas”
                    $is_all = empty($category_slug);
                    ?>
                    <a href="<?php echo esc_url( rcd_build_filter_url([]) ); ?>"
                       class="px-4 py-2 rounded-lg font-medium text-sm transition-colors duration-300
                              <?php echo $is_all ? 'bg-accent text-primary-dark' : 'bg-bg-primary text-text-secondary hover:bg-accent hover:text-primary-dark'; ?>">
                        Todas
                    </a>

                    <?php foreach ( $cats as $c ) :
                        $active = ( $category_slug === $c->slug );
                        $url = rcd_build_filter_url(['category' => $c->slug]);
                    ?>
                        <a href="<?php echo esc_url( $url ); ?>"
                           class="px-4 py-2 rounded-lg font-medium text-sm transition-colors duration-300
                                  <?php echo $active ? 'bg-accent text-primary-dark' : 'bg-bg-primary text-text-secondary hover:bg-accent hover:text-primary-dark'; ?>">
                            <?php echo esc_html( $c->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Búsqueda -->
                <form method="get" action="<?php echo esc_url( get_permalink() ); ?>" class="relative">
                    <?php if ( !empty($category_slug) ) : ?>
                        <input type="hidden" name="category" value="<?php echo esc_attr($category_slug); ?>" />
                    <?php endif; ?>
                    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>"
                           placeholder="Buscar noticias..."
                           class="pl-10 pr-4 py-2 border border-border-subtle rounded-lg bg-bg-primary text-text-primary placeholder-text-secondary focus:outline-none focus:border-accent transition-colors duration-300 w-64">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>

            </div>
        </div>
    </section>

    <!-- Lista de Noticias -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <?php if ( $news_query->have_posts() ) : ?>
                <div class="space-y-8">
                    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                        <article class="bg-bg-secondary rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-border-subtle">
                            <div class="grid md:grid-cols-3 gap-6 items-center">
                                <div class="md:col-span-1">
                                    <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 md:h-32 object-cover rounded-lg', 'loading' => 'lazy']); ?>
                                        <?php else : ?>
                                            <img src="https://picsum.photos/800/600" alt="<?php the_title_attribute(); ?>" class="w-full h-48 md:h-32 object-cover rounded-lg" loading="lazy">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="md:col-span-2">
                                    <div class="flex items-center text-text-secondary text-sm mb-2">
                                        <span><?php echo esc_html( get_the_date( 'd \d\e F, Y' ) ); ?></span>
                                        <?php
                                        $post_cats = get_the_category();
                                        if ( !empty($post_cats) ) :
                                            $pc = $post_cats[0];
                                        ?>
                                            <span class="mx-2">•</span>
                                            <a class="bg-accent/20 text-accent px-2 py-1 rounded text-xs"
                                               href="<?php echo esc_url( rcd_build_filter_url( ['category' => $pc->slug] ) ); ?>">
                                                <?php echo esc_html( $pc->name ); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <h3 class="text-xl font-rubik font-semibold text-primary mb-3 hover:text-accent transition-colors duration-300">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>

                                    <p class="text-text-secondary mb-4 leading-relaxed">
                                        <?php echo esc_html( wp_trim_words( get_the_excerpt(), 30 ) ); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" class="text-accent hover:text-accent/80 font-medium inline-flex items-center">
                                        Leer noticia completa
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <!-- Paginación -->
                <div class="flex justify-center mt-12">
                    <?php
                    $big   = 999999999;
                    $links = paginate_links( array(
                        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'    => '?paged=%#%',
                        'current'   => $current_page,
                        'total'     => $news_query->max_num_pages,
                        'type'      => 'array',
                        'prev_text' => '&larr;',
                        'next_text' => '&rarr;',
                    ) );

                    if ( !empty($links) ) :
                        echo '<nav class="flex items-center space-x-2">';
                        foreach ( $links as $link ) {
                            // Quitar clases default y mapearlas a tus estilos
                            $is_active = strpos( $link, 'current' ) !== false;
                            $link = preg_replace('/class="[^"]*"/', '', $link);
                            $link = str_replace('<span aria-current="page" class="page-numbers current">', '<span class="px-3 py-2 bg-accent text-primary-dark rounded-lg font-medium">', $link);
                            $link = str_replace('<a', '<a class="px-3 py-2 text-text-secondary hover:text-accent transition-colors duration-300"', $link);
                            echo $link;
                        }
                        echo '</nav>';
                    endif;
                    ?>
                </div>

            <?php else : ?>
                <p class="text-text-secondary">No se encontraron noticias con esos filtros.</p>
            <?php endif; ?>

        </div>
    </section>

    <!-- Newsletter (tu bloque original) -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-white mb-6">
                    No te pierdas <span class="text-accent">ninguna noticia</span>
                </h2>
                <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                    Suscríbete a nuestro newsletter y recibe las últimas noticias tributarias directamente en tu correo electrónico.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                    <input type="email" placeholder="Tu correo electrónico" class="flex-1 px-6 py-4 rounded-lg bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:outline-none focus:border-accent transition-colors duration-300">
                    <button class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                        Suscribirse
                    </button>
                </div>
                <p class="text-gray-300 text-sm mt-4">
                    Sin spam. Solo noticias importantes.
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
