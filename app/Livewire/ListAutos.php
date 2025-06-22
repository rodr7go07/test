<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class ListAutos extends Component
{

    use WithPagination;

    public array $columns = [
        'name' => 'Nombre',
        'brand.name' => 'Marca',
        'model' => 'Modelo',
        'price' => 'Precio',
        'description' => 'Descripción',
        'is_available' => 'Disponibilidad'
    ];

    public function render()
    {
        $cars = Car::with('brand')->paginate(10);

        return view('livewire.list-autos', [
            'cars' => $cars,
            'columns' => $this->columns,
        ]);
    }
}
