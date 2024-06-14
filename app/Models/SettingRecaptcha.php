<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingRecaptcha extends Model
{
    public $mailData = [];
    public $llavePublica = '6LcvUZgaAAAAAJpJkaAHegjjCf47KrYc_TliU5gm';
    public $llavePrivada = '6LcvUZgaAAAAAGG4TrcF5FS6ehMLq9MiK5c5hemQ';
    
    // public function __construct() {
	// 	$this->mailData = $mailData;
    //     $this->llavePublica = $llavePublica;
    //     $this->llavePrivada = $llavePrivada;
	// }
}
