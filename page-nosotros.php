<?php
/**
 * Template Name: Página Nosotros
 * Description: Página para la descripción de los creadores, owners y otros.
 */

get_header(); ?>

<main>
    <!-- Breadcrumb -->
    <section class="py-4 bg-bg-secondary border-b border-border-subtle">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="index.html"
                    class="text-text-secondary hover:text-accent transition-colors duration-300">Inicio</a>
                <span class="text-text-secondary">/</span>
                <span class="text-accent">Sobre Nosotros</span>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight mb-6">
                    Sobre <span class="text-accent">Radar Tributario</span>
                </h1>
                <p class="text-xl text-text-secondary leading-relaxed">
                    Tu fuente confiable de información tributaria en Chile. Analizamos y simplificamos las complejidades
                    del sistema tributario para que puedas tomar decisiones informadas.
                </p>
            </div>
        </div>
    </section>

    <!-- Nuestra Misión -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Contenido -->
                <div class="space-y-6">
                    <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary">
                        Nuestra <span class="text-accent">Misión</span>
                    </h2>
                    <p class="text-text-secondary text-lg leading-relaxed">
                        En Radar Tributario, creemos que la información tributaria debe ser <span
                            class="text-accent"><strong>accesible, clara y práctica</strong></span>. Nuestra misión es
                        democratizar el conocimiento fiscal en Chile, proporcionando <span
                            class="text-accent"><strong>análisis rigurosos y actualizados</strong></span> que ayuden a
                        empresas y profesionales a navegar el complejo mundo de los impuestos.
                    </p>
                    <p class="text-text-secondary text-lg leading-relaxed">
                        Nos esforzamos por traducir la jerga legal en información comprensible, explicando no solo <span
                            class="text-accent"><strong>"qué dice la norma"</strong></span>, sino también <span
                            class="text-accent"><strong>"por qué importa"</strong></span> y <span
                            class="text-accent"><strong>"qué hacer ahora"</strong></span>.
                    </p>

                    <!-- Valores -->
                    <div class="grid sm:grid-cols-2 gap-6 mt-8">
                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Transparencia</h4>
                                <p class="text-text-secondary text-sm">Información clara y sin sesgos, basada en fuentes
                                    oficiales.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Actualidad</h4>
                                <p class="text-text-secondary text-sm">Contenido siempre actualizado con los últimos
                                    cambios normativos.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Educación</h4>
                                <p class="text-text-secondary text-sm">Enfoque educativo para empoderar a nuestros
                                    lectores.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="bg-accent/20 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-rubik font-semibold text-primary mb-1">Comunidad</h4>
                                <p class="text-text-secondary text-sm">Construimos una comunidad de profesionales
                                    informados.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagen -->
                <div class="relative">
                    <div class="bg-card-dark rounded-2xl p-8 shadow-2xl border border-border-subtle rounded-xl">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/test.png"
                            alt="Radar Tributario - Análisis y monitoreo" class="w-full h-80 object-contain rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestro Equipo -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary mb-4">
                    Nuestro <span class="text-accent">Equipo</span>
                </h2>
                <p class="text-text-secondary text-lg max-w-2xl mx-auto">
                    Contadores, abogados y especialistas tributarios comprometidos con proporcionar información precisa
                    y útil.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Miembro 1 -->
                <div class="bg-bg-secondary rounded-xl p-6 text-center border border-border-subtle">
                    <div class="w-40 h-40 rounded-full overflow-hidden mx-auto mb-4 ring-2 ring-accent/30">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/nayadeth.jpg"
                            alt="Foto de Nayadeth Miranda" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <h3 class="font-rubik font-semibold text-primary text-lg mb-2">Nayadeth Miranda</h3>
                    <p class="text-accent font-medium mb-3">Gerenta de Impuestos - Contadora Pública y Auditora</p>
                    <p class="text-text-secondary text-sm">
                        Especialista en tributación empresarial, magister en gestión tributaria con más de 8 años de
                        experiencia.
                    </p>
                </div>

                <!-- Miembro 2 -->
                <div class="bg-bg-secondary rounded-xl p-6 text-center border border-border-subtle">
                    <div class="w-40 h-40 bg-accent/20 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-rubik font-semibold text-primary text-lg mb-2">Camila Corey</h3>
                    <p class="text-accent font-medium mb-3">Auditora Senior - Contadora Pública y Auditora</p>
                    <p class="text-text-secondary text-sm">
                        Experta en no sé, no cacho de los roles de la auditoría....
                    </p>
                </div>

                <!-- Miembro 3 -->
                <div class="bg-bg-secondary rounded-xl p-6 text-center border border-border-subtle">
                    <div class="w-40 h-40 rounded-full overflow-hidden mx-auto mb-4 ring-2 ring-accent/30">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alexis.png"
                            alt="Foto de Alexis Contreras" class="w-full h-full object-cover" loading="lazy">
                    </div>

                    <h3 class="font-rubik font-semibold text-primary text-lg mb-2">Alexis Contreras</h3>
                    <p class="text-accent font-medium mb-3">Technical Lead - Empresario - Co-Founder</p>
                    <p class="text-text-secondary text-sm">
                        Especialista en análisis tecnológico, innovación e implementación de soluciones a medida.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Nuestros Números -->
     <?php
        $total = wp_count_posts('post')->publish;
        
        ?>

    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary mb-4">
                    Nuestros <span class="text-accent">Números</span>
                </h2>
                <p class="text-text-secondary text-lg max-w-2xl mx-auto">
                    El impacto de nuestro trabajo en la comunidad tributaria chilena.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Estadística 1 -->
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-rubik font-bold text-accent mb-2">
                        <span class="counter" data-to="<?php echo number_format_i18n($total);?>" data-suffix="+">0</span>
                    </div>
                    <p class="text-text-secondary">Artículos Publicados</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-rubik font-bold text-accent mb-2">
                        <span class="counter" data-to="2000" data-suffix="+" data-compact="true">0</span>
                    </div>
                    <p class="text-text-secondary">Lectores Mensuales</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-rubik font-bold text-accent mb-2">
                        <span class="counter" data-to="8" data-suffix="+">0</span>
                    </div>
                    <p class="text-text-secondary">Años de Experiencia</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-rubik font-bold text-accent mb-2">
                        <span class="counter" data-to="95" data-suffix="%">0</span>
                    </div>
                    <p class="text-text-secondary">Satisfacción de Lectores</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-white mb-6">
                    ¿Quieres <span class="text-accent">colaborar</span> con nosotros?
                </h2>
                <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                    Si eres un experto en tributación y quieres compartir tu conocimiento con nuestra comunidad,
                    contáctanos para discutir posibilidades de colaboración.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contacto"
                        class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                        Contactar
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="/blog"
                        class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                        Ver nuestro blog
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
