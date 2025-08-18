<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Radar_Tributario_PTW
 */

get_header();
?>

<main>
	<!-- Sección 404 -->
	<section class="py-24 lg:py-36 bg-bg-primary">
		<div class="max-w-7xl mx-auto px-6 lg:px-8">
			<div class="grid lg:grid-cols-2 gap-12 items-center">
				<div class="space-y-6 text-center lg:text-left">
					<span
						class="inline-block px-3 py-1 rounded-full bg-accent text-primary-dark text-xs font-semibold">Error
						404</span>
					<h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight">
						Página no <span class="text-accent">encontrada</span>
					</h1>
					<p class="text-xl text-text-secondary leading-relaxed">
						La URL que intentas abrir no existe o fue eliminada. Puedes volver al inicio o explorar nuestro
						contenido reciente.
					</p>
					<div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
						<a href="/"
							class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-accent">
							Volver al inicio
							<svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
							</svg>
						</a>
						<a href="/blog"
							class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center btn-secondary">Ir
							al Blog</a>
					</div>
				</div>
				<div class="relative">
					<div class="bg-card-dark rounded-2xl p-8 shadow-2xl border border-border-subtle overflow-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="Ilustración Radar Tributario"
							class="w-full h-80 object-contain rounded-xl">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sugerencias -->
	<section class="py-20 bg-bg-secondary">
		<div class="max-w-7xl mx-auto px-6 lg:px-8">
			<div class="text-center mb-12">
				<h2 class="text-2xl lg:text-3xl font-rubik font-bold text-primary">Quizás buscabas</h2>
			</div>
			<div class="grid md:grid-cols-3 gap-8">
				<a href="/noticias"
					class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border-subtle card-hover">
					<h3 class="font-rubik font-semibold text-primary mb-2">Últimas noticias</h3>
					<p class="text-text-secondary">Actualizaciones del mundo tributario chileno.</p>
				</a>
				<a href="/blog"
					class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border-subtle card-hover">
					<h3 class="font-rubik font-semibold text-primary mb-2">Guías y análisis</h3>
					<p class="text-text-secondary">Contenido práctico para PYMEs y profesionales.</p>
				</a>
				<a href="/contacto"
					class="bg-bg-primary rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border-subtle card-hover">
					<h3 class="font-rubik font-semibold text-primary mb-2">Contáctanos</h3>
					<p class="text-text-secondary">Estamos aquí para ayudarte.</p>
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
