<!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/56912345678?text=Hola%20Maestranza%2C%20necesito%20información%20sobre%20sus%20equipos%20industriales" 
   class="whatsapp-float" 
   target="_blank" 
   rel="noopener noreferrer">
    <i class="bi bi-whatsapp"></i>
    <span class="whatsapp-tooltip">¡Contáctanos!</span>
</a>

</body>
<script src="node_modules/jquery/dist/wrappers/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="vista/js/nabvar.js"></script>

</html>

<!-- SECCIÓN 7: FOOTER -->

<footer class="footer-innovative">
    <!-- Elementos decorativos de fondo -->
    <div class="footer-bg-pattern"></div>
    <div class="footer-gradient-sphere"></div>
    
    <!-- Ola decorativa superior -->
    <div class="footer-wave-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--primary-color)" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,170.7C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>

    <div class="container">
        <!-- NEWSLETTER FLOTANTE -->
        <div class="newsletter-floating-card">
            <div class="newsletter-content">
                <div class="newsletter-icon">
                    <i class="bi bi-envelope-paper-fill"></i>
                </div>
                <div class="newsletter-text">
                    <h3>¡Ofertas exclusivas para la industria!</h3>
                    <p>Suscríbete y recibe novedades, promociones y asesoría técnica</p>
                </div>
            </div>
            <form class="newsletter-innovative">
                <div class="input-group-modern">
                    <input type="email" placeholder="Tu correo electrónico" required>
                    <button type="submit" class="btn-subscribe">
                        <span>Suscribirse</span>
                        <i class="bi bi-send-fill"></i>
                    </button>
                </div>
                <label class="checkbox-container">
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                    <span class="checkbox-text">Acepto la política de privacidad</span>
                </label>
            </form>
        </div>

        <!-- CONTENIDO PRINCIPAL DEL FOOTER -->
        <div class="footer-main-content">
            <div class="footer-grid">
                <!-- COLUMNA 1: LOGO + DESCRIPCIÓN + CERTIFICACIONES -->
                <div class="footer-col footer-col-brand">
                    <div class="logo-container">
                        <img src="vista/img/logo_01.png" alt="Maestranza Aweta" class="footer-logo-innovative" onerror="this.src='https://via.placeholder.com/200x70?text=Maestranza">
                        <div class="logo-shine"></div>
                    </div>
                    
                    <p class="brand-description">
                        <span class="highlight-text">Excelencia industrial</span> desde 2003. Especialistas en soluciones de metalmecánica para minería, construcción y manufactura.
                    </p>

                    <div class="certification-showcase">
                        <div class="cert-item">
                            <i class="bi bi-patch-check-fill"></i>
                            <div class="cert-info">
                                <strong>ISO 9001:2024</strong>
                                <span>Calidad certificada</span>
                            </div>
                        </div>
                        <div class="cert-item">
                            <i class="bi bi-shield-shaded"></i>
                            <div class="cert-info">
                                <strong>Seguridad industrial</strong>
                                <span>Estándares internacionales</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COLUMNA 2: ENLACES RÁPIDOS -->
                <div class="footer-col">
                    <h4 class="footer-title">
                        <span>Navegación</span>
                        <i class="bi bi-compass"></i>
                    </h4>
                    <ul class="footer-menu">
                        <li><a href="#inicio"><i class="bi bi-arrow-right-short"></i>Inicio</a></li>
                        <li><a href="#quienes-somos"><i class="bi bi-arrow-right-short"></i>Nosotros</a></li>
                        <li><a href="#servicios"><i class="bi bi-arrow-right-short"></i>Servicios industriales</a></li>
                        <li><a href="#productos"><i class="bi bi-arrow-right-short"></i>Catálogo de equipos</a></li>
                        <li><a href="#contacto"><i class="bi bi-arrow-right-short"></i>Contacto comercial</a></li>
                    </ul>
                </div>

                <!-- COLUMNA 3: SERVICIOS DESTACADOS -->
                <div class="footer-col">
                    <h4 class="footer-title">
                        <span>Especialidades</span>
                        <i class="bi bi-gear-wide-connected"></i>
                    </h4>
                    <ul class="footer-menu">
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i>Maquinado CNC de precisión</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i>Mantenimiento predictivo</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i>Soldadura especializada</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i>Automatización industrial</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i>Ingeniería inversa</a></li>
                    </ul>
                </div>

                <!-- COLUMNA 4: CONTACTO + HORARIOS -->
                <div class="footer-col">
                    <h4 class="footer-title">
                        <span>Atención al cliente</span>
                        <i class="bi bi-headset"></i>
                    </h4>
                    
                    <div class="contact-modern-list">
                        <div class="contact-modern-item">
                            <div class="contact-icon-bg">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">Teléfono directo</span>
                                <a href="tel:+56912345678" class="contact-value">+56 9 1234 5678</a>
                            </div>
                        </div>

                        <div class="contact-modern-item">
                            <div class="contact-icon-bg">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">Email comercial</span>
                                <a href="mailto:info@maestranza.cl" class="contact-value">info@maestranza.cl</a>
                            </div>
                        </div>

                        <div class="contact-modern-item">
                            <div class="contact-icon-bg">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">Horario continuo</span>
                                <span class="contact-value">Lun-Vie: 8:30 - 18:30</span>
                                <span class="contact-value-small">Sábados: 9:00 - 13:00</span>
                            </div>
                        </div>

                        <div class="contact-modern-item">
                            <div class="contact-icon-bg">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">Casa matriz</span>
                                <span class="contact-value">Av. Principal 123, Santiago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BARRA DE REDES SOCIALES INTERACTIVAS -->
            <div class="social-bar">
                <div class="social-text">
                    <span>Síguenos en</span>
                    <div class="social-line"></div>
                </div>
                <div class="social-icons-innovative">
                    <a href="#" class="social-icon-innovative" data-color="#1877f2">
                        <i class="bi bi-facebook"></i>
                        <span class="social-tooltip">Facebook</span>
                    </a>
                    <a href="#" class="social-icon-innovative" data-color="#e4405f">
                        <i class="bi bi-instagram"></i>
                        <span class="social-tooltip">Instagram</span>
                    </a>
                    <a href="#" class="social-icon-innovative" data-color="#0a66c2">
                        <i class="bi bi-linkedin"></i>
                        <span class="social-tooltip">LinkedIn</span>
                    </a>
                    <a href="#" class="social-icon-innovative" data-color="#ff0000">
                        <i class="bi bi-youtube"></i>
                        <span class="social-tooltip">YouTube</span>
                    </a>
                    <a href="#" class="social-icon-innovative" data-color="#1da1f2">
                        <i class="bi bi-twitter-x"></i>
                        <span class="social-tooltip">X</span>
                    </a>
                    <a href="#" class="social-icon-innovative whatsapp-social" data-color="#25d366">
                        <i class="bi bi-whatsapp"></i>
                        <span class="social-tooltip">WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- SEPARADOR ANIMADO -->
        <div class="footer-divider">
            <div class="divider-line"></div>
            <div class="divider-icon">
                <i class="bi bi-gear-fill"></i>
            </div>
            <div class="divider-line"></div>
        </div>

        <!-- FOOTER BOTTOM CON COPYRIGHT -->
        <div class="footer-bottom-innovative">
            <div class="copyright-modern">
                <i class="bi bi-c-circle"></i>
                <span>2024 Maestranza Aweta. Todos los derechos reservados.</span>
            </div>
            
            <div class="legal-links-modern">
                <a href="#"><i class="bi bi-file-text"></i> Términos</a>
                <span class="dot-separator">•</span>
                <a href="#"><i class="bi bi-shield-lock"></i> Privacidad</a>
                <span class="dot-separator">•</span>
                <a href="#"><i class="bi bi-cookie"></i> Cookies</a>
            </div>
            
            <div class="developer-signature">
                <span>Diseño industrial</span>
                <i class="bi bi-heart-fill"></i>
                <span>por Aweta</span>
            </div>
        </div>
    </div>
</footer>



  
