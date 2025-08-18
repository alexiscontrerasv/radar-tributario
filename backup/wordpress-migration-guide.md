# 🚀 Guía de Migración a WordPress - Radar Tributario

Esta guía te ayudará a convertir el sitio estático de Radar Tributario en un tema de WordPress completamente funcional.

## 📋 Prerrequisitos

- WordPress instalado (versión 5.0+)
- Acceso al servidor web
- Conocimientos básicos de PHP y WordPress
- Editor de código (VS Code, Sublime Text, etc.)

## 🎯 Estructura del Tema WordPress

```
radar-tributario-theme/
├── style.css                 # Estilos del tema
├── index.php                 # Template principal
├── header.php                # Header del sitio
├── footer.php                # Footer del sitio
├── functions.php             # Funciones del tema
├── single.php                # Template para posts individuales
├── page.php                  # Template para páginas
├── archive.php               # Template para archivos
├── search.php                # Template de búsqueda
├── 404.php                   # Página de error
├── screenshot.png            # Captura del tema
├── assets/
│   ├── css/
│   │   ├── tailwind.css      # TailwindCSS compilado
│   │   └── custom.css        # Estilos personalizados
│   ├── js/
│   │   └── main.js           # JavaScript del tema
│   └── img/
│       └── [todas las imágenes]
└── inc/
    ├── customizer.php        # Personalizador de WordPress
    ├── widgets.php           # Widgets personalizados
    └── template-functions.php # Funciones auxiliares
```

## 🔧 Paso 1: Crear la Estructura del Tema

### 1.1 Crear el directorio del tema
```bash
wp-content/themes/radar-tributario/
```

### 1.2 Archivo style.css (encabezado del tema)
```css
/*
Theme Name: Radar Tributario
Description: Tema personalizado para Radar Tributario - Blog de información tributaria
Version: 1.0
Author: Tu Nombre
Author URI: https://tusitio.com
Text Domain: radar-tributario
Domain Path: /languages
*/

/* Importar TailwindCSS */
@import url('assets/css/tailwind.css');
@import url('assets/css/custom.css');
```

## 📝 Paso 2: Convertir HTML a Templates PHP

### 2.1 header.php
```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-primary-dark text-text-primary font-montserrat'); ?>>

<header class="bg-primary-dark border-b border-border-subtle sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-radar-tributario.svg" alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Menú Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex items-center space-x-8',
                    'walker' => new Radar_Tributario_Walker()
                ));
                ?>
            </div>
            
            <!-- Botón Menú Móvil -->
            <button id="mobile-menu-btn" class="md:hidden text-text-primary hover:text-accent transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Menú Móvil -->
        <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4 border-t border-border-subtle">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex flex-col space-y-4 pt-4'
            ));
            ?>
        </div>
    </nav>
</header>
```

### 2.2 index.php (Template principal)
```php
<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section id="inicio" class="bg-primary-dark py-20 lg:py-32">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Contenido Hero -->
                <div class="space-y-6">
                    <?php
                    $latest_post = get_posts(array('numberposts' => 1));
                    if ($latest_post) :
                        $post = $latest_post[0];
                        setup_postdata($post);
                    ?>
                        <h1 class="text-4xl lg:text-6xl font-rubik font-bold text-primary tracking-tight leading-tight">
                            <?php echo get_the_title(); ?>
                        </h1>
                        <p class="text-xl text-text-secondary leading-relaxed">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="<?php the_permalink(); ?>" class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                                Leer más
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="border border-accent text-accent hover:bg-accent hover:text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                                Ver todas las noticias
                            </a>
                        </div>
                    <?php
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                
                <!-- Imagen Hero -->
                <div class="relative">
                    <div class="bg-card-dark rounded-2xl p-6 shadow-2xl">
                        <?php if (has_post_thumbnail($post->ID)) : ?>
                            <?php echo get_the_post_thumbnail($post->ID, 'large', array('class' => 'w-full h-64 lg:h-80 object-cover rounded-xl')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-post-image.jpg" alt="Post destacado" class="w-full h-64 lg:h-80 object-cover rounded-xl">
                        <?php endif; ?>
                        <div class="mt-4">
                            <span class="text-accent text-sm font-medium">Última actualización</span>
                            <p class="text-text-primary font-semibold mt-1"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts Destacados -->
    <section id="blog" class="py-20 bg-card-dark">
        <div class="container mx-auto px-4">
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
                <?php
                $featured_posts = get_posts(array(
                    'numberposts' => 3,
                    'meta_key' => '_is_featured',
                    'meta_value' => 'yes'
                ));
                
                if ($featured_posts) :
                    foreach ($featured_posts as $post) :
                        setup_postdata($post);
                        get_template_part('template-parts/content', 'card');
                    endforeach;
                    wp_reset_postdata();
                else :
                    // Fallback a posts recientes
                    $recent_posts = get_posts(array('numberposts' => 3));
                    foreach ($recent_posts as $post) :
                        setup_postdata($post);
                        get_template_part('template-parts/content', 'card');
                    endforeach;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            
            <!-- Botón Ver Todas -->
            <div class="text-center">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="bg-accent hover:bg-accent/90 text-primary-dark font-semibold px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center">
                    Ver todas las publicaciones
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Resto de secciones... -->
</main>

<?php get_footer(); ?>
```

