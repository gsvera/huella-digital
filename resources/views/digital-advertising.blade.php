@extends('layouts.layout')
@section('content')
<div class="cont-sli-head">
    <div class="content-slider flex-banner">
        <div class="flex head-sli-item banner-mob-advertising">
            <div class="col h1-absolute">
                <p class="line-vertical-purple line-vertical-white pl-2 FivoSans-Regular">La estrategia perfecta para potenciar <br> tu alcance</p>
                <h1 class="title-advertising fs-banner FivoSans-Heavy">AGENCIA DE PUBLICIDAD DIGITAL EN CANCÚN</h1>
            </div>
            <img class="slider-header col display-max" src="/assets/desk/seccion-publicidad/slider/frame.svg" alt="Slider principal">
        </div>
        <div class="flex slide-home-two banner-publicidad" style="display:none;">
            <div class="h1-absolute-m text-center-desk">
                <p class="text-white fs-medium-1 FivoSans-Bold">El 60% de los consumidores hace clic</p>
                <p class="text-white size-text FivoSans-Medium">en anuncios para dispositivos móviles</p>
                <p class="text-white size-text FivoSans-Medium">de forma semanal.</p>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <input class="bullet" type="radio" name="bullet-slider" id="bullet-slider1" checked><label for="bullet-slider1"></label>
    <input class="bullet" type="radio" name="bullet-slider" id="bullet-slider2"><label for="bullet-slider2"></label>
</div>
<div class="section d-flex-row flex-reverse">
    <div class="col-xs-12 col-sm-12 col-m-6 col-xl-6 col-lg-6 text-center-mobile">
        <img class="img-section" src="/assets/desk/seccion-publicidad/imagenes/imagen-pub.png" alt="Imagen seccion publicidad">
    </div>
    <div class="col-xs-12 col-sm-12 col-m-6 col-xl-6 col-lg-6 padding-top-50 over-hide">
        <div id="item-s">
            <h2 class="line-purple pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">PUBLICIDAD EN REDES SOCIALES Y SEM</h2>
            <p class="FivoSans-Regular text-mobile text-justify">
                Una agencia de publicidad digital en Cancún, Quintana Roo debe ofrecerte visibilidad inmediata y resultados a corto plazo. 
                Gracias a las diferentes posibilidades de segmentación, las campañas publicitarias en Internet te aportan tráfico cualificado, 
                además de poder ampliar tus anuncios fuera del mercado local. 
                <br><br>
                En Huella Digital te aseguramos que, como anunciante, solo pagarás cuando un cliente potencial haga clic en tu anuncio o realice 
                alguna acción relevante para tu empresa, asegurando el mayor resultado posible por cada peso invertido.
            </p>
            <p class="color-purple font-weight-bold FivoSans-Bold text-center-mobile">
                Garantizamos cada inversión
            </p>
            <p class="FivoSans-Regular text-mobile text-justify">
                ¿Tienes claro qué podemos hacer por ti como agencia SEM en Cancún?. Contamos con más de 5 años asesorando proyectos digitales y 
                campañas de publicidad online. Hemos trabajado distintos territorios del Marketing Digital para todo tipo de sectores y clientes 
                ajustándonos a sus necesidades. En Huella Digital creamos y administramos tus campañas de publicidad para conseguir su máxima 
                rentabilidad.
            </p>
            <p class="color-purple font-weight-bold text-center fs-medium-3 FivoSans-Bold">
                Aprovecha la oportunidad de generar ventas con un bajo costo de adquisición
            </p>
        </div>
        <div style="display:none;" id="item-s-two">
        <h2 class="line-purple pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">PUBLICIDAD EN REDES SOCIALES Y SEM</h2>
            <p class="FivoSans-Regular text-mobile text-justify">
                Te ayudaremos en todo el proceso de planificación de tus campañas digitales: desde la selección performance del canal 
                adecuado, fijar objetivos, desarrollar presupuestos a invertir, redactar los mensajes más efectivos, investigar palabras 
                clave, identificar el público correcto, dar seguimiento a contratiempos y optimizar campañas en tiempo real. 
                <br><br>
                En Huella Digital te aseguramos que, como anunciante, solo pagarás cuando un cliente potencial haga clic en tu anuncio o 
                realice alguna acción relevante para tu empresa, asegurando el mayor resultado posible por cada peso invertido.
            </p>
            <p class="color-purple font-weight-bold FivoSans-Bold text-center-mobile">Toda tu publicidad en internet va alineada a cumplir con los objetivos de tu empresa</p>
            <p class="FivoSans-Regular text-mobile text-justify">
                Las campañas publicitarias en Redes Sociales como <strong class="FivoSans-Bold">Facebook, Twitter, Instagram, Linkedin, Pinterest, TikTok, Youtube y Google</strong> 
                son realmente efectivas para exponer tus productos y servicios a nichos de clientes potenciales, además contar con anuncios en social media te 
                permitirte aumentar la presencia de tu marca y mejorar tu posicionamiento en Internet.
            </p>
        </div>
        <div class="div-bullets">
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-1" checked><label for="bullet-1"></label>
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-2"><label for="bullet-2"></label>
        </div>  
    </div>
