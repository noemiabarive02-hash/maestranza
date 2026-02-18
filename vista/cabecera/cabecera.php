<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestranza</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="vista/css/main.css">
    <link rel="stylesheet" href="vista/css/nabvar.css">
    <link rel="stylesheet" href="vista/css/footer.css">
   
</head>
    
</head>
<body>

<!-- Top bar con 3 columnas de información -->
<div class="container-fluid top-bar">
    <div class="contact-info">
        <div class="info-item">
            <i class="bi bi-telephone-fill"></i>
            <span><a href="tel:+56912345678">+56 9 1234 5678</a></span>
        </div>
        <div class="info-item">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Av. Principal 123, Santiago</span>
        </div>
        <div class="info-item">
            <i class="bi bi-envelope-fill"></i>
            <span><a href="mailto:info@maestranza.cl">info@maestranza.cl</a></span>
        </div>
    </div>
</div>

<!-- Navbar Transparente con Mega Dropdown -->
<nav class="navbar navbar-expand-lg navbar-custom" id="mainNavbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="vista/img/logo_01.png" alt="Logo Maestranza" onerror="this.src='https://via.placeholder.com/180x50?text=Maestranza'">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                
                <!-- Mega Dropdown para Servicios -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="serviciosDropdown">
                        <h6 class="dropdown-header">EQUIPOS INDUSTRIALES PARA</h6>
                        
                        <!-- Primera fila de servicios -->
                        <div class="categorias-grid">
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Torno Industrial">
                                <span>TORNOS INDUSTRIALES</span>
                                <small>CNC y Convencionales</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Fresadora">
                                <span>FRESADORAS CNC</span>
                                <small>3 y 5 ejes</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Taladro">
                                <span>TALADROS RADIALES</span>
                                <small>Hasta 2 metros</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Soldadura">
                                <span>EQUIPOS SOLDADURA</span>
                                <small>MIG, TIG, Electrodo</small>
                            </div>
                        </div>
                        
                        <!-- Segunda fila de servicios -->
                        <div class="categorias-grid">
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Prensa">
                                <span>PRENSAS HIDRÁULICAS</span>
                                <small>20 a 200 toneladas</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Cizalla">
                                <span>CIZALLAS INDUSTRIALES</span>
                                <small>Hasta 12mm</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Rectificadora">
                                <span>RECTIFICADORAS</span>
                                <small>Planas y cilíndricas</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Compresor">
                                <span>COMPRESORES</span>
                                <small>Industriales</small>
                            </div>
                        </div>

                        <!-- Subcategorías adicionales -->
                        <div class="subcategorias-grid">
                            <div class="subcategoria-item">
                                <i class="bi bi-gear-fill"></i>
                                <span>Mantenimiento Industrial</span>
                            </div>
                            <div class="subcategoria-item">
                                <i class="bi bi-tools"></i>
                                <span>Reparaciones Especializadas</span>
                            </div>
                            <div class="subcategoria-item">
                                <i class="bi bi-diagram-3-fill"></i>
                                <span>Automatización</span>
                            </div>
                            <div class="subcategoria-item">
                                <i class="bi bi-brush-fill"></i>
                                <span>Pintura Industrial</span>
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- Mega Dropdown para Productos -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productosDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productosDropdown">
                        <h6 class="dropdown-header">PRODUCTOS INDUSTRIALES</h6>
                        
                        <!-- Primera fila de productos -->
                        <div class="categorias-grid">
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Rodamientos">
                                <span>RODAMIENTOS</span>
                                <small>Todas las marcas</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Motores">
                                <span>MOTORES ELÉCTRICOS</span>
                                <small>Monofásicos y Trifásicos</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Reductores">
                                <span>REDUCTORES</span>
                                <small>Velocidad</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Correas">
                                <span>CORREAS INDUSTRIALES</span>
                                <small>Trapezoidales y planas</small>
                            </div>
                        </div>
                        
                        <!-- Segunda fila de productos -->
                        <div class="categorias-grid">
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Válvulas">
                                <span>VÁLVULAS</span>
                                <small>Industriales</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Bombas">
                                <span>BOMBAS INDUSTRIALES</span>
                                <small>Centrífugas y peristálticas</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Cilindros">
                                <span>CILINDROS NEUMÁTICOS</span>
                                <small>Compactos y estándar</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Filtros">
                                <span>FILTROS</span>
                                <small>Hidráulicos y neumáticos</small>
                            </div>
                        </div>

                        <!-- Tercera fila de productos adicionales -->
                        <div class="categorias-grid">
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Acoples">
                                <span>ACOPLES INDUSTRIALES</span>
                                <small>Rápidos y mecánicos</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Engranajes">
                                <span>ENGRANAJES</span>
                                <small>Rectos y helicoidales</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1598550476439-6847785fcea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Chumaceras">
                                <span>CHUMACERAS</span>
                                <small>Pie de página y brida</small>
                            </div>
                            <div class="categoria-item">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Sellos">
                                <span>SELLOS MECÁNICOS</span>
                                <small>Retenedores y empaques</small>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <div class="social-icons">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-youtube"></i>
            </div>
        </div>
    </div>
</nav>



