@extends('layouts.layout2') @section('content')
<div class="slide-home">
    <div class="bg-gray">
        <div class="div-home">
            <p class="line-vertical pl-2 FivoSans-Regular p-banner">Nuestra pasión por los resultados <br> marca la diferencia</p>      
            <h1 class="FivoSans-Heavy title-banner">AGENCIA DE <br class="display-min"> MARKETING DIGITAL <br class="display-min"> EN MÉXICO</h1>
            <a href="#contact">
                <button class="btn-asesoria btn-asesoria-white FivoSans-Bold">Solicitar Asesoría Gratuita</button>
            </a>
        </div>
        <img class="img-slide-home display-max" src="/assets/desk/home/home/art-principal-agrupado.svg" alt="">
    </div>
</div>
<div class="section flex">
    <div class="display-max">
        <img class="img-2" src="/assets/desk/general/lines.png" alt="Lineas">
    </div>
    <div class="col-6 pr-5 display-max">
        <img class="img-section" src="/assets/desk/home/primera-seccion.png" alt="Imagen seccion home">
    </div>
    <div class="col-xs-12 col-sm-12 col-m-5 col-xl-5 col-lg-5 pt-5">
        <div class="display-max">
            <img class="img-1" src="/assets/desk/general/circles.png" alt="Circulos">
        </div>
        <p class="line-vertical pl-2 color-pink FivoSans-Medium p-center">ACERCA DE</p>
        <h2 class="p-center subtitle FivoSans-Bold">Huella Digital, la Agencia de Marketing Digital en México</h2>
        <p class="FivoSans-Regular" style="text-align:justify;">Huella Digital, la Agencia de Marketing Digital en México, está formada por un colectivo multidisciplinario 
        de jóvenes profesionales que cree en la transformación digital. Sabemos lo importante que es para tu empresa 
        gestionar su presencia on line, destacar y ser rentable en el mercado.</p>
        <div class="display-min justify-content-center display-mob-flex">
            <img class="back-plane" src="/assets/desk/general/avion-left.svg" alt="Icono de avión">
            <img class="img-section" src="/assets/desk/home/primera-seccion.png" alt="Imagen seccion home">
        </div>
        <p class="FivoSans-Regular"style="text-align:justify;"> En Huella Digital encontrarás el departamento externo de Mercadotecnia Digital que tu empresa necesita, 
        nuestra experiencia abarca desde la administración de redes sociales corporativas, posicionamiento en motores 
        de búsqueda para que aparezcas en los mejores lugares Google, diseño de páginas web, comercio electrónico, 
        generación de nuevos clientes, estrategias de publicidad en Internet y estrategias de Marketing Digital, todo 
        esto desarrollado con la creatividad e innovación que tu marca necesita.</p>
        <a href="#contact">
            <button class="btn-asesoria btn-asesoria-pink mt-4 FivoSans-Bold">Solicitar Asesoría Gratuita</button>
        </a>
    </div>
