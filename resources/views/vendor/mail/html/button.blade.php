@props([
    'url',
    'color' => 'primary',
])

<a href="{{ $url }}" class="button" style="color: #fff; background-color: #00764E; border-color: #00764E; cursor: pointer;
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    transition: all 0.135s ease-in-out;
    transform: scale(1.001);
    padding: 10px;
    border-radius: 10px;
    " target="_blank" rel="noopener">{{ $slot }}</a>

