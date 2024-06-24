
@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    
@foreach ($events as $event)
    <p>{{ $event->title }}</p>
    <p>{{ $event->description }}</p>
    <br><br><br><br><br><br>
@endforeach

@endsection
