<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentModalLoginProyects extends Component
{
    public $className;

    public function __construct()
    {
    }

    public function render()
    {
        return view('components.modal-login-proyects');
    }
}