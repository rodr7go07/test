<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class ListAutos extends Component
{

    use WithPagination;

    public bool $showEditCarModal = false;
    public $car;

    public array $columns = [
        'id' => '#',
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

        return view('livewire.cars.list-autos', [
            'cars' => $cars,
            'columns' => $this->columns,
        ]);
    }


    public function editCarModal(Car $car)
    {
        $this->car = $car;
        $this->showEditCarModal = true;
    }

    public function closeModal()
    {
        $this->showEditCarModal = false;
        $this->car = null;
    }
}
