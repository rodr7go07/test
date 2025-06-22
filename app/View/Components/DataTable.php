<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public array $columns;
    public $items;

    public function __construct(array $columns, $items)
    {
        $this->columns = $columns;
        $this->items = $items;
    }

    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
