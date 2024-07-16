<div class="content-page {{ $className }}">
    <div class="text-center">
        <h3>Servicios de Marketing Digital</h3>
        <p>Atraemos prospectos con Inbound Marketing: redes sociales, SEO, SEM y diseño web.</p>
    </div>

    
    <div class="content-btn-services">
        <div class="group-btn-services">
            <button class="btn-service {{ $service == 'marketing' ? 'btn-service-selected' : '' }}" id="btn-marketing-digital" type="button" onclick="switchService(this, 'marketing-digital')">
                Marketing digital <img id="marketing-digital-icon" src="/assets/icon/icon-laptop-{{ $service == 'marketing' ? 'pink' : 'black' }}.svg" alt="Icono marketing digital">
            </button>
            <button class="btn-service {{ $service == 'social' ? 'btn-service-selected' : '' }}" type="button" id="btn-social-media" onclick="switchService(this, 'social-media')">
                Redes sociales <img id="social-media-icon" src="/assets/icon/icon-cell-phone-{{ $service == 'social' ? 'pink' : 'black' }}.svg" alt="Icono redes sociales">
            </button>
            <button class="btn-service {{ $service == 'publicidad' ? 'btn-service-selected' : '' }}" type="button" id="btn-publicidad-digital" onclick="switchService(this, 'publicidad-digital')">
                Publicidad digital <img id="publicidad-digital-icon" src="/assets/icon/icon-screen-{{ $service == 'publicidad' ? 'pink' : 'black' }}.svg" alt="Icono publicidad digital">
            </button>
            <button class="btn-service {{ $service == 'seo' ? 'btn-service-selected' : '' }}" type="button" id="btn-posicionamiento-seo" onclick="switchService(this,'posicionamiento-seo')">
                Posicionamiento SEO <img id="posicionamiento-seo-icon" src="/assets/icon/icon-seo-{{ $service == 'seo' ? 'pink' : 'black' }}.svg" alt="Icono posicionamiento SEO">
            </button>
            <button class="btn-service {{ $service == 'web' ? 'btn-service-selected' : '' }}" type="button" id="btn-paginas-web" onclick="switchService(this, 'paginas-web')">
                Páginas web <img id="paginas-web-icon" src="/assets/icon/icon-web-{{ $service == 'web' ? 'pink' : 'black' }}.svg" alt="Icono páginas web">
            </button>
        </div>
    </div>
    <div class="mt-5 content-service {{ $service == 'marketing' ? '' : 'd-none' }}" id="marketing-digital">
        <div class="d-flex-responsive">
            <div class="col-12 col-md-6 mb-r-4 p-0">
                <img class="img-responsive-service" src="/assets/img/servicio/servicio-marketing-digital.svg" alt="Marketing digital">
            </div>
            <div class="col-12 col-md-6 p-0 contet-service-slice">
                <div class="col p-0">
                    <h4>Marketing Digital</h4>
                    <p> 
                        Vende más y posiciona tu marca
                    </p>
                    <p>
                        El mundo del Marketing Digital es dinámico y cambiante, por lo que es crucial que tu empresa se mantenga actualizada sobre las tendencias, tecnologías y tácticas en constante evolución de tu sector. No te quedes rezagado mientras tu competencia avanza...
                    </p>
                    <a class="see-more-service font-weight-bold" href="{{url('/agencia-de-marketing-digital-cancun')}}">
                        Leer más <img src="/assets/icon/arrow-right.svg" alt="Flecha derecha">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 content-service {{ $service == 'social' ? '' : 'd-none' }}" id="social-media">
        <div class="d-flex-responsive">
            <div class="col-md-6 mb-r-4 p-0">
                <img class="img-responsive-service" src="/assets/img/servicio/servicio-redes-sociales.svg" alt="Marketing digital">
            </div>
            <div class="col-md-6 p-0 contet-service-slice">
                <div class="col p-0">
                    <h4>Redes sociales</h4>
                    <p> 
                        Durante la administración de Redes Sociales en Huella Digital, expertos creativos desarrollan contenido que combina lazos emocionales y tácticas de venta digital para garantizar un retorno de inversión potencial. 
                        <span class="text-color-pink">En internet, el contenido es clave y generar conversación es fundamental.</span>
                        El futuro digital es ahora, y en Huella Digital estamos creándolo.  Vivimos en un mundo centrado en las redes sociales y el intercambio sin fronteras en Internet. 
                    </p>
                    <a class="see-more-service font-weight-bold" href="{{url('/agencia-de-redes-sociales-cancun')}}">
                        Leer más <img src="/assets/icon/arrow-right.svg" alt="Flecha derecha">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 content-service {{ $service == 'publicidad' ? '' : 'd-none' }}" id="publicidad-digital">
        <div class="d-flex-responsive">
            <div class="col-md-6 mb-r-4 p-0">
                <img class="img-responsive-service" src="/assets/img/servicio/servicio-publicidad-digital.svg" alt="Publicidad digital">
            </div>
            <div class="col-md-6 p-0 contet-service-slice">
                <div class="col p-0">
                    <h4>Publicidad digital</h4>
                    <p> 
                        Una agencia de publicidad digital en Cancún que te ofrece visibilidad inmediata y resultados a corto plazo. Gracias a la segmentación, las campañas en Internet atraen tráfico cualificado y amplían tus anuncios más allá del mercado local.                     
                    </p>
                    <p>
                        En Huella Digital, solo pagas cuando un cliente potencial interactúa con tu anuncio, garantizando el mejor resultado...
                    </p>
                    <a class="see-more-service font-weight-bold" href="{{url('/publicidad-digital-cancun')}}">
                        Leer más <img src="/assets/icon/arrow-right.svg" alt="Flecha derecha">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 content-service {{ $service == 'seo' ? '' : 'd-none' }}" id="posicionamiento-seo">
        <div class="d-flex-responsive">
            <div class="col-md-6 mb-r-4 p-0">
                <img class="img-responsive-service" src="/assets/img/servicio/servicio-posicionamiento-seo.svg" alt="Posicionamiento SEO">
            </div>
            <div class="col-md-6 p-0 contet-service-slice">
                <div class="col p-0">
                    <h4>Posicionamiento SEO</h4>
                    <p> 
                        Somos una agencia SEO especializada en posicionamiento web en Cancún, Quintana Roo. Nuestro equipo de expertos en SEO está comprometido en asesorarte para desarrollar una estrategia efectiva que te ayude a conseguir más visitas, atraer nuevos clientes y aumentar la rentabilidad de tu empresa en Internet.
                    </p>
                    <p>
                        En Huella Digital también ofrecemos servicios de...                        
                    </p>
                    <a class="see-more-service font-weight-bold" href="{{url('/agencia-seo-posicionamiento-web-cancun')}}">
                        Leer más <img src="/assets/icon/arrow-right.svg" alt="Flecha derecha">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 content-service {{ $service == 'web' ? '' : 'd-none' }}" id="paginas-web">
        <div class="d-flex-responsive">
            <div class="col-md-6 mb-r-4 p-0">
                <img class="img-responsive-service" src="/assets/img/servicio/servicio-paginas-web.svg" alt="Páginas web">
            </div>
            <div class="col-md-6 p-0 contet-service-slice">
                <div class="col p-0">
                    <h4>Páginas web</h4>
                    <p> 
                        Hacemos diseño de páginas web en Cancún para empresas de todos los tamaños que buscan un proveedor serio y confiable. Desarrollamos sitios web modernos, atractivos y orientados según tus necesidades comerciales, desde páginas informativas en formato One Page hasta sitios web robustos para comercio electrónico con pasarelas de pago.
                    </p>
                    <p>
                        En Huella Digital, nuestro equipo de desarrolladores y...                        
                    </p>
                    <a class="see-more-service font-weight-bold" href="{{url('/diseño-de-paginas-web-cancun')}}">
                        Leer más <img src="/assets/icon/arrow-right.svg" alt="Flecha derecha">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
