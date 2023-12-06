@extends('layouts.app')
@section('content')
    <h1>Available Equipments</h1>
    <p>{{ session('message') }}</p>

    @foreach($equipments as $equipment)
        {{-- <p>{{ ++$loop->index }} - {{ $equipment['name'] }} - €{{ number_format($equipment['price'], 2, '.', ',') }}</p> --}}

        <div>
            <h3>{{ $equipment->name }}</h3>
            <h4>{{ $equipment->price }}</h4>
        </div>

    @endforeach
    {{-- {{ $name }}  {{ $age }} --}}
@endsection
