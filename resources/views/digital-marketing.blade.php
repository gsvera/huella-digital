@extends('layouts.layout-huella')
@section('content')
<div class="content-page d-flex-responsive p-0" style="align-items: center">
    <div class="col-12 col-md-7 mb-5 only-pr-3">
        <h1 class="slogan slogan-size">AGENCIA DE MARKETING DIGITAL EN CANCÚN</h1>
        <p class="title title-size">Impulsa tu presencia online con nuestro expertise en Marketing Digital</p>
        <p style="margin-bottom: 25px;">Descubre cómo nuestra agencia de marketing digital puede llevar tu negocio al siguiente nivel en línea.</p>        
        <a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink">Obtener asesoría gratuita</a>
    </div>
    <div class="col-12 col-md-5 mb-5 p-0 justify-end d-flex">
        <img class="img-responsive-service-banner" src="/assets/img/servicio/servicio-banner-marketing-digital.svg" alt="Servicio de marketing digital">
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
                    <img class="icon-service" src="/assets/icon/services/icon-service-evaluacion.svg" alt="Icono Reporte de evaluacion">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Reporte de evaluación</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-servicec-inbound.svg" alt="Icono estrategias marketing">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Estrategias Inbound Marketing</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-produccion.svg" alt="Icono produccion de contenido">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Producción de contenido creativo</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-posicionamiento.svg" alt="Icono posicionamiento">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Posicionamiento en internet</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-park-outline_check-one.svg" alt="Icono de publicidad">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Publicidad en Google y redes sociales</h3></div>
            </div>
        </div>
        <div class="col-6 col-md-4 p-0 mb-card-service">
            <div class="card-service-include">
                <div>
                    <img class="icon-service" src="/assets/icon/services/icon-service-analitica.svg" alt="Icono de analitica">
                </div>
                <div class="font-weight-bold ml-2"><h3 class="text-service">Analítica web</h3></div>
            </div>
        </div>
    </div>
</div>

<div class="content-page mt-5">
    <div class="d-flex-responsive">
        <div class="col-12 col-md-6 padd-r-age">
            <h2 class="mb-4 title-resumen-service">Agencia de crecimiento digital</h2>
            <p class="text-c-pink">
                Vende más y posiciona tu marca
            </p>
            <p>
                El mundo del Marketing Digital es dinámico y cambiante, por lo que es crucial que tu empresa se mantenga actualizada sobre las tendencias, tecnologías y tácticas en constante evolución de tu sector. No te quedes rezagado mientras tu competencia avanza.
            </p>
            <p class="text-secondary">
                Permítenos conectar tus servicios y productos con tu audiencia ideal.
            </p>
            <p>
                En Huella Digital, implementamos la metodología Inbound Marketing para atraer clientes calificados en el momento justo. Utilizamos estrategias dinámicas y creativas para exponer tu negocio a tu audiencia. Fortalecemos la relación marca-consumidor a través de Marketing de Contenido, fomentando conversiones y manteniendo a los clientes a largo plazo. 
            </p>
            <p>
                Todas nuestras estrategias digitales están alineadas con los objetivos de tu empresa.
            </p>

        </div>
        <div class="col-12 col-md-6 aling-start-end padd-l-age">
            <p>
                Utilizamos la experiencia y conocimiento de nuestros profesionales en Mercadotecnia Digital y Redes Sociales en Quintana Roo para desarrollar un plan de acción que defina la correcta comunicación de tu marca en Internet. Seremos tu departamento consultor de Mercadotecnia Digital, brindándote consultoría de marca, capacitación de personal y mejora de procesos internos para lograr el mejor retorno de inversión.
            </p>
            <img class="img-responsive" src="/assets/img/servicio-marketing/crecimiento.svg" alt="Personas">
        </div>
    </div>
</div>

<div class="content-page d-flex justify-center">
    <img class="img-responsive display-min my-banner" src="/assets/img/servicio/banner-garantia-mobile.svg" alt="Banner de garantia huella digital">
    <img class="img-responsive display-max my-banner" src="/assets/img/servicio/banner-garantia.svg" alt="Banner de garantia huella digital">
</div>

<x-servicios-marketing-digital className="mb-80" service="social"/>

@endsection


