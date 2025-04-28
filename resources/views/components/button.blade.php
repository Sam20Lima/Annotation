<a href="{{ isset($linkto) ? (Route::has($linkto) ? route($linkto) : $linkto) : '#' }}" id="{{ $id ?? '' }}">
    <button class="{{ $class ?? '' }}">
        {{ $slot }}
    </button>
</a>