</div>
<div class="bck-section mg-top-100">
    <img class="plane-left display-max" src="/assets/desk/general/avion-recortado.svg" alt="Icono avion">
    <p class="ct-pink fs-medium text-center FivoSans-Medium">APROVECHA AL MÁXIMO LOS RECURSOS Y OPORTUNIDADES <br> QUE EL ESPACIO ONLINE OFRECE</p>
    <h2 class="subtitle-big text-center FivoSans-Heavy">SERVICIOS DE MARKETING DIGITAL</h2>
    <p class="paragraph FivoSans-Medium"style="text-align:justify;">Aplicamos estrategias de Inbound Marketing multi-canal, atraemos a tu prospecto mostrándole los beneficios 
    de tu producto a través de redes sociales, estrategias de SEO usando las palabras clave con las que te pueden 
    encontrar, estrategias SEM con campañas de pago en Google Adwords y diseño web que maximizan la visibilidad y 
    competitividad de tu empresa en tu industria.</p>
    <div class="d-flex-row">
        <div class="col-1 display-max">
            <img class="arrow-slide" id="arrow-left" src="assets/desk/iconos/arrow-left.svg" aria-hidden="true" alt="Flecha" style="float:right;">
        </div>
        <div class="contain-carrusel col-xs-12 col-sm-12 col-m-10 col-xl-10 col-lg-10" style="padding:0;">
            <div class="aux-carr" id="aux-carr">
                <ul id="carrusel" class="d-flex-carrusel carrusel">
                    <li class="carrusel_item carrusel-contain-item select-one">
                        <div class="mr-4 ml-4 slide-carrusel">
                            <img class="icon-section" src="assets/desk/home/iconos-section/MKT-ICON.svg" alt="">
                            <div class="pleca-morada text-center">
                                <a class="non-decoration" href="{{url('/agencia-de-marketing-digital-cancun')}}">
                                    <h3 class="text-white FivoSans-Bold title-pleca">MARKETING <br> DIGITAL</h3>
                                </a>
                                <a href="{{url('/agencia-de-marketing-digital-cancun')}}">
                                    <button class="btn-ver FivoSans-Regular">VER MÁS</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="carrusel-contain-item select-one">
                        <div class="mr-4 ml-4 slide-carrusel">
                            <img class="icon-section" src="assets/desk/home/iconos-section/REDES-ICON.svg" alt="">
                            <div class="pleca-morada text-center">
                                <a class="non-decoration" href="{{url('/agencia-de-redes-sociales-cancun')}}">                        
                                    <h3 class="text-white FivoSans-Bold title-pleca">ADMINISTRACIÓN DE <br>REDES SOCIALES</h3>
                                </a>
                                <a href="{{url('/agencia-de-redes-sociales-cancun')}}">
                                    <button class="btn-ver FivoSans-Regular">VER MÁS</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="carrusel-contain-item select-two">
                        <div class="mr-4 ml-4 slide-carrusel">
                            <img class="icon-section" src="assets/desk/home/iconos-section/PUBLICIDAD-ICON.svg" alt="">
                            <div class="pleca-morada text-center">
                                <a class="non-decoration" href="{{url('/publicidad-digital-cancun')}}">
                                    <h3 class="text-white FivoSans-Bold title-pleca">PUBLICIDAD <br> DIGITAL</h3>
                                </a>
                                <a href="{{url('/publicidad-digital-cancun')}}">
                                    <button class="btn-ver FivoSans-Regular">VER MÁS</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="carrusel-contain-item select-two">
                        <div class="mr-4 ml-4 slide-carrusel" style="">
                            <img class="icon-section" src="assets/desk/home/iconos-section/SEO-ICON.svg" alt="">
                            <div class="pleca-morada text-center">
                                <a class="non-decoration" href="{{url('/agencia-seo-posicionamiento-web-cancun')}}">
                                    <h3 class="text-white FivoSans-Bold title-pleca">SEO</h3>
                                </a>
                                <br class="">
                                <a href="{{url('/agencia-seo-posicionamiento-web-cancun')}}">
                                    <button class="btn-ver FivoSans-Regular">VER MÁS</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="carrusel-contain-item select-three">
                        <div class="mr-4 ml-4 slide-carrusel" style="">
                            <img class="icon-section" src="assets/desk/home/iconos-section/WEB-ICON.svg" alt="">
                            <div class="pleca-morada text-center">
                                <a class="non-decoration" href="{{url('/diseño-de-paginas-web-cancun')}}">
                                    <h3 class="text-white FivoSans-Bold title-pleca">DESARROLLO <br> WEB</h3>
                                </a>
                                <a href="{{url('/diseño-de-paginas-web-cancun')}}">
                                    <button class="btn-ver FivoSans-Regular">VER MÁS</button>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
            <div class="col-1 display-max">
                <img class="arrow-slide" id="arrow-right" src="assets/desk/iconos/arrow-right.svg" alt="Flecha">
            </div>
        </div>
    </div>
    <div>
        <img class="img-3 display-max" src="/assets/desk/general/lines.png" alt="Lineas decorativas">
        <img class="img-4 display-max" src="/assets/desk/iconos/circle-decor.svg" alt="Circulo decorativo">
    </div>
</div>