### 2.3 functions.php
```php
<?php
/**
 * Funciones del tema Radar Tributario
 */

// Configuración del tema
function radar_tributario_setup() {
    // Soporte para características de WordPress
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Registrar menús
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'radar-tributario'),
        'footer' => __('Menú Footer', 'radar-tributario'),
    ));
}
add_action('after_setup_theme', 'radar_tributario_setup');

// Cargar estilos y scripts
function radar_tributario_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&family=Montserrat:wght@400;500;600&display=swap', array(), null);
    
    // TailwindCSS
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.0');
    
    // Estilos personalizados
    wp_enqueue_style('radar-tributario-style', get_stylesheet_uri(), array('tailwindcss'), '1.0.0');
    
    // JavaScript
    wp_enqueue_script('radar-tributario-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'radar_tributario_scripts');

// Registrar sidebars
function radar_tributario_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'radar-tributario'),
        'id'            => 'sidebar-1',
        'description'   => __('Agregar widgets aquí.', 'radar-tributario'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'radar_tributario_widgets_init');

// Meta box para posts destacados
function radar_tributario_add_featured_meta_box() {
    add_meta_box(
        'radar_tributario_featured',
        'Post Destacado',
        'radar_tributario_featured_meta_box_callback',
        'post',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'radar_tributario_add_featured_meta_box');

function radar_tributario_featured_meta_box_callback($post) {
    wp_nonce_field('radar_tributario_save_featured_meta', 'radar_tributario_featured_nonce');
    
    $is_featured = get_post_meta($post->ID, '_is_featured', true);
    ?>
    <label>
        <input type="checkbox" name="radar_tributario_featured" value="yes" <?php checked($is_featured, 'yes'); ?>>
        Marcar como post destacado
    </label>
    <?php
}

function radar_tributario_save_featured_meta($post_id) {
    if (!isset($_POST['radar_tributario_featured_nonce']) || !wp_verify_nonce($_POST['radar_tributario_featured_nonce'], 'radar_tributario_save_featured_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $is_featured = isset($_POST['radar_tributario_featured']) ? 'yes' : 'no';
    update_post_meta($post_id, '_is_featured', $is_featured);
}
add_action('save_post', 'radar_tributario_save_featured_meta');

// Personalizar excerpt
function radar_tributario_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'radar_tributario_excerpt_length');

function radar_tributario_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'radar_tributario_excerpt_more');
```

## 🎨 Paso 3: Personalizar el Admin

### 3.1 Personalizar el login
```php
// En functions.php
function radar_tributario_login_logo() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/logo-radar-tributario.svg);
            background-size: contain;
            width: 200px;
            height: 50px;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'radar_tributario_login_logo');
```

