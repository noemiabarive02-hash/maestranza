 <link rel="stylesheet" href="vista/css/slider.css">
 <link rel="stylesheet" href="vista/css/inicio.css">
 

<!-- Hero Slider -->
<section class="hero-slider">
    <div class="slider-container" id="slider">
        <!-- Slide 1 -->
        <div class="slider-slide active">
            <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')"></div>
            <div class="slide-content">
                <h2>Maestranza Aweta</h2>
                <p>Excelencia en servicios industriales y maestranza</p>
                <a href="#" class="btn">Conoce más</a>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="slider-slide">
            <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')"></div>
            <div class="slide-content">
                <h2>Tecnología Avanzada</h2>
                <p>Equipamiento de última generación para tus proyectos</p>
                <a href="#" class="btn">Ver productos</a>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="slider-slide">
            <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')"></div>
            <div class="slide-content">
                <h2>Calidad Garantizada</h2>
                <p>Más de 20 años de experiencia nos respaldan</p>
                <a href="#" class="btn">Nuestros servicios</a>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="slider-slide">
            <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')"></div>
            <div class="slide-content">
                <h2>Asesoría Especializada</h2>
                <p>Te acompañamos en todo tu proyecto industrial</p>
                <a href="#" class="btn">Contactar</a>
            </div>
        </div>
    </div>
    
    <!-- Controles del slider -->
    <div class="slider-controls">
        <button class="slider-control prev" onclick="prevSlide()">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button class="slider-control next" onclick="nextSlide()">
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>
    
    <!-- Dots del slider -->
    <div class="slider-dots">
        <span class="slider-dot active" onclick="goToSlide(0)"></span>
        <span class="slider-dot" onclick="goToSlide(1)"></span>
        <span class="slider-dot" onclick="goToSlide(2)"></span>
        <span class="slider-dot" onclick="goToSlide(3)"></span>
    </div>
</section>

<!-- =========================================== -->
<!-- CSS MEJORADO - MÁS DINÁMICO E INTERACTIVO   -->
<!-- =========================================== -->

<style>

</style>

<!-- =========================================== -->
<!-- CONTENIDO HTML MEJORADO                     -->
<!-- =========================================== -->

<!-- SECCIÓN DE BIENVENIDA MEJORADA -->
<section class="hero-welcome">
    <div class="container">
        <div class="welcome-card float-in">
            <span class="welcome-badge">✨ BIENVENIDOS A MAESTRANZA AWETA</span>
            <h1 class="welcome-title">
                Innovación y Calidad en 
                <span class="highlight">Metalmecánica Industrial</span>
            </h1>
            <p class="welcome-text">
                Somos líderes en la venta de equipos de metalmecánica industrial, ofreciendo soluciones integrales para la industria minera, manufacturera y de construcción. Contamos con un amplio catálogo de maquinaria y servicios especializados con los más altos estándares de calidad.
            </p>
            <div class="welcome-stats">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Clientes</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">20+</span>
                    <span class="stat-label">Años</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label">Equipos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Soporte</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN 1: QUIÉNES SOMOS MEJORADA -->
<section class="about-section" id="quienes-somos">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">SOBRE NOSOTROS</span>
            <h2 class="section-title">Líderes en <span class="text-primary">Metalmecánica Industrial</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="about-card">
                    <h3>Más de 20 años de experiencia y excelencia</h3>
                    <p>En <strong>Maestranza Aweta</strong> nos especializamos en la venta, mantenimiento y reparación de equipos industriales de alta calidad. Desde nuestros inicios en 2003, nos hemos comprometido a ofrecer soluciones integrales para la industria minera, manufacturera y de construcción en Chile y Latinoamérica.</p>
                    <p>Nuestro equipo de profesionales altamente capacitados trabaja con tecnología de punta para garantizar la máxima eficiencia y durabilidad de todos nuestros productos y servicios.</p>
                    
                    <div class="about-features-grid">
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Certificación ISO 9001</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Más de 500 clientes</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Equipos última generación</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Soporte técnico 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Nuestras instalaciones" class="img-fluid">
                    <div class="experience-badge-modern">
                        <span class="years">20+</span>
                        <span class="text">Años de experiencia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN 2: SERVICIOS MEJORADA -->
