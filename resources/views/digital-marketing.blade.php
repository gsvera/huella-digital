@extends('layouts.layout')
@section('content')
<div class="cont-sli-head">
    <div class="content-slider flex-banner">
        <div class="flex head-sli-item banner-mob-mkt">
            <div class="col h1-absolute">
                <p class="line-vertical-pink line-vertical-white pl-2 FivoSans-Regular">Impulsamos el crecimiento digital <br> de nuestros clientes</p>
                <h1 class="title-mkt fs-banner FivoSans-Heavy">AGENCIA DE MARKETING DIGITAL EN CANCÚN</h1>
            </div>
            <img class="slider-header col display-max" src="/assets/desk/seccion-mkt/slider/frame.svg" alt="Slider principal">
        </div>
        <div class="flex slide-home-two banner-mkt" style="display:none;">
            <div class="h1-absolute-m text-center-desk">
                <p class="text-white size-text"><span class="FivoSans-Light-Oblique">Cuatro de cada diez representantes</span><br><span class="FivoSans-Light">cerraron recientemente entre dos y cinco negocios <br>gracias a la implementación de una</span></p>
                <p class="text-white fs-medium-1 FivoSans-Bold">ESTRATEGIA DE MARKETING DIGITAL</p>
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
        <img class="img-section" src="/assets/desk/seccion-mkt/imagenes/imagen-mkt.png" alt="Imagen seccion marketing digital">
    </div>
    <div class="col-xs-12 col-sm-12 col-m-6 col-xl-6 col-lg-6 padding-top-50 over-hide">
        <div id="item-s">
            <h2 class="line-rose pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">AGENCIA DE CRECIMIENTO DIGITAL</h2>
            <p class="color-rose FivoSans-Bold">Vende más y posiciona tu marca</p>
            <p class="FivoSans-Regular text-mobile text-justify">
                Es un hecho que el mundo del Marketing Digital es 
                dinámico y cambiante. Las tendencias, las tecnologías y las tácticas nunca son 
                definitivas. Por eso es importante que tu empresa tenga una comunicación activa y 
                actualizada sobre los nuevos desarrollos de tu sector. No querrás quedarte atrás 
                mientras tu competencia se mantiene a la vanguardia.
            </p>
            <p class="color-rose text-center FivoSans-Bold fs-medium-3 ">Permítenos conectar tus servicios y productos con tu audiencia ideal</p>
        </div>
        <div style="display:none;" id="item-s-two">
            <h2 class="line-rose pl-2 fs-medium-1 FivoSans-Bold text-center-mobile">AGENCIA DE CRECIMIENTO DIGITAL</h2>            
            <p class="FivoSans-Regular text-mobile text-justify">
            En Huella Digital te ayudamos a implementar la metodología Inbound Marketing para dirigirte clientes 
            calificados, definiremos una manera dinámica y creativa de exponer tu negocio justo en el momento que 
            estén buscando lo que vendes o sin siquiera saber que lo necesitaban, después de atraer a los prospectos, 
            fortaleceremos la relación marca-consumidor a través de Marketing de Contenido para que una vez que tenga 
            el suficiente entendimiento de tu empresa realicen una conversión y, en su caso, mantenerlos a largo plazo. 
            </p>
            <p class="color-rose font-weight-bold FivoSans-Bold text-center-mobile">
                Todas nuestras estrategias digitales van alineadas a cumplir con los objetivos de tu empresa. 
            </p>
            <p class="FivoSans-Regular text-mobile text-justify">
            Utilizamos a tu favor toda la experiencia y conocimiento de nuestros profesionales que, como agencia de 
            Mercadotecnia Digital y Redes Sociales en Quintana Roo, tenemos para desarrollar un plan de acción que 
            defina la correcta comunicación de tu marca en Internet. Seremos en todo momento tu departamento consultor 
            de Mercadotecnia Digital, nuestro acompañamiento te brinda consultoría de marca, capacitación de tu personal 
            y mejora de procesos internos para lograr el mejor retorno de tu inversión.
            </P>
        </div>
        <div class="div-bullets">
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-1" checked><label for="bullet-1"></label>
            <input class="bullet" type="radio" name="bullet-slider-dos" id="bullet-2"><label for="bullet-2"></label>
        </div>  
    </div>
</div>
<div class="section-gray">
    <h2 class="line-rose line-rose-mob pl-2 fs-medium-1 font-weight-bold mg-subtitle FivoSans-Bold">SERVICIOS INCLUIDOS</h2>
    <div class="wave display-max">
        <div class="d-flex-row">
            <div class="circle-wave postion-one">
                <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/iman-icon.svg" alt="Icono de iman">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Estrategias <br class="display-max"> Inbound Marketing
                    </div>
                </div>
            </div>
            <div class="circle-wave postion-two">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Producción de contenido creativo
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/foco-icon.svg" alt="Icono de foco">
            </div>
            <div class="circle-wave postion-three">
                <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/estrella-icon.svg" alt="Icono de estrella">
                <div class="ballon-text padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Posicionamiento <br class="display-max"> en internet
                    </div>
                </div>
            </div>
            <div class="circle-wave postion-four">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Publicidad en Google <br> y Redes Sociales
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/megafono-icon.svg" alt="Icono de megafono">
            </div>
            <div class="circle-wave postion-five">
                <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/lupa-icon.svg" alt="Icono de lupa">
                <div class="ballon-text ballon-item">
                    <div class="text-center mar-5-15 FivoSans-Bold">
                        Analítica web
                    </div>
                </div>
            </div>
            <div class="circle-wave postion-six">
                <div class="ballon-text-invert">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Reporte de <br class="display-max"> evolución
                    </div>
                </div>
                <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/flecha-icon.svg" alt="Icono de flecha">
            </div>
        </div>
    </div>
    <!-- SECTION SERVICES MOBILE -->
    <div class="display-min">
        <div class="d-flex-row display-min mt-4 ">
            <div class="col-6 justify-content-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/iman-icon.svg" alt="Icono de iman">
                </div>
                <div class="ballon-text-mob-rose padd-top-35">
                        <div class="text-center ballon-item FivoSans-Bold">
                            Estrategias Inbound Marketing
                        </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/foco-icon.svg" alt="Icono de foco">
                </div>
                <div class="ballon-text-mob-rose padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Producción de <br> contenido creativo
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">        
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/estrella-icon.svg" alt="Icono de estrella">
                </div>
                <div class="ballon-text-mob-rose padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Posicionamiento en internet
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/megafono-icon.svg" alt="Icono de megafono">
                </div>
                <div class="ballon-text-mob-rose padd-top-35">
                    <div class="text-center ballon-item padd-top-5 FivoSans-Bold">
                        Publicidad en Google <br> y Redes Sociales
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/lupa-icon.svg" alt="Icono de lupa">
                </div>
                <div class="ballon-text-mob-rose padd-top-35">
                    <div class="text-center ballon-item FivoSans-Bold">
                        Analítica web
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="circle-wave-mob">
                    <img class="icon-services" src="/assets/desk/seccion-mkt/servicios/flecha-icon.svg" alt="Icono de flecha">
                </div>
                <div class="ballon-text-mob-rose padd-top-35">
                    <div class="text-center ballon-item padd-top-10 FivoSans-Bold">
                        Reporte de evolución
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


