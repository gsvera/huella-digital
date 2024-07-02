<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TokenProyects extends Model
{
    protected $table = 'tbl_token_proyects';
    public $timestamps = false;

    public function _GetToken($token, $currentDate) {
        $resp = new Respuesta;
        try{
            $currentDateParse = Carbon::parse($currentDate);
            $objToken = $this->where('token', $token)->first();

            if(!is_null($objToken) && !empty($objToken)) {
                $dateToken = Carbon::parse($objToken->expiration_date);

                if($currentDateParse->lessThanOrEqualTo($dateToken)){
                    $resp->error = false; 
                    $resp->message = 'Correcto';
                }
                else {
                    $resp->error = true;
                    $resp->message = 'La contraseña ha expirado';
                }
            } else {
                $resp->error = true;
                $resp->message = 'Contraseña incorrecta';
            }
        } catch(Exception $e) {
            $resp->error = true;
            $resp->message = $e->getMessage();
        }
        return $resp;
    }
}
