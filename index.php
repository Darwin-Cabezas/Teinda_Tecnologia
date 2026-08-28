<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'data/productos.php'; ?>

<!-- Banner Principal -->
<section class="hero-banner text-center text-lg-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3">Bienvenido a <span class="text-accent">Tienda Tech</span></h1>
                <p class="lead mb-4">Descubre la última tecnología al mejor precio. Laptops, celulares, accesorios y mucho más con calidad garantizada.</p>
                <a href="productos.php" class="btn btn-accent btn-lg px-4 me-md-2 rounded-pill shadow">Ver Productos</a>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <i class="fa-solid fa-computer" style="font-size: 15rem; color: rgba(255,255,255,0.8);"></i>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Categorías -->
<section id="categorias" class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Categorías Principales</h2>
            <p class="text-secondary">Explora nuestros productos por categoría</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="category-card h-100" onclick="window.location.href='productos.php'">
                    <i class="fa-solid fa-laptop"></i>
                    <h5 class="fw-bold">Laptops</h5>
                    <p class="small mb-0">Equipos de alto rendimiento</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-card h-100" onclick="window.location.href='productos.php'">
                    <i class="fa-solid fa-mobile-screen"></i>
                    <h5 class="fw-bold">Celulares</h5>
                    <p class="small mb-0">Smartphones de última generación</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-card h-100" onclick="window.location.href='productos.php'">
                    <i class="fa-solid fa-headphones"></i>
                    <h5 class="fw-bold">Audio</h5>
                    <p class="small mb-0">Audífonos y parlantes</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-card h-100" onclick="window.location.href='productos.php'">
                    <i class="fa-solid fa-keyboard"></i>
                    <h5 class="fw-bold">Accesorios</h5>
                    <p class="small mb-0">Teclados, mouse y más</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Productos Destacados -->
<section class="py-5">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold mb-0">Productos Destacados</h2>
                <p class="text-secondary mb-0">Nuestras mejores ofertas para ti</p>
            </div>
            <a href="productos.php" class="text-decoration-none fw-bold text-accent">Ver todos <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>

        <div class="row g-4">
            <?php 
            // Mostrar solo los primeros 4 productos como destacados
            $destacados = array_slice($productos, 0, 4);
            foreach ($destacados as $producto) { 
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card product-card">
                        <div class="product-img-wrapper">
                            <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" class="product-img" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-secondary mb-2 align-self-start"><?php echo htmlspecialchars($producto['categoria']); ?></span>
                            <h5 class="card-title fw-bold text-truncate" title="<?php echo htmlspecialchars($producto['nombre']); ?>">
                                <?php echo htmlspecialchars($producto['nombre']); ?>
                            </h5>
                            <p class="price-tag mt-auto mb-3">$<?php echo number_format($producto['precio'], 2); ?></p>
                            <div class="d-grid gap-2">
                                <a href="detalle.php?id=<?php echo $producto['id']; ?>" class="btn btn-outline-primary">Ver Detalle</a>
                                <button type="button" id="btn-add-<?php echo $producto['id']; ?>" class="btn btn-accent" onclick="agregarCarrito('<?php echo addslashes($producto['nombre']); ?>', <?php echo $producto['id']; ?>, <?php echo $producto['precio']; ?>, '<?php echo htmlspecialchars($producto['imagen']); ?>')">
                                    <i class="fa-solid fa-cart-plus me-1"></i> Agregar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Sección Informativa -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <i class="fa-solid fa-truck-fast fs-1 text-accent mb-3"></i>
                <h4 class="fw-bold">Envío Gratis</h4>
                <p class="text-light opacity-75">En compras superiores a $100</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-shield-halved fs-1 text-accent mb-3"></i>
                <h4 class="fw-bold">Garantía Segura</h4>
                <p class="text-light opacity-75">1 año de garantía en todos los equipos</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-headset fs-1 text-accent mb-3"></i>
                <h4 class="fw-bold">Soporte 24/7</h4>
                <p class="text-light opacity-75">Atención al cliente en todo momento</p>
            </div>
        </div>
    </div>
</section>

<!-- Botón Volver Arriba -->
<button onclick="volverArriba()" id="btnVolverArriba" title="Volver arriba">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>
