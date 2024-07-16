@extends('layouts.layout-huella')
@section('content')
<div class="content-page d-flex-responsive p-0" style="align-items: center">
    <div class="col-12 col-md-7 mb-5 only-pr-3">
        <span class="slogan">AGENCIA DE REDES SOCIALES EN CANCÚN</span>
        <h1 class="title">Sacamos el máximo provecho de tus medios digitales</h1>
        <p style="margin-bottom: 25px;">Descubre cómo nuestra agencia de marketing digital puede llevar tu negocio al siguiente nivel en línea.</p>
        <a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink">Obtener asesoría gratuita</a>
    </div>
    <div class="col-12 col-md-5 mb-5 p-0 justify-end d-flex">
        <img class="img-responsive-service-banner" src="/assets/img/servicio/servicio-banner-redes-sociales.svg" alt="Servicio de redes sociales">
    </div>
</div>

    <div class="content-page-service">
    <div class="mb-4 text-center">
        <h4>Servicios incluidos</h4>
    </div>
    <div class="row m-0">
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-evaluacion.svg" alt="Icono Reporte de resultados">
                </div>
                <div class="font-weight-bold ml-2"><h5>Creación de material gráfico</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-servicec-inbound.svg" alt="Icono estrategias inbound">
                </div>
                <div class="font-weight-bold ml-2"><h5>Servicio de Community Manager</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-produccion.svg" alt="Icono de desarrollo de contenido">
                </div>
                <div class="font-weight-bold ml-2"><h5>Desarrollo de contenido estratégico</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-gestion-anuncio.svg" alt="Icono gestion de campañas">
                </div>
                <div class="font-weight-bold ml-2"><h5>Gestión de campañas de publicidad</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-comunidad.svg" alt="Icono comunidad">
                </div>
                <div class="font-weight-bold ml-2"><h5>Servicio de Community Manager</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-mensaje.svg" alt="Icono de mensaje">
                </div>
                <div class="font-weight-bold ml-2"><h5>Atención a mensajes</h5></div>
            </div>
        </div>
    </div>
</div>

<div class="content-page mt-5">
    <div class="d-flex-responsive">
        <div class="col-12 col-md-6 padd-r-age">
            <h4 class="mb-4">Gestión de redes sociales</h4>
            <p>
                Durante la administración de Redes Sociales en Huella Digital, expertos creativos desarrollan contenido que combina lazos emocionales y tácticas de venta digital para garantizar un retorno de inversión potencial. <span class="text-c-pink">En internet, el contenido es clave y generar conversación es fundamental.</span> El futuro digital es ahora, y en Huella Digital estamos creándolo. Vivimos en un mundo centrado en las redes sociales y el intercambio sin fronteras en Internet. 
            </p>
            <p class="text-secondary">
                Las redes sociales son el camino ideal para que tu empresa sea reconocida y aumente sus ventas. 
            </p>
            <p>
                En Huella Digital creemos firmemente en la importancia de una sólida presencia en medios sociales como Facebook, Instagram, TikTok, etc., como parte integral de toda estrategia de mercadotecnia. Por eso, como parte de nuestro servicio de administración de redes sociales en Cancún, Quintana Roo, <span class="text-c-pink">creamos el perfil social adecuado para tu negocio alineado con su imagen corporativa.</span>
            </p>
        </div>
        <div class="col-12 col-md-6 aling-start-end padd-l-age">
            <p>
                Definimos tu buyer persona para establecer los ejes de comunicación y contenido creativo a difundir en los medios digitales, atrayendo nuevos prospectos y generando mayores ingresos medibles en ventas.
            </p>
            <p>
                Además de estrategias creativas y datos analíticos, ofrecemos servicios de contenido basados en material gráfico y de video para lograr una correcta viralización de tus objetivos empresariales, <span class="text-c-pink">haciendo que más personas conozcan tu marca.</span>
            </p>
            <img class="img-responsive" src="/assets/img/servicio-marketing/crecimiento.svg" alt="Personas">
        </div>
    </div>
</div>

<div class="content-page d-flex justify-center">
    <img class="img-responsive display-min my-banner" src="/assets/img/servicio/banner-garantia-mobile.svg" alt="Banner de garantia huella digital">
    <img class="img-responsive display-max my-banner" src="/assets/img/servicio/banner-garantia.svg" alt="Banner de garantia huella digital">
</div>

<x-servicios-marketing-digital className="mb-80" service="publicidad"/>

@endsection