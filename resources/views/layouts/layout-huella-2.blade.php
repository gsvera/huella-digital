<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
		<meta name="facebook-domain-verification" content="9xhlb3pvdjvzitazhm9cpkcyo0uwmg" />

        <title>➝ Agencia de Marketing Digital México – Huella digital ®</title>
        <meta name="description" content="Agencia de marketing digital líder en México, especializada en Ventas y Publicidad: Google, redes sociales y posicionamiento SEO"/>
        <meta name="keywords" content="agencia de marketing digital en México, posicionamiento web en México, agencia de redes sociales en México, agencian de publicidad en México, agencia de mercadotecnia digital en México, agencia de publicidad digital en México, agencia de marketing en México" />
        <link rel="canonical" href="https://huella-digital.mx/" />

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
        @yield('meta')

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="/favicon.png">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MF7W7QX');</script>
		<!-- End Google Tag Manager -->

        <script type="text/javascript">
            window.CSRF_TOKEN = '{{ csrf_token() }}';
        </script>

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF7W7QX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Header 01 -->
        <header>
            <div class="pb-0 display-max-menu header-menu" id="header">
                <div class="content-page row content-menu">
                    <div class="col-md-3 content-logo">
                        <a href="{{url('/')}}">
                            <img class="logo-fs" src="/assets/logo/logo-huella-digital.svg" alt="Logo huella digital">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <ul class="menu-web">
                            <li><a class="menu-link" href="{{url('/nosotros')}}">Nosotros</a></li>
                            <li>
                                Servicios
                                <div class="sub-menu sub-menu-service">
                                    <div class="item-menu">
                                        <a href="{{url('/agencia-de-marketing-digital-cancun')}}"><img src="/assets/icon/icon-laptop-black.svg" alt="Icono laptop"> Marketing digital</a>
                                    </div>
                                    <div class="item-menu">
                                        <a href="{{url('/agencia-de-redes-sociales-cancun')}}"><img src="/assets/icon/icon-cell-phone-black.svg" alt="Icono Telefono"> Redes Sociales</a>
                                    </div>
                                    <div class="item-menu">
                                        <a href="{{url('/publicidad-digital-cancun')}}"><img src="/assets/icon/icon-screen-black.svg" alt="Icono pantalla"> Publicidad Digital</a>
                                    </div>
                                    <div class="item-menu">
                                        <a href="{{url('/agencia-seo-posicionamiento-web-cancun')}}"><img src="/assets/icon/icon-seo-black.svg" alt="Icono posicionamiento SEO"> Posicionamiento SEO</a>
                                    </div>
                                    <div class="item-menu">
                                        <a href="{{url('/diseño-de-paginas-web-cancun')}}"><img src="/assets/icon/icon-web-black.svg" alt="Icono pagina web"> Páginas web</a>
                                    </div>
                                </div>
                            </li>
                            <li><a class="menu-link" href="{{route('blog')}}">Blog</a></li>
                            <li>
                                Portafolio
                                <div class="sub-menu sub-menu-portafolio">
                                    <div class="item-menu item-click" onclick="viewProyect('1')">
                                        <span>TECNICOPY</span>
                                    </div>
                                    <div class="item-menu item-click" onclick="viewProyect('2')">
                                        <span>BUBBLE BBQ BOATS</span>
                                    </div>
                                    <div class="item-menu item-click" onclick="viewProyect('3')">
                                        <span>CTR INTERNATIONAL</span>
                                    </div>
                                </div>
                            </li>
                            <li><a class="menu-link" href="#form-contact">Contacto</a></li>
                            <li><a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink">Asesoría gratuita</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-menu-mobile display-min" id="header-mobile">
                <div class="content-menu-mobile">
                    <div class="content-logo">
                        <a href="{{url('/')}}">
                            <img class="" src="/assets/logo/logo-huella-digital.svg" alt="Logo huella digital">
                        </a>
                    </div>
                    <div>
                        <a rel="nofollow" href="https://wa.me/9981539626" class="btn-menu-pink" id="btn-contact-mobile">Asesoría gratuita</a>
                        <button onclick="showMenuMobile(this)" type="button" class="btn-menu-mobile"><img src="/assets/icon/icon-menu-hamburguesa.svg" alt="Icono Menu"></button>
                    </div>
                </div>
                <div class="d-none menu-mobile" id="menu-mobile">
                    <div class="menu-link-mobile">
                        <a class="font-weight-bold" href="{{url('/nosotros')}}">Nosotros</a>
                    </div>
                    <div class="menu-link-mobile">
                        <div class="d-flex" onclick="showSubMenuMobile(this)">
                            <div class="font-weight-bold col-6 p-0">
                                Servicios
                            </div>
                            <div class="col-6 d-flex justify-end">
                                <img id="btn-submenu-arrow" style="width: 20px;" src="/assets/icon/icon-arrow-right.svg" alt="Flecha">
                            </div>
                        </div>
                        <div class="sub-menu-mobile d-none" id="sub-menu-mobile">
                            <div class="menu-link-mobile">
                                <a href="{{url('/agencia-de-marketing-digital-cancun')}}"><img src="/assets/icon/icon-laptop-black.svg" alt="Icono laptop"> Marketing digital</a>
                            </div>
                            <div class="menu-link-mobile">
                                <a href="{{url('/agencia-de-redes-sociales-cancun')}}"><img src="/assets/icon/icon-cell-phone-black.svg" alt="Icono Telefono"> Redes Sociales</a>
                            </div>
                            <div class="menu-link-mobile">
                                <a href="{{url('/publicidad-digital-cancun')}}"><img src="/assets/icon/icon-screen-black.svg" alt="Icono pantalla"> Publicidad Digital</a>
                            </div>
                            <div class="menu-link-mobile">
                                <a href="{{url('/agencia-seo-posicionamiento-web-cancun')}}"><img src="/assets/icon/icon-seo-black.svg" alt="Icono posicionamiento SEO"> Posicionamiento SEO</a>
                            </div>
                            <div class="menu-link-mobile">
                                <a href="{{url('/diseño-de-paginas-web-cancun')}}"><img src="/assets/icon/icon-web-black.svg" alt="Icono pagina web"> Páginas web</a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-link-mobile">
                        <a class="font-weight-bold" href="{{route('blog')}}">Blog</a>
                    </div>
                    <div class="menu-link-mobile">
                        <div class="d-flex" onclick="showSubMenuMobilePortafolio(this)">
                            <div class="font-weight-bold col-6 p-0">
                                Portafolio
                            </div>
                            <div class="col-6 d-flex justify-end">
                                <img id="btn-submenu-arrow-port" style="width: 20px;" src="/assets/icon/icon-arrow-right.svg" alt="Flecha">
                            </div>
                        </div>
                        <div class="sub-menu-mobile d-none" id="sub-menu-mobile-port">
                            <div class="menu-link-mobile" onclick="viewProyect('1')">
                                <span>TECNICOPY</span>
                            </div>
                            <div class="menu-link-mobile" onclick="viewProyect('2')">
                                <span >BUBBLE BBQ BOATS</span>
                            </div>
                            <div class="menu-link-mobile" onclick="viewProyect('3')">
                                <span >CTR INTERNATIONAL</span>
                            </div>                            
                        </div>
                    </div>
                    <div class="menu-link-mobile">
                        <a class="font-weight-bold" href="#">Contacto</a>
                    </div>
                    <div class="menu-link-mobile">
                        <a rel="nofollow" href="https://wa.me/9981539626" style="width:100%; display: block;" class="btn-menu-pink">Asesoría gratuita</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- PopUP Menu -->

        @yield('content')

        <!-- Footer Section -->
        <footer class="box-t">
            <div class="content-footer-page mt-5">
                <div class="footer-social">
                    <div class="mb-4">
                        <img src="/assets/logo/logo-huella-digital.svg" alt="Logo huella digital">
                    </div>
                    <div class="mb-4">
                        <a href="https://www.facebook.com/huelladigitalmex/" rel="nofollow" target="_blank" style="text-decoration: none;">
                            <img src="/assets/icon/facebook.svg" alt="Icono fecabook">
                        </a>
                        <a href="https://www.instagram.com/huelladigitalmex/" rel="nofollow" target="_blank" style="text-decoration: none;">
                            <img src="/assets/icon/instagram.svg" alt="Icono instagram">
                        </a>
                        <a href="https://www.linkedin.com/company/huelladigitalmx/" rel="nofollow" target="_blank" style="text-decoration: none;">
                            <img src="/assets/icon/linkedin.svg" alt="Icono linkedin">
                        </a>
                    </div>
                </div>
                <div class="d-flex-responsive mb-3">
                    <div class="col-12 col-md-3 mb-4 pl-sl-0">
                        <h5>¿Quiénes somos?</h5>
                        <p>Somos una agencia de Marketing Digital en México, desarrollamos distintas estrategias de Inbound Marketing encaminadas a vender más y mejorar el posicionamiento de nuestros clientes en Internet.</p>
                    </div>
                    <div class="col-12 col-md-3 mb-4 pl-sl-0">
                        <h5>Servicios de Marketing Digital </h5>
                        <ul class="pl-4">
                            <li class="mb-2"><a href="{{url('/agencia-de-marketing-digital-cancun')}}" class="link-footer">Estrategias de Marketing Digital</a></li>
                            <li class="mb-2"><a href="{{url('/agencia-de-redes-sociales-cancun')}}" class="link-footer">Administración de Redes Sociales</a></li>
                            <li class="mb-2"><a href="{{url('/publicidad-digital-cancun')}}" class="link-footer">Publicidad en Internet</a></li>
                            <li class="mb-2"><a href="{{url('/agencia-seo-posicionamiento-web-cancun')}}" class="link-footer">Posicionamiento SEO</a></li>
                            <li class="mb-2"><a href="{{url('/diseño-de-paginas-web-cancun')}}" class="link-footer">Páginas Web</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 mb-4">
                        <h5>Contáctanos</h5>
                        <p class="mb-2">
                            <a href="mailto:hola@huella-digital.mx" class="link-footer" id="icon-footer-email">
                                <img src="/assets/icon/icon-email-black.svg" style="width: 24px; height: 24px;" alt="Icono de email"> hola@huella-digital.mx
                            </a>
                        </p>
                        <p class="mb-2">
                            <a href="tel:+9981539626" class="link-footer" id="icon-footer-phone">
                                <img src="/assets/icon/icon-phone-black.svg" style="width: 24px; height: 24px;" alt="Icono de telefono"> +52 (998) 153 9626
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-md-3 mb-4">
                        <h5>Recursos</h5>
                        <p class="mb-2"><a href="{{('/glosario-inbound-marketing')}}" class="link-footer">Glosario Inbound Marketing</a></p>
                        <p class="mb-2"><a href="{{url('/aviso-de-privacidad')}}" class="link-footer">Aviso de privacidad</a></p>
                        <p class="mb-2"><a href="{{url('/uso-de-cookies')}}" class="link-footer">Uso de cookies</a></p>
                    </div>
                </div>
                <div class="mb-end-foot">
                    <p>Hecho con <img src="/assets/icon/icon-heart-pink.svg" alt="Corazon"> en Cancún</p>
                    <p>© 2024 Huella Digital - Agencia de Marketing Digital  | Todos los derechos reservados</p>
                    <a class="d-none" href="https://www.linkedin.com/in/guillermo-salvador-vera-morales-22712b192/">Created by Guillermo Vera</a>
                </div>
            </div>            
            <!-- Back To Top -->
            <a id="backToTop" href="#" class="showit"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a>
            <!-- Back To Top -->
        </footer>
        <!-- Footer Section -->

        <!-- MODAL PARA LOGIN DE PROYECTOS -->
        <x-modal-login-proyects />
        <!-- END MODAL PARA LOGIN DE PROYECTOS -->

		<!-- WhatsApp -->
        <a rel="nofollow" style="text-decoration:none;" href="https://wa.me/9981539626">
            <img class="chat-icon" src="/assets/icon/whatsapp-icon.png" alt="icono chat whatsapp">
        </a>
        <!-- WhatsApp -->
        <!-- recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
        <!-- end recaptcha -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/main-huella.js"></script>
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
        
		<!-- <script type="text/javascript">
			var _smartsupp = _smartsupp || {};
			_smartsupp.key = '63488a737dc701c449122a777e72a08636f98f74';
			window.smartsupp||(function(d) {
			var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
			s=d.getElementsByTagName('script')[0];c=d.createElement('script');
			c.type='text/javascript';c.charset='utf-8';c.async=true;
			c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
			})(document);
		</script> -->

        <script type="text/javascript">
            // let dato = document.getElementById('email'),
            // notification = document.getElementById('emailError')

            // dato.addEventListener('change', e =>{
            //     e.preventDefault()
            //     valExpres()
            //     })
            function valExpres(){
                validEmail = dato.value
                boxError = document.getElementById('emailError'),
                regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
                if(!regex.test(validEmail)){
                    boxError.innerHTML = `<div id="messageError" class="errorDiv">Ingrese un correo electronico correcto
                                        <button onclick="close()" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        cerrar
                                        </button>
                                    </div>`
                }else{
                    closeAlert(boxError)
                }
            }
            function closeAlert(boxError){
                boxError.style.display = "none"
            }
            function close(n){
                let notification = document.getElementById('emailError')
                notification.style.display = "none"
            }
                

            
            $(function(){
                if(screen.width > 520){
                    $(window).scroll(function(){
                        if($(window).scrollTop() > 100){
                            $('#header').css({'position': 'fixed'});
                        }
                        else if($(window).scrollTop() < 100){
                            $('#header').css({'position': 'relative'});
                        }
                    })
                }
                if(screen.width < 520){                    
                    $(window).scroll(function(){
                        if($(window).scrollTop() > 100){
                            $('#header-mobile').css({'position': 'fixed'});
                        }
                        else if($(window).scrollTop() < 100){
                            $('#header-mobile').css({'position': 'relative'});
                        }
                    })
                }
              })

            let iconFooterEmail = document.getElementById('icon-footer-email');
            let iconFooterPhone = document.getElementById('icon-footer-phone');

            iconFooterEmail.addEventListener('mouseenter', () => {
                changeImgFooter(iconFooterEmail, 'black', 'pink');
            });
            iconFooterEmail.addEventListener('mouseleave', () => {
                changeImgFooter(iconFooterEmail, 'pink', 'black');
            });

            iconFooterPhone.addEventListener('mouseenter', () => {
                changeImgFooter(iconFooterPhone, 'black', 'pink');
            });
            iconFooterPhone.addEventListener('mouseleave', () => {
                changeImgFooter(iconFooterPhone, 'pink', 'black');
            });

            function changeImgFooter(elementFather, current, replace) {
                let icon = elementFather.getElementsByTagName('img');
                icon[0]?.setAttribute('src', icon[0]?.src.replace(current, replace));
            }

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
              
        </script>
        @stack('scripts')        
    </body>
</html>
