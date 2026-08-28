<nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom shadow-sm sticky-top">
    <div class="container">
        <!-- Logo y Nombre -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="fa-solid fa-laptop-code me-2 fs-3 text-accent"></i>
            <span class="fw-bold fs-4">Tienda Tech</span>
        </a>
        
        <!-- Botón menú hamburguesa para móviles -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal" aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarPrincipal">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php#categorias">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="contacto.php">Contacto</a>
                </li>
            </ul>
            
            <!-- Acciones (Ver productos y Carrito simulado) -->
            <div class="d-flex align-items-center gap-3">
                <a href="productos.php" class="btn btn-outline-light btn-sm rounded-pill px-3 d-none d-lg-inline-block">Ver productos</a>
                <a href="carrito.php" class="btn btn-accent rounded-pill position-relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span id="contador-carrito" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                        <span class="visually-hidden">productos en carrito</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>
