@extends('layouts.layout-huella')

@section('content')

<div class="content-page d-flex-responsive p-0" style="align-items: center">
    <div class="col-12 col-md-7 mb-5 p-title-r">
        <h1 class="slogan slogan-size">AGENCIA DE MARKETING DIGITAL EN MÉXICO</h1>
        <p class="title title-size">Potencia tu presencia online y haz crecer tu marca en el mundo digital</p>
        <p>Con expertos en marketing digital, redes sociales, posicionamiento SEO, diseño web y publicidad digital. </p>
        <button type="button" class="btn-menu-pink">Obtener asesoría gratuita</button>
    </div>
    <div class="col-12 col-md-5 mb-5 p-0 d-flex justify-content-center">
        <img class="img-responsive" src="/assets/img/home/servicios.svg" alt="Servicios de huella digital">
    </div>
</div>
<div class="d-flex carrusel">
    <div class="carrusel-container">
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Top 3</p>
            <div class="mini-card-text">
                <p>Posicionado dentro del top 3 en su ciudad</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/ctr.png" alt="Logo buble">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Presencia</p>
            <div class="mini-card-text">
                <p>Notoriedad de marca contenido único y uso de influencers</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/buble-img.png" alt="Logo buble">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Top 3</p>
            <div class="mini-card-text">
                <p>Posicionado dentro del top 3 en su ciudad</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/ecnicopy.png" alt="Logo Exnicopy">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Leads</p>
            <div class="mini-card-text">
                <p>Mejora de leads calificados a través de publicidad pagada</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/leads.png" alt="Leads">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Top 3</p>
            <div class="mini-card-text">
                <p>Posicionado dentro del top 3</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/digirey.png" alt="Dijirey">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Contenido</p>
            <div class="mini-card-text">
                <p>Generación de contenidos para público nicho</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/homeopathy.png" alt="Homeopathy center">
            </div>
        </div>
    </div>
    <div class="carrusel-container" id="carrusel-container">
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Top 3</p>
            <div class="mini-card-text">
                <p>Posicionado dentro del top 3 en su ciudad</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/ctr.png" alt="Logo buble">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Presencia</p>
            <div class="mini-card-text">
                <p>Notoriedad de marca contenido único y uso de influencers</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/buble-img.png" alt="Logo buble">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Top 3</p>
            <div class="mini-card-text">
                <p>Posicionado dentro del top 3 en su ciudad</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/ecnicopy.png" alt="Logo Exnicopy">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Leads</p>
            <div class="mini-card-text">
                <p>Mejora de leads calificados a través de publicidad pagada</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/leads.png" alt="Leads">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Top 3</p>
            <div class="mini-card-text">
                <p>Posicionado dentro del top 3</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/digirey.png" alt="Dijirey">
            </div>
        </div>
        <div class="mini-card mini-card-carrusel">
            <p class="font-weight-bold title-minicard-carrusel">Contenido</p>
            <div class="mini-card-text">
                <p>Generación de contenidos para público nicho</p>
            </div>
            <div class="mini-card-img">
                <img src="/assets/logo/homeopathy.png" alt="Homeopathy center">
            </div>
        </div>
    </div>
</div>

<!-- COMPONENTE DE SERVICIOS DE MARKETING DIGITAL -->
<x-servicios-marketing-digital className="mb-80" service="marketing"/>

