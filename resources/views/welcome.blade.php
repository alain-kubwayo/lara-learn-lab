@extends('layouts.layout')
@section('content')
    <h1 class="main-title">LaraGym</h1>
    <img src="/img/gym.webp" alt="gym" />
    <a href="{{ route('equipments.create') }}">Create an Equipment</a>
    <p>{{ session('message') }}</p>
@endsection

