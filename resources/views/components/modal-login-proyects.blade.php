<div>
    <!-- Modal -->
    <div class="modal fade" id="modalLoginProyects" tabindex="-1" aria-labelledby="modalLoginProyectsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="justify-end pt-3 pr-3">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-proyect-login">
                        <img src="/assets/icon/icon-close.svg" alt="Icono de cierre">
                    </button>
                </div>
                <div class="content-modal-body">
                    <div class="col-md-4 mx-auto text-center">
                        <h4 class="font-weight-bold">¿Deseas visualizar el contenido de esta sección?</h4>
                        <p>
                            Por favor ingresa la contraseña
                        </p>
                        <div>
                            <input type="hidden" id="id-proyect">
                            <input class="input-password" type="password" id="password" placeholder="Contraseña">
                            <p class="text-danger" id="error-text"></p>
                        </div>
                        <div class="my-5">
                            <button type="button" class="btn-menu-pink" onclick="sendPassProyect()">Vamos</button>
                        </div>
                        <p class="text-color-gray">¿No tienes la contraseña? <a rel="nofollow" style="text-decoration:none;" href="https://wa.me/9981539626" class="text-color-pink hover-pink">contáctanos</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>