<div class="section text-center">
    <img class="plane-right display-max" src="/assets/desk/general/avion-right.svg" alt="Icono avion">
    <p class="ct-pink fs-medium text-center FivoSans-Medium">SOLUCIONES TECNOLÓGICAS PARA <br class="display-min"> UN MUNDO DIGITAL</p>
    <h2 class="subtitle-big text-center FivoSans-Heavy">ARTÍCULOS SOBRE MARKETING DIGITAL</h2>
    <p class="paragraph FivoSans-Regular">En nuestro blog encontrarás diversos recursos y herramientas que nuestro colectivo escribe para ayudarte a 
    aprender y comprender mejor las ventajas de aplicar Mercadotecnia Digital.</p>
    <div class="flex-row justify-content-center">
        <div class="">
            <div class="contain-blog">
                <img class="img-blog" src="/assets/desk/home/ventas-facebook.jpg" alt="Blog de facebook">
                <p class="by-blog text-left mt-3 FivoSans-Medium">17 Agosto-Por Paola Pacheco</p>
                <h3 class="title-blog text-left size-text-blog FivoSans-Medium">CÓMO MEJORAR MIS VENTAS CON FACEBOOK</h3>
                <a href="/blog/como-mejorar-mis-ventas-con-facebook/" class="non-decoration">
                    <p class="text-left text-more-blog FivoSans-Bold">LEER MÁS</p>
                </a>
                <div class="line-blog"></div>
            </div>
        </div>
        <div class="ml-4 mr-4 display-max">
            <div class="contain-blog">
                <img class="img-blog" src="/assets/desk/home/blog-marketing.png" alt="Blog de facebook">
                <p class="by-blog text-left mt-3 FivoSans-Medium">23 Agosto-Por Paola Pacheco</p>
                <h3 class="title-blog text-left size-text-blog FivoSans-Medium">UNA EMPRESA SIN MARKETING DIGITAL</h3>
                <a href="/blog/que-hace-una-agencia-de-marketing-digital/" class="non-decoration">
                    <p class="text-left text-more-blog FivoSans-Bold">LEER MÁS</p>
                </a>
                <div class="line-blog"></div>
            </div>
        </div>
        <div class=" display-max">
            <div class="contain-blog">
                <img class="img-blog" src="/assets/desk/home/blog-seo.jpg" alt="Blog de facebook">
                <p class="by-blog text-left mt-3 FivoSans-Medium">4 Septiembre-Por Paola Pacheco</p>
                <h3 class="title-blog text-left size-text-blog FivoSans-Medium">CONECTA CON TUS CLIENTES</h3>
                <a href="/blog/mi-empresa-necesita-posicionamiento-seo/" class="non-decoration">
                    <p class="text-left text-more-blog FivoSans-Bold">LEER MÁS</p>
                </a>
                <div class="line-blog"></div>
            </div>
        </div>
    </div>
    <a href="{{route('blog')}}">
        <button class="btn-blog FivoSans-Regular">VER MÁS</button>
    </a>
