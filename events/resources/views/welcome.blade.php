
@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    
<h1>Title</h1>

<img src="./assets/img/banner.jpg" alt="">

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

{{-- --}}

@for ($i = 0; $i < count($numbers); $i++)
    @if ($i == 2)
        <p>Hi {{ $i }}</p>
    @else
        <p>{{ $numbers[$i] }} - {{ $i }}</p>
    @endif
@endfor

{{-- --}}

@php
    $laravel = 'framework';
    echo $laravel;
@endphp

{{-- --}}

@foreach ($names as $name)
    <p>{{ $loop->index }} - {{ $name }}</p>
@endforeach

@endsection
