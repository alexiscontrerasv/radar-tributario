<?php get_header(); ?>
<main>
    <!-- Hero Section -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Contenido Hero -->
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight">
                        Nuevas <span class="text-accent">modificaciones</span> al IVA afectan a las PYMEs
                    </h1>
                    <p class="text-xl text-text-secondary leading-relaxed">
                        El Servicio de Impuestos Internos anunció cambios importantes en el tratamiento del IVA para
                        pequeñas y medianas empresas. Te explicamos qué cambió, cómo te afecta y qué hacer ahora.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="blog.html"
                            class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-accent">
                            Leer más
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="noticias.html"
                            class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-secondary">
                            Ver todas las noticias
                        </a>
                    </div>
                </div>

                <!-- Imagen Hero -->
                <div class="relative">
                    <div class="bg-card-dark rounded-2xl p-6 shadow-2xl">
                        <img src="img/hero-post-image.jpg" alt="Análisis tributario PYMEs"
                            class="w-full h-64 lg:h-80 object-cover rounded-xl">
                        <div class="mt-4">
                            <span class="text-accent text-sm font-medium">Última actualización</span>
                            <p class="text-text-primary font-semibold mt-1">15 de Diciembre, 2024</p>
                        </div>
                    </div>
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
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Post 1 -->
                <article
                    class="bg-bg-primary rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-border-subtle">
                    <div class="relative overflow-hidden">
                        <img src="img/post-1.jpg" alt="Declaración de renta 2024"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-accent text-primary-dark text-xs font-semibold px-3 py-1 rounded-full">Destacado</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-text-secondary text-sm mb-3">
                            <span>12 de Diciembre, 2024</span>
                            <span class="mx-2">•</span>
                            <span>5 min lectura</span>
                        </div>
                        <h3
                            class="text-xl font-rubik font-semibold text-primary mb-3 group-hover:text-accent transition-colors duration-300">
                            Guía completa: Declaración de Renta 2024
                        </h3>
                        <p class="text-text-secondary mb-4 leading-relaxed">
                            Todo lo que necesitas saber sobre la declaración de renta del próximo año. Cambios
                            importantes, fechas clave y consejos prácticos.
                        </p>
                        <a href="single-post.html"
                            class="text-accent hover:text-accent/80 font-medium inline-flex items-center group-hover:translate-x-1 transition-all duration-300">
                            Leer más
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Post 2 -->
                <article
                    class="bg-bg-primary rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-border-subtle">
                    <div class="relative overflow-hidden">
                        <img src="img/post-2.jpg" alt="Facturación electrónica"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-accent text-primary-dark text-xs font-semibold px-3 py-1 rounded-full">Nuevo</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-text-secondary text-sm mb-3">
                            <span>10 de Diciembre, 2024</span>
                            <span class="mx-2">•</span>
                            <span>4 min lectura</span>
                        </div>
                        <h3
                            class="text-xl font-rubik font-semibold text-primary mb-3 group-hover:text-accent transition-colors duration-300">
                            Facturación Electrónica: Obligatorio desde 2025
                        </h3>
                        <p class="text-text-secondary mb-4 leading-relaxed">
                            El SII implementa la facturación electrónica obligatoria. Conoce los plazos, requisitos y
                            cómo preparar tu empresa para este cambio.
                        </p>
                        <a href="single-post.html"
                            class="text-accent hover:text-accent/80 font-medium inline-flex items-center group-hover:translate-x-1 transition-all duration-300">
                            Leer más
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Post 3 -->
                <article
                    class="bg-bg-primary rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-border-subtle">
                    <div class="relative overflow-hidden">
                        <img src="img/post-3.jpg" alt="Beneficios tributarios PYMEs"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-text-secondary text-sm mb-3">
                            <span>8 de Diciembre, 2024</span>
                            <span class="mx-2">•</span>
                            <span>6 min lectura</span>
                        </div>
                        <h3
                            class="text-xl font-rubik font-semibold text-primary mb-3 group-hover:text-accent transition-colors duration-300">
                            Beneficios Tributarios para PYMEs 2025
                        </h3>
                        <p class="text-text-secondary mb-4 leading-relaxed">
                            Descubre todos los beneficios y exenciones disponibles para pequeñas y medianas empresas en
                            el próximo año fiscal.
                        </p>
                        <a href="single-post.html"
                            class="text-accent hover:text-accent/80 font-medium inline-flex items-center group-hover:translate-x-1 transition-all duration-300">
                            Leer más
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </article>
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
                                <h4 class="font-rubik font-semibold text-primary mb-1">Minimalismo</h4>
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
                <!-- Noticia 1 -->
                <article
                    class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-border-subtle">
                    <div class="grid md:grid-cols-3 gap-6 items-center">
                        <div class="md:col-span-1">
                            <img src="img/news-1.jpg" alt="SII actualiza plataforma"
                                class="w-full h-48 md:h-32 object-cover rounded-lg">
                        </div>
                        <div class="md:col-span-2">
                            <div class="flex items-center text-text-secondary text-sm mb-2">
                                <span>14 de Diciembre, 2024</span>
                                <span class="mx-2">•</span>
                                <span class="bg-accent/20 text-accent px-2 py-1 rounded text-xs">Actualización</span>
                            </div>
                            <h3
                                class="text-xl font-rubik font-semibold text-primary mb-3 hover:text-accent transition-colors duration-300">
                                SII actualiza plataforma de declaraciones: Nuevas funcionalidades disponibles
                            </h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">
                                El Servicio de Impuestos Internos lanzó una nueva versión de su plataforma web con
                                mejoras en la experiencia de usuario y nuevas herramientas para la declaración de
                                impuestos.
                            </p>
                            <a href="single-post.html"
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

                <!-- Noticia 2 -->
                <article
                    class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-border-subtle">
                    <div class="grid md:grid-cols-3 gap-6 items-center">
                        <div class="md:col-span-1">
                            <img src="img/news-2.jpg" alt="Cambios en retenciones"
                                class="w-full h-48 md:h-32 object-cover rounded-lg">
                        </div>
                        <div class="md:col-span-2">
                            <div class="flex items-center text-text-secondary text-sm mb-2">
                                <span>13 de Diciembre, 2024</span>
                                <span class="mx-2">•</span>
                                <span class="bg-accent/20 text-accent px-2 py-1 rounded text-xs">Legislación</span>
                            </div>
                            <h3
                                class="text-xl font-rubik font-semibold text-primary mb-3 hover:text-accent transition-colors duration-300">
                                Nuevas reglas para retenciones de IVA en servicios digitales
                            </h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">
                                El Ministerio de Hacienda anunció modificaciones importantes en las reglas de retención
                                de IVA para servicios digitales, afectando principalmente a plataformas de streaming y
                                software.
                            </p>
                            <a href="single-post.html"
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

                <!-- Noticia 3 -->
                <article
                    class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-border-subtle">
                    <div class="grid md:grid-cols-3 gap-6 items-center">
                        <div class="md:col-span-1">
                            <img src="img/news-3.jpg" alt="Plazos tributarios 2025"
                                class="w-full h-48 md:h-32 object-cover rounded-lg">
                        </div>
                        <div class="md:col-span-2">
                            <div class="flex items-center text-text-secondary text-sm mb-2">
                                <span>12 de Diciembre, 2024</span>
                                <span class="mx-2">•</span>
                                <span class="bg-accent/20 text-accent px-2 py-1 rounded text-xs">Calendario</span>
                            </div>
                            <h3
                                class="text-xl font-rubik font-semibold text-primary mb-3 hover:text-accent transition-colors duration-300">
                                Calendario tributario 2025: Fechas importantes para tu empresa
                            </h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">
                                Conoce todas las fechas clave del calendario tributario 2025, incluyendo plazos de
                                declaraciones, pagos de impuestos y obligaciones formales para diferentes tipos de
                                contribuyentes.
                            </p>
                            <a href="single-post.html"
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