</div>
<div class="section-quar-gray">
        <p class="ct-pink fs-big text-center FivoSans-Medium">NUESTROS CLIENTES</p>
        <h2 class="subtitle-big text-center FivoSans-Heavy">ELLOS ESTÁN DEJANDO SU HUELLA DIGITAL</h2>
        <p class="paragraph FivoSans-Medium">Ellos son algunos de los clientes que nos han confiado su crecimiento y presencia de marca digital ¡Nosotros más que contentos 
        con los resultados!</p>
        <div class="box-client justify-content-center">
            <div class="aux-cont-client">
                <div class="cont-client" id="cont-client">
                    <a href="https://santisoluciones.com/" class="carrusel_client item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/santi-c.png" alt="Logo Santi">
                    </a>
                    <a href="https://www.ctr-international.com.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/ctr-c.png" alt="Logo CTR International">
                    </a>
                    <a href="https://tecnicopy.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/tecnicopy-c.png" alt="Logo Tecnicopy">
                    </a>
                    <a href="https://www.facebook.com/homeopathycenterqroo" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/homeopathy-c.png" alt="Logo Homeopathy center">
                    </a>
                    <a href="http://www.artigas.com.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/artigas-c.png" alt="Logo Artigas">
                    </a>
                    <a href="https://boutiqueinmobiliaria.com.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/bi-c.png" alt="Logo Boutique inmobiliaria">
                    </a>
                    <a href="https://cluby.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/cluby-c.png" alt="Logo Cluby">
                    </a>
                    <a href="https://www.digirey.com/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/digirey-c.png" alt="Logo Digirey">
                    </a>
                    <a href="https://www.foldio.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/foldio-c.png" alt="Logo Foldio">
                    </a>
                    <a href="http://www.itsallaboutlocation.com.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/its-all-about-location-c.png" alt="Logo It´s all about location">
                    </a>
                    <a href="https://multimach.mx/" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/mm-c.png" alt="Logo Multimatch">
                    </a>
                    <a href="https://www.facebook.com/nngroup.inc" class="item-client" rel="nofollow" target="_blank">
                        <img class="turn-color" src="/assets/desk/home/clientes/nn-group-c.png" alt="Logo NN group">
                    </a>
                </div>
            </div>
        </div>
        <div class="justify-content-center flex-row">
            <img class="arrow-slide-client m-3 display-max" id="sliClient1" src="assets/desk/iconos/arrow-left.svg" alt="Flecha">
            <img class="arrow-slide-client m-3 display-max" id="sliClient2" src="assets/desk/iconos/arrow-right.svg" alt="Flecha">
        </div>
    <img class="i-body-right display-max" src="/assets/desk/iconos/circle-decor.svg" alt="Icono semi-circle">
</div>
@endsection
@push('scripts')
<script type="text/javascript">

    let countService = 0
    $('#bullet-service1').click(function(){
        if(countService == 1){
            $('.select-two').animate({"margin-left":"+=50%"})
            setTimeout(function(){
                $('.select-two').css({"margin":"0","display":"none"})
                $('.select-one').show()
            },600)
            countService = 0
        }
        if(countService == 2){
            $('.select-three').animate({"margin-left":"+=50%"})
            setTimeout(function(){
                $('.select-three').css({"margin":"0","display":"none"})
                $('.select-one').show()
            },600)
            countService = 0
        }
    })
    $('#bullet-service2').click(function(){
        if(countService == 0){
            $('.select-one').animate({"margin-left":"-=50%"})
            setTimeout(function(){
                $('.select-one').css({"margin":"0","display":"none"})
                $('.select-two').show()
            },600)
            countService = 1
        }
        if(countService == 2){
            $('.select-three').animate({"margin-left":"+=50%"})
            setTimeout(function(){
                $('.select-three').css({"margin":"0","display":"none"})
                $('.select-two').show()
            },600)
            countService = 1
        }
    })
    $('#bullet-service3').click(function(){
        if(countService == 1){
            $('.select-two').animate({"margin-left":"-=50%"})
            setTimeout(function(){
                $('.select-two').css({"margin":"0","display":"none"})
                $('.select-three').show()
            },600)
            countService = 2
        }
        if(countService == 0){
            $('.select-one').animate({"margin-left":"-=50%"})
            setTimeout(function(){
                $('.select-one').css({"margin":"0","display":"none"})
                $('.select-three').show()
            },600)
            countService = 2
        }
    })
    let itemClient = document.getElementsByClassName('item-client'),
    countClient = 0
    
    $('#sliClient1').click(function(){
        if(countClient < itemClient.length-1){
            if(screen.width >= 1400){
                $('.carrusel_client').animate({"margin-left":"-=230px"})
            }else if(screen.width < 1400 && screen.width > 450){
                $('.carrusel_client').animate({"margin-left":"-=250px"})
            }
            countClient = countClient + 1
        }
    })
    $('#sliClient2').click(function(){
        if(countClient > 0){
            if(screen.width >= 1400){
                $('.carrusel_client').animate({"margin-left":"+=230px"})
            }else if(screen.width < 1400 && screen.width > 450){
                $('.carrusel_client').animate({"margin-left":"+=250px"})
            }
            countClient = countClient - 1
        }
    })
</script>
@endpush