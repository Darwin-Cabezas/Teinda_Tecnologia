// assets/js/script.js

// Funcionalidad de carrito con localStorage
let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

function actualizarContadorCarrito() {
    const contador = document.getElementById('contador-carrito');
    if (contador) {
        const totalItems = carrito.reduce((sum, item) => sum + item.cantidad, 0);
        contador.innerText = totalItems;
    }
}

document.addEventListener("DOMContentLoaded", actualizarContadorCarrito);

function agregarCarrito(nombre, id, precio, imagen) {
    // Si estamos en la página de detalle, intentamos obtener la cantidad
    let cantidadInput = document.getElementById('cantidad-producto-' + id);
    let cantidadAAgregar = cantidadInput ? parseInt(cantidadInput.value) : 1;

    const productoExistente = carrito.find(item => item.id === id);
    if (productoExistente) {
        productoExistente.cantidad += cantidadAAgregar;
    } else {
        carrito.push({
            id: id,
            nombre: nombre,
            precio: parseFloat(precio),
            imagen: imagen,
            cantidad: cantidadAAgregar
        });
    }
    
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarContadorCarrito();
    
    // Animación pequeña en el botón
    const btn = document.getElementById('btn-add-' + id);
    if(btn) {
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fa-solid fa-check"></i> Agregado';
        btn.classList.replace('btn-accent', 'btn-success');
        
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.classList.replace('btn-success', 'btn-accent');
        }, 2000);
    }
    
    // Mostrar alerta (simulación sencilla)
    alert("¡Producto agregado con éxito!\n\nSe ha añadido: " + nombre + " al carrito.");
}

function vaciarCarrito() {
    carrito = [];
    localStorage.removeItem('carrito');
    actualizarContadorCarrito();
    if(typeof renderizarCarrito === 'function') {
        renderizarCarrito();
    }
}

// Botón para volver arriba
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    const btnVolver = document.getElementById("btnVolverArriba");
    if (btnVolver) {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnVolver.style.display = "block";
        } else {
            btnVolver.style.display = "none";
        }
    }
}

function volverArriba() {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
}

// Validaciones simples para formulario de contacto
document.addEventListener("DOMContentLoaded", function() {
    const formContacto = document.getElementById("formContacto");
    if(formContacto) {
        formContacto.addEventListener("submit", function(e) {
            e.preventDefault(); // Evitar envío real
            
            const nombre = document.getElementById("nombre").value;
            const correo = document.getElementById("correo").value;
            
            if(nombre.trim() === "" || correo.trim() === "") {
                alert("Por favor, completa los campos requeridos.");
                return;
            }
            
            // Simular envío exitoso
            document.getElementById("form-container").innerHTML = `
                <div class="alert alert-success text-center p-5 rounded-4 shadow-sm">
                    <i class="fa-solid fa-circle-check fs-1 text-success mb-3"></i>
                    <h3>¡Mensaje Enviado!</h3>
                    <p>Gracias ${nombre}, hemos recibido tu mensaje y te contactaremos pronto a ${correo}.</p>
                    <a href="index.php" class="btn btn-accent mt-3">Volver al inicio</a>
                </div>
            `;
        });
    }
});
