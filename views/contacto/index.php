<div class="container-fluid contenedor-contacto d-flex align-items-center justify-content-center ">
    <div id="seccion-contacto-interno"class="container pt-5 pb-5">
        <picture class="shadow rounded-4">
            <source srcset="/build/img/paula4.avif" type="image/avif">
            <source srcset="/build/img/paula4.webp" type="image/webp">
        
            <img width="100%" class="shadow rounded-4" height="100%" src="/build/img/paula4.png" alt="paula4">
        </picture>

        <form action="/contacto" method="POST" class="shadow border rounded-4 col-12 formulario-contacto needs-validation fs-3 p-4 bg-secondary-subtle" novalidate>
            <h3 class="text-center fw-bold fs-2 mt-3 mb-3">¡Dejanos tus datos!</h3>
            <div class="col-12 d-md-flex">
                <div class="col-12 mb-3 mb-md-0 col-md-4 position-relative">
                    <label for="nombres" class="form-label fs-4">Nombres</label>
                    <input type="text" class="form-control fs-2 pt-1 pb-1" id="nombres" required>
                    <div class="invalid-tooltip end-0">
                        ingresa tu nombre.
                    </div>
                </div>
                <div class="col-12 mb-3 mb-md-0 col-md-4 position-relative">
                    <label for="Apellido" class="form-label fs-4">Primer Apellido</label>
                    <input type="text" class="form-control fs-2 pt-1 pb-1" id="Apellido" required>
                    <div class="invalid-tooltip end-0">
                        ingresa Apellido.
                    </div>
                </div>
                <div class="col-12 mb-3 mb-md-0 col-md-4 position-relative">
                    <label for="segundoApellido" class="form-label fs-4">Segundo Apellido</label>
                    <input type="text" class="form-control fs-2 pt-1 pb-1" id="segundoApellido" required>
                    <div class="invalid-tooltip end-0">
                        ingresa Apellido.
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 d-md-flex justify-content-between">
                <div class="col-12 col-md-6 mb-3 mb-md-0 ">
                    <label for="correo" class="form-label fs-4">Correo Electrónico</label>
                    <div class="input-group flex-nowrap position-relative">
                        <span class="input-group-text fs-4" id="addon-wrapping"><i class="bi bi-envelope-at"></i></span>
                        <input type="email" class="form-control fs-2 pt-1 pb-1" id="correo" required>
                        <div class="invalid-tooltip end-0">
                            ingresa tu correo
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 mb-3 mb-md-0 ">
                    <label for="telefono" class="form-label fs-4">Teléfono</label>
                    <div class="input-group flex-nowrap position-relative">
                        <span class="input-group-text fs-4" id="addon-wrapping"><i class="bi bi-telephone"></i></span>
                        <input type="number" max="9999999999" min="1" class="form-control fs-2 pt-1 pb-1" id="telefono" required>
                        <div class="invalid-tooltip end-0">
                            ingresa tu telefono
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="col-12 position-relative">
                    <label for="comentario" class="form-label fs-4">Motivo de contácto</label>
                    <textarea id="comentario" class="form-control" rows="7" required></textarea>
                    <div class="invalid-tooltip end-0">
                        ¡Dejanos tu motivo!
                    </div>
                </div>
            </div>

            <div class="form-check form-check-inline fs-5 mt-5 position-relative">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
                <label class="form-check-label" for="inlineCheckbox1">He Leído y acepto las <a href="#">Politicas y privacidad</a></label>
                <div class="invalid-tooltip start-0">
                    Por favor acepta las politicas
                </div>
            </div>

            <button type="submit" class="col-12 fs-2 mt-5 btn btn-primary">Enviar</button>
        </form>

    </div>
</div>



<?php $scriptFormContact = '<script src="/build/js/formularioContacto/contacto.min.js" defer></script>';?>