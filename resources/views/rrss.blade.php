@extends('layouts.layout')
@section('content')
<div class="cont-sli-head">
    <div class="content-slider flex-banner">
        <div class="flex head-sli-item banner-mob-rrss">
            <div class="col h1-absolute">
                <p class="line-vertical-yellow line-vertical-white pl-2 FivoSans-Regular">Sacamos el máximo provecho <br> de tus medios digitales</p>
                <h1 class="title-rrss fs-banner FivoSans-Heavy">AGENCIA DE REDES <br> SOCIALES EN CANCÚN</h1>
            </div>
            <img class="slider-header col display-max" src="/assets/desk/seccion-rrss/slider/frame.svg" alt="Slider principal">
        </div>
        <div class="flex slide-home-two banner-rrss" style="display:none;">
            <div class="h1-absolute-m text-center-desk">
                <p class="text-white fs-medium-1 FivoSans-Bold">EL 32% DE LAS EMPRESAS MEXICANAS</p>
                <p class="text-white size-text"><span class="FivoSans-Light">aseguran que los elementos visuales <br>son la forma de contenido </span><br><span class="FivoSans-Medium">más importante dentro de su<br> estrategia de comercialización.</span></p>
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
        <img class="img-section" src="/assets/desk/seccion-rrss/imagenes/imagen-seccion-rrss.png" alt="Imagen seccion redes sociales">
    </div>
    <div class="col-xs-12 col-sm-12 col-m-6 col-xl-6 col-lg-6 padding-top-50 over-hide">
        <div id="item-s">
            <h2 class="line-yellow pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">GESTIÓN DE REDES SOCIALES</h2>
            <p class="FivoSans-Regular text-mobile text-justify">
                Durante la administración de Redes Sociales realizadas en Huella Digital, participan expertos creativos en el 
                desarrollo de contenido que combinan lazos emocionales y habilidosas tácticas de venta digital, de esta manera 
                aseguramos que tu inversión en social media tenga un potencial retorno de inversión.
            </p>
            <p class="color-yellow font-weight-bold FivoSans-Bold text-center-mobile">En internet el contenido es el rey y generar conversación es la reina</p>
            <p class="FivoSans-Regular text-mobile text-justify">
                El futuro digital es hoy y lo estamos creando. Vivimos en un mundo que ha empezado a girar alrededor de las redes sociales, 
                en la gestión de la información y en el intercambio sin fronteras gracias a Internet. Las redes sociales son entonces, el 
                camino ideal para que tu empresa sea reconocida y así mismo, aumente sus ventas.
            </p>
        </div>
        <div style="display:none;" id="item-s-two">
            <h2 class="line-yellow pl-2 fs-medium-1 font-weight-bold FivoSans-Bold text-center-mobile">GESTIÓN DE REDES SOCIALES</h2>            
            <p class="FivoSans-Regular text-mobile text-justify">
                En Huella Digital somos fieles creyentes que toda estrategia de mercadotecnia viene acompañada de una sólida presencia en 
                medios sociales, Facebook, Instagram, Titok, etc, por eso, como parte de nuestro servicio de administración de redes 
                sociales en Cancún, Quintana Roo le creamos a tu negocio el perfil social adecuado y alineado a su imagen corporativa, 
                definiremos tu buyer persona, es decir, quién es tu cliente ideal para comprar los ejes de comunicación y de contenido 
                creativo y relevante para difundir en los medios digitales seleccionados con el objetivo de atraer nuevos prospectos y 
                generarte mayores ingresos medibles en ventas.
                <br><br>
                No solo aportamos estrategias creativas y datos analíticos, también contamos 
                con servicios complementarios de contenido basados en material gráfico y de video para conseguir una correcta viralización 
                de tus objetivos empresariales.
            </p>
            <p class="color-yellow FivoSans-Bold fs-medium-3 text-center">
                Hacemos que más personas conozcan tu marca.
            </p>
        </div>
        <div class="div-bullets">
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-1" checked><label for="bullet-1"></label>
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-2"><label for="bullet-2"></label>
        </div>  
    </div>
</div>
<div class="section-gray">
    <h2 class="line-yellow line-yellow-mob pl-2 fs-medium-1 font-weight-bold mg-subtitle FivoSans-Bold">SERVICIOS INCLUIDOS</h2>
    <div class="wave display-max">
        <div class="row">
            <div class="circle-wave-yellow postion-one">
                <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/iman-icon.svg" alt="Icono de iman">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Estrategias <br class="display-max"> Inbound Marketing
                    </div>
                </div>
            </div>
            <div class="circle-wave-yellow postion-two">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Desarrollo de contenido estratégico
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/mano-icon.svg" alt="Icono de mano">
            </div>
            <div class="circle-wave-yellow postion-three">
                <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/ads-icon.svg" alt="Icono de ads">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Gestión de <br class="display-max"> campañas de publicidad
                    </div>
                </div>
            </div>
            <div class="circle-wave-yellow postion-four">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Servicio de <br> Community Manager
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/pantalla-icon.svg" alt="Icono de pantalla">
            </div>
            <div class="circle-wave-yellow postion-five">
                <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/lap-icon.svg" alt="Icono de laptop">
                <div class="ballon-text ballon-item">
                    <div class="text-center mar-5-15 FivoSans-Bold">
                        Atención a <br class="display-max"> mensajes
                    </div>
                </div>
            </div>
            <div class="circle-wave-yellow postion-six">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Reporte de <br class="display-max"> resultados
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/flecha-icon.svg" alt="Icono de flecha">
            </div>
        </div>
    </div>
    <!-- SECTION SERVICES MOBILE -->
    <div class="display-min">
        <div class="d-flex-row display-min mt-4 ">
            <div class="col-6 justify-content-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/iman-icon.svg" alt="Icono de iman">
                </div>
                <div class="ballon-text-mob-yellow padd-top-35">
                        <div class="text-center ballon-item FivoSans-Bold">
                            Estrategias Inbound Marketing
                        </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/mano-icon.svg" alt="Icono de mano">
                </div>
                <div class="ballon-text-mob-yellow padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Desarrollo de <br> contenido estratégico
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">        
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/ads-icon.svg" alt="Icono de ads">
                </div>
                <div class="ballon-text-mob-yellow padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Gestión de campañas <br> de publicidad
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/pantalla-icon.svg" alt="Icono de pantalla">
                </div>
                <div class="ballon-text-mob-yellow padd-top-35">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Servicio de <br> Community Manager
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/lap-icon.svg" alt="Icono de laptop">
                </div>
                <div class="ballon-text-mob-yellow padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Atención a mensajes
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-rrss/servicios/flecha-icon.svg" alt="Icono de flecha">
                </div>
                <div class="ballon-text-mob-yellow padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Reporte de resultados
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