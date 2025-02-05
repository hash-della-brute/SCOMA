@props(['href' => '#', 'active' => false])

<a
    href="{{ $href }}"
    class="rounded-md px-3 py-2 text-sm font-medium {{ $active ? 'bg-blue-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
    aria-current="{{ $active ? 'page' : 'false' }}"
>
    {{ $slot }}
</a>
