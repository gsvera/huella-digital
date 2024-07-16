@extends('layouts.layout-huella')
@section('content')
<div class="content-page d-flex-responsive p-0" style="align-items: center">
    <div class="col-12 col-md-7 mb-5 only-pr-3">
        <span class="slogan">DISEÑO DE PÁGINAS WEB EN CANCÚN</span>
        <h1 class="title">Páginas a las medida de tus objetivos comerciales</h1>
        <p style="margin-bottom: 25px;">Descubre cómo nuestra agencia de marketing digital puede llevar a tu negocio al siguiente nivel en línea.</p>
        <a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink">Obtener asesoría gratuita</a>
    </div>
    <div class="col-12 col-md-5 mb-5 p-0 justify-end d-flex">
        <img class="img-responsive-service-banner" src="/assets/img/servicio/servicio-banner-paginas-web.svg" alt="Servicio de paginas web">
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
                    <img class="icon-service" src="/assets/icon/services/icon-service-evaluacion.svg" alt="Icono Reporte de posicionamiento">
                </div>
                <div class="font-weight-bold ml-2"><h5>Reporte de posicionamiento</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-brief.svg" alt="Icono servicio briefing">
                </div>
                <div class="font-weight-bold ml-2"><h5>Briefing creativo</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-experiencia-usuario.svg" alt="Icono de experiencia de usuario">
                </div>
                <div class="font-weight-bold ml-2"><h5>Estudio de experiencia de ususario</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-html.svg" alt="Icono html">
                </div>
                <div class="font-weight-bold ml-2"><h5>WordPress o HTML 5</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-desarrollo.svg" alt="Icono de wen">
                </div>
                <div class="font-weight-bold ml-2"><h5>Desarrollo de página web</h5></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-entrega.svg" alt="Icono de entrega de proyecto">
                </div>
                <div class="font-weight-bold ml-2"><h5>Entrega de proyecto</h5></div>
            </div>
        </div>
    </div>
</div>

<div class="content-page mt-5">
    <div class="d-flex-responsive">
        <div class="col-12 col-md-6 padd-r-age">
            <h4 class="mb-4">Desarrollo web profesional</h4>
            <p>
                Hacemos diseño de páginas web en Cancún para empresas de todos los tamaños que buscan un proveedor serio y confiable. Desarrollamos sitios web modernos, atractivos y orientados según tus necesidades comerciales, desde páginas informativas en formato One Page hasta sitios web robustos para comercio electrónico con pasarelas de pago.
            </p>
            <p>
                En Huella Digital, nuestro equipo de desarrolladores y diseñadores web ha perfeccionado nuestro proceso de diseño de páginas web profesionales, brindando plataformas de alta calidad y funcionalidad.
            </p>
            <p class="text-c-pink">
                Invierte en calidad para que tu plataforma web obtenga los resultados esperados.
            </p>
            <p>
                Planificamos detalladamente las tareas necesarias para desarrollar un proyecto web de calidad y rentable, asegurando una propuesta de valor visible en computadoras de escritorio, así como en dispositivos móviles como celulares y tabletas.
            </p>
        </div>
        <div class="col-12 col-md-6 aling-start-end padd-l-age">
            <p>
                ¿Es importante una página web? Internet es la herramienta clave para que los usuarios busquen información sobre productos y servicios. Tu página web será crucial en su proceso de decisión, por lo que su diseño y desarrollo responsivo son esenciales para triunfar en la era digital.
            </p>
            <p>
                Como agencia de diseño web en Cancún, Quintana Roo, creamos sitios web escalables, seguros y optimizados para mejorar tu posicionamiento web orgánico.
            </p>            
            <img class="img-responsive" src="/assets/img/servicio-marketing/crecimiento.svg" alt="Personas">
        </div>
    </div>
</div>

<div class="content-page d-flex justify-center">
    <img class="img-responsive display-min my-banner" src="/assets/img/servicio/banner-garantia-mobile.svg" alt="Banner de garantia huella digital">
    <img class="img-responsive display-max my-banner" src="/assets/img/servicio/banner-garantia.svg" alt="Banner de garantia huella digital">
</div>

<x-servicios-marketing-digital className="mb-80" service="marketing"/>

@endsection