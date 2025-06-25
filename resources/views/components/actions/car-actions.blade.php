@props(['car'])

<div class="flex space-x-2">
    {{-- Botón editar siempre visible --}}
    <button wire:click="editCarModal('{{ $car->id }}')" class="text-blue-600 hover:underline bg-blue-500 rounded py-1 px-2 text-white">
        <i class="fas fa-edit text-sm"></i>
    </button>

    @if (!$car->is_available)
        <button wire:click="delete({{ $car->id }})" class="text-red-600 hover:underline bg-red-600 rounded py-1 px-2 text-white">
            <i class="fas fa-trash-alt text-sm"></i>
        </button>
    @endif
</div>
