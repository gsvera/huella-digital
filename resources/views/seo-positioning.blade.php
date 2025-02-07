@extends('layouts.layout-huella')
@section('content')
<div class="content-page d-flex-responsive p-0">
    <div class="col-12 col-md-7 mb-5 only-pr-3">
        <h1 class="slogan slogan-size">AGENCIA DE SEO - POSICIONAMIENTO WEB EN CANCÚN</h1>
        <p class="title title-size">La estrategia digital perfecta para aumentar tu alcance y lograr que más prospectos te encuentren</p>
        <p style="margin-bottom: 25px;">Descubre cómo nuestra agencia de marketing digital puede llevar a tu negocio al siguiente nivel en línea.</p>
        <a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink">Obtener asesoría gratuita</a>
    </div>
    <div class="col-12 col-md-5 mb-5 p-0 justify-end d-flex">
        <img class="img-responsive-service-banner" src="/assets/img/servicio/servicio-banner-posicionamiento-seo.svg" alt="Servicio de posicionamiento seo">
    </div>
</div>

<div class="content-page-service">
    <div class="mb-4 text-center">
        <h2 class="title-card-service">Servicios incluidos</h2>
    </div>
    <div class="row m-0">
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-evaluacion.svg" alt="Icono Reporte de posicionamiento">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Reporte de posicionamiento</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-estrategia.svg" alt="Icono estrategias posicionamiento web">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Estrategia de posicionamiento web</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-analisis-competencia.svg" alt="Icono analisis">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Análisis de posicionamiento digital</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-gestion-anuncio.svg" alt="Icono gestion de anuncio">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Planeación de palabras clave</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-web.svg" alt="Icono de wen">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Optimización de página web</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-redaccion.svg" alt="Icono de servicio de redaccion">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Redacción de artículos blog</h3></div>
            </div>
        </div>
    </div>
</div>

<div class="content-page mt-5">
    <div class="d-flex-responsive">
        <div class="col-12 col-md-6 padd-r-age">
            <h2 class="mb-4 title-resumen-service">Especialistas en SEO</h2>
            <p>
                Somos una agencia SEO especializada en posicionamiento web en Cancún, Quintana Roo. Nuestro equipo de expertos en SEO está comprometido en asesorarte para desarrollar una estrategia efectiva que te ayude a conseguir más visitas, atraer nuevos clientes y aumentar la rentabilidad de tu empresa en Internet.
            </p>
            <p>
                En Huella Digital también ofrecemos servicios de consultoría para evaluar el estatus digital de tu empresa, campañas de publicidad en Google Adwords, desarrollo de páginas web y tiendas en línea, así como administración de redes sociales y marketing digital. <span class="text-c-pink">Nuestros servicios aseguran el mejor resultado por cada peso invertido.</span>
            </p>
            <p class="text-secondary">
                Mejora tus ventas en línea en Cancún con nosotros.
            </p>
            <p>
                ¿Sabías que el 35% de las personas solo hacen clic en el primer resultado de Google? ¿Y que el 75% ni siquiera pasan a la segunda página?
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

<x-servicios-marketing-digital className="mb-80" service="web"/>

@endsection

