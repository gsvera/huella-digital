@extends('layouts.layout-huella-2')
@section('meta')
    <meta name="robots" content="noindex,nofollow">
@endsection
@section('content')
<div class="content-page">
    <div class="col-md-7 text-center mx-auto">
        <h1 class="font-weight-bold">Política de uso de cookies</h1>
    </div>
</div>
<div class="content-page mt-5">
    <div>
        <h3 class="font-weight-bold">Tu privacidad es importante para nosotros.</h3>
        <p>
           <a href="{{url('/')}}" class="text-deco-under">Huella Digital</a> emplea cookies utilizadas para mejorar la funcionalidad y la 
           navegación en nuestra página de Internet, así como para fines analíticos y publicitarios, 
           por lo tanto, nuestra finalidad es informarte de forma clara y completa sobre el funcionamiento 
           y finalidad de dichas cookies.
           <br><br>
           <a href="{{url('/')}}" class="text-deco-under">Huella Digital</a> no almacena información sensible de identificación 
           personal como tu dirección física, contraseña, datos de tu tarjeta de crédito o débito.
        </p>
    </div>
    <div class="my-5">
        <h3>¿Qué es una Cookie?</h3>
        <p>
            Una “cookie” es un pequeño código de texto que se almacena en tu navegador cuando navegas por 
            la mayoría de los sitios en internet.
        </p>
    </div>
    <div class="my-5">
        <h3 >Procedencia de Cookies</h3>
        <p >
            Huella Digital utiliza cookies de terceros, con diferentes finalidades, concretamente.
            <br><br>
            Cookies Técnicas: Permiten navegar a través de la Plataforma y utilizar los servicios en ella disponibles 
            como, por ejemplo, controlar la comunicación de datos, almacenar contenidos, personalizar el idioma, los 
            tests de comprobación de formato, compartir contenidos a través de redes sociales de acuerdo con los 
            intereses del usuario, acelerar la carga de la página, etc. tales como Facebook y LinkedIn.
            <br><br>
            Cookies de Facebook: Ver más información en su <a href="https://es-es.facebook.com/policies/cookies/" class="text-deco-under">política de cookies.</a>
            <br><br>
            Cookies Analíticas y Publicitarias: Esta web utiliza servicios de publicidad y análisis, proveniente de 
            la empresa Google ayudándonos a analizar el uso que hacen los visitantes del sitio web y mejorar la 
            usabilidad de este, en ningún caso se asocian a datos que pudieran llegar a identificar al usuario. 
            Puedes consultar <a href="https://policies.google.com/technologies/cookies?hl=es" class="text-deco-under">aquí <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a> el tipo de cookies utilizadas por Google 
            en recopilación de datos.
            <br><br>
            A continuación, tienes información sobre las cookies de las redes sociales que utiliza esta web en sus 
            propias políticas de cookies:
            <br><br>
            Cookies de Linkedin, ver más información en su <a href="https://es.linkedin.com/legal/cookie-policy" class="text-deco-under">política de cookies <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a>
            <br>
            Cookies de Youtube, ver más información en su <a href="https://www.youtube.com/intl/es/about/policies/#community-guidelines" class="text-deco-under">política de cookies <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a>
        </p>
    </div>
    <div class="my-5">
        <h3>¿Cómo eliminar las cookies?</h3>
        <p>
            Para eliminar sus cookies debe ir a la configuración de su navegador, allí podrá buscar las asociadas al 
            dominio en cuestión y proceder a su eliminación. 
            <br><br>
            Configuración de cookies para <a href="https://support.google.com/accounts/answer/61416?co=GENIE.Platform%3DDesktop&hl=es-419" class="text-deco-under">Google Chrome <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a>
            <br>
            Configuración de cookies para <a href="https://support.apple.com/es-mx/HT201265" class="text-deco-under">Apple Safari <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a>
            <br>
            Configuración de cookies para <a href="https://support.microsoft.com/es-es/topic/eliminar-y-administrar-cookies-168dab11-0753-043d-7c16-ede5947fc64d" class="text-deco-under">Internet Explorer <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a>
            <br>
            Configuración de cookies para <a href="https://support.mozilla.org/es/kb/los-sitios-web-dicen-que-las-cookies-estan-bloquea" class="text-deco-under">Mozilla Firefox <img src="/assets/icon/icon-link.svg" alt="Icono de link" class="link-icon"></a>
        </p>
    </div>
</div>
<x-box-contact />
@endsection