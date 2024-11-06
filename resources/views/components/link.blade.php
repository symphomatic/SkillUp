@php
    $classes = "text-sm text-gray-600 hover:text-gray-900 rounded-md focus:ring-offset-2 focus:ring-indigo-500 font-bold"
@endphp

<a {{$attributes->merge(['class' => $classes])  }}>
    {{ $slot }}
</a>
