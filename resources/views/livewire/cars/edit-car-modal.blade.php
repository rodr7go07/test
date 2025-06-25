<x-modal wire:model="showEditCarModal" maxWidth="3xl">
    <x-slot name="title">Editar auto {{ $car->name ?? '' }}</x-slot>

    <p>Aquí va el contenido del modal</p>

    <x-slot name="footer">
        <button wire:click="$set('showEditCarModal', false)" class="px-4 py-2 bg-red-500 rounded hover:bg-red-700 text-white">Cancelar</button>
        <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Guardar</button>
    </x-slot>
</x-modal>
