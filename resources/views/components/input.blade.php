@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-green-500 focus:ring focus:ring-green-500 active:bg-gray-100 rounded-md shadow-sm']) !!}>