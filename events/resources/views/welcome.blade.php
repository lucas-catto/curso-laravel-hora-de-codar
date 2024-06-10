<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Title</h1>

        @if (10 > 5)
            <p>true</p>
        @endif

        <p>{{ $name }}</p>

        @if ($name == 'lucas')
            <p>Hi {{ $name }}</p>
        @else
            <p>Hi</p>
        @endif

        {{-- --}}

        @if ($name == 'lucas')
            <p>{{ $name }} is {{ $age }} years old.</p>

        @elseif ($name == 'taylor')
            <p>{{ $name }}</p>

        @else
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

        @endif

    </body>
</html>
