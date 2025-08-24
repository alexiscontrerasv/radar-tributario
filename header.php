<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Radar_Tributario_PTW
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Radar Tributario - Noticias y Análisis Tributario en Chile</title>
	<!-- Metaetiquetas SEO -->
	<meta name="description"
		content="Radar Tributario: Tu fuente confiable de noticias, análisis y actualizaciones sobre tributación en Chile. Información clara y práctica para PYMEs y profesionales.">
	<meta name="keywords"
		content="tributario, impuestos, Chile, SII, contabilidad, PYMEs, noticias tributarias, análisis fiscal">
	<meta name="author" content="Radar Tributario">
	<!-- Open Graph -->
	<meta property="og:title" content="Radar Tributario - Noticias y Análisis Tributario en Chile">
	<meta property="og:description"
		content="Tu fuente confiable de noticias, análisis y actualizaciones sobre tributación en Chile. Información clara y práctica para PYMEs y profesionales.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://radartributario.cl">
	<meta property="og:image" content="img/og-image.jpg">
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Radar Tributario - Noticias y Análisis Tributario en Chile">
	<meta name="twitter:description"
		content="Tu fuente confiable de noticias, análisis y actualizaciones sobre tributación en Chile.">
	<meta name="twitter:image" content="img/og-image.jpg">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-bg-primary text-text-primary font-montserrat'); ?>>
	<?php wp_body_open(); ?>


	<!-- Franja de Datos Económicos -->
	<div class="economic-slider py-2">
		<?php
			global $NC_UF, $NC_UTM, $NC_UTA, $NC_USD, $NC_EUR, $NC_IPC;
			$uf  = !empty($NC_UF)  ? $NC_UF  : '';
			$utm = !empty($NC_UTM) ? $NC_UTM : '';
			$uta = !empty($NC_UTA) ? $NC_UTA : '';
			$usd = !empty($NC_USD) ? $NC_USD : '';
			$eur = !empty($NC_EUR) ? $NC_EUR : '';
			$ipc = !empty($NC_IPC) ? $NC_IPC : '';
		?>
		<div class="economic-slider-content">
			<div class="economic-item"><strong>UF:</strong> <?php echo esc_html($uf); ?></div>
			<div class="economic-item"><strong>UTM:</strong> <?php echo esc_html($utm); ?></div>
			<div class="economic-item"><strong>UTA:</strong> <?php echo esc_html($uta); ?></div>
			<div class="economic-item"><strong>DÓLAR:</strong> <?php echo esc_html($usd); ?></div>
			<div class="economic-item"><strong>EURO:</strong> <?php echo esc_html($eur); ?></div>
			<div class="economic-item"><strong>IPC:</strong> <?php echo esc_html($ipc); ?></div>
		</div>
	</div>

	<!-- Header / Navegación -->
	<header class="bg-primary-dark border-b border-border-subtle sticky top-0 z-50">
		<nav class="max-w-7xl mx-auto px-6 lg:px-8 py-4">
			<div class="flex items-center justify-between">
				<!-- Logo -->
				<div class="flex items-center">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/radar-tributario-logo.png"
							alt="Radar Tributario" class="h-10 w-auto">
					</a>
				</div>

				<!-- Menú Desktop -->
				<div class="hidden md:flex items-center space-x-8">
					<a href="/"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Inicio</a>
					<a href="/noticias"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Noticias</a>
					<a href="/nosotros"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Nosotros</a>
					<a href="/blog"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Blog</a>
					<a href="/contacto"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Contacto</a>
				</div>

				<!-- Botón Menú Móvil -->
				<button id="mobile-menu-btn"
					class="md:hidden text-white hover:text-accent transition-colors duration-300">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
				</button>
			</div>

			<!-- Menú Móvil -->
			<div id="mobile-menu" class="md:hidden hidden mt-4 pb-4 border-t border-border-subtle">
				<div class="flex flex-col space-y-4 pt-4">
					<a href="/"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Inicio</a>
					<a href="/noticias"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Noticias</a>
					<a href="/sobre-nosotros"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Sobre
						Nosotros</a>
					<a href="/blog"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Blog</a>
					<a href="/contacto"
						class="text-white hover:text-accent transition-colors duration-300 font-medium">Contacto</a>
				</div>
			</div>
		</nav>
	</header>