<div class="content-page">
    <h2 class="mb-5 t-size-25 font-weight-bold title-cases">Casos de éxito</h2>
    <div class="mb-100">
        <div class="d-flex-responsive-reverse">
            <div class="col-md-6 p-0">
                <p class="text-color-purple font-weight-bold">TECNICOPY</p>
                <p class="font-weight-bold subtitle-case">Tecnicopy, empresa especializada en renta y venta de multifuncionales en Ciudad de México</p>
                <p class="my-4">
                    Huella Digital tiene el privilegio de colaborar, desde hace más de cuatro años, con una empresa dedicada al alquiler de impresoras para grandes oficinas y empresas ubicada en la Ciudad de México. Su principal desafío era aumentar su visibilidad en línea e impulsar sus ventas a través de estrategias digitales efectivas.
                </p>
                <button type="button" class="btn-menu-pink" onclick="viewProyect('1')">Ver proyecto completo <img src="/assets/icon/arrow-right-white.svg" alt="Flecha derecha"></button>
            </div>
            <div class="col-md-6 p-0 container-case-exit mb-r-4">
                <div class="cont-img-case">
                    <img class="img-responsive" src="/assets/img/home/caso-tecnicopy.png" alt="Caso tecnicopy">
                </div>
            </div>
        </div>
    </div>
    <div class="mb-100">
        <div class="d-flex-responsive-reverse">
            <div class="col-md-6 p-0">
                <p class="text-color-purple font-weight-bold">BUBBLE BBQ BOATS</p>
                <p class="font-weight-bold subtitle-case">Bubble BBQ Boats: Tour Operadora en Cancún</p>
                <p class="my-4">
                    Nuestra agencia tiene el privilegio de colaborar con una naciente tour operadora con sede en el paradisíaco destino turístico de Cancún. Su principal desafío era destacarse en un mercado altamente competitivo e impulsar las ventas de sus tours en la región. Nuestro enfoque se centró en la creación de contenido de calidad y campañas publicitarias efectivas en redes sociales.
                </p>
                <button type="button" class="btn-menu-pink" onclick="viewProyect('2')">Ver proyecto completo <img src="/assets/icon/arrow-right-white.svg" alt="Flecha derecha"></button>
            </div>
            <div class="col-md-6 p-0 container-case-exit mb-r-4">
                <div class="cont-img-case">
                    <img class="img-responsive" src="/assets/img/home/caso-bubble-bbq.png" alt="Caso Bubble BBQ BOATS">
                </div>
            </div>
        </div>
    </div>
    <div class="mb-100">
        <div class="d-flex-responsive-reverse">
            <div class="col-md-6 p-0">
                <p class="text-color-purple font-weight-bold">CTR INTERNATIONAL</p>
                <p class="font-weight-bold subtitle-case">CTR International, distribuidor de Refacciones para Multifuncionales en Ciudad de México</p>
                <p class="my-4">
                    Colaboramos con un distribuidor de refacciones y consumibles para multifuncionales con sede en Ciudad de México. Uno de los principales desafíos que enfrentaba la marca era la escasa presencia en línea y la falta de información sobre esta industria en internet. Nuestro objetivo era mejorar su visibilidad y posicionamiento en los motores de búsqueda mediante una estrategia SEO efectiva.
                </p>
                <button type="button" class="btn-menu-pink" onclick="viewProyect('3')">Ver proyecto completo <img src="/assets/icon/arrow-right-white.svg" alt="Flecha derecha"></button>
            </div>
            <div class="col-md-6 p-0 container-case-exit mb-r-4">
                <div class="cont-img-case">
                    <img class="img-responsive" src="/assets/img/home/caso-ctr-international.png" alt="Caso CTR international">
                </div>
            </div>
        </div>
    </div>
    
    
</div>

<div class="content-page">
    <div class="d-flex-responsive" style="align-items:center;">
        <div class="col-md-6 pt-3">
            <h2 class="title-huella">La Agencia de Marketing Digital en México</h2>
            <p class="mb-3">
                En Huella Digital, hallarás el departamento externo de <span class="font-weight-bold">Mercadotecnia Digital</span> que tu empresa necesita. Ofrecemos experiencia en la gestión de redes sociales corporativas, <span class="font-weight-bold">SEO para destacar en Google, diseño web,</span> comercio electrónico, captación de clientes, <span class="font-weight-bold">publicidad online</span> y estrategias de <span class="font-weigth-bold">Marketing Digital.</span> Todo esto con la creatividad e innovación que tu marca necesita.
            </p>
            <a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink">Asesoría gratuita <img src="/assets/icon/arrow-right-white.svg" alt="Flecha derecha"></a>
        </div>
        <div class="col-md-6 text-center">
            <img class="img-responsive" style="margin-top: 30px;" src="/assets/img/home/peoples.svg" alt="Personas">
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script type="text/javascript">
        
    </script>
@endpush