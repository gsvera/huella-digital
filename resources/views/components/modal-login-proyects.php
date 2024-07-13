<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentModalLoginProyects extends Component
{
    public $className;

    public function __construct($redirect)
    {
        $this->redirect = $redirect;
    }

    public function render()
    {
        return view('components.modal-login-proyects');
    }
}