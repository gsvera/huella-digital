<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SettingRecaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use Exception;

class SendmailController extends Controller
{
    
    public function Send(Request $request){
        
        $validator = $request->validate([
            'g-recaptcha-response' => 'required'
        ],[
            'required' => 'El reCAPTCHA es inválido'
        ]);
     
        $regex = "/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/" ;
        
        if($request->nombre != null && $request->celPhone !=null && $request->message != null){
            if(preg_match($regex,$request->email)){
    
                $configCaptcha = new SettingRecaptcha();
                
                $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => '6LcvUZgaAAAAAGG4TrcF5FS6ehMLq9MiK5c5hemQ',
                    'response' => $request['g-recaptcha-response'] 
                ]);
    
                $body = json_decode($response->getBody());
    
                if (!$body->success){
                    return back()->with('messageError','El reCAPTCHA es inválido');
                }
    
                $datosMessage = ["nombre"=>$request->nombre,
                                "email"=>$request->email,
                                "celPhone"=>$request->celPhone,
                                "message"=>$request->message];
                    Mail::send('viewMail.sendMail',['item'=>$datosMessage],function($mensaje){
                    $mensaje->to("programacion@huella-digital.mx")->subject("Solicitud de información");
                });
                return view('gracias');
            }else{
    
                return back()->with('messageError','Debe escribir un correo valido');
            }
        }
            return back()->with('messageError','Debe llenar todos los campos');
    }
}
