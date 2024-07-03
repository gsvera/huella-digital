<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentBoxContact extends Component
{
    public $className;

    public function __construct()
    {
    }

    public function render()
    {
        return view('components.box-contact');
    }
}