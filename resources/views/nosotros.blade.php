@extends('layouts.layout')
@section('content')
<div class="cont-sli-head">
    <div class="content-slider flex-banner">
        <div class="flex head-sli-item banner-mob-us">
            <div class="col h1-absolute">
                <p class="line-vertical line-vertical-white pl-2 FivoSans-Regular">Nuestra pasión por los resultados <br> marca la diferencia</p>
                <h1 class="title-us fs-banner FivoSans-Heavy">HUELLA DIGITAL</h1>
            </div>
            <img class="slider-header col display-max" src="/assets/desk/seccion-nosotros/slider/icono-sliderprincipal.svg" alt="Slider principal">
        </div>
        <div class="flex slide-home-two banner-home" style="display:none;">
            <div class="h1-absolute-m text-center-desk">
                <p class="text-white size-text FivoSans-Light">Brindamos soluciones digitales</p>
                <h1 class="text-white FivoSans-Bold fs-banner">Páginas web, redes sociales, <br class="display-max"> Inbound Marketing, SEO y SEM</h1>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <input class="bullet" type="radio" name="bullet-slider" id="bullet-slider1" checked><label for="bullet-slider1"></label>
    <input class="bullet" type="radio" name="bullet-slider" id="bullet-slider2"><label for="bullet-slider2"></label>
