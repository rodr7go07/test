{{--@props(['icon', 'label' => 'Menu', 'route' => '#'])--}}

{{--<li>--}}
{{--    <a href="{{ $route }}"--}}
{{--        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--        <i--}}
{{--            class="{{ $icon }} text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>--}}
{{--        <span class="ml-3">{{ __($label) }}</span>--}}
{{--    </a>--}}
{{--</li>--}}


@props(['label', 'icon', 'route'])

@php
    $isActive = request()->url() === $route;
@endphp

<li>
    <a href="{{ $route }}"
       class="flex items-center p-2 text-base font-normal rounded-lg transition
        {{ $isActive ? 'bg-blue-500 text-white dark:bg-gray-700 dark:text-white' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }}">
        <i class="{{ $icon }} w-5 h-5"></i>
        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
