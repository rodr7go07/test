<?php

namespace App\View\Components\Actions;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class CarActions extends Component
{
    public $car;

    public function __construct($car)
    {
        $this->car = $car;
    }

    public function render(): View|Closure|string
    {
        return view('components.actions.car-actions');
    }
}