</div>
<div class="section">
    <p class="ct-pink fs-medium text-center FivoSans-Medium">JUNTOS HACEMOS MÁS</p>
    <h2 class="subtitle-big text-center FivoSans-Heavy">NUESTRO PROCESO DE TRABAJO</h2>
    <div class="slide-work display-max">
        <div class="slide-work-item mt-5" id="item-work-one">
            <div class="row col justify-content-center">
                <img class="icon-work" src="/assets/desk/seccion-nosotros/proceso-trabajo/reconocimiento-icon.svg" alt="icono de reconocimiento">
                <div class="trazo mt-3">
                    <h3 class="title-work mt-4 FivoSans-Heavy">Reconocimiento</h3>
                    <p class="mt-3 FivoSans-Regular text-justify">
                    Realizamos estudio de competencia digital, tomamos una capacitación de tu cultura empresarial, estudiamos 
                    las fortalezas y debilidades de tu marca e identificamos las áreas de oportunidad que hay que atender.
                    </p>
                </div>
            </div>
            <div class="row col justify-content-center"> 
                <img class="icon-work" src="/assets/desk/seccion-nosotros/proceso-trabajo/estrategias-icon.svg" alt="icono de estrategias">
                <div class="trazo mt-3">
                    <h3 class="title-work mt-4 FivoSans-Heavy">Estrategia digital</h3>
                    <p class="mt-3 FivoSans-Regular text-justify">
                    Desarrollamos una planeación digital personalizada según las necesidades de tu empresa, lo que nos permitirá alcanzar 
                    los objetivos marcados unificando técnicas de Marketing Digital, publicidad y diseño gráfico creativo.
                    </p>
                </div>
            </div>
        </div>
        <div class="slide-work-item mt-5" id="item-work-two" style="display:none;">
            <div class="row col justify-content-center">
                <img class="icon-work" src="/assets/desk/seccion-nosotros/proceso-trabajo/accion-icon.svg" alt="icono de acción">
                <div class="trazo mt-3">
                    <h3 class="title-work mt-4 FivoSans-Heavy">Acción</h3>
                    <p class="mt-3 FivoSans-Regular text-justify">
                    Aprobada la estrategia... ¡Comenzamos a dejar huella! llevando a la práctica lo previamente desarrollado para mejorar tu presencia 
                    de marca y construir una fuerte reputación en internet de manera orgánica.    
                    </p>
                </div>
            </div>
            <div class="row col justify-content-center"> 
                <img class="icon-work" src="/assets/desk/seccion-nosotros/proceso-trabajo/analisis-icon.svg" alt="icono de analisis">
                <div class="trazo mt-3">
                    <h3 class="title-work mt-4 FivoSans-Heavy">Análisis</h3>
                    <p class="mt-3 FivoSans-Regular text-justify">
                    Medimos el comportamiento de los usuarios, realizamos los ajustes necesarios en tiempo real y revisamos datos recopilados para 
                    medir la eficiencia de la campaña.           
                    </p>
                </div>
            </div>
        </div>
        <div class="slide-work-item mt-5" id="item-work-three" style="display:none;">
            <div class="row col justify-content-center">
                <img class="icon-work" src="/assets/desk/seccion-nosotros/proceso-trabajo/resultados-icon.svg" alt="icono de resultados">
                <div class="trazo mt-3">
                    <h3 class="title-work mt-4 FivoSans-Heavy">Resultados</h3>
                    <p class="mt-3 FivoSans-Regular text-justify">
                    Entregamos un informe de los resultados obtenidos para que estés al día sobre el desarrollo digital de tu empresa y mantener 
                    una mejora contínua.    
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- SCTION WORK MOBILE -->
<div class="display-min">
    <div class="slide-work-mob d-flex-row">
        <div class="row slide-work-item-mob justify-content-center">
            <img class="icon-work-mob" src="/assets/desk/seccion-nosotros/proceso-trabajo/reconocimiento-icon.svg" alt="icono de reconocimiento">
            <div class="trazo-mob mt-3">
                <h3 class="title-work mt-4 FivoSans-Heavy">Reconocimiento</h3>
                <p class="mt-3 FivoSans-Regular text-mobile text-justify">
                Realizamos estudio de competencia digital, tomamos una capacitación de tu cultura empresarial, estudiamos 
                las fortalezas y debilidades de tu marca e identificamos las áreas de oportunidad que hay que atender.
                </p>
            </div>
        </div>
        <div class="row slide-work-item-mob justify-content-center" style="display:none;"> 
            <img class="icon-work-mob" src="/assets/desk/seccion-nosotros/proceso-trabajo/estrategias-icon.svg" alt="icono de estrategias">
            <div class="trazo-mob mt-3">
                <h3 class="title-work mt-4 FivoSans-Heavy">Estrategia digital</h3>
                <p class="mt-3 FivoSans-Regular text-justify">
                Desarrollamos una planeación digital personalizada según las necesidades de tu empresa, lo que nos permitirá alcanzar 
                los objetivos marcados unificando técnicas de Marketing Digital, publicidad y diseño gráfico creativo.
                </p>
            </div>
        </div>    
        <div class="row slide-work-item-mob justify-content-center" style="display:none;">
            <img class="icon-work-mob" src="/assets/desk/seccion-nosotros/proceso-trabajo/accion-icon.svg" alt="icono de acción">
            <div class="trazo-mob mt-3">
                <h3 class="title-work mt-4 FivoSans-Heavy">Acción</h3>
                <p class="mt-3 FivoSans-Regular text-justify">
                Aprobada la estrategia... ¡Comenzamos a dejar huella! llevando a la práctica lo previamente desarrollado para mejorar tu presencia 
                de marca y construir una fuerte reputación en internet de manera orgánica.    
                </p>
            </div>
        </div>
        <div class="row slide-work-item-mob justify-content-center" style="display:none;"> 
            <img class="icon-work-mob" src="/assets/desk/seccion-nosotros/proceso-trabajo/analisis-icon.svg" alt="icono de analisis">
            <div class="trazo-mob mt-3">
                <h3 class="title-work mt-4 FivoSans-Heavy">Análisis</h3>
                <p class="mt-3 FivoSans-Regular text-justify">
                Medimos el comportamiento de los usuarios, realizamos los ajustes necesarios en tiempo real y revisamos datos recopilados para 
                medir la eficiencia de la campaña.           
                </p>
            </div>
        </div>
        <div class="row slide-work-item-mob justify-content-center" style="display:none;">
            <img class="icon-work-mob" src="/assets/desk/seccion-nosotros/proceso-trabajo/resultados-icon.svg" alt="icono de resultados">
            <div class="trazo-mob mt-3">
                <h3 class="title-work mt-4 FivoSans-Heavy">Resultados</h3>
                <p class="mt-3 FivoSans-Regular text-justify">
                Entregamos un informe de los resultados obtenidos para que estés al día sobre el desarrollo digital de tu empresa y mantener 
                una mejora contínua.    
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END SCTION WORK MOBILE -->
<!-- controlls desk -->
    <div class="text-center display-max">
        <input class="" type="radio" name="bullet-slider-work" id="bullet-slider-work1" checked><label for="bullet-slider-work1"></label>
        <input class="" type="radio" name="bullet-slider-work" id="bullet-slider-work2"><label for="bullet-slider-work2"></label>
        <input class="" type="radio" name="bullet-slider-work" id="bullet-slider-work3"><label for="bullet-slider-work3"></label>
    </div>