<section class="services-section" id="servicios">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">QUÉ OFRECEMOS</span>
            <h2 class="section-title">Nuestros <span class="text-primary">Servicios Especializados</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="services-grid-modern">
            <div class="service-card-modern">
                <div class="service-icon-modern">
                    <i class="bi bi-gear-wide-connected"></i>
                </div>
                <h3>Maquinado CNC</h3>
                <p>Torneado, fresado y mecanizado de piezas con tolerancias de alta precisión.</p>
                <a href="#" class="service-link-modern">Ver más <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="service-card-modern">
                <div class="service-icon-modern">
                    <i class="bi bi-tools"></i>
                </div>
                <h3>Mantenimiento Industrial</h3>
                <p>Mantenimiento preventivo y correctivo de maquinaria industrial pesada.</p>
                <a href="#" class="service-link-modern">Ver más <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="service-card-modern">
                <div class="service-icon-modern">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <h3>Soldadura Especializada</h3>
                <p>Soldadura MIG, TIG, electrodo y procesos especiales.</p>
                <a href="#" class="service-link-modern">Ver más <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="service-card-modern">
                <div class="service-icon-modern">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <h3>Automatización</h3>
                <p>Diseño e implementación de sistemas automatizados.</p>
                <a href="#" class="service-link-modern">Ver más <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN 3: PRODUCTOS MEJORADA -->
<section class="products-section" id="productos">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">NUESTRO CATÁLOGO</span>
            <h2 class="section-title">Equipos <span class="text-primary">Industriales</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="products-grid-modern">
            <div class="product-card-modern">
                <div class="product-image-modern">
                    <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Torno Industrial">
                    <span class="product-badge">Nuevo</span>
                </div>
                <div class="product-info-modern">
                    <h3>Torno CNC</h3>
                    <p>Modelo TC-2000B</p>
                    <span class="product-price-modern">Consultar</span>
                    <button class="btn-modern">Ver detalles</button>
                </div>
            </div>

            <div class="product-card-modern">
                <div class="product-image-modern">
                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Fresadora">
                    <span class="product-badge">Oferta</span>
                </div>
                <div class="product-info-modern">
                    <h3>Fresadora CNC</h3>
                    <p>Modelo FV-5A</p>
                    <span class="product-price-modern">Consultar</span>
                    <button class="btn-modern">Ver detalles</button>
                </div>
            </div>

            <div class="product-card-modern">
                <div class="product-image-modern">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Prensa Hidráulica">
                    <span class="product-badge">Destacado</span>
                </div>
                <div class="product-info-modern">
                    <h3>Prensa Hidráulica</h3>
                    <p>Modelo PH-200T</p>
                    <span class="product-price-modern">Consultar</span>
                    <button class="btn-modern">Ver detalles</button>
                </div>
            </div>

            <div class="product-card-modern">
                <div class="product-image-modern">
                    <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Equipo Soldadura">
                    <span class="product-badge">Nuevo</span>
                </div>
                <div class="product-info-modern">
                    <h3>Equipo Soldadura</h3>
                    <p>Modelo MIG-500</p>
                    <span class="product-price-modern">Consultar</span>
                    <button class="btn-modern">Ver detalles</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN 4: BENEFICIOS MEJORADA -->
