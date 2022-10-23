@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'indent-8 rounded-md shadow-sm border-gray-800 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50']) !!}>