<!-- end controlls desk -->
<!-- controlls mobile -->
    <div class="text-center display-min">
        <input onclick="itemWork(0)" class="" type="radio" name="bullet-slider-work-mob" id="bullet-slider-work-mob1" checked><label for="bullet-slider-work-mob1"></label>
        <input onclick="itemWork(1)" class="" type="radio" name="bullet-slider-work-mob" id="bullet-slider-work-mob2"><label for="bullet-slider-work-mob2"></label>
        <input onclick="itemWork(2)" class="" type="radio" name="bullet-slider-work-mob" id="bullet-slider-work-mob3"><label for="bullet-slider-work-mob3"></label>
        <input onclick="itemWork(3)" class="" type="radio" name="bullet-slider-work-mob" id="bullet-slider-work-mob4"><label for="bullet-slider-work-mob4"></label>
        <input onclick="itemWork(4)" class="" type="radio" name="bullet-slider-work-mob" id="bullet-slider-work-mob5"><label for="bullet-slider-work-mob5"></label>
    </div>
<!-- end controlls mobile -->
</div>
<div class="section">
    <h2 class="subtitle-big text-center FivoSans-Heavy">SOLUCIONES CLARAS,<br class="display-min"> PRECISAS Y <br class="display-max"> CREATIVAS</h2>
    <img class="img-5 display-max" src="/assets/desk/general/lines.png" alt="Lineas decorativas">
    <img class="img-6 display-max" src="/assets/desk/general/circles.png" alt="Circulos decorativos">
    <p class="ct-pink fs-medium text-center FivoSans-Medium text-mobile">EN HUELLA DIGITAL NO SOLO NOS ENFOCAMOS EN QUE TU NEGOCIO SEA ACEPTADO <br> EN EL MERCADO, SINO QUE TAMBIÉN SEA RENTABLE.</p>
</div>
<div class="back-mision-vision">
    <div class="col-2 text-center">
        <img id="arrow-vm-right" class="arrow-invert mrt arrow-mob" src="/assets/desk/iconos/arrow-white-left.svg" alt="Flecha izquierda">
    </div>
    <div class="contain-ms text-center">
        <div class="item-mv item-mv-one">
            <h3 class="text-white title-work FivoSans-Heavy">Nuestra Visión</h3>
            <p class="text-white mg-desk-mv FivoSans-Regular text-mobile text-justify">Ser una agencia de Marketing Digital que brinde y ejecute estrategias de comunicación online efectivas a través de la creatividad, calidad y responsabilidad.</p>
        </div>
        <div class="item-mv item-mv-two" style="display:none;">
            <h3 class="text-white title-work FivoSans-Heavy">Nuestra Misión</h3>
            <p class="text-white mg-desk-mv FivoSans-Regular text-mobile text-justify">Ser la primera recomendación y una de las agencias de Marketing Digital líder en México, reconocidos por proporcionar alto valor a nuestros clientes, socios de negocio y colaboradores.</p>
        </div>
        <div class="item-mv item-mv-three" style="display:none;">
            <h3 class="text-white title-work FivoSans-Heavy">Nuestro Compromiso</h3>
            <p class="text-white mg-desk-mv FivoSans-Regular text-mobile text-justify">Tratamos a todos nuestros clientes, pequeños y grandes negocios, como nos gustaría ser tratados: buscamos una relación estrecha, de confianza y sobre todo transparente.</p>
        </div>
    </div>
    <div class="col-2">
        <img id="arrow-vm-left" class="arrow-invert mrt arrow-mob" src="/assets/desk/iconos/arrow-white-rigth.svg" alt="Flecha derecha">
    </div>
