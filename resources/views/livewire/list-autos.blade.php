<div>
    <x-section-heading title="Autos" description="Esta es la descripción del módulo de autos" />

    @php
        $actions = fn($item) => view('components.actions.car-actions', ['car' => $item])->render();
    @endphp

    <x-data-table :columns="$columns" :items="$cars" :actions="$actions" />

    @props(['id' => null, 'maxWidth' => null])

    @include('livewire.cars.edit-car-modal')





    {{--    @if ($showEditModal)--}}
{{--        <x-cars.edit-car-modal :car="$carToEdit" wire:click.away="closeEditModal" />--}}
{{--    @endif--}}

{{--    <x-cars.edit-car-modal wire:model="showEditCarModals">--}}
{{--        <x-slot name="title">Editar auto</x-slot>--}}

{{--        <x-slot name="content">--}}
{{--            @if ($car)--}}
{{--                Estás editando: <strong>{{ $car->name }}</strong>--}}
{{--            @endif--}}
{{--        </x-slot>--}}

{{--        <x-slot name="footer">--}}
{{--            <button wire:click="$set('showEditCarModals', false)" class="text-sm text-gray-600">Cancelar</button>--}}
{{--        </x-slot>--}}
{{--    </x-cars.edit-car-modal>--}}

</div>