### 3.2 Agregar campos personalizados
```php
// Campos personalizados para posts
function radar_tributario_add_custom_fields() {
    add_meta_box(
        'radar_tributario_custom_fields',
        'Información Adicional',
        'radar_tributario_custom_fields_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'radar_tributario_add_custom_fields');

function radar_tributario_custom_fields_callback($post) {
    wp_nonce_field('radar_tributario_save_custom_fields', 'radar_tributario_custom_fields_nonce');
    
    $reading_time = get_post_meta($post->ID, '_reading_time', true);
    $category_tag = get_post_meta($post->ID, '_category_tag', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="reading_time">Tiempo de lectura (minutos)</label></th>
            <td><input type="number" id="reading_time" name="reading_time" value="<?php echo esc_attr($reading_time); ?>" min="1" max="60"></td>
        </tr>
        <tr>
            <th><label for="category_tag">Etiqueta de categoría</label></th>
            <td>
                <select id="category_tag" name="category_tag">
                    <option value="">Seleccionar...</option>
                    <option value="destacado" <?php selected($category_tag, 'destacado'); ?>>Destacado</option>
                    <option value="nuevo" <?php selected($category_tag, 'nuevo'); ?>>Nuevo</option>
                    <option value="actualizacion" <?php selected($category_tag, 'actualizacion'); ?>>Actualización</option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}
```

## 🔧 Paso 4: Optimizaciones

### 4.1 Cache y Performance
```php
// Optimizar consultas
function radar_tributario_optimize_queries($query) {
    if (!is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 6);
        $query->set('no_found_rows', true);
    }
}
add_action('pre_get_posts', 'radar_tributario_optimize_queries');

// Lazy loading de imágenes
function radar_tributario_lazy_loading($content) {
    return preg_replace('/<img(.*?)>/', '<img$1 loading="lazy">', $content);
}
add_filter('the_content', 'radar_tributario_lazy_loading');
```

### 4.2 SEO
```php
// Meta tags personalizados
function radar_tributario_meta_tags() {
    if (is_single()) {
        $excerpt = get_the_excerpt();
        $excerpt = strip_tags($excerpt);
        $excerpt = str_replace("\n", "", $excerpt);
        ?>
        <meta name="description" content="<?php echo esc_attr($excerpt); ?>">
        <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
        <meta property="og:description" content="<?php echo esc_attr($excerpt); ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>">
        <?php endif; ?>
        <?php
    }
}
add_action('wp_head', 'radar_tributario_meta_tags');
```

## 📱 Paso 5: Plugins Recomendados

### 5.1 Plugins Esenciales
- **Yoast SEO**: Optimización SEO
- **WP Rocket**: Cache y performance
- **Wordfence Security**: Seguridad
- **UpdraftPlus**: Backups
- **Contact Form 7**: Formularios de contacto

### 5.2 Plugins Opcionales
- **Advanced Custom Fields**: Campos personalizados avanzados
- **Elementor**: Editor de páginas (si necesitas más flexibilidad)
- **Mailchimp for WordPress**: Integración con newsletter

## 🚀 Paso 6: Migración de Contenido

### 6.1 Importar contenido estático
1. Crear páginas para cada sección
2. Convertir el contenido HTML a posts de WordPress
3. Configurar categorías y etiquetas
4. Importar imágenes y optimizarlas

### 6.2 Configurar menús
1. Ir a Apariencia > Menús
2. Crear menú principal con las secciones
3. Asignar ubicaciones
4. Configurar menú móvil

## ✅ Checklist de Migración

- [ ] Crear estructura del tema
- [ ] Convertir HTML a templates PHP
- [ ] Configurar functions.php
- [ ] Migrar estilos CSS
- [ ] Adaptar JavaScript
- [ ] Configurar menús
- [ ] Importar contenido
- [ ] Optimizar imágenes
- [ ] Configurar SEO
- [ ] Instalar plugins esenciales
- [ ] Probar responsive
- [ ] Optimizar performance
- [ ] Configurar backups

## 🎯 Resultado Final

Después de completar la migración, tendrás:

✅ **Tema WordPress completamente funcional**
✅ **Sistema de posts y páginas**
✅ **Panel de administración personalizado**
✅ **SEO optimizado**
✅ **Performance optimizada**
✅ **Responsive design**
✅ **Fácil mantenimiento**

---

**¡Tu sitio de Radar Tributario estará listo para WordPress!** 🎉 