</div>
<div class="section">
    <p class="ct-pink fs-medium text-center FivoSans-Medium">IMPULSAMOS TU EMPRESA</p>
    <h2 class="subtitle-big text-center FivoSans-Heavy">VENTAJAS DEL MARKETING DIGITAL</h2>
    <p class="text-center FivoSans-Medium text-mobile">El Internet nos brinda un sinfín de beneficios, entre los que destacan las ventas OnLine, <br> dejando atrás al Marketing tradicional.</p>
    <img class="img-7 display-max" src="/assets/desk/general/lines.png" alt="Lineas decorativas">
    <!-- section advantage desk -->
    <div class="display-max">
        <div class="row">
            <div class="col-3 text-center">
                <div class="item-advantage fs-medium pt-2 FivoSans-Bold">Permite <br> medir</div>
                <p class="text-advantage Helvetica text-justify">
                    Podemos conocer los resultados de cada
                    estrategia aplicada y tener un control total de
                    cada peso invertido, conservamos lo que funciona
                    y mejoramos lo que no, en tiempo real.					
                </p>
                <div class="item-advantage-second fs-medium pt-2 FivoSans-Bold">Permite <br> segmentar</div>
                <p class="text-advantage Helvetica text-justify">
                    Lo que nos permite dirigirnos a un mercado
                    potencial para tu empresa, e inclusive, por cada
                    producto que ofreces de manera: geográfica,
                    demográfica, psicográfica y conductual.
                </p>
            </div>
            <div class="col-6 text-center">
                <img class="line-point-left" src="/assets/desk/general/linea-punteada-izquierda.svg" alt="Linea punteada">
                <img class="line-point-l" src="/assets/desk/general/linea-punteada.svg" alt="Linea punteada">
                <img class="img-advantage" src="/assets/desk/seccion-nosotros/ventajas/ventajas-agrupado.svg" alt="Imangen de ventajas">
                <img class="line-point-right" src="/assets/desk/general/linea-punteada-derecha.svg" alt="Linea punteada">
                <img class="line-point-d" src="/assets/desk/general/linea-punteada-d.svg" alt="Linea punteada">
                <img class="line-point-b" src="/assets/desk/general/linea-punteada-b.svg" alt="Linea punteada">
            </div>
            <div class="col-3">
                <div class="item-advantage fs-medium FivoSans-Bold" style="padding-top:10px;">Sirve para construir reputación</div>
                <p class="text-advantage Helvetica text-justify">
                    A través del desarrollo de contenido relevante
                    creamos comunidad que con el tiempo será una
                    herramienta valiosa de datos, así como para
                    mejorar tu atención al cliente.
                </p>
                <div class="item-advantage-second fs-medium FivoSans-Bold" style="padding-top:10px;">Tiene el mejor <br class="display-max"> costo – beneficio</div>
                <p class="text-advantage Helvetica text-justify">
                    No es necesario hacer grandes inversiones en
                    publicidad, la combinación de buenas estrategias
                    y la comprensión de tu marca son un gran dueto.						
                </p>
            </div>
        </div>
        <div>
            <div class="item-advantage fs-medium FivoSans-Bold" style="padding-top:10px;">Permite atraer clientes a bajo costo</div>
            <p class="text-advange-bt Helvetica text-justify" style="width:250px;margin:0 auto;">
                Parte del crecimiento de tu marca en línea será
                orgánico, lo que quiere decir, que tendrá el
                costo más bajo posible.
            </p>
        </div>
    </div>
    <!-- end section advantage desk -->
<!-- section advantage mobile -->
<div class="display-min">
    <div class="bkg-advantage-mob" id="bkg-advantage-mob">
        <div class="item-advantage-mob fs-medium pt-2 FivoSans-Bold itemAdv">Permite <br> medir</div>
        <p class="text-advantage-mob display-max text-center Helvetica text-mobile">
            Podemos conocer los resultados de cada
            estrategia aplicada y tener un control total de
            cada peso invertido, conservamos lo que funciona
            y mejoramos lo que no, en tiempo real.					
        </p>
        <div class="item-advantage-mob fs-medium pt-2 FivoSans-Bold itemAdv">Permite <br> segmentar</div>
        <p class="text-advantage-mob display-max text-center Helvetica text-mobile">
            Lo que nos permite dirigirnos a un mercado
            potencial para tu empresa, e inclusive, por cada
            producto que ofreces de manera: geográfica,
            demográfica, psicográfica y conductual.
        </p>
        <div class="item-advantage-mob fs-medium FivoSans-Bold itemAdv" >Sirve para <br> construir reputación</div>
        <p class="text-advantage-mob display-max text-center Helvetica text-mobile">
            A través del desarrollo de contenido relevante
            creamos comunidad que con el tiempo será una
            herramienta valiosa de datos, así como para
            mejorar tu atención al cliente.
        </p>
        <div class="item-advantage-mob fs-medium FivoSans-Bold itemAdv">Tiene el mejor <br> costo – beneficio</div>
        <p class="text-advantage-mob display-max text-center Helvetica text-mobile">
            No es necesario hacer grandes inversiones en
            publicidad, la combinación de buenas estrategias
            y la comprensión de tu marca son un gran dueto.						
        </p>
        <div class="item-advantage-mob fs-medium FivoSans-Bold itemAdv" >Permite atraer clientes <br> a bajo costo</div>
        <p class="text-advantage-mob display-max text-center Helvetica text-mobile">
            Parte del crecimiento de tu marca en línea será
            orgánico, lo que quiere decir, que tendrá el
            costo más bajo posible.
        </p>
    </div>
</div>
<!-- end section advantage mobile -->
</div>
<div class="back-pink text-white text-center fs-medium-1 pt-3">
    <span class="FivoSans-Regular">Mejora los resultados <br class="display-min"> de tu empresa con </span><br><strong class="FivoSans-Bold">Marketing Digital</strong>
</div>
@endsection

@push('scripts')
   <script type="text/javascript">
    

