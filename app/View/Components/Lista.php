<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Lista extends Component
{
    public $prenda;
    /**
     * Create a new component instance.
     */
    public function __construct($prenda)
    {
        $this->prenda=$prenda;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lista');
    }
}
