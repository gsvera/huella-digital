<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentServiciosMarketing extends Component
{
    public $className;

    public function __construct($className, $service)
    {
        $this->className = $className;
        $this->service = $service;
    }

    public function render()
    {
        return view('components.servicios-marketing-digital');
    }
}