// SLIDER MOBILE
//       name="bullet-slider-work-mob" id="bullet-slider-work-mob1"

    let itemMob = document.getElementsByClassName('slide-work-item-mob')
    let counItemMob = itemMob.length

    function itemWork(n){
        for(let i = 0; i < counItemMob;i++){
            itemMob[i].style.display = "none"
        }
        setTimeout(function(){
            itemMob[n].style.display = "flex"
        },300)
    }

// END SLIDER MOBILE

//    SLIDER METHOD WORK
        let breakSliWork = 1;

            $('#bullet-slider-work1').click(function(){
                if(breakSliWork == 0 || breakSliWork == 3){
                    $('#item-work-one').show()
                    $('#item-work-one').animate({'margin-left':"+=100%"})
                    $('#item-work-two').hide()
                    breakSliWork = 1
                }
            })
            $('#bullet-slider-work2').click(function(){
                if(breakSliWork == 1){
                    $('#item-work-one').animate({"margin-left":"-=100%"})
                    $('#item-work-two').animate({'margin-left':"0"})
                    setTimeout(function(){
                        $('#item-work-one').hide()
                        $('#item-work-two').show()
                    },300)
                    breakSliWork = 0
                }
                else if(breakSliWork == 3){
                    $('#item-work-three').animate({'margin-left':"+=100%"})
                    $('#item-work-two').animate({'margin-left':"0"})
                    setTimeout(function(){
                        $('#item-work-two').show()
                        $('#item-work-three').hide()
                    },300)
                    breakSliWork = 0
                }
            })
            $('#bullet-slider-work3').click(function(){
                if(breakSliWork == 1){
                    $('#item-work-one').animate({"margin-left":"-=100%"})
                    $('#item-work-three').animate({"margin-left":"0"})
                    setTimeout(function(){
                        $('#item-work-one').hide()
                        $('#item-work-three').show()
                    },300)
                    breakSliWork = 3
                }
                else if(breakSliWork == 0){
                    $('#item-work-two').animate({"margin-left":"-=100%"})
                    $('#item-work-three').animate({"margin-left":"0"})
                    setTimeout(function(){
                        $('#item-work-two').hide()
                        $('#item-work-three').show()
                        // $('#item-work-three').animate({"margin-left":"-=100%"})
                    },300)
                    breakSliWork = 3
                }
            })

        //SLIDER MISION VISION            
        let count = 0
        
        $('#arrow-vm-right').click(function(){
            if(count == 3){
                count = count - 2
                slidevm(count)
            }else{
                count = count + 1
                slidevm(count)
            }
        })
        $('#arrow-vm-left').click(function(){
            if(count == 0 || count == 3){
                count = 2
                slidevmInvert(count)
            }else if(count == 2){
                count = count - 1
                slidevmInvert(count)
            }else if(count == 1){
                count = 3
                slidevmInvert(count)
            }
        })
        function slidevm(count){
            $('.item-mv-three').css({"margin":"0"})
            $('.item-mv-one').css({"margin":"0"})
            $('.item-mv-two').css({"margin":"0"})
            if(count == 1){   
                $('.item-mv-one').animate({"margin-left":"-=100%"})
                setTimeout(function(){
                    $('.item-mv-two').show()
                    $('.item-mv-one').hide()
                },300)
            }
            else if(count == 2){
                $('.item-mv-two').animate({"margin-left":"-=100%"})
                setTimeout(function(){
                    $('.item-mv-three').show()
                    $('.item-mv-two').hide()
                },300)
            }
            else if(count == 3){
                $('.item-mv-three').animate({"margin-left":"-=100%"})
                setTimeout(function(){
                    $('.item-mv-one').show()
                    $('.item-mv-three').hide()
                },300)
            }
        }
        function slidevmInvert(){
            $('.item-mv-one').css({"margin":"0"})
            $('.item-mv-two').css({"margin":"0"})
            $('.item-mv-three').css({"margin":"0"})
            if(count == 1){   
                $('.item-mv-three').animate({"margin-right":"-=100%"})
                setTimeout(function(){
                    $('.item-mv-three').hide()
                    $('.item-mv-two').show()
                },300)
            }
            else if(count == 2){
                $('.item-mv-one').animate({"margin-right":"-=100%"})
                setTimeout(function(){
                    $('.item-mv-one').hide()
                    $('.item-mv-three').show()
                },300)
            }
            else if(count == 3){
                $('.item-mv-two').animate({"margin-right":"-=100%"})
                setTimeout(function(){
                    $('.item-mv-two').hide()
                    $('.item-mv-one').show()
                },300)   
            }
        }
    </script>

@endpush