<?php get_header(); ?>
<main>
    <!-- Hero Section -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Contenido Hero -->
                <div class="space-y-6">
                    <?php
                    // Obtener el último post publicado
                    $latest = new WP_Query([
                        'posts_per_page' => 1,
                        'post_status' => 'publish',
                    ]);
                    if ($latest->have_posts()):
                        while ($latest->have_posts()):
                            $latest->the_post();
                            $title = get_the_title();
                            $words = explode(' ', $title);

                            // Envolver palabras 2, 3 y 4 en span
                            foreach ($words as $i => &$w) {
                                if ($i >= 1 && $i <= 3) { // índice 1=2da palabra
                                    $w = '<span class="text-accent">' . esc_html($w) . '</span>';
                                } else {
                                    $w = esc_html($w);
                                }
                            }
                            $title_highlighted = implode(' ', $words);
                            ?>
                            <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight">
                                <?php echo $title_highlighted; ?>
                            </h1>

                            <p class="text-xl text-text-secondary leading-relaxed">
                                <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="<?php the_permalink(); ?>"
                                    class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-accent">
                                    Leer más
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                                    class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-secondary">
                                    Ver todas las noticias
                                </a>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>

                <!-- Imagen Hero -->
                <div class="relative">
                    <a href="<?php the_permalink(); ?>">
                        <div class="bg-card-dark rounded-2xl p-6 shadow-2xl">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-64 lg:h-80 object-cover rounded-xl']); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-post-image.jpg"
                                    alt="<?php the_title_attribute(); ?>"
                                    class="w-full h-64 lg:h-80 object-cover rounded-xl">
                            <?php endif; ?>
                            <div class="mt-4">
                                <span class="text-accent text-sm font-medium">Última actualización</span>
                                <p class="text-text-primary font-semibold mt-1">
                                    <?php echo get_the_date('j \d\e F, Y'); ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección de Posts Destacados -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary mb-4">
                    Artículos <span class="text-accent">Destacados</span>
                </h2>
                <p class="text-text-secondary text-lg max-w-2xl mx-auto">
                    Mantente actualizado con los últimos cambios tributarios y análisis especializados para tu negocio.
                </p>
            </div>

            <!-- Grid de Posts -->
            <?php
            // helper de lectura rápida (puedes moverlo a functions.php si quieres)
            function rt_read_time_minutes($post_id = null, $wpm = 200)
            {
                $post_id = $post_id ?: get_the_ID();
                $text = wp_strip_all_tags(get_post_field('post_content', $post_id));
                $words = str_word_count($text);
                return max(1, ceil($words / $wpm));
            }

            // query: top 3 por meta 'rt_views'
            $q = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3,
                'ignore_sticky_posts' => true,
                'meta_key' => 'rt_views',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            ]);
            ?>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php if ($q->have_posts()):
                    while ($q->have_posts()):
                        $q->the_post(); ?>
                        <article
                            class="bg-bg-primary rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-border-subtle">
                            <div class="relative overflow-hidden">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300']); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/post-placeholder.jpg'); ?>"
                                        alt="<?php the_title_attribute(); ?>"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <?php endif; ?>

                                <div class="absolute top-4 left-4">
                                    <span class="bg-accent text-primary-dark text-xs font-semibold px-3 py-1 rounded-full">Más
                                        visto</span>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="flex items-center text-text-secondary text-sm mb-3">
                                    <span><?php echo esc_html(get_the_date('j \d\e F, Y')); ?></span>
                                    <span class="mx-2">•</span>
                                    <span><?php echo rt_read_time_minutes(); ?> min lectura</span>
                                </div>

                                <h3
                                    class="text-xl font-rubik font-semibold text-primary mb-3 group-hover:text-accent transition-colors duration-300">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>

                                <p class="text-text-secondary mb-4 leading-relaxed">
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 26, '…')); ?>
                                </p>

                                <a href="<?php the_permalink(); ?>"
                                    class="text-accent hover:text-accent/80 font-medium inline-flex items-center group-hover:translate-x-1 transition-all duration-300">
                                    Leer más
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p class="col-span-full text-text-secondary">Aún no hay datos de “más vistos”.</p>
                <?php endif; ?>
            </div>


            <!-- Botón Ver Todas -->
            <div class="text-center">
                <a href="blog.html"
                    class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center btn-accent">
                    Ver todas las publicaciones
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Contenido -->
                <div class="space-y-6">
                    <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary">
                        Sobre <span class="text-accent">Radar Tributario</span>
                    </h2>
                    <p class="text-text-secondary text-lg leading-relaxed">
                        Somos tu fuente confiable de información tributaria en Chile. Nuestro equipo de expertos analiza
                        y simplifica las complejidades del sistema tributario para que puedas tomar decisiones
                        informadas para tu negocio.
                    </p>

                    <!-- Puntos clave -->
                    <div class="grid sm:grid-cols-2 gap-6 mt-8">
                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Precisión</h4>
                                <p class="text-text-secondary text-sm">Información clara y directa, sin complicaciones
                                    innecesarias.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Profesionalismo</h4>
                                <p class="text-text-secondary text-sm">Análisis riguroso y actualizado de las normativas
                                    tributarias.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Contabilidad</h4>
                                <p class="text-text-secondary text-sm">Enfoque práctico en la gestión contable de tu
                                    empresa.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Tributaria</h4>
                                <p class="text-text-secondary text-sm">Especialización en normativas y cambios del SII.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagen -->
                <div class="relative">
                    <div class="bg-card-dark rounded-2xl p-8 shadow-2xl border border-border-subtle overflow-hidden">
                        <img src="img/news-1.jpg" alt="Radar Tributario - Análisis y monitoreo"
                            class="w-full h-80 object-contain rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Últimas Noticias -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary mb-4">
                    Últimas <span class="text-accent">Noticias</span>
                </h2>
                <p class="text-text-secondary text-lg max-w-2xl mx-auto">
                    Mantente al día con las últimas actualizaciones del mundo tributario chileno.
                </p>
            </div>

            <!-- Lista de Noticias -->
            <div class="space-y-8">
                <?php
                $latest_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish'
                ]);

                if ($latest_posts->have_posts()):
                    while ($latest_posts->have_posts()):
                        $latest_posts->the_post();
                        ?>
                        <article
                            class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-border-subtle">
                            <div class="grid md:grid-cols-3 gap-6 items-center">
                                <div class="md:col-span-1">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 md:h-32 object-cover rounded-lg']); ?>
                                        </a>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg"
                                            alt="<?php the_title(); ?>" class="w-full h-48 md:h-32 object-cover rounded-lg">
                                    <?php endif; ?>
                                </div>
                                <div class="md:col-span-2">
                                    <div class="flex items-center text-text-secondary text-sm mb-2">
                                        <span><?php echo get_the_date(); ?></span>
                                        <span class="mx-2">•</span>
                                        <span class="bg-accent/20 text-accent px-2 py-1 rounded text-xs">
                                            <?php
                                            $cat = get_the_category();
                                            echo $cat ? esc_html($cat[0]->name) : 'General';
                                            ?>
                                        </span>
                                    </div>
                                    <h3
                                        class="text-xl font-rubik font-semibold text-primary mb-3 hover:text-accent transition-colors duration-300">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="text-text-secondary mb-4 leading-relaxed">
                                        <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"
                                        class="text-accent hover:text-accent/80 font-medium inline-flex items-center">
                                        Leer noticia completa
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>No hay noticias publicadas aún.</p>';
                endif;
                ?>
            </div>

        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-white mb-6">
                    ¿Necesitas ayuda con tu <span class="text-accent">tributación</span>?
                </h2>
                <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                    Mantente informado sobre los cambios tributarios que afectan a tu empresa. Suscríbete a nuestro
                    newsletter y recibe análisis exclusivos directamente en tu correo.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                    <input type="email" placeholder="Tu correo electrónico"
                        class="flex-1 px-6 py-4 rounded-lg bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:outline-none focus:border-accent transition-colors duration-300">
                    <button
                        class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 btn-accent">
                        Suscribirse
                    </button>
                </div>
                <p class="text-gray-300 text-sm mt-4">
                    Sin spam. Solo información útil y actualizada sobre tributación en Chile.
                </p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>