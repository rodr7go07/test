<x-modal wire:model="showEditCarModal" maxWidth="3xl">
    <x-slot name="title">Editar auto {{ $car->name ?? '' }}</x-slot>


    <div class="flex gap-x-2">
        <div class="w-full">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="car_name">

            @error('car_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
            <input type="number" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="car_price">
            @error('car_price')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="flex gap-x-2 mt-2">

        <div class="w-full">
            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
            <select id="brand" wire:model="brand_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Seleccionar marca</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo</label>
            <input type="number" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="car_model">
        </div>

    </div>

    <x-slot name="footer">
        <button wire:click="$set('showEditCarModal', false)" class="px-4 py-2 bg-red-500 rounded hover:bg-red-700 text-white">Cancelar</button>
        <button wire:click="updateCar" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Guardar</button>
    </x-slot>
</x-modal>
