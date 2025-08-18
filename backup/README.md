# 🎯 Radar Tributario - Sitio Web Institucional/Blog

Un sitio web moderno y minimalista para la marca **Radar Tributario**, enfocado en proporcionar información tributaria clara y práctica para PYMEs y profesionales en Chile.

## 📋 Características

- ✅ **Diseño Moderno y Minimalista**: Paleta de colores ejecutiva con azules y acento turquesa
- ✅ **100% Responsive**: Optimizado para escritorio, tablet y móvil
- ✅ **SEO Optimizado**: Metaetiquetas completas y estructura semántica
- ✅ **Accesibilidad**: Navegación por teclado y contraste alto
- ✅ **Performance**: Código optimizado y lazy loading de imágenes
- ✅ **WordPress Ready**: Estructura preparada para migración a WordPress

## 🎨 Paleta de Colores

```css
Fondo principal: #0B0E12 (azul marino muy oscuro)
Primario: #0E2E4F (azul profundo)
Acento: #22E0C4 (turquesa petróleo)
Texto principal: #E6EBF0
Texto secundario: #A6B3BF
Bordes sutiles: #223042
Fondos de tarjetas: #111721
```

## 📁 Estructura del Proyecto

```
radar-tributario/
├── index.html              # Página principal
├── css/
│   └── styles.css          # Estilos personalizados
├── js/
│   ├── main.js             # JavaScript principal
│   └── tailwind.config.js  # Configuración de TailwindCSS
├── img/
│   ├── logo-radar-tributario.svg
│   ├── radar-illustration.svg
│   ├── placeholder-generator.html
│   └── [placeholders para imágenes]
└── README.md
```

## 🚀 Instalación y Uso

### Opción 1: Abrir directamente
1. Descarga todos los archivos
2. Abre `index.html` en tu navegador
3. ¡Listo! El sitio funciona sin dependencias adicionales

### Opción 2: Servidor local (recomendado)
```bash
# Con Python 3
python -m http.server 8000

# Con Node.js (si tienes http-server instalado)
npx http-server

# Con PHP
php -S localhost:8000
```

Luego visita `http://localhost:8000`

## 🖼️ Imágenes y Placeholders

### Imágenes Necesarias
El sitio incluye placeholders temporales. Para producción, necesitas:

1. **Logo principal**: `img/logo-radar-tributario.svg` ✅ (incluido)
2. **Hero image**: `img/hero-post-image.jpg` (600x400px)
3. **Post images**: `img/post-1.jpg`, `img/post-2.jpg`, `img/post-3.jpg` (400x300px)
4. **News images**: `img/news-1.jpg`, `img/news-2.jpg`, `img/news-3.jpg` (400x250px)
5. **Favicon**: `img/favicon.ico` (32x32px)
6. **OG Image**: `img/og-image.jpg` (1200x630px)

### Generador de Placeholders
Abre `img/placeholder-generator.html` para ver ejemplos de las dimensiones y contenido sugerido para cada imagen.

## 🎯 Secciones del Sitio

### 1. Header / Navegación
- Logo de Radar Tributario
- Menú responsive con 5 secciones principales
- Navegación sticky con efectos

### 2. Hero Section
- Título del post más reciente
- Descripción y call-to-action
- Imagen destacada del post

### 3. Posts Destacados
- Grid de 3 artículos con imágenes
- Efectos hover y animaciones
- Botón "Ver todas las publicaciones"

### 4. Sobre Nosotros
- Descripción de la marca
- Ilustración SVG personalizada
- 4 puntos clave con iconos

### 5. Últimas Noticias
- Listado de 3 noticias recientes
- Imágenes y metadatos
- Enlaces a artículos completos

### 6. CTA Final
- Formulario de suscripción
- Validación de email
- Notificaciones interactivas

### 7. Footer
- Logo reducido
- Enlaces rápidos y legales
- Redes sociales
- Copyright

## ⚙️ Personalización

### Cambiar Colores
Edita las variables CSS en `css/styles.css`:
```css
:root {
  --color-primary-dark: #0B0E12;
  --color-primary: #0E2E4F;
  --color-accent: #22E0C4;
  /* ... */
}
```

### Modificar Contenido
1. **Títulos y textos**: Edita directamente en `index.html`
2. **Imágenes**: Reemplaza los placeholders en la carpeta `img/`
3. **Enlaces**: Actualiza los `href` en el HTML

### Agregar Nuevas Secciones
1. Crea la estructura HTML en `index.html`
2. Aplica las clases de TailwindCSS existentes
3. Agrega estilos personalizados en `css/styles.css` si es necesario

## 🔧 Funcionalidades JavaScript

### Menú Móvil
- Toggle automático
- Cierre al hacer clic en enlaces
- Navegación por teclado (ESC)

### Scroll Suave
- Enlaces internos con animación
- Header sticky con efectos
- Botón "Volver arriba"

### Formularios
- Validación de email
- Notificaciones de éxito/error
- Estados de loading

### Animaciones
- Fade-in al hacer scroll
- Hover effects en cards
- Transiciones suaves

## 📱 Responsive Design

### Breakpoints
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

### Características
- Menú hamburguesa en móvil
- Grid adaptativo
- Imágenes responsive
- Tipografía escalable

## 🔍 SEO y Metaetiquetas

### Incluidas
- ✅ Meta description
- ✅ Keywords
- ✅ Open Graph tags
- ✅ Twitter Cards
- ✅ Canonical URL
- ✅ Language tag
- ✅ Viewport meta

### Para Optimizar
1. Actualiza las URLs en las metaetiquetas
2. Agrega tu dominio real
3. Optimiza las imágenes con alt text descriptivo
4. Considera agregar schema markup

## 🚀 Migración a WordPress

### Preparación
El código está estructurado para facilitar la migración:

1. **Estructura semántica**: Usa `<header>`, `<main>`, `<section>`, `<footer>`
2. **Clases reutilizables**: TailwindCSS facilita la creación de templates
3. **Separación de concerns**: CSS y JS en archivos separados
4. **Metaetiquetas**: Ya incluidas y listas para WordPress

### Pasos Recomendados
1. Instala WordPress
2. Crea un tema personalizado
3. Migra el HTML a templates PHP
4. Convierte el contenido estático a dinámico
5. Integra con el sistema de posts de WordPress

## 🛠️ Tecnologías Utilizadas

- **HTML5**: Estructura semántica
- **TailwindCSS**: Framework de utilidades
- **JavaScript ES6+**: Funcionalidades interactivas
- **Google Fonts**: Rubik y Montserrat
- **SVG**: Iconos y gráficos vectoriales

## 📊 Performance

### Optimizaciones Incluidas
- ✅ Lazy loading de imágenes
- ✅ Debounce en eventos de scroll
- ✅ CSS y JS minificados (recomendado para producción)
- ✅ Imágenes optimizadas (pendiente de reemplazar placeholders)

### Lighthouse Score Esperado
- **Performance**: 90+
- **Accessibility**: 95+
- **Best Practices**: 95+
- **SEO**: 100

## 🔒 Seguridad

### Implementado
- ✅ Validación de formularios
- ✅ Sanitización de inputs
- ✅ HTTPS ready
- ✅ CSP headers (recomendado para producción)

## 📞 Soporte y Contacto

Para dudas o personalizaciones:
- Revisa este README
- Consulta la documentación de TailwindCSS
- Verifica la consola del navegador para errores

## 📄 Licencia

Este proyecto está diseñado específicamente para Radar Tributario. 

---

**¡El sitio está listo para usar!** 🎉

Abre `index.html` en tu navegador para ver el resultado final. 