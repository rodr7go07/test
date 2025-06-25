@props(['show', 'maxWidth'])

@php
    $id = $id ?? md5($attributes->wire('model'));

    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
        '3xl' => 'sm:max-w-3xl',
        '4xl' => 'sm:max-w-4xl',
        '5xl' => 'sm:max-w-5xl',
    ][$maxWidth ?? '2xl'];
@endphp

<div
    x-data="{ show: @entangle($attributes->wire('model')) }"
    x-show="show"
    class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50"
    style="display: none;"
>
    <div
        :class="{'opacity-100 scale-100': show, 'opacity-0 scale-90': !show}"
        class="bg-white rounded-lg shadow-xl transform transition-all w-full mx-4 sm:mx-6 {{ $maxWidth }}"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-title"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
    >
        <!-- Header -->
        <header class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 id="modal-title" class="text-lg font-semibold text-gray-900">
                {{ $title ?? 'Título del Modal' }}
            </h2>
            <button @click="show = false" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </header>

        <!-- Body -->
        <section class="px-6 py-4 text-gray-700">
            {{ $slot }}
        </section>

        <!-- Footer -->
        <footer class="px-6 py-4 border-t border-gray-200 flex justify-end space-x-2">
            {{ $footer ?? '' }}
        </footer>
    </div>
</div>
