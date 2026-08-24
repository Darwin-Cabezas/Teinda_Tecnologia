<?php 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
include 'data/productos.php'; 

// Obtener el ID del producto por GET y validarlo
$id_producto = isset($_GET['id']) ? intval($_GET['id']) : 0;
$producto_encontrado = null;

// Función para buscar el producto
function buscarProducto($id, $productos_array) {
    foreach ($productos_array as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }
    return null;
}

if ($id_producto > 0) {
    $producto_encontrado = buscarProducto($id_producto, $productos);
}
?>

<div class="container py-5 my-5">
    <?php if ($producto_encontrado): ?>
        <!-- Producto Encontrado -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item"><a href="productos.php" class="text-decoration-none">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($producto_encontrado['nombre']); ?></li>
            </ol>
        </nav>

        <div class="row bg-white rounded-4 shadow-sm p-4 mt-4">
            <div class="col-md-6 mb-4 mb-md-0 d-flex align-items-center justify-content-center bg-light rounded-4 p-4">
                <img src="<?php echo htmlspecialchars($producto_encontrado['imagen']); ?>" alt="<?php echo htmlspecialchars($producto_encontrado['nombre']); ?>" class="img-fluid rounded" style="max-height: 400px; object-fit: contain;">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center px-md-5">
                <span class="badge bg-primary-custom w-auto align-self-start mb-2 px-3 py-2"><?php echo htmlspecialchars($producto_encontrado['categoria']); ?></span>
                
                <h1 class="fw-bold mb-3"><?php echo htmlspecialchars($producto_encontrado['nombre']); ?></h1>
                
                <h2 class="text-accent fw-bold mb-4">$<?php echo number_format($producto_encontrado['precio'], 2); ?></h2>
                
                <h5 class="fw-bold">Descripción</h5>
                <p class="text-secondary mb-4 pb-3 border-bottom lead" style="font-size: 1.1rem;">
                    <?php echo nl2br(htmlspecialchars($producto_encontrado['descripcion'])); ?>
                </p>
                
                <div class="d-flex gap-3 mb-4">
                    <div class="input-group" style="width: 130px;">
                        <button class="btn btn-outline-secondary" type="button" onclick="this.nextElementSibling.stepDown()">-</button>
                        <input type="number" class="form-control text-center" value="1" min="1" max="10">
                        <button class="btn btn-outline-secondary" type="button" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <button type="button" id="btn-add-<?php echo $producto_encontrado['id']; ?>" class="btn btn-accent flex-grow-1" onclick="agregarCarrito('<?php echo addslashes($producto_encontrado['nombre']); ?>', <?php echo $producto_encontrado['id']; ?>)">
                        <i class="fa-solid fa-cart-shopping me-2"></i> Agregar al Carrito
                    </button>
                </div>
                
                <div class="mt-2 text-center text-md-start">
                    <a href="productos.php" class="text-decoration-none text-secondary">
                        <i class="fa-solid fa-arrow-left me-1"></i> Volver a productos
                    </a>
                </div>
            </div>
        </div>
        
    <?php else: ?>
        <!-- Producto No Encontrado -->
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-5">
                    <i class="fa-solid fa-triangle-exclamation text-warning mb-4" style="font-size: 5rem;"></i>
                    <h2 class="fw-bold text-dark">Producto no encontrado</h2>
                    <p class="text-secondary mb-4">Lo sentimos, el producto que buscas no existe o ha sido eliminado.</p>
                    <a href="productos.php" class="btn btn-primary-custom text-white rounded-pill px-4 py-2">
                        <i class="fa-solid fa-list me-2"></i>Ver catálogo completo
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
