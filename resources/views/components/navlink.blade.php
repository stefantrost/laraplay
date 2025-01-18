@props(['active' => false, 'type' => 'a'])
@if ($type == 'a')
<a {{ $attributes }}
  class="{{ $active ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium"
  aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>

@else

<button class="{{ $active ? 'underline' : '' }} rounded bg-white px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"><a {{ $attributes }}>{{ $slot }}</a></button>

@endif
