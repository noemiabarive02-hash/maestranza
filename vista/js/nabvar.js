// Cambio de color del navbar al hacer scroll
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('mainNavbar');
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Prevenir que el dropdown se cierre al hacer click dentro
document.querySelectorAll('.dropdown-menu').forEach(function(dropdown) {
    dropdown.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});

// Cerrar dropdowns al hacer click fuera
document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
        const dropdowns = document.querySelectorAll('.dropdown-menu.show');
        dropdowns.forEach(dropdown => {
            dropdown.classList.remove('show');
        });
    }
});

// Manejar el hover en dispositivos táctiles
if ('ontouchstart' in window) {
    document.querySelectorAll('.mega-dropdown').forEach(function(dropdown) {
        dropdown.addEventListener('touchstart', function(e) {
            e.preventDefault();
            const menu = this.querySelector('.dropdown-menu');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                // Cerrar otros dropdowns abiertos
                document.querySelectorAll('.dropdown-menu.show').forEach(function(openMenu) {
                    openMenu.classList.remove('show');
                });
                menu.classList.add('show');
            }
        });
    });
}