<section class="benefits-section-modern">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">NUESTRAS VENTAJAS</span>
            <h2 class="section-title">¿Por qué <span class="text-primary">elegirnos?</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="benefits-grid-modern">
            <div class="benefit-card-modern">
                <div class="benefit-icon-modern">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <h4>Calidad Garantizada</h4>
                <p>Productos con certificación internacional ISO 9001.</p>
            </div>
            <div class="benefit-card-modern">
                <div class="benefit-icon-modern">
                    <i class="bi bi-clock-fill"></i>
                </div>
                <h4>Entrega Oportuna</h4>
                <p>Compromiso con los tiempos de entrega establecidos.</p>
            </div>
            <div class="benefit-card-modern">
                <div class="benefit-icon-modern">
                    <i class="bi bi-headset"></i>
                </div>
                <h4>Soporte Técnico</h4>
                <p>Asistencia especializada post-venta 24/7.</p>
            </div>
            <div class="benefit-card-modern">
                <div class="benefit-icon-modern">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <h4>Mejor Precio</h4>
                <p>Precios competitivos y financiamiento adaptable.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN 5: TESTIMONIOS MEJORADA -->
<section class="testimonials-section-modern">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">TESTIMONIOS</span>
            <h2 class="section-title">Lo que dicen <span class="text-primary">nuestros clientes</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="testimonials-grid-modern">
            <div class="testimonial-card-modern">
                <div class="testimonial-quote">"</div>
                <p class="testimonial-text">Excelente servicio y calidad en sus productos. Han sido nuestro proveedor de confianza por más de 10 años.</p>
                <div class="client-info-modern">
                    <div class="client-avatar">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cliente">
                    </div>
                    <div class="client-details">
                        <h5>Carlos Rodríguez</h5>
                        <span>Minera Los Andes</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card-modern">
                <div class="testimonial-quote">"</div>
                <p class="testimonial-text">La atención y el asesoramiento técnico son excepcionales. Siempre encuentran la mejor solución.</p>
                <div class="client-info-modern">
                    <div class="client-avatar">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cliente">
                    </div>
                    <div class="client-details">
                        <h5>María González</h5>
                        <span>Constructora MG</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card-modern">
                <div class="testimonial-quote">"</div>
                <p class="testimonial-text">Equipos de alta calidad y durabilidad. El servicio post-venta es excelente.</p>
                <div class="client-info-modern">
                    <div class="client-avatar">
                        <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cliente">
                    </div>
                    <div class="client-details">
                        <h5>Juan Pérez</h5>
                        <span>Industrias Pérez</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN 6: CONTACTO MEJORADA -->
<section class="contact-section-modern" id="contacto">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">CONTÁCTANOS</span>
            <h2 class="section-title">Estamos <span class="text-primary">ubicados</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="contact-grid-modern">
            <div class="contact-info-modern">
                <h3>Información de contacto</h3>
                <ul class="contact-list-modern">
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <strong>Dirección:</strong>
                            <p>Av. Principal 123, Santiago, Chile</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                            <strong>Teléfono:</strong>
                            <p><a href="tel:+56912345678">+56 9 1234 5678</a></p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <strong>Email:</strong>
                            <p><a href="mailto:info@maestranza.cl">info@maestranza.cl</a></p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <div>
                            <strong>Horario:</strong>
                            <p>Lunes a Viernes: 8:30 - 18:30<br>Sábados: 9:00 - 13:00</p>
                        </div>
                    </li>
                </ul>

                <div class="social-links-modern">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="contact-form-modern">
                <h3>Envíanos un mensaje</h3>
                <form id="contactForm">
                    <div class="form-group-modern">
                        <input type="text" class="form-control-modern" placeholder="Nombre completo" required>
                    </div>
                    <div class="form-group-modern">
                        <input type="email" class="form-control-modern" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group-modern">
                        <input type="text" class="form-control-modern" placeholder="Teléfono">
                    </div>
                    <div class="form-group-modern">
                        <textarea class="form-control-modern" rows="4" placeholder="Mensaje" required></textarea>
                    </div>
                    <button type="submit" class="btn-modern">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="vista/js/index.js"></script>