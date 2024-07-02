<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TokenProyects;
use App\Models\Respuesta;

class TokenController extends Controller
{
    public function ValidToken(){
        $resp = new Respuesta;
        $token = new TokenProyects;
        try{
            $resp = $token->_GetToken(request('token'), request('currentDate'));            
        } catch(Exception $e) {
            $resp->error = true;
            $resp->message = $e->getMessage();
        }

        return response()->json($resp->getResult());
    }
}
