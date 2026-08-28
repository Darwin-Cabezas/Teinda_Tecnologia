<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Header de la página -->
<div class="bg-light py-4 border-bottom">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-secondary">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mi Carrito</li>
            </ol>
        </nav>
        <h1 class="fw-bold">Mi Carrito</h1>
        <p class="text-secondary mb-0">Revisa los productos que has seleccionado.</p>
    </div>
</div>

<div class="container py-5 my-3" style="min-height: 50vh;">
    <div id="carrito-container">
        <!-- El contenido del carrito se cargará aquí por JavaScript -->
    </div>
</div>

<script>
    function eliminarDelCarrito(id) {
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito = carrito.filter(item => item.id !== id);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        actualizarContadorCarrito();
        renderizarCarrito();
    }

    function actualizarCantidad(id, nuevaCantidad) {
        if (nuevaCantidad < 1) return;
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        const producto = carrito.find(item => item.id === id);
        if (producto) {
            producto.cantidad = parseInt(nuevaCantidad);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            actualizarContadorCarrito();
            renderizarCarrito();
        }
    }

    function renderizarCarrito() {
        const container = document.getElementById('carrito-container');
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        
        if (carrito.length === 0) {
            container.innerHTML = `
                <div class="text-center py-5">
                    <i class="fa-solid fa-cart-shopping text-secondary mb-3" style="font-size: 5rem; opacity: 0.5;"></i>
                    <h3 class="fw-bold text-dark">Tu carrito está vacío</h3>
                    <p class="text-secondary mb-4">No has agregado ningún producto a tu carrito de compras.</p>
                    <a href="productos.php" class="btn btn-primary-custom text-white rounded-pill px-4 py-2">
                        <i class="fa-solid fa-list me-2"></i>Ver productos
                    </a>
                </div>
            `;
            return;
        }

        let total = 0;
        let html = `
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-borderless align-middle mb-0">
                                    <thead class="bg-light text-secondary">
                                        <tr>
                                            <th class="ps-4 py-3 rounded-start-4">Producto</th>
                                            <th class="py-3">Precio</th>
                                            <th class="py-3">Cantidad</th>
                                            <th class="py-3">Subtotal</th>
                                            <th class="pe-4 py-3 rounded-end-4 text-center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        `;

        carrito.forEach(item => {
            const subtotal = item.precio * item.cantidad;
            total += subtotal;
            html += `
                <tr class="border-bottom">
                    <td class="ps-4 py-3">
                        <div class="d-flex align-items-center">
                            <img src="${item.imagen}" alt="${item.nombre}" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="fw-bold mb-0">${item.nombre}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="py-3">$${item.precio.toFixed(2)}</td>
                    <td class="py-3">
                        <div class="input-group input-group-sm" style="width: 100px;">
                            <button class="btn btn-outline-secondary" type="button" onclick="actualizarCantidad(${item.id}, ${item.cantidad - 1})">-</button>
                            <input type="number" class="form-control text-center" value="${item.cantidad}" min="1" onchange="actualizarCantidad(${item.id}, this.value)">
                            <button class="btn btn-outline-secondary" type="button" onclick="actualizarCantidad(${item.id}, ${item.cantidad + 1})">+</button>
                        </div>
                    </td>
                    <td class="py-3 fw-bold">$${subtotal.toFixed(2)}</td>
                    <td class="pe-4 py-3 text-center">
                        <button class="btn btn-sm btn-outline-danger" onclick="eliminarDelCarrito(${item.id})" title="Eliminar">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </td>
                </tr>
            `;
        });

        html += `
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-4">Resumen de Compra</h5>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-secondary">Subtotal</span>
                                <span>$${total.toFixed(2)}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-secondary">Envío</span>
                                <span class="text-success fw-medium">Gratis</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-4">
                                <span class="fw-bold fs-5">Total</span>
                                <span class="fw-bold fs-5 text-accent">$${total.toFixed(2)}</span>
                            </div>
                            <button class="btn btn-accent w-100 rounded-pill mb-3" onclick="alert('Funcionalidad de pago en construcción.\\n\\n¡Gracias por probar la demo!')">
                                Proceder al Pago
                            </button>
                            <button class="btn btn-outline-danger w-100 rounded-pill" onclick="if(confirm('¿Estás seguro de vaciar el carrito?')) vaciarCarrito();">
                                Vaciar Carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        container.innerHTML = html;
    }

    document.addEventListener("DOMContentLoaded", renderizarCarrito);
</script>

<?php include 'includes/footer.php'; ?>
