@props(['color' => 'primary'])

<button {{ $attributes->merge(['class' => 'inline-block px-6 py-2 border-2 w-50 border-pink-600 text-white font-semibold text-lg leading-tight rounded hover:bg-pink-600 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>