</div>
<div class="section-gray">
    <h2 class="line-purple line-purple-mob pl-2 fs-medium-1 mg-subtitle FivoSans-Bold">SERVICIOS INCLUIDOS</h2>
    <div class="wave display-max">
        <div class="row">
            <div class="circle-wave-purple postion-one">
                <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/rompecabezas-icon.svg" alt="Icono de rompecabezas">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Estrategia de <br class="display-max"> desarollo publicitario
                    </div>
                </div>
            </div>
            <div class="circle-wave-purple postion-two">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Análisis de competencia digital
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/grafica-icon.svg" alt="Icono de grafica">
            </div>
            <div class="circle-wave-purple postion-three">
                <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/ads-icon.svg" alt="Icono de ads">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Gestión de <br class="display-max"> anuncios en internet
                    </div>
                </div>
            </div>
            <div class="circle-wave-purple postion-four">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Desarrollo de presupuestos
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/dinero-icon.svg" alt="Icono de dinero">
            </div>
            <div class="circle-wave-purple postion-five">
                <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/like-icon.svg" alt="Icono de like">
                <div class="ballon-text ballon-item">
                    <div class="text-center mar-5-15 FivoSans-Bold">
                        Optimización de <br> campañas
                    </div>
                </div>
            </div>
            <div class="circle-wave-purple postion-six">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Informe de <br class="display-max"> resultados
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/flecha-icon.svg" alt="Icono de flecha">
            </div>
        </div>
    </div>
    <!-- SECTION SERVICES MOBILE -->
    <div class="display-min">
        <div class="d-flex-row display-min mt-4 ">
            <div class="col-6 justify-content-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/rompecabezas-icon.svg" alt="Icono de rompecabezas">
                </div>
                <div class="ballon-text-mob-purple padd-top-35">
                        <div class="text-center ballon-item FivoSans-Bold">
                            Estrategia de <br> desarollo publicitario
                        </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/grafica-icon.svg" alt="Icono de grafica">
                </div>
                <div class="ballon-text-mob-purple padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Análisis de <br> competencia digital
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">        
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/ads-icon.svg" alt="Icono de ads">
                </div>
                <div class="ballon-text-mob-purple padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Gestión de anuncios <br> en internet
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/dinero-icon.svg" alt="Icono de dinero">
                </div>
                <div class="ballon-text-mob-purple padd-top-35">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Desarrollo de presupuestos
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/like-icon.svg" alt="Icono de like">
                </div>
                <div class="ballon-text-mob-purple padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Optimización de <br> campañas
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-publicidad/servicios/flecha-icon.svg" alt="Icono de flecha">
                </div>
                <div class="ballon-text-mob-purple padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Informe de resultados
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END SECTION SERVICES MOBILE -->
</div>
<div class="text-center">
    <a href="{{url('/garantia')}}"><img class="stamp-pink" src="/assets/desk/general/sello-garantia.png" alt="Sello de garantia"></a>
</div>
@endsection