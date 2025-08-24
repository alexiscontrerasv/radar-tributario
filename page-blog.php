<?php
/**
 * Template Name: Página Blog
 * Description: Página para el contenido del blog (filtros por categoría, búsqueda y paginación).
 */

get_header();

// 1) Leer filtros desde la URL
$current_page   = max( 1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page') );
$search_query   = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
$category_slug  = isset($_GET['category']) ? sanitize_title($_GET['category']) : '';

// Convertir slug a ID (para WP_Query con 'cat')
$cat_id = 0;
if ( $category_slug ) {
    $term = get_term_by('slug', $category_slug, 'category');
    if ( $term && ! is_wp_error($term) ) {
        $cat_id = (int) $term->term_id;
    }
}

// 2) Armar argumentos de la query
$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'paged'               => $current_page,
    's'                   => $search_query,
    'ignore_sticky_posts' => true,
    'orderby'             => 'date',
    'order'               => 'DESC',
);
if ( $cat_id > 0 ) {
    $args['cat'] = $cat_id;
}

// 3) Ejecutar query
$news_query = new WP_Query($args);

// 4) Traer categorías (para los botones)
$cats = get_categories(array(
    'taxonomy'   => 'category',
    'hide_empty' => true,
));

// Helper para URLs de filtro (preserva búsqueda y resetea página)
function rcd_build_filter_url($params = array()) {
    $base = get_permalink(); // URL de la página Blog
    $query = array();

    if ( !empty($_GET['s']) ) {
        $query['s'] = sanitize_text_field($_GET['s']);
    }
    if ( !empty($params['category']) ) {
        $query['category'] = sanitize_title($params['category']);
    }
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
                <span class="text-accent">Blog</span>
            </nav>
        </div>
    </section>

    <!-- Hero -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight mb-6">
                    <span class="text-accent">Blog</span> Tributario
                </h1>
                <p class="text-xl text-text-secondary leading-relaxed mb-8">
                    Artículos especializados, guías prácticas y análisis sobre tributación en Chile.
                </p>
            </div>
        </div>
    </section>

    <!-- Filtros y Búsqueda -->
    <section class="py-8 bg-bg-secondary border-b border-border-subtle">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">

                <!-- Filtros por categoría dinámicos -->
                <div class="flex flex-wrap gap-3">
                    <?php $is_all = empty($category_slug); ?>
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

                <!-- Búsqueda funcional -->
                <form method="get" action="<?php echo esc_url( get_permalink() ); ?>" class="relative">
                    <?php if ( !empty($category_slug) ) : ?>
                        <input type="hidden" name="category" value="<?php echo esc_attr($category_slug); ?>" />
                    <?php endif; ?>
                    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>"
                           placeholder="Buscar artículos..."
                           class="pl-10 pr-4 py-2 border border-border-subtle rounded-lg bg-bg-primary text-text-primary placeholder-text-secondary focus:outline-none focus:border-accent transition-colors duration-300 w-64">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>

            </div>
        </div>
    </section>

    <!-- Grid de Artículos -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <?php if ( $news_query->have_posts() ) : ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                        <article class="bg-bg-secondary rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-border-subtle">
                            <div class="relative overflow-hidden">
                                <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300', 'loading' => 'lazy']); ?>
                                    <?php else : ?>
                                        <img src="https://picsum.photos/800/600" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" alt="<?php the_title_attribute(); ?>" loading="lazy">
                                    <?php endif; ?>
                                </a>
                                <?php
                                // “Etiqueta” con la primera categoría (chip)
                                $post_cats = get_the_category();
                                if ( !empty($post_cats) ) :
                                    $pc = $post_cats[0];
                                    $chip_url = rcd_build_filter_url( ['category' => $pc->slug] );
                                ?>
                                    <div class="absolute top-4 left-4">
                                        <a href="<?php echo esc_url($chip_url); ?>"
                                           class="bg-accent text-primary-dark text-xs font-semibold px-3 py-1 rounded-full">
                                           <?php echo esc_html( $pc->name ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-text-secondary text-sm mb-3">
                                    <span><?php echo esc_html( get_the_date( 'd \d\e F, Y' ) ); ?></span>
                                    <span class="mx-2">•</span>
                                    <span><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ); ?> atrás</span>
                                </div>
                                <h3 class="text-xl font-rubik font-semibold text-primary mb-3 group-hover:text-accent transition-colors duration-300">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="text-text-secondary mb-4 leading-relaxed">
                                    <?php echo esc_html( wp_trim_words( get_the_excerpt(), 26 ) ); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="text-accent hover:text-accent/80 font-medium inline-flex items-center group-hover:translate-x-1 transition-all duration-300">
                                    Leer más
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
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
                            // limpiar clases default y mapear a tus estilos
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
                <p class="text-text-secondary">No se encontraron artículos con esos filtros.</p>
            <?php endif; ?>

        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-white mb-6">
                    Recibe nuestros <span class="text-accent">artículos</span> en tu email
                </h2>
                <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                    Suscríbete y recibe contenido especializado directamente en tu correo.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                    <input type="email" placeholder="Tu correo electrónico" class="flex-1 px-6 py-4 rounded-lg bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:outline-none focus:border-accent transition-colors duration-300">
                    <button class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                        Suscribirse
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
