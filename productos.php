<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'data/productos.php'; ?>

<!-- Header de la página -->
<div class="bg-light py-4 border-bottom">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-secondary">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Catálogo de Productos</li>
            </ol>
        </nav>
        <h1 class="fw-bold">Catálogo de Productos</h1>
        <p class="text-secondary mb-0">Explora nuestra colección completa de tecnología.</p>
    </div>
</div>

<!-- Contenedor Principal -->
<div class="container py-5">
    <div class="row">
        <!-- Sidebar de Filtros (Simulado) -->
        <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="card border-0 shadow-sm rounded-4 sticky-lg-top" style="top: 100px; z-index: 1;">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3"><i class="fa-solid fa-filter me-2 text-accent"></i>Filtros</h5>
                    <hr>
                    <h6 class="fw-bold mb-3">Categorías</h6>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Todas</span> <span class="badge bg-secondary rounded-pill">8</span></a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-secondary d-flex justify-content-between"><span>Laptops</span> <span class="badge bg-light text-dark rounded-pill">2</span></a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-secondary d-flex justify-content-between"><span>Celulares</span> <span class="badge bg-light text-dark rounded-pill">2</span></a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-secondary d-flex justify-content-between"><span>Audio</span> <span class="badge bg-light text-dark rounded-pill">1</span></a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-secondary d-flex justify-content-between"><span>Accesorios</span> <span class="badge bg-light text-dark rounded-pill">2</span></a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-secondary d-flex justify-content-between"><span>Monitores</span> <span class="badge bg-light text-dark rounded-pill">1</span></a></li>
                    </ul>
                    <div class="alert alert-info py-2 small mb-0">
                        <i class="fa-solid fa-circle-info me-1"></i> Los filtros son de demostración.
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid de Productos -->
        <div class="col-lg-9">
            <div class="row g-4">
                <?php 
                // Recorrer el array de productos y generar las tarjetas
                foreach ($productos as $producto) { 
                ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card product-card">
                            <div class="product-img-wrapper">
                                <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" class="product-img" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start"><?php echo htmlspecialchars($producto['categoria']); ?></span>
                                <h5 class="card-title fw-bold text-truncate" title="<?php echo htmlspecialchars($producto['nombre']); ?>">
                                    <?php echo htmlspecialchars($producto['nombre']); ?>
                                </h5>
                                <p class="card-text text-secondary small text-truncate-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    <?php echo htmlspecialchars($producto['descripcion']); ?>
                                </p>
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
    </div>
</div>

<!-- Botón Volver Arriba -->
<button onclick="volverArriba()" id="btnVolverArriba" title="Volver arriba">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>
