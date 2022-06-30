<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/nosotros', function (){
    return view('nosotros');
});
Route::get('/agencia-de-marketing-digital-cancun',function(){
    return view('digital-marketing');
});
Route::get('/agencia-de-redes-sociales-cancun', function(){
    return view('rrss');
});
Route::get('/publicidad-digital-cancun', function(){
    return view('digital-advertising');
});
Route::get('/agencia-seo-posicionamiento-web-cancun', function(){
    return view('seo-positioning');
});
Route::get('/diseño-de-paginas-web-cancun', function(){
    return view('web-desing');
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
Route::get('/garantia',function(){
    return view('warranty');
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
