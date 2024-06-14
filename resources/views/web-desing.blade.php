@extends('layouts.layout')
@section('content')
<div class="cont-sli-head">
    <div class="content-slider flex-banner">
        <div class="flex head-sli-item banner-mob-web">
            <div class="col h1-absolute">
                <p class="line-vertical-blue line-vertical-white pl-2 FivoSans-Regular">Páginas a las medida de tus<br>objetivos comerciales</p>
                <h1 class="title-web-desing fs-banner FivoSans-Medium">DISEÑO DE PÁGINAS <br> WEB EN CANCÚN</h1>
            </div>
            <img class="slider-header col display-max" src="/assets/desk/seccion-web/slider/frame.svg" alt="Slider principal">
        </div>
        <div class="flex slide-home-two banner-web" style="display:none;">
            <div class="h1-absolute-m text-center-desk">
                <p class="text-white fs-medium-1 FivoSans-Bold">48% de las personas mencionaron que</p>
                <p class="text-white size-text FivoSans-Oblique">el diseño es el factor número 1</p>
                <p class="text-white size-text FivoSans-Regular">para determinar la credibilidad <br> de una empresa.</p>
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
        <img class="img-section" src="/assets/desk/seccion-web/imagenes/imagen-web.png" alt="Imagen seccion desarrollo web">
    </div>
    <div class="col-xs-12 col-sm-12 col-m-6 col-xl-6 col-lg-6 padding-top-50 over-hide">
        <div id="item-s">
            <h2 class="line-blue pl-2 fs-medium-1 text-center-mobile FivoSans-Bold">DESARROLLO WEB PROFESIONAL</h2>
            <p class="FivoSans-Regular text-mobile text-justify">
                Hacemos diseño de páginas web en Cancún para empresas de todos los tamaños que buscan un proveedor serio y de 
                confianza, dedicados al desarrollo de sitios web modernos, atractivos y orientados según tus necesidades 
                comerciales, desde páginas informativas en formato One Page, páginas web standard hasta sitios web más 
                robustos para comercio electrónico con pasarelas de pago.
                <br><br>
                En Huella Digital contamos con un equipo de desarrolladores y diseñadores web que han perfeccionado nuestro 
                proceso de diseño de páginas web profesionales, brindando plataformas de buena calidad y de alta funcionalidad.
            </p>
            <p class="color-blue FivoSans-Bold text-center-mobile">Invierte en calidad para que tu plataforma web obtenga los resultados esperados.</p>
            <p class="FivoSans-Regular text-mobile text-justify">
                Para desarrollar un proyecto web de calidad y rentable, planificamos las diferentes tareas necesarias a llevar a 
                cabo para alcanzar tus objetivos comerciales, trabajaremos a detalle la propuesta de valor que tu servicio o 
                producto ofrece en un formato visible en computadoras de escritorio como en equipos móviles, celulares y tabletas.
            </p>
        </div>
        <div style="display:none;" id="item-s-two">
            <h2 class="line-blue pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">DESARROLLO WEB PROFESIONAL</h2>            
            <p class="color-blue FivoSans-Bold">
                ¿Es importante una página web?
            </p>
            <p class="FivoSans-Regular text-mobile text-justify">
                ¿Es importante una página web? Internet es la herramienta con la que los usuarios buscan información respecto a un 
                producto o servicio que satisfaga sus necesidades y tu página web será uno de los filtros por el que pasarán para 
                tomar una decisión final, por lo tanto el diseño de tu página web, de la mano de un buen desarrollo responsivo, 
                es esencial para triunfar en esta nueva era digital.
                <br><br>
                Como agencia de diseño de páginas web en Cancún, Quintana Roo desarrollamos sitios web escalables, seguros para realizar 
                transacciones y optimizados para implementar una buena estrategia de posicionamiento web orgánico. 
            </p>
        </div>
        <div class="div-bullets">
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-1" checked><label for="bullet-1"></label>
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-2"><label for="bullet-2"></label>
        </div>  
    </div>
</div>
<div class="section-gray">
    <h2 class="line-blue pl-2 fs-medium-1 font-weight-bold mg-subtitle FivoSans-Bold">SERVICIOS INCLUIDOS</h2>
    <div class="wave display-max">
        <div class="row">
            <div class="circle-wave-blue postion-one">
                <img class="icon-services" src="/assets/desk/seccion-web/servicios/foco.svg" alt="Icono de foco">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Briefing <br class="display-max"> creativo
                    </div>
                </div>
            </div>
            <div class="circle-wave-blue postion-two">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Estudio de <br class="display-max"> experiencia de <br class="display-max"> usuario
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-web/servicios/ux-icon.svg" alt="Icono de ux">
            </div>
            <div class="circle-wave-blue postion-three">
                <img class="icon-services" src="/assets/desk/seccion-web/servicios/html5-icon.svg" alt="Icono de html 5">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        WordPress <br class="display-max"> o HTML5
                    </div>
                </div>
            </div>
            <div class="circle-wave-blue postion-four">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Desarrollo de <br class="display-max"> página web
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-web/servicios/codigo-icon.svg" alt="Icono de codigo">
            </div>
            <div class="circle-wave-blue postion-five">
                <img class="icon-services" src="/assets/desk/seccion-web/servicios/cohete-icon.svg" alt="Icono de cohete">
                <div class="ballon-text ballon-item FivoSans-Bold">
                    <div class="text-center ">
                        Entrega de <br class="display-max"> proyecto
                    </div>
                </div>
            </div>
            <div class="circle-wave-blue postion-six">
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
                    <img class="icon-services" src="/assets/desk/seccion-web/servicios/foco.svg" alt="Icono de foco">
                </div>
                <div class="ballon-text-mob-blue padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Briefing creativo
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-web/servicios/ux-icon.svg" alt="Icono de ux">
                </div>
                <div class="ballon-text-mob-blue padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Estudio de <br> experiencia de usuario
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">        
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-web/servicios/html5-icon.svg" alt="Icono de html 5">
                </div>
                <div class="ballon-text-mob-blue padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        WordPress o HTML5
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-web/servicios/codigo-icon.svg" alt="Icono de codigo">
                </div>
                <div class="ballon-text-mob-blue padd-top-35">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Entrega de proyecto
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-web/servicios/cohete-icon.svg" alt="Icono de cohete">
                </div>
                <div class="ballon-text-mob-blue padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Redacción de <br> artículos blog
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