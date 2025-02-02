<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\CaptchaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = "Agencia de Marketing Digital en México – Huella digital ®";
    $description = "Agencia de marketing digital en México, especializados en Ventas y Publicidad: Google, Redes Sociales y Posicionamiento SEO";
    $keywords = "agencia de marketing digital en México, posicionamiento web en México, agencia de redes sociales en México, agencian de publicidad en México, agencia de mercadotecnia digital en México, agencia de publicidad digital en México, agencia de marketing en México";
    return view('home')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/nosotros', function (){
    return view('nosotros');
});
Route::get('/agencia-de-marketing-digital-cancun',function(){
    $title = "Agencia de Marketing Digital en Cancún – Huella Digital ®";
    $description = "Con 10 años de experiencia, hemos ayudado a empresa de Cancún a convertir seguidores en clientes ¡Conoce nuestra metodología!";
    $keywords = "agencia de marketing digital en Cancún, posicionamiento web en Cancún, agencia de redes sociales en Cancún, publicidad en internet, agencia de mercadotecnia digital en Cancún, agencia de publicidad digital en Cancún, agencia de marketing en Cancún";
    return view('digital-marketing')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/agencia-de-redes-sociales-cancun', function(){
    $title = "Agencia de Redes Sociales en Cancún – Huella digital ® ";
    $description = "Consigue clientes con contenido atractivo en tus redes sociales. Servicio de Community manager y publicidad digital ¡Contáctanos!";
    $keywords = "agencia de redes sociales en Cancún, publicidad en redes sociales, Community manager cancun, administración de redes sociales en Cancún, cursos de redes sociales  en cancún";
    return view('rrss')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/publicidad-digital-cancun', function(){
    $title = "Agencia de Publicidad Digital en Cancún – Huella digital ®";
    $description = "Desarrollamos anuncios en Facebook, Google, TikTok y más para conectar con tu audiencia en Cancún. Potencia tu marca. ¡Contáctanos ahora!";
    $keywords = "agencia de publicidad en Cancún, publicidad en redes sociales, agencia de publicidad digital en Cancún, publicidad digital en Cancún, SEM Cancún";
    return view('digital-advertising')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/agencia-seo-posicionamiento-web-cancun', function(){
    $title = "Agencia de posicionamiento web, SEO en Cancún – Huella digital ®";
    $description = "Posicionaremos tu página web en los primeros lugares. Servicio de contenidos, analítica web y conversiones ¡Conócenos!";
    $keywords = "agencia de posicionamiento web en Cancún, agencia SEO en Cancún, SEO Cancún, especialista SEO Cancún, posicionamiento web en Cancún, SEO en Cancún";
    return view('seo-positioning')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
}); 
Route::get('/diseño-de-paginas-web-cancun', function(){
    $title = "Diseño de páginas web en Cancún – Huella digital ®";
    $description = "Desarollo de sitios web profesionales y tiendas en línea. Diseño adaptado a celular ¡Mejora  tu presencia digital ahora!";
    $keywords = "Desarrollo de páginas web, páginas web en Cancún, diseño de páginas web en Cancún, desarrollo de sitios web en Cancún, comercio electrónico en Cancún";
    return view('web-desing')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/aviso-de-privacidad', function(){
    return view('privacy');
});
Route::get('/uso-de-cookies',function(){
    return view('cookies');
});
Route::get('/glosario-inbound-marketing',function(){
    return view('glosary');
});

Route::get('/contacto',function(){
    return view('layouts.layout2');
});
Route::permanentRedirect('/blog', '/blog')->name('blog');
Route::post('/gracias', 'SendmailController@Send')->name('gracias');
Route::get('/gracias',function(){
    return view('home');
});
Route::get('/correo', function(){
    return view('viewMail.sendMail');
});

Route::get('/cliente-1', function() {
    return view('proyects.tecnicopy');
});
Route::get('/cliente-2', function() {
    return view('proyects.bubble-bbq');
});
Route::get('/cliente-3', function() {
    return view('proyects.ctr-international');
});

Route::post('/valid-password',[TokenController::class, 'ValidToken']);
Route::post('/checked-captcha', [CaptchaController::class, 'SaveCaptcha']);
Route::delete('/remove-checked-captcha', [CaptchaController::class, 'RemoveCaptcha']);