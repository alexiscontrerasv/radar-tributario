// JavaScript principal para Radar Tributario - Tema Claro

document.addEventListener('DOMContentLoaded', function() {
    // ===== MENÚ MÓVIL =====
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Cambiar icono del botón
            const icon = this.querySelector('svg');
            if (mobileMenu.classList.contains('hidden')) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            } else {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
            }
        });

        // Cerrar menú al hacer clic en un enlace
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuBtn.querySelector('svg');
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            });
        });
    }

    // ===== SCROLL SUAVE =====
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ===== ANIMACIONES AL HACER SCROLL =====
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    const animateElements = document.querySelectorAll('.card-hover, .bg-bg-primary, .bg-bg-secondary, .bg-card-dark');
    animateElements.forEach(el => {
        observer.observe(el);
    });

    // ===== HEADER STICKY =====
    const header = document.querySelector('header');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.classList.add('shadow-lg');
        } else {
            header.classList.remove('shadow-lg');
        }
        
        lastScrollTop = scrollTop;
    });

    // ===== FORMULARIOS =====
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validar email si existe
            const emailInput = this.querySelector('input[type="email"]');
            if (emailInput && !validateEmail(emailInput.value)) {
                showNotification('Por favor, ingresa un email válido.', 'error');
                return;
            }
            
            // Simular envío
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Enviando...';
            
            setTimeout(() => {
                showNotification('¡Mensaje enviado con éxito! Te responderemos pronto.', 'success');
                this.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }, 2000);
        });
    });

    // ===== NOTIFICACIONES =====
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full max-w-sm`;
        
        let bgColor, textColor, icon;
        
        switch(type) {
            case 'success':
                bgColor = 'bg-green-600';
                textColor = 'text-white';
                icon = '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                break;
            case 'error':
                bgColor = 'bg-red-600';
                textColor = 'text-white';
                icon = '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                break;
            default:
                bgColor = 'bg-accent';
                textColor = 'text-primary-dark';
                icon = '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        }
        
        notification.className += ` ${bgColor} ${textColor}`;
        notification.innerHTML = `
            <div class="flex items-center">
                ${icon}
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animar entrada
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        // Auto-remover después de 5 segundos
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }, 5000);
    }

    // ===== VALIDACIÓN DE EMAIL =====
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // ===== LAZY LOADING DE IMÁGENES =====
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('opacity-0');
                imageObserver.unobserve(img);
            }
        });
    });

    const lazyImages = document.querySelectorAll('img[data-src]');
    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });

    // ===== CONTADOR DE TIEMPO DE LECTURA =====
    function updateReadingTime() {
        const articles = document.querySelectorAll('article');
        articles.forEach(article => {
            const text = article.textContent || article.innerText;
            const wordCount = text.trim().split(/\s+/).length;
            const readingTime = Math.ceil(wordCount / 200); // 200 palabras por minuto
            
            const timeElement = article.querySelector('.reading-time');
            if (timeElement) {
                timeElement.textContent = `${readingTime} min lectura`;
            }
        });
    }

    // ===== BOTÓN "VOLVER ARRIBA" =====
    const backToTopBtn = document.createElement('button');
    backToTopBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    `;
    backToTopBtn.className = 'fixed bottom-8 right-8 bg-accent hover:bg-accent/90 text-primary-dark p-3 rounded-full shadow-lg transition-all duration-300 transform translate-y-full opacity-0 z-40';
    backToTopBtn.setAttribute('aria-label', 'Volver arriba');
    
    document.body.appendChild(backToTopBtn);

    // Mostrar/ocultar botón según scroll
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('translate-y-full', 'opacity-0');
        } else {
            backToTopBtn.classList.add('translate-y-full', 'opacity-0');
        }
    });

    // Scroll al hacer clic
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // ===== SLIDER DE DATOS ECONÓMICOS =====
    function initEconomicSlider() {
        const slider = document.querySelector('.economic-slider-content');
        if (!slider) return;

        // Duplicar elementos para scroll infinito
        const items = slider.querySelectorAll('.economic-item');
        items.forEach(item => {
            const clone = item.cloneNode(true);
            slider.appendChild(clone);
        });

        // Pausar animación al hacer hover
        slider.addEventListener('mouseenter', function() {
            this.style.animationPlayState = 'paused';
        });

        slider.addEventListener('mouseleave', function() {
            this.style.animationPlayState = 'running';
        });

        // Reiniciar animación cuando termine
        slider.addEventListener('animationiteration', function() {
            // La animación se reinicia automáticamente
        });
    }

    // ===== SIMULACIÓN DE DATOS ECONÓMICOS =====
    function simulateEconomicData() {
        const indicators = ['UF', 'UTM', 'UTA', 'DÓLAR', 'EURO', 'IPC'];
        const elements = document.querySelectorAll('.economic-item');
        
        elements.forEach((element, index) => {
            const indicator = indicators[index % indicators.length];
            const baseValues = {
                'UF': 36000,
                'UTM': 63000,
                'UTA': 1200000,
                'DÓLAR': 890,
                'EURO': 980,
                'IPC': 0.3
            };
            
            const baseValue = baseValues[indicator];
            const variation = (Math.random() - 0.5) * 0.02; // ±1% variación
            const newValue = baseValue * (1 + variation);
            
            if (indicator === 'IPC') {
                element.innerHTML = `<strong>${indicator}:</strong> ${newValue.toFixed(1)}%`;
            } else {
                element.innerHTML = `<strong>${indicator}:</strong> $${newValue.toLocaleString('es-CL', {minimumFractionDigits: 0, maximumFractionDigits: 0})}`;
            }
        });
    }

    // ===== FAQ DESPLEGABLE =====
    function initFAQ() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');
                
                // Cerrar todas las otras preguntas
                const allQuestions = document.querySelectorAll('.faq-question');
                const allAnswers = document.querySelectorAll('.faq-answer');
                
                allQuestions.forEach(q => q.classList.remove('active'));
                allAnswers.forEach(a => a.classList.remove('active'));
                
                // Abrir/cerrar la pregunta actual
                if (!this.classList.contains('active')) {
                    this.classList.add('active');
                    answer.classList.add('active');
                }
            });
        });
    }

    // ===== DEBOUNCE UTILITY =====
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // ===== OPTIMIZACIONES DE PERFORMANCE =====
    const debouncedScroll = debounce(function() {
        // Código que se ejecuta en scroll optimizado
    }, 16); // ~60fps

    window.addEventListener('scroll', debouncedScroll);

    // ===== ACCESIBILIDAD =====
    // Navegación por teclado
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuBtn.querySelector('svg');
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            }
        }
    });

    // Focus visible para elementos interactivos
    const focusableElements = document.querySelectorAll('a, button, input, textarea, select');
    focusableElements.forEach(element => {
        element.addEventListener('focus', function() {
            this.classList.add('ring-2', 'ring-accent', 'ring-offset-2');
        });
        
        element.addEventListener('blur', function() {
            this.classList.remove('ring-2', 'ring-accent', 'ring-offset-2');
        });
    });

    // ===== PAGINACIÓN =====
    function initPagination() {
        const paginationButtons = document.querySelectorAll('nav button');
        
        paginationButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remover clase activa de todos los botones
                paginationButtons.forEach(btn => {
                    btn.classList.remove('bg-accent', 'text-primary-dark', 'rounded-lg', 'font-medium');
                    btn.classList.add('text-text-secondary');
                });
                
                // Agregar clase activa al botón clickeado
                this.classList.remove('text-text-secondary');
                this.classList.add('bg-accent', 'text-primary-dark', 'rounded-lg', 'font-medium');
                
                // Aquí puedes agregar lógica para cargar la página correspondiente
                const pageNumber = this.textContent.trim();
                console.log('Navegando a página:', pageNumber);
                
                // Simular cambio de página (en un sitio real, aquí harías una petición AJAX)
                showNotification(`Cargando página ${pageNumber}...`, 'info');
            });
        });
    }

    // ===== INICIALIZACIÓN =====
    initEconomicSlider();
    initFAQ();
    updateReadingTime();
    initPagination();

    // Simular datos económicos
    simulateEconomicData();
    
    // Actualizar datos cada 30 minutos
    setInterval(() => {
        simulateEconomicData();
    }, 30 * 60 * 1000);

    // ===== PRELOADER (OPCIONAL) =====
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        window.addEventListener('load', function() {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 300);
        });
    }

    // ===== ANALYTICS SIMPLE (PLACEHOLDER) =====
    function trackEvent(eventName, eventData = {}) {
        // Aquí puedes integrar Google Analytics, Facebook Pixel, etc.
        console.log('Event tracked:', eventName, eventData);
    }

    // Track clicks en enlaces importantes
    const importantLinks = document.querySelectorAll('a[href^="http"], a[href*="contacto"], a[href*="blog"]');
    importantLinks.forEach(link => {
        link.addEventListener('click', function() {
            trackEvent('link_click', {
                url: this.href,
                text: this.textContent.trim()
            });
        });
    });

    (function () {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const easeOutCubic = t => 1 - Math.pow(1 - t, 3);

    function formatNumber(n, compact) {
        if (compact) {
        return Intl.NumberFormat('es-CL', { notation: 'compact', maximumFractionDigits: 1 }).format(n);
        }
        return Intl.NumberFormat('es-CL').format(n);
    }

    function animateCounter(el, to, { duration = 1500, compact = false, suffix = '' } = {}) {
        if (prefersReduced) { // sin animación
        el.textContent = formatNumber(to, compact) + (suffix || '');
        return;
        }

        const start = performance.now();
        const from = 0;

        function frame(now) {
        const t = Math.min(1, (now - start) / duration);
        const eased = easeOutCubic(t);
        const current = Math.round(from + (to - from) * eased);
        el.textContent = formatNumber(current, compact) + (suffix || '');
        if (t < 1) requestAnimationFrame(frame);
        }
        requestAnimationFrame(frame);
    }

    // Observa cuando los counters entran al viewport
    const counters = document.querySelectorAll('.counter');
    if (!counters.length) return;

    const once = new WeakSet();
    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
        if (entry.isIntersecting && !once.has(entry.target)) {
            once.add(entry.target);
            const el = entry.target;
            const to = parseFloat(el.getAttribute('data-to')) || 0;
            const suffix = el.getAttribute('data-suffix') || '';
            const compact = el.getAttribute('data-compact') === 'true';
            animateCounter(el, to, { suffix, compact, duration: 1400 });
        }
        });
    }, { threshold: 0.3 });

    counters.forEach(el => io.observe(el));
    })();



    console.log('🚀 Radar Tributario - JavaScript cargado correctamente');
}); 

