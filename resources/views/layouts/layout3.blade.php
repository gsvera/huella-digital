<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
		<meta name="facebook-domain-verification" content="9xhlb3pvdjvzitazhm9cpkcyo0uwmg" />
        <meta name="robots" content="noindex,nofollow">
        <title>| Huella digital</title>

        @isset($description)
            <meta name="description" content=""/>
        @endisset
        @isset($keywords)
            <meta name="keywords" content="" />
        @endisset

        @isset($canonical)
            <link rel="canonical" href="https://huella-digital.mx/" />
        @endisset

        @if (!isset($excludeOpenGraph))
            <meta property="og:url" content="https://huella-digital.mx/" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="" />
            <meta property="og:description" content="" />
            @if (isset($og_image))
                <meta property="og:image" content="" />
            @endif
        @endif

        @if (!isset($excludeTwitterCards))
            <meta name="twitter:card" content="summary"/>
            <meta name="twitter:site" content="@HuellaDigit"/>
            <meta name="twitter:creator" content="@HuellaDigit"/>
            <meta name="twitter:title" content="Agencia de Marketing Digital México"/>
            <meta name="twitter:description" content="Agencia de marketing digital líder en México, especialistas en Ventas y Publicidad: Google, redes sociales, posicionamiento SEO y comercio electrónico"/>
            <meta name="twitter:image" content="https://huella-digital.mx/images/slider/slider.png"/>
            <meta name="twitter:domain" content="https://huella-digital.mx/"/>
        @endif

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="/favicon.png">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://www.jqueryscript.net/demo/Carousel-Style-Content-Ticker-Plugin-with-jQuery-Carousel-Ticker/javascripts/jquery.carousel-ticker.js"></script>
        <script src="https://use.fontawesome.com/9d99f6b907.js"></script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MF7W7QX');</script>
		<!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF7W7QX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Header 01 -->
        <header class="header_01 pb-0 display-max" id="header">
            <div class="container-fluid row pt-3 bg-menu-gray">
                <div class="col row">
                    <ul class="row">
                        <li class="icon-m"><object class="icon-m icon-m-size" data="/assets/desk/iconos/telefono.svg" type="image/svg+xml"></object></li>
                        <li ><a class="bold-5 icon-m a-dark FivoSans-Medium" href="tel:+9981539626">+52 (998) 153 9626</a></li>
                    </ul>    
                </div>
                <div class="col">
                    <ul class="row menu-right">
                        <li class="icon-m icon-m-size"><object class="icon-m-size" data="/assets/desk/iconos/avion.svg"></object></li>
                        <li><a class="icon-m bold-5 a-dark FivoSans-Medium" href="mailto:hola@huella-digital.mx">hola@huella-digital.mx</a></li>
                        <li class="color-pink icon-m" style="font-size:1.8em; margin-top:-10px;">|</li>
                        <li class="icon-m"><a href="https://www.facebook.com/huelladigitalmex/" rel="nofollow" target="_blank"><img class="icon-m-size" src="/assets/desk/iconos/fb.svg" alt="Icono facebook"></a></li>
                        <li class="icon-m"><a href="https://www.instagram.com/huelladigitalmex/" rel="nofollow" target="_blank"><img class="icon-m-size" src="/assets/desk/iconos/ig.svg" alt="Icono instragram"></a></li>
                        <!-- <li class="icon-m"><a href="https://twitter.com/HuellaDigit" rel="nofollow" target="_blank"><img class="icon-m-size" src="/assets/desk/iconos/tw.svg" alt="Icono twitter"></a></li> -->
                        <li class="icon-m"><a href="https://www.linkedin.com/company/huelladigitalmx/" rel="nofollow" target="_blank"><img class="icon-m-size" src="/assets/desk/iconos/in.svg" alt="Icono linked in"></a></li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid menu-c-purple">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <a href="{{url('/')}}">
                            <img class="logo-huella" src="/assets/desk/general/logohd.png" alt="Logo huella digital">
                        </a>
                    </div>
                    <div class="col-lg-8 col-sm-7 col-md-7">
                        <nav class="mainmenu text-center menu-right">
                            <ul class="row" style="margin:30px 0;">
                                <li><a href="{{url('/nosotros')}}" class="text-white FivoSans-Thin">NOSOTROS </a><span class="text-white ml-2 mr-2">&#9474;</span></li>
                                <li class=""><a href="javascript:void(0);" class="text-white FivoSans-Thin"> SERVICIOS <span class="text-white ml-2 mr-2">&#9474;</span></a>
                                    <ul class="sub-menu">
                                        <li><a class="text-white FivoSans-Thin" href="{{url('/agencia-de-marketing-digital-cancun')}}">Marketing digital</a></li>
                                        <li><a class="text-white FivoSans-Thin" href="{{url('/agencia-de-redes-sociales-cancun')}}">Redes Sociales</a></li>
                                        <li><a class="text-white FivoSans-Thin" href="{{url('/publicidad-digital-cancun')}}">Publicidad Digital</a></li>
                                        <li><a class="text-white FivoSans-Thin" href="{{url('/agencia-seo-posicionamiento-web-cancun')}}">Posicionamiento SEO</a></li>
                                        <li><a class="text-white FivoSans-Thin" href="{{url('/diseño-de-paginas-web-cancun')}}">Páginas web</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('blog')}}" class="text-white FivoSans-Thin"> BLOG </a> <span class="text-white ml-2 mr-2">&#9474;</span></li>
                                @if (!isset($excludeContactForm))
                                    <li><a href="{{url('/contacto')}}" class="contactLink text-white FivoSans-Thin"> CONTACTO </a></li>
                                @endif
                            </ul>
						</nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header 01 -->
    <div class="menu_show display-max" id="header-hide">
        <div class="row text-center">
            <div class="col-2">
                <a href="{{url('/')}}">
                    <img class="logo-huella mt-3" src="/assets/desk/general/logohd.png" alt="Logo huella">    
                </a>
            </div>
            <div class="col-2 mg-menu">
                <a class="contact-menu-hv FivoSans-Medium" href="tel:+9981539626">
                    <img class="icon-m-size" src="/assets/desk/iconos/telefono.png" alt="Icono telefono">
                    +52 (998) 153 9626
                </a>
            </div>
            <div class="col-m-3 col-xl-3 mg-menu">
                <a class="contact-menu-hv FivoSans-Medium" href="mailto:hola@huella-digital.mx">
                    <img class="icon-m-size" src="/assets/desk/iconos/avion.png" alt="Icono avion de papel">
                    hola@huella-digital.mx
                </a>
            </div>
            <div class="col-m-3 col-xl-3 mg-menu">
                <a class="non-decoration" href="{{url('/contacto')}}">
                    <div class="button-contact mr-auto ml-auto FivoSans-Bold">
                        Solicitar Asesoría Gratuita
                    </div>
                </a>
            </div>
            <div class="col-2 text-center mt-4">
                <img id="menu-open" class="button-menu btn" src="/assets/desk/iconos/menu-icono.svg" alt="Icono de menu">
            </div>
        </div>  
    </div>
        <!-- MENU MOBILE -->
        <div class="menu_show display-min" id="header-hide">
            <div class="flex-row text-center">
                <div class="col-2">
                    <a href="{{url('/')}}">
                        <img class="logo-huella mt-3" src="/assets/desk/general/logohd.png" alt="Logo huella">    
                    </a>
                </div>
                <div class="col-3 flex-row" style="padding:0 0 0 25px">
                    <a class="contact-menu-hv mt-4" href="tel:+9984840503">
                        <img class="icon-m-size" src="/assets/desk/iconos/telefono.png" alt="Icono telefono">
                    </a>
                    <div class="separador"></div>
                    <a class="contact-menu-hv mt-4" href="mailto:hola@huella-digital.mx">
                        <img class="icon-m-size" src="/assets/desk/iconos/avion.png" alt="Icono avion de papel">
                    </a>
                </div>
                <div class="col-4">
                    <a class="non-decoration" href="#contact">
                        <div class="button-contact mr-auto ml-auto FivoSans-Bold">
                            Solicitar Asesoría Gratuita
                        </div>
                    </a>
                </div>
                <div class="text-center ml-5 mt-mo-25" style="right:0;">
                    <img id="menu-open-mobile" class="button-menu btn" src="/assets/desk/iconos/menu-icono.svg" alt="Icono de menu">
                </div>
            </div>  
        </div>
        <!-- END MENU MOBILE -->
        <!-- Header 01 -->
        
        <!-- PopUP Menu -->
    <div class="pop-menu" id="pop-menu">
        <div id="menu-close" class="text-white btn-close">X</div>
        <ul>
            <li class="mt-3"><a class="contact-menu-hv border-menu FivoSans-Regular" href="{{url('/')}}">INICIO</a></li>
            <li class="mt-3"><a class="contact-menu-hv border-menu FivoSans-Regular" href="{{url('/nosotros')}}">NOSOTROS</a></li>
            <li class="contact-menu-hv mt-3"><span class="border-menu FivoSans-Regular">SERVICIOS <span>+</span></span>
                <ul class="sub-menu-item">
                    <li><a class="menu-item FivoSans-Regular" href="{{url('/agencia-de-marketing-digital-cancun')}}">Marketing digital</a></li>
                    <li><a class="menu-item FivoSans-Regular" href="{{url('/agencia-de-redes-sociales-cancun')}}">Redes sociales</a></li>
                    <li><a class="menu-item FivoSans-Regular" href="{{url('/publicidad-digital-cancun')}}">Publicidad digital</a></li>
                    <li><a class="menu-item FivoSans-Regular" href="{{url('/agencia-seo-posicionamiento-web-cancun')}}">Posicionamiento SEO</a></li>
                    <li><a class="menu-item FivoSans-Regular" href="{{url('/diseño-de-paginas-web-cancun')}}">Páginas web</a></li>
                </ul>
            </li>
            <li class="mt-3"><a class="contact-menu-hv border-menu FivoSans-Regular" href="{{route('blog')}}">BLOG</a></li>
            <li class="mt-3"><a class="contact-menu-hv border-menu FivoSans-Regular" href="{{url('/contacto')}}">CONTACTO</a></li>
        </ul>
    </div>

        @yield('content')
   
        <!-- Footer Section -->
        <footer class="back-footer">
            <div class="container">
                <div class="row padding-footer-mob">
                    <div class="col-lg-4 col-sm-4 col-md-4 br-white pt-3 border-mob">
                        <aside class="widget">
                            <h3 class="footer-title FivoSans-Bold text-center-mobile">¿Quiénes somos?</h3>
                            <p class="text-justify text-white FivoSans-Regular">Somos una agencia de Marketing Digital en México, desarrollamos distintas estrategias de Inbound Marketing encaminadas a vender más y mejorar el posicionamiento de nuestros clientes en Internet.</p>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 br-white pt-2 border-mob">
                        <aside class="widget">
                            <h3 class="text-white FivoSans-Bold">Servicios de Marketing Digital</h3>
                            <ul class="mt-3 list-footer-mobile">
                                <li class="list"><a href="{{url('/agencia-de-marketing-digital-cancun')}}" class="text-white FivoSans-Regular">Estrategias de Mercadotecnia digital</a></li>
                                <li class="list"><a href="{{url('/agencia-de-redes-sociales-cancun')}}" class="text-white FivoSans-Regular">Administración de Redes Sociales</a></li>
                                <li class="list"><a href="{{url('/publicidad-digital-cancun')}}" class="text-white FivoSans-Regular">Publicidad en Internet</a></li>
								<li class="list"><a href="{{url('/agencia-seo-posicionamiento-web-cancun')}}" class="text-white FivoSans-Regular">Posicionamiento SEO</a></li>
                                <li class="list"><a href="{{url('/diseño-de-paginas-web-cancun')}}" class="text-white FivoSans-Regular">Páginas web</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 br-white pt-3 border-mob">
                        <aside class="widget contact_widgets">
                            <h3 class="text-white FivoSans-Bold text-center-mobile">Contáctanos</h3>
                            <ul class="mt-3 padd-mob">
                                <li class="mt-2"><img class="icon-size-footer mr-1" src="/assets/desk/iconos/arroba.svg" alt="Icono de arroba"><a href="mailto:hola@huella-digital.mx" class="text-white FivoSans-Regular">Hola@huella-digital.mx</a></li>
                                <li class="mt-2"><img class="icon-size-footer mr-1" src="/assets/desk/iconos/telefono-icon-gris.svg" alt="Icono de telefono"><a href="tel:+9981539626" class="text-white FivoSans-Regular">+52 (998) 153 9626</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 pt-3 border-mob">
                        <aside class="widget social_widget">
                            <h3 class="text-white FivoSans-Bold text-center-mobile">social</h3>
                            <ul class="mt-3 padd-mob">
                                <li class="mt-1"><a class="text-white" href="https://www.facebook.com/huelladigitalmex/" rel="nofollow" target="_blank"><div class="icon-gray"><img class="icon-size-footer-fb FivoSans-Regular" src="/assets/desk/iconos/fb-footer.svg" alt="Icono facebook"></div> HuellaDigital</a></li>
                                <li class="mt-1"><a class="text-white" href="https://www.instagram.com/huelladigitalmex/" rel="nofollow" target="_blank"><div class="icon-gray"><img class="icon-size-footer FivoSans-Regular" src="/assets/desk/iconos/ig-footer.svg" alt="Icono instagram"></div> huelladigitalmex</a></li>
                                <!-- <li class="mt-1"><a class="text-white" href="https://twitter.com/HuellaDigit" rel="nofollow" target="_blank"><div class="icon-gray"><img class="icon-size-footer FivoSans-Regular" src="/assets/desk/iconos/tw-footer.svg" alt="Icono twitter"></div> HuellaDigit</a></li> -->
                                <li class="mt-1"><a class="text-white" href="https://www.linkedin.com/company/huelladigitalmx/" rel="nofollow" target="_blank"><div class="icon-gray"><img class="icon-size-footer FivoSans-Regular" src="/assets/desk/iconos/in-footer.svg" alt="Icono linkedin"></div> HuellaDigital</a></li>
                            </ul>
                        </aside>
                    </div>
				</div>
				<div class="row mt-4">
					<div class="col-xs-12 col-sm-12 col-m-2 col-xl-2 col-lg-2 text-center-mobile mt-3">
    					<a href="{{url('/aviso-de-privacidad')}}" class="text-white fs-s FivoSans-Medium ">Aviso de privacidad</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-m-2 col-xl-2 col-lg-2 text-center-mobile mt-3">
					    <a href="{{url('/uso-de-cookies')}}" class="text-white fs-s FivoSans-Medium ">Uso de cookies</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-m-3 col-xl-3 col-lg-3 text-center-mobile mt-3">
					    <a href="{{('/glosario-inbound-marketing')}}" class="text-white fs-s FivoSans-Medium ">Glosario Inbound Marketing</a>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center mt-3">
                        <div class="copyright text-white">
                            <p class="fs-s FivoSans-Medium">Hecho con <span> <img class="icon-heart" src="/assets/desk/iconos/corazon.svg" alt="Icono corazon"> </span> en Cancún</p>
                            HUELLA DIGITAL - AGENCIA DE MARKETING DIGITAL © | TODOS LOS DERECHOS RESERVADOS
                        </div>
                    </div>
                </div>
            </div>
            <!-- Back To Top -->
            <a id="backToTop" href="#" class="showit"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a>
            <!-- Back To Top -->
        </footer>
        <!-- Footer Section -->

		<!-- WhatsApp -->
        <a rel="nofollow" style="text-decoration:none;" href="https://wa.me/9981539626">
            <img class="chat-icon" src="/assets/desk/iconos/whatsapp-icon.png" alt="icono chat whatsapp">
        </a>
        <!-- WhatsApp -->

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "{{ config('app.name') }}",
                "url": "https://huella-digital.mx",
                "address": "",
                "sameAs": [
                    "{{ config('app.url_facebook') }}",
                    "{{ config('app.url_instagram') }}",
                    "{{ config('app.url_twitter') }}",
                    "{{ config('app.url_linkedin') }}"
                ]
            }
		</script>
        
		<script type="text/javascript">
			// var _smartsupp = _smartsupp || {};
			// _smartsupp.key = '63488a737dc701c449122a777e72a08636f98f74';
			// window.smartsupp||(function(d) {
			// var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
			// s=d.getElementsByTagName('script')[0];c=d.createElement('script');
			// c.type='text/javascript';c.charset='utf-8';c.async=true;
			// c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
			// })(document);
		</script>

        <script src="js/main.js"></script>
        <script type="text/javascript">

            $(function(){
                if(screen.width > 520){
                    $(window).scroll(function(){
                        if($(window).scrollTop() > 20){
                            $('#header').hide()
                            $('#header-hide').show()                        
                        }
                        else if($(window).scrollTop() < 20){
                            $('#header').show()
                            $('#header-hide').hide()
                        }
                    })
                }
              })


            $(document).ready(function() {
                $('a[href^="#"]').click(function() {
                    var destino = $(this.hash);
                    if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                    }
                    if (destino.length == 0) {
                    destino = $('html');
                    }
                    $('html, body').animate({ scrollTop: destino.offset().top -250 }, 500);
                    return false;
                });
            });
              
            let openMenu = document.getElementById('menu-open'),
            closeMenu = document.getElementById('menu-close'),
            popMenu = document.getElementById('pop-menu'),
            popMenuMobile = document.getElementById('menu-open-mobile'),
            contadorClose = 0
        
            openMenu.addEventListener('click', e =>{
                e.preventDefault()
                    popMenu.style = "display:block"
            })
            closeMenu.addEventListener('click', e =>{
                e.preventDefault()
                    popMenu.style = "display:none"
            })
            popMenuMobile.addEventListener('click', e =>{
                e.preventDefault()
                    if(contadorClose == 0){
                        popMenu.style = "display:block"
                        contadorClose = contadorClose + 1
                    }else if(contadorClose == 1){
                        popMenu.style = "display:none"
                        contadorClose = contadorClose - 1
                    }
            })
        </script>
        @stack('scripts')

        
    </body>
</html>
