<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Header -->
<div class="bg-light py-5 border-bottom">
    <div class="container text-center">
        <h1 class="fw-bold mb-2">Contáctanos</h1>
        <p class="text-secondary lead mb-0">Estamos aquí para ayudarte. Envíanos tus dudas o sugerencias.</p>
    </div>
</div>

<div class="container py-5 my-4">
    <div class="row g-5">
        <!-- Información de contacto -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-primary-custom text-white">
                <div class="card-body">
                    <h3 class="fw-bold mb-4 text-accent">Información de Contacto</h3>
                    <p class="mb-5 opacity-75">Si tienes alguna pregunta sobre nuestros productos, envíos o garantías, no dudes en comunicarte con nosotros. Nuestro equipo te responderá lo antes posible.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-white text-primary-custom rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-location-dot fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Ubicación</h6>
                            <p class="mb-0 opacity-75 small">123 Calle Principal, Ciudad Tech, CP 10000</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-white text-primary-custom rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-phone fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Teléfono</h6>
                            <p class="mb-0 opacity-75 small">+1 234 567 8900</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-5">
                        <div class="bg-white text-primary-custom rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-envelope fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Correo Electrónico</h6>
                            <p class="mb-0 opacity-75 small">info@tiendatech.com</p>
                        </div>
                    </div>

                    <hr class="border-light opacity-25 mb-4">
                    
                    <h6 class="fw-bold mb-3">Síguenos en redes sociales</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-light rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light rounded-circle"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulario -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 h-100" id="form-container">
                <h3 class="fw-bold mb-4">Envíanos un mensaje</h3>
                <form id="formContacto">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-medium">Nombre completo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="form-label fw-medium">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label fw-medium">Teléfono (Opcional)</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ej: +1 234 567 8900">
                        </div>
                        <div class="col-md-6">
                            <label for="asunto" class="form-label fw-medium">Asunto <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Motivo de tu mensaje" required>
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="form-label fw-medium">Mensaje <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-accent btn-lg w-100 rounded-pill fw-bold">
                                Enviar Mensaje <i class="fa-solid fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
