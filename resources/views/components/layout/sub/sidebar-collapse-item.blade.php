@props(['route' => '#', 'label' => 'Item'])

{{--<li>--}}
{{--    <a href="{{ __($route) }}"--}}
{{--        class="flex items-center p-2 pl-9 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">--}}
{{--        {{ __($label) }}--}}
{{--    </a>--}}
{{--</li>--}}

{{--@props(['label', 'route'])--}}

@php
    $isActive = request()->url() === $route;
@endphp

<li>
    <a href="{{ $route }}"
       class="block p-2 text-base font-normal rounded-lg transition
        {{ $isActive ? 'bg-blue-500 text-white dark:bg-gray-700 dark:text-white' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }}">
        {{ $label }}
    </a>
</li>
