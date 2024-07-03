<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    public $error = false;
    public $message;
    public $data;

    public function getResult() {
        return ['error' => $this->error, 'message' => $this->message, 'data' => $this->data];
    }
}
