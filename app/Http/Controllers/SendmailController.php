<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SettingRecaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use App\Models\Captcha;
use App\Models\Ip;

use Exception;

class SendmailController extends Controller
{
    
    public function Send(Request $request){
        
        // $validator = $request->validate([
        //     'g-recaptcha-response' => 'required'
        // ],[
        //     'required' => 'El reCAPTCHA es inválido'
        // ]);
        $captcha = new Captcha;
        $ip = new Ip;
        $ipGet = file_get_contents("https://api64.ipify.org?format=json");
        $currentIp = json_decode($ipGet);
     
        $regex = "/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/" ;
        if($request->nombre != null && $request->celphone !=null && $request->message != null){
            if(preg_match($regex,$request->email)){

                $validIp = $ip->_GetIp('2a02:4780:b:859:0:73d:c731:7');

                if($validIp->getResult()['data'] != null) {
                    // return back()->with('messageError',$validIp->getResult()['data']->ip)->withFragment('message');
                    return view('gracias');
                } else {
                    $ip->_saveIp($currentIp->ip);
                }

                $isCaptcha =  $captcha->_GetCaptcha($request->code);

                if($isCaptcha['error'] == true) {
                    return back()->with('messageError','Capcha invalido')->withFragment('message');
                }
    
                // $configCaptcha = new SettingRecaptcha();
                
                // $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
                //     'secret' => '6LcvUZgaAAAAAGG4TrcF5FS6ehMLq9MiK5c5hemQ',
                //     'response' => $request['g-recaptcha-response'] 
                // ]);
    
                // $body = json_decode($response->getBody());
    
                // if (!$body->success){
                //     return back()->with('messageError','El reCAPTCHA es inválido');
                // }
    
                $datosMessage = ["nombre"=>$request->nombre,
                                "email"=>$request->email,
                                "celPhone"=>$request->celphone,
                                "service"=>$request->service,
                                "message"=>$request->message];
                    Mail::send('viewMail.sendMail',['item'=>$datosMessage],function($mensaje){
                    $mensaje->to("paolap@huella-digital.mx")->subject("Solicitud de información");
                });
                return view('gracias');
            }else{                
                return back()->with('messageError','Debe escribir un correo valido')->withFragment('message');
            }
        }
        return back()->with('messageError','Debe llenar todos los campos')->withFragment('message');
        
    }
}
