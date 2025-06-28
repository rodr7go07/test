<?php

namespace App\Livewire;

use App\Models\Brand;
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

    public $car_name;
    public $car_price;
    public $brand_id;
    public $car_model;
    public bool $carUpdated = false;

    public function render()
    {
        $cars = Car::with('brand')->paginate(10);
        $brands = Brand::all();

        return view('livewire.cars.list-autos', [
            'cars' => $cars,
            'columns' => $this->columns,
            'brands' => $brands
        ]);
    }


    public function editCarModal(Car $car)
    {
        $this->showEditCarModal = true;
        $this->car = $car;
        $this->car_name = $car->name;
        $this->car_price = $car->price;
        $this->brand_id = $car->brand->id;
        $this->car_model = $car->model;
    }

    public function closeModal()
    {
        $this->showEditCarModal = false;
        $this->car = null;
    }

    public function updateCar()
    {
        $this->validate([
            'car_name' => 'required',
            'car_price' => 'required',
            'brand_id' => 'required',
        ]);
        $this->car->name = $this->car_name;
        $this->car->price = $this->car_price;
        $this->car->brand_id = $this->brand_id;
        $this->car->model = $this->car_model;
        $this->car->update();

        $this->closeModal();

        $this->carUpdated = true;
    }
}
