<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeading extends Component
{
    public string $title;
    public string $description;

    public function __construct(string $title = '', string $description = '')
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.section-heading');
    }
}
