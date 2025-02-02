<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Captcha;
use App\Models\Respuesta;

class CaptchaController extends Controller
{
    public function SaveCaptcha () {
        $resp = new Respuesta;
        $captcha = new Captcha;
        try{
            $resp = $captcha->_SaveCaptcha(request('code'));
        } catch(Exception $ex) {
            $resp->error = true;
            $resp->message = "Ocurrio un error, intentelo mas tarde";
            // $resp->message = $ex->getMessage();
        }
        return response()->json($resp->getResult());
    }
    public function RemoveCaptcha() {
        $resp = new Respuesta;
        $captcha = new Captcha;
        try{
            $resp = $captcha->_DeleteCaptcha(request('code'));
        } catch(Exception $ex) {
            $resp->error = true;
            $resp->message = "Ocurrio un error, intentelo mas tarde";
            // $resp->message = $ex->getMessage();
        }
        return response()->jsoN($resp->getResult());
    }
}
