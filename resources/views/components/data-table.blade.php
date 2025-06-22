@props(['columns', 'items', 'actions' => null])

<table class="table-auto w-full text-left">
    <thead>
    <tr>
        @foreach ($columns as $label)
            <th class="px-4 py-2">{{ $label }}</th>
        @endforeach
        <th class="px-4 py-2">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
        <tr>
            @foreach (array_keys($columns) as $key)
                @php
                    $value = data_get($item, $key);
                    if (is_bool($value)) {
                        $value = $value ? 'Sí' : 'No';
                    }
                @endphp
                <td class="border px-4 py-2">{{ $value }}</td>
            @endforeach

            <td class="border px-4 py-2">
                @if ($actions)
                    {!! $actions($item) !!}
                @else
                    <span class="text-gray-400 italic">Sin acciones</span>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $items->links() }}
</div>
