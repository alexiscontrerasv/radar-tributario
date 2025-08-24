<?php
/**
 * Template Name: Página Gracias
 * Description: Página para el contenido del blog (filtros por categoría, búsqueda y paginación).
 */

get_header();
?>

<main>
    <!-- Hero Gracias -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-accent/20 mx-auto mb-6">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight mb-6">
                    ¡Gracias por tu <span class="text-accent">mensaje</span>!
                </h1>
                <p class="text-xl text-text-secondary leading-relaxed mb-8">
                    Lo hemos recibido correctamente y te responderemos a la brevedad. Mientras tanto, te invitamos a
                    seguir explorando nuestros contenidos.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.html"
                        class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-accent">
                        Volver al inicio
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="blog.html"
                        class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-secondary">
                        Ver nuestro blog
                    </a>
                </div>
                <p class="text-text-secondary text-sm mt-6">Te redirigiremos al inicio en <span
                        id="redirect-seconds">8</span> segundos.</p>
            </div>
        </div>
    </section>

    <!-- Qué sigue -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-bg-primary rounded-xl p-6 shadow-lg border border-border-subtle">
                    <div class="bg-accent/20 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-rubik font-semibold text-primary mb-2">Confirmación</h3>
                    <p class="text-text-secondary">Te enviamos un correo de confirmación con el resumen de tu mensaje.
                    </p>
                </div>
                <div class="bg-bg-primary rounded-xl p-6 shadow-lg border border-border-subtle">
                    <div class="bg-accent/20 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-rubik font-semibold text-primary mb-2">Tiempo de respuesta</h3>
                    <p class="text-text-secondary">Respondemos usualmente dentro de 24 horas hábiles.</p>
                </div>
                <div class="bg-bg-primary rounded-xl p-6 shadow-lg border border-border-subtle">
                    <div class="bg-accent/20 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7h18M3 12h18M3 17h18"></path>
                        </svg>
                    </div>
                    <h3 class="font-rubik font-semibold text-primary mb-2">Recursos</h3>
                    <p class="text-text-secondary">Explora nuestras guías y noticias más recientes mientras esperas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-white mb-6">
                    Mientras tanto, ¿quieres recibir <span class="text-accent">novedades</span>?
                </h2>
                <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                    Suscríbete para recibir análisis y noticias tributarias directamente en tu correo.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                    <input type="email" placeholder="Tu correo electrónico"
                        class="flex-1 px-6 py-4 rounded-lg bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:outline-none focus:border-accent transition-colors duration-300">
                    <button
                        class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 btn-accent">
                        Suscribirse
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>