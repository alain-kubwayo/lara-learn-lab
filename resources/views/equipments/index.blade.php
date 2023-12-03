@extends('layouts.layout')
@section('content')
    <h1>Available Equipments</h1>

    @foreach($equipments as $equipment)
        <p>{{ ++$loop->index }} - {{ $equipment['name'] }} - €{{ number_format($equipment['price'], 2, '.', ',') }}</p>
    @endforeach
@endsection
