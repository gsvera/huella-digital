@extends('layouts.layout3')
@section('content')
<div class="mt-5">
    <h1 class="text-center title-thanks FivoSans-Bold">¡GRACIAS POR <br class="display-min"> ESCRIBIRNOS!</h1>
    <div class="content-thanks text-center">
        <p class="text-center text-white fs-medium-thanks">
            <strong class="FivoSans-Bold">Tu mensaje fue enviado correctamente <br> y muy pronto será respondido,</strong><br>
            <span class="FivoSans-Regular">así que te sugerimos estar al pendiente de tu bandeja de entrada o bandeja de correo no deseado</span><span class="FivoSans-Oblique"> (SPAM).</span>
        </p>
        <img class="mar-top-bot" src="/assets/desk/iconos/wave.svg" alt="Liea decorativa">
        <p class="text-center text-white FivoSans-Regular">
            No olvides seguirnos en nuestras redes sociales:
        </p>
        <div>
            <ul class="list-thanks-social">
                <li class="ml-1 mr-1"><a class="text-white" href="https://www.facebook.com/huelladigitalmex/" target="_blank"><div class="icon-gray-thanks"><img class="icon-size-thanks-fb" src="/assets/desk/iconos/fb-footer.svg" alt="Icono facebook"></div></a></li>
                <li class="ml-1 mr-1"><a class="text-white" href="https://www.instagram.com/huelladigitalmex/" target="_blank"><div class="icon-gray-thanks"><img class="icon-size-thanks" src="/assets/desk/iconos/ig-footer.svg" alt="Icono instagram"></div></a></li>
                <!-- <li class="ml-1 mr-1"><a class="text-white" href=""><div class="icon-gray-thanks"><img class="icon-size-thanks" src="/assets/desk/iconos/tw-footer.svg" alt="Icono twitter"></div></a></li> -->
                <li class="ml-1 mr-1"><a class="text-white" href="https://www.linkedin.com/company/huelladigitalmx/" target="_blank"><div class="icon-gray-thanks"><img class="icon-size-thanks" src="/assets/desk/iconos/in-footer.svg" alt="Icono linkedin"></div></a></li>
            </ul>
        </div>
        <img class="logo-huella-thanks display-max" src="/assets/desk/formulario-agradecimiento/huella-icon.svg" alt="Logo huella digital">
        <img class="display-min logo-right" src="/assets/desk/formulario-agradecimiento/circle-logo.svg" alt="Logo huella digital">
    </div>
</div>



@endsection