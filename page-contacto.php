<?php
/**
 * Template Name: Página Contacto
 * Description: Página para el contenido del blog (filtros por categoría, búsqueda y paginación).
 */

get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="bg-bg-primary py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight mb-6">
                    <span class="text-accent">Contáctanos</span>
                </h1>
                <p class="text-xl text-text-secondary leading-relaxed mb-8">
                    ¿Tienes preguntas sobre tributación? ¿Quieres colaborar con nosotros? ¿O simplemente quieres
                    decirnos algo? Estamos aquí para ayudarte.
                </p>
            </div>
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Formulario -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-rubik font-bold text-primary mb-4">
                            Envíanos un <span class="text-accent">mensaje</span>
                        </h2>
                        <p class="text-text-secondary text-lg">
                            Completa el formulario y nos pondremos en contacto contigo lo antes posible.
                        </p>
                    </div>

                    <form id="contact-form" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-text-primary font-medium mb-2">Nombre *</label>
                                <input type="text" id="nombre" name="nombre" required
                                    class="w-full px-4 py-3 rounded-lg bg-bg-primary border border-border-subtle text-text-primary placeholder-text-secondary focus:outline-none focus:border-accent transition-colors duration-300"
                                    placeholder="Tu nombre completo">
                            </div>
                            <div>
                                <label for="email" class="block text-text-primary font-medium mb-2">Email *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-lg bg-bg-primary border border-border-subtle text-text-primary placeholder-text-secondary focus:outline-none focus:border-accent transition-colors duration-300"
                                    placeholder="tu@email.com">
                            </div>
                        </div>

                        <div>
                            <label for="empresa" class="block text-text-primary font-medium mb-2">Empresa</label>
                            <input type="text" id="empresa" name="empresa"
                                class="w-full px-4 py-3 rounded-lg bg-bg-primary border border-border-subtle text-text-primary placeholder-text-secondary focus:outline-none focus:border-accent transition-colors duration-300"
                                placeholder="Nombre de tu empresa">
                        </div>

                        <div>
                            <label for="asunto" class="block text-text-primary font-medium mb-2">Asunto *</label>
                            <select id="asunto" name="asunto" required
                                class="w-full px-4 py-3 rounded-lg bg-bg-primary border border-border-subtle text-text-primary focus:outline-none focus:border-accent transition-colors duration-300">
                                <option value="">Selecciona un asunto</option>
                                <option value="consulta-tributaria">Consulta Tributaria</option>
                                <option value="colaboracion">Colaboración</option>
                                <option value="sugerencia">Sugerencia</option>
                                <option value="reporte-error">Reporte de Error</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <div>
                            <label for="mensaje" class="block text-text-primary font-medium mb-2">Mensaje *</label>
                            <textarea id="mensaje" name="mensaje" rows="6" required
                                class="w-full px-4 py-3 rounded-lg bg-bg-primary border border-border-subtle text-text-primary placeholder-text-secondary focus:outline-none focus:border-accent transition-colors duration-300 resize-none"
                                placeholder="Cuéntanos en qué podemos ayudarte..."></textarea>
                        </div>

                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="privacidad" name="privacidad" required
                                class="mt-1 w-4 h-4 text-accent bg-bg-primary border-border-subtle rounded focus:ring-accent focus:ring-2">
                            <label for="privacidad" class="text-text-secondary text-sm">
                                Acepto la <a href="#" class="text-accent hover:text-accent/80">Política de
                                    Privacidad</a> y autorizo el tratamiento de mis datos personales.
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                            <span id="submit-text">Enviar mensaje</span>
                            <svg id="submit-icon" class="ml-2 w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Información de Contacto -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-rubik font-bold text-primary mb-4">
                            Información de <span class="text-accent">contacto</span>
                        </h2>
                        <p class="text-text-secondary text-lg">
                            Puedes contactarnos a través de cualquiera de estos medios.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-accent/20 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-rubik font-semibold text-primary text-lg mb-1">Email</h3>
                                <p class="text-text-secondary mb-2">info@radartributario.cl</p>
                                <p class="text-text-secondary text-sm">Respondemos en menos de 24 horas</p>
                            </div>
                        </div>

                        <!-- Horarios -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-accent/20 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-rubik font-semibold text-primary text-lg mb-1">Horarios de Atención</h3>
                                <p class="text-text-secondary mb-2">Lunes a Viernes: 9:00 - 18:00</p>
                                <p class="text-text-secondary text-sm">Sábados: 9:00 - 13:00</p>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-accent/20 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-rubik font-semibold text-primary text-lg mb-1">Ubicación</h3>
                                <p class="text-text-secondary mb-2">Santiago, Chile</p>
                                <p class="text-text-secondary text-sm">Consultas principalmente online</p>
                            </div>
                        </div>
                    </div>

                    <!-- Redes Sociales -->
                    <div class="pt-6 border-t border-border-subtle">
                        <h3 class="font-rubik font-semibold text-primary text-lg mb-4">Síguenos en redes sociales</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-bg-primary hover:bg-accent/20 p-3 rounded-lg transition-all duration-300 group border border-border-subtle">
                                <svg class="w-6 h-6 text-text-secondary group-hover:text-accent transition-colors duration-300"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-bg-primary hover:bg-accent/20 p-3 rounded-lg transition-all duration-300 group border border-border-subtle">
                                <svg class="w-6 h-6 text-text-secondary group-hover:text-accent transition-colors duration-300"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-bg-primary hover:bg-accent/20 p-3 rounded-lg transition-all duration-300 group border border-border-subtle">
                                <svg class="w-6 h-6 text-text-secondary group-hover:text-accent transition-colors duration-300"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-bg-primary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-primary mb-4">
                    Preguntas <span class="text-accent">Frecuentes</span>
                </h2>
                <p class="text-text-secondary text-lg max-w-2xl mx-auto">
                    Resolvemos las dudas más comunes sobre nuestros servicios y contenido.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3 class="font-rubik font-semibold text-primary text-lg">¿Ofrecen asesoría tributaria
                            personalizada?</h3>
                        <svg class="faq-icon w-6 h-6 text-text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p class="text-text-secondary leading-relaxed">
                            Actualmente nos enfocamos en proporcionar información general y educativa sobre tributación
                            en Chile. Para asesoría tributaria personalizada, recomendamos consultar con un contador o
                            abogado tributario especializado que pueda analizar tu situación específica y proporcionarte
                            recomendaciones adaptadas a tus necesidades particulares.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3 class="font-rubik font-semibold text-primary text-lg">¿Con qué frecuencia actualizan el
                            contenido?</h3>
                        <svg class="faq-icon w-6 h-6 text-text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p class="text-text-secondary leading-relaxed">
                            Publicamos nuevo contenido semanalmente, incluyendo noticias, análisis y guías prácticas
                            sobre tributación en Chile. Nos esforzamos por mantener la información actualizada y
                            relevante, especialmente cuando hay cambios importantes en la legislación tributaria o
                            nuevas normativas del SII.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3 class="font-rubik font-semibold text-primary text-lg">¿Puedo colaborar escribiendo
                            artículos?</h3>
                        <svg class="faq-icon w-6 h-6 text-text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p class="text-text-secondary leading-relaxed">
                            ¡Por supuesto! Nos encanta recibir colaboraciones de expertos en tributación, contadores,
                            abogados y profesionales del área. Si tienes experiencia en el campo tributario y quieres
                            compartir tu conocimiento, contáctanos para discutir las posibilidades de colaboración y los
                            temas que te interesan.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3 class="font-rubik font-semibold text-primary text-lg">¿La información es gratuita?</h3>
                        <svg class="faq-icon w-6 h-6 text-text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p class="text-text-secondary leading-relaxed">
                            Sí, todo nuestro contenido es completamente gratuito. Creemos en democratizar el acceso a la
                            información tributaria y hacer que el conocimiento fiscal esté disponible para todos los
                            empresarios y profesionales que lo necesiten, sin barreras económicas.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3 class="font-rubik font-semibold text-primary text-lg">¿Cómo puedo sugerir temas para
                            artículos?</h3>
                        <svg class="faq-icon w-6 h-6 text-text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p class="text-text-secondary leading-relaxed">
                            Puedes sugerir temas para artículos a través de nuestro formulario de contacto o enviándonos
                            un email a info@radartributario.cl. Nos interesa conocer qué temas te preocupan más, qué
                            dudas tienes sobre tributación, o qué aspectos te gustaría que profundicemos en futuros
                            artículos.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3 class="font-rubik font-semibold text-primary text-lg">¿Pueden ayudarme con una consulta
                            específica de mi empresa?</h3>
                        <svg class="faq-icon w-6 h-6 text-text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p class="text-text-secondary leading-relaxed">
                            Aunque no ofrecemos asesoría personalizada, podemos orientarte sobre dónde encontrar la
                            información que necesitas o sugerirte recursos adicionales. Para consultas específicas de tu
                            empresa, recomendamos consultar con un profesional especializado que pueda analizar tu
                            situación particular.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-bg-secondary">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-rubik font-bold text-white mb-6">
                    ¿Tienes <span class="text-accent">preguntas</span> sobre nosotros?
                </h2>
                <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                    Estamos aquí para ayudarte. Contáctanos si necesitas más información sobre nuestro trabajo o quieres
                    colaborar con nosotros.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="contacto.html"
                        class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                        Contactar
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="blog.html"
                        class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                        Ver nuestro blog
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>