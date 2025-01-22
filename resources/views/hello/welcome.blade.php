@vite(['resources/css/app.css', 'resources/js/app.js'])

@foreach ($hobbies as $h)
    @if ($loop->depth)
        <p>{{ $h }}</p>
    @endif
@endforeach
