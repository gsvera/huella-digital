<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Captcha extends Model
{
    protected $table = 'tbl_captcha';
    public $timestamps = false;

    public function _SaveCaptcha ($code) {
        $resp = new Respuesta;
        try{
            $newCaptcha = new Captcha;
            $newCaptcha->code = $code;
            $newCaptcha->active = true;
            $newCaptcha->save();
            $resp->error = false;
            $resp->Message = "success";
        } catch(Exception $ex) {
            $resp->error = true;
            $resp->message = "Ocurrio un error, intentelo mas tarde";
            // $resp->message = $ex->getMessage();
        }
        return $resp;
    }
    
    public function _GetCaptcha($code) {
        $resp = new Respuesta;
        try{
            $captcha = $this->where('code', $code)->first();
            if($captcha) {
                $resp->error = false;
            }
            else {
                $resp->error = true;
            }
        } catch(Exception $ex) {
            $resp->error = true;
            $resp->message = "Ocurrio un error, intentelo mas tarde";
            // $resp->message = $ex->getMessage();
        }
        return $resp;
    }

    public function _DeleteCaptcha($code) {
        $resp = new Respuesta;
        try{
            $captcha = $this->where('code',$code)->first();
            $captcha->delete();
            $resp->error = false;
            $resp->Message = "success";
        } catch(Exception $ex) {
            $resp->error = true;
            $resp->message = "Ocurrio un error, intentelo mas tarde";
            // $resp->message = $ex->getMessage();
        }
        return $resp;
    }
}
