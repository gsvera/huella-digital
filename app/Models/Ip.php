<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ip extends Model
{
    protected $table = 'tbl_ip';
    public $timestamps = false;

    public function _GetIp($ip) {
        $resp = new Respuesta;
        $currentDate = Carbon::now();
        try{
            $ip = $this->where('ip', $ip)->orderBy('expiration_date', 'DESC')->first();
            if(isset($ip)) {
                $ipDate = Carbon::parse($ip->expiration_date);
                if($currentDate->lessThanOrEqualTo( $ipDate->addDays(365))) {
                    $resp->data = $ip;
                }
            }
        } catch (Exception $e) {
            $resp->error = true;
            $resp->message = "Ocurrio un error, intentelo mas tarde";
            // $resp->message = $ex->getMessage();
        }
        return $resp;
    }
    public function _saveIp($ip) {
        $currentDate = Carbon::now();   
        $newIp = new Ip;
        $newIp->ip = $ip;
        $newIp->expiration_date = $currentDate;
        $newIp->save();
    }
}
