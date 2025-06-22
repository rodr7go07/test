<div>
    <x-section-heading title="Autos" description="Esta es la descripción del módulo de autos" />

    @php
        $actions = function ($item) {
            return new \Illuminate\Support\HtmlString('
                <button wire:click="delete(' . $item->id . ')" class="text-red-600 hover:underline">Eliminar</button>
            ');
//                <a href="' . route('cars.edit', $item->id) . '" class="text-blue-600 hover:underline mr-2">Editar</a>
            
        };
    @endphp

    <x-data-table :columns="$columns" :items="$cars" :actions="$actions" />

</div>
