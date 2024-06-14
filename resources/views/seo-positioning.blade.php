@extends('layouts.layout')
@section('content')
<div class="cont-sli-head">
    <div class="content-slider flex-banner">
        <div class="flex head-sli-item banner-mob-seo">
            <div class="col h1-absolute">
                <p class="line-vertical-cian line-vertical-white pl-2 FivoSans-Regular">La estrategia digital perfecta para aumentar tu alcance y lograr que más prospectos te encuentren</p>
                <h1 class="title-seo fs-banner FivoSans-Heavy">AGENCIA SEO - POSICIONAMIENTO WEB EN CANCÚN</h1>
            </div>
            <img class="slider-header col display-max" src="/assets/desk/seccion-seo/slider/frame.svg" alt="Slider principal">
        </div>
        <div class="flex slide-home-two banner-seo" style="display:none;">
            <div class="h1-absolute-m text-center-desk">
                <p class="text-white size-text FivoSans-Bold mt-5">Los 5 primeros resultados en Google</p>
                <p class="text-white fs-medium-1 FivoSans-Light">se llevan el 60% de los clicks</p>
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
        <img class="img-section" src="/assets/desk/seccion-seo/imagenes/imagen-seo.png" alt="Imagen seccion seo">
    </div>
    <div class="col-xs-12 col-sm-12 col-m-6 col-xl-6 col-lg-6 padding-top-50 over-hide">
        <div id="item-s">
            <h2 class="line-cian pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">ESPECIALISTAS EN SEO</h2>
            <p class="FivoSans-Regular text-mobile text-justify">
                Somos una agencia SEO, especialista en posicionamiento web en Cancún, Quintana Roo. Si quieres que tus 
                prospectos y clientes te encuentren en Internet, ponemos a tu disposición a nuestro equipo de expertos 
                en SEO comprometidos a asesorarte para desarrollar una efectiva estrategia de posicionamiento web con 
                el objetivo de conseguirte más visitas, atraer nuevos clientes y volver más rentable tu empresa.
                <br><br>
                En Huella Digital también contamos con servicio de consultoría para decirte cuál es el estatus de tu 
                empresa a nivel digital, ofrecemos campañas de publicidad en Google Adwords, desarrollamos páginas web 
                y de comercio electrónico para que puedas tener tu tienda en línea, somos expertos en Administración 
                de Redes Sociales y Marketing Digital, que aseguran el mayor resultado de cada peso invertido.
            </p>
            <p class="color-cian font-weight-bold FivoSans-Bold text-center-mobile"> Mejora tu ventas en línea en Cancún</p>
            <p class="FivoSans-Regular text-mobile text-justify">
                ¿Sabías qué el 35% de las personas sólo hacen clic en el primer resultado de Google?
                <br><br>
                ¿Y que el 75% de las personas ni siquiera pasan a la segunda página?
            </p>
        </div>
        <div style="display:none;" id="item-s-two">
            <h2 class="line-cian pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">ESPECIALISTAS EN SEO</h2>            
            <p class="FivoSans-Regular text-mobile text-justify">
                En pocas palabras, si tu sitio web no aparece en el top 10 para las palabras clave más usadas 
                de tu sector, clientes potenciales acabarán visitando y comprando en la página de tu competencia. 
                Si necesitas mejorar tu posicionamiento web en los motores de búsqueda, queremos ser la solución 
                a tus problemas; somos tu agencia SEO en Cancún.
            </p>
            <p class="color-cian font-weight-bold FivoSans-Bold text-center-mobile">
                ¿QUÉ ES UNA AGENCIA SEO?
            </p>
            <p class="FivoSans-Regular text-mobile text-justify">
                Una agencia SEO es aquella que a través de un conjunto de estrategias externas e internas, y 
                comprendiendo los diversos algoritmos que Google constantemente brinda, consigue que tu página 
                web o tienda en línea obtenga un dominio de autoridad progresivamente alto de esta manera tu 
                empresa además de responder a los criterios de búsqueda de un potencial cliente aparecerá entre 
                los primeros lugares de la primera página en Google o Google maps.
            </P>
        </div>
        <div class="div-bullets">
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-1" checked><label for="bullet-1"></label>
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-2"><label for="bullet-2"></label>
        </div>  
    </div>
</div>
<div class="section-gray">
    <h2 class="line-cian line-cian-mob pl-2 fs-medium-1 mg-subtitle FivoSans-Bold">SERVICIOS INCLUIDOS</h2>
    <div class="wave display-max">
        <div class="row">
            <div class="circle-wave-cian postion-one">
                <img class="icon-services" src="/assets/desk/seccion-seo/servicios/rompecabezas-icon.svg" alt="Icono de rompecabezas">
                <div class="ballon-text">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Estrategia de posicionamiento <br class="display-max"> web
                    </div>
                </div>
            </div>
            <div class="circle-wave-cian postion-two">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Análisis de posicionamiento <br> digital
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-seo/servicios/grafica-icon.svg" alt="Icono de grafica">
            </div>
            <div class="circle-wave-cian postion-three">
                <img class="icon-services" src="/assets/desk/seccion-seo/servicios/ads-icon.svg" alt="Icono de ads">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Planeación de <br> palabras clave
                    </div>
                </div>
            </div>
            <div class="circle-wave-cian postion-four">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Optimización de <br> página web
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-seo/servicios/dinero-icon.svg" alt="Icono de dinero">
            </div>
            <div class="circle-wave-cian postion-five">
                <img class="icon-services" src="/assets/desk/seccion-seo/servicios/like-icon.svg" alt="Icono de like">
                <div class="ballon-text ballon-item">
                    <div class="text-center mar-5-15 FivoSans-Bold">
                        Redacción de <br> artículos blog
                    </div>
                </div>
            </div>
            <div class="circle-wave-cian postion-six">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Reporte de posicionamiento
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-seo/servicios/flecha-icon.svg" alt="Icono de flecha">
            </div>
        </div>
    </div>
    <!-- SECTION SERVICES MOBILE -->
    <div class="display-min">
        <div class="d-flex-row display-min mt-4 ">
            <div class="col-6 justify-content-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-seo/servicios/rompecabezas-icon.svg" alt="Icono de rompecabezas">
                </div>
                <div class="ballon-text-mob-cian padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                    Estrategia de posicionamiento web
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-seo/servicios/grafica-icon.svg" alt="Icono de grafica">
                </div>
                <div class="ballon-text-mob-cian padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Análisis de posicionamiento <br> digital
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">        
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-seo/servicios/ads-icon.svg" alt="Icono de ads">
                </div>
                <div class="ballon-text-mob-cian padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Planeación de <br> palabras clave
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-seo/servicios/dinero-icon.svg" alt="Icono de dinero">
                </div>
                <div class="ballon-text-mob-cian padd-top-35">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Optimización de <br> página web
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-seo/servicios/like-icon.svg" alt="Icono de like">
                </div>
                <div class="ballon-text-mob-cian padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Redacción de <br> artículos blog
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-seo/servicios/flecha-icon.svg" alt="Icono de flecha">
                </div>
                <div class="ballon-text-mob-cian padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Reporte de posicionamiento
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

