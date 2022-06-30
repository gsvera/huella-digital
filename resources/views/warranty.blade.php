@extends('layouts.layout3')
@section('content')
<div class="banner-privacy">
    <h1 class="text-avisos margin-warranty FivoSans-Heavy">GARANTÍA <br class="display-min"> HUELLA DIGITAL</h1>
    <img class="stamp" src="/assets/desk/general/sello-garantia-negro.png" alt="Sello de garantia">
</div>
<div class="section-avisos">
    <img class="img-line display-max" src="/assets/desk/general/linea-unica.svg" alt="Linea rosa">
    <img class="img-line-left display-max" src="/assets/desk/general/linea-unica.svg" alt="Linea rosa">
    <p class="FivoSans-Regular text-mobile">
        Sabemos que en el mercado hay muchas agencias o personas ofreciendo los mismos servicios que nosotros, 
        pero <strong class="FivoSans-Bold">estamos tan seguros de los resultados que te daremos que hemos creado nuestra garantía de satisfacción Huella Digital.</strong>
    </p>
    <h2 class="color-pink fs-small FivoSans-Medium subtitle-mobile">1. Cumplimiento del plan de acción: </h2>
    <p class="FivoSans-Regular text-mobile">
        Con la presentación de un cronograma y el calendario de contenidos, podrán dar seguimiento a que cada tarea presentada, 
        se llevará a cabo. 
    </p>
    <h2 class="color-pink fs-small FivoSans-Medium subtitle-mobile">2. Incremento de prospectos: </h2>
    <p class="FivoSans-Regular text-mobile">
        Las acciones implementadas generarán un mayor número de interacciones que serán atendidas en tiempo y forma, lo que se 
        traduce en un incremento de prospectos. 
    </p>
    <h2 class="color-pink fs-small FivoSans-Medium subtitle-mobile">3. Generación de leads: </h2>
    <p class="FivoSans-Regular text-mobile">
        Te garantizamos que durante los primeros 60 días de gestión de tu cuenta, te entregaremos leads interesados en tu producto/servicio.
    </p>
    <h2 class="color-pink fs-small FivoSans-Medium subtitle-mobile">4. Transparencia en el manejo de tus campañas: </h2>
    <p class="FivoSans-Regular text-mobile">
        Tendrán acceso a los movimientos realizados en la cuenta en todo momento, por lo que podrán consultar las campañas cuando lo deseen.
    </p>
</div>
<div class="fondo-gray">
    <h2 class="subtitle-big text-center FivoSans-Heavy">SERVICIOS DE MARKETING DIGITAL</h2>
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
            let carrusel = document.querySelector("#carrusel"),
            sliderItems = document.querySelectorAll('.carrusel-contain-item'),
            sliderLast =sliderItems[sliderItems.length -1]
            
            const arrowLeft = document.getElementById('arrow-left'),
            arrowRight = document.getElementById('arrow-right')

            arrowLeft.addEventListener('click', e => {
                NextSlide()
            })
            arrowRight.addEventListener('click', e =>{
                PrevSlide()
            })
            if(screen.width > 520){
                setInterval(function(){
                    NextSlide()
                },5000)
            }
            

            function NextSlide(){
                carruselFirst = document.querySelectorAll('.carrusel-contain-item')[0]
                carrusel.style.marginLeft = "-35%"
                carrusel.style.transition = "all 1s"
                setTimeout(function(){
                    carrusel.style.transition = "none"
                    carrusel.insertAdjacentElement('beforeend', carruselFirst)
                    carrusel.style.marginLeft = "0%"
                },500)
            }
            function PrevSlide(){
                let sliderItems = document.querySelectorAll('.carrusel-contain-item'),
                sliderLast =sliderItems[sliderItems.length -1]

                carrusel.style.marginLeft = "+35%"
                carrusel.style.transition = "all 1s"
                setTimeout(function(){
                    carrusel.style.transition = "none"
                    carrusel.insertAdjacentElement('afterbegin', sliderLast)
                    carrusel.style.marginLeft = "0%"
                },500)
            }
</script>


@endpush