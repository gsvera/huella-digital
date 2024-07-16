<div class="back-contact-us">
    <div class="content-page">
        <div class="d-flex-responsive">
            <div class="col-md-6 p-0">
                <h4 class="font-weight-bold text-c-pink">Llegó el momento de tomar una decisión</h4>
                <p>
                    ¿Hacemos crecer tu empresa?
                </p>
                <p>
                    En Huella Digital encontrarás el departamento externo de Mercadotecnia Digital que complementa a tu empresa ¡Contáctanos ahora!
                </p>
            </div>
            <div class="col-md-6 p-0">
                @if(session('messageError'))
                    <div class="errorDiv" id="messageError">
                        {{session('messageError')}}
                    </div>
                @endif
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="errorDiv" id="messageError">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <form id="form-contact" action="{{url('/gracias')}}" method="post">
                    {{@csrf_field()}}
                    <div class="d-flex-responsive">
                        <div class="col-12 col-md-6 pxfs-2">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pxfs-2">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex-responsive">
                        <div class="col-12 col-md-6 pxfs-2">
                            <div class="form-group">
                                <label for="servicio">Servicio</label>
                                <div class="form-control custom-select-h" id="div-select">
                                    <span id="div-select-text">Seleccione una opcion</span>
                                    <span><img id="row-select" src="/assets/img/row-down.svg" alt="Flecha abajo"></span>
                                </div>
                                <select class="form-control select-service d-none" id="service" name="service">
                                    <option class="d-none" value="Marketing digital">Marketing digital</option>
                                    <option class="d-none" value="Redes sociales">Redes sociales</option>
                                    <option class="d-none" value="Publicidad digital">Publicidad digital</option>
                                    <option class="d-none" value="Posicionamiento SEO">Posicionamiento SEO</option>
                                    <option class="d-none" value="Páginas web">Páginas web</option>
                                </select>
                                <div class="d-none select-option" id="select-option">
                                    <div class="item-option" data-value="Marketing digital">Marketing digital</div>
                                    <div class="item-option" data-value="Redes sociales">Redes sociales</div>
                                    <div class="item-option" data-value="Publicidad digital">Publicidad digital</div>
                                    <div class="item-option" data-value="Posicionamiento SEO">Posicionamiento SEO</div>
                                    <div class="item-option" data-value="Páginas web">Páginas web</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pxfs-2">
                            <div class="form-group">
                                <label for="celphone">Número celular</label>
                                <input type="text" class="form-control" id="celphone" name="celphone">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex-responsive">
                        <div class="col-md-12 pxfs-2">
                            <div class="form-group">
                                <label for="description">Cuéntanos como te podemos ayudar</label>
                                <textarea class="form-control" id="message" name="message" style="height: 150px"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 pxfs-2">
                        <div class="text-right">
                            <div class="g-recaptcha" data-sitekey="6LcvUZgaAAAAAJpJkaAHegjjCf47KrYc_TliU5gm"></div>
                        </div>
                    </div>
                    <div class="col-md-12 pxfs-2">
                        <button type="submit" onclick="sendBoxContact()" class="btn-menu-pink" style="width: 100%">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var divSelect = document.getElementById('div-select');
    var serviceSelect = document.getElementById('service');
    var selectOption = document.getElementById('select-option');
    var rowSelect = document.getElementById('row-select');
    var divSelectText = document.getElementById('div-select-text');

    divSelect.addEventListener('click', () => {
        console.log('clickss')
        selectOption.classList.remove('d-none');  
        rowSelect.setAttribute('src', rowSelect.src.replace('down', 'up'));
    })

    document.addEventListener('click', function(e) {
        const isClickSelect = divSelect.contains(e.target);
        const isClickOption = selectOption.contains(e.target);
        if(!isClickSelect && !isClickOption) {
            selectOption.classList.add('d-none');
            rowSelect.setAttribute('src', rowSelect.src.replace('up', 'down'));
        }
    })

    selectOption.addEventListener('click', function(e) {
        if (event.target.tagName === 'DIV') {
            const value = event.target.getAttribute('data-value');
            const text = event.target.textContent;

            divSelectText.textContent = text;
            serviceSelect.value = value;
            selectOption.classList.add('d-none');
            rowSelect.setAttribute('src', rowSelect.src.replace('up', 'down'));
        }
    })
</script>