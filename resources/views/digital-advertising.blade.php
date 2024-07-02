@extends('layouts.layout-huella')
@section('content')
<div class="content-page d-flex-responsive p-0" style="align-items: center">
    <div class="col-12 col-md-7 mb-5 only-pr-3">
        <span class="slogan">AGENCIA DE PUBLICIDAD DIGITAL EN CANCÚN</span>
        <h1 class="title">La estrategia perfecta para potenciar tu alcance</h1>
        <p>Descubre cómo nuestra agencia de marketing digital puede llevar tu negocio al siguiente nivel en línea.</p>
        <button type="button" class="btn-menu-pink">Obtener asesoría gratuita</button>
    </div>
    <div class="col-12 col-md-5 mb-5 p-0">
        <img class="img-responsive" src="/assets/img/servicio/servicio-publicidad-digital.svg" alt="Servicio de publicidad digital">
    </div>
</div>

<div class="content-page">
    <div class="mb-4 text-center">
        <h4>Servicios incluidos</h4>
    </div>
    <div class="row m-0">
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img style="width: 27px;" src="/assets/icon/services/icon-service-evaluacion.svg" alt="Icono Reporte de resultados">
                </div>
                <div class="font-weight-bold ml-2"><h5>Informe de resultados</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img style="width: 27px;" src="/assets/icon/services/icon-service-estrategia.svg" alt="Icono estrategias de publicidad">
                </div>
                <div class="font-weight-bold ml-2"><h5>Estrategias de desarrollo publicitario</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img style="width: 27px;" src="/assets/icon/services/icon-service-analisis-competencia.svg" alt="Icono de analisis de competencia">
                </div>
                <div class="font-weight-bold ml-2"><h5>Análisis de competencia digital</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img style="width: 27px;" src="/assets/icon/services/icon-service-gestion-anuncio.svg" alt="Icono gestion de anuncios">
                </div>
                <div class="font-weight-bold ml-2"><h5>Gestión de anuncios en internet</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img style="width: 27px;" src="/assets/icon/services/icon-service-presupuesto.svg" alt="Icono presupuesto">
                </div>
                <div class="font-weight-bold ml-2"><h5>Desarrollo de presupuestos</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img style="width: 27px;" src="/assets/icon/services/icon-service-optimizacion.svg" alt="Icono de optimizacion">
                </div>
                <div class="font-weight-bold ml-2"><h5>Optimización de campañas</h5></div>
            </div>
        </div>
    </div>
</div>

<div class="content-page mt-5">
    <div class="d-flex-responsive">
        <div class="col-12 col-md-6 pr-4 p-0">
            <h4 class="mb-4">Publicidad en redes sociales y SEM</h4>
            <p>
                Una agencia de publicidad digital en Cancún que te ofrece visibilidad inmediata y resultados a corto plazo. Gracias a la segmentación, las campañas en Internet atraen tráfico cualificado y amplían tus anuncios más allá del mercado local. 
            </p>
            <p>
                En Huella Digital, solo pagas cuando un cliente potencial interactúa con tu anuncio, <span class="text-c-pink">garantizando el mejor resultado por cada peso invertido.</span> 
            </p>
            <p>
                Con más de 5 años de experiencia, creamos y administramos tus campañas para obtener la máxima rentabilidad. Aprovecha la oportunidad de generar ventas con un bajo costo de adquisición.
            </p>
            <p>
                Te ayudamos en la planificación de tus campañas digitales: seleccionamos el canal adecuado, fijamos objetivos, desarrollamos presupuestos, redactamos mensajes efectivos, investigamos palabras clave, identificamos el público correcto, damos seguimiento y optimizamos campañas en tiempo real. 
            </p>
        </div>
        <div class="col-12 col-md-6 aling-start-end p-0">
            <p>
                Todas tus campañas en línea están alineadas con los objetivos de tu empresa. Las campañas en redes sociales como Facebook, Twitter, Instagram, Linkedin, Pinterest, TikTok, Youtube y Google son efectivas para exponer tus productos y servicios a nichos de clientes potenciales, aumentar la presencia de tu marca y mejorar tu posicionamiento en Internet.
            </p>
            <img class="img-responsive-reverse" src="/assets/img/servicio-marketing/crecimiento.png" alt="Personas">
        </div>
    </div>
</div>

<div class="content-page d-flex justify-center">
    <img class="img-responsive display-min my-banner" src="/assets/img/servicio/banner-garantia-mobile.svg" alt="Banner de garantia huella digital">
    <img class="img-responsive display-max my-banner" src="/assets/img/servicio/banner-garantia.svg" alt="Banner de garantia huella digital">
</div>

<x-servicios-marketing-digital className="mb-80" service="seo"/>

@endsection