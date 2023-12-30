@extends('layouts.layout')
@section('content')
<main class="container px-6 py-16 mx-auto md:px-0">
    <section>
        <h1 class="mb-10 text-3xl font-bold text-center text-gray-600">Create Categories</h1>
        <div class="w-1/2 mx-auto">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name..." class="block w-full px-3 py-3 mt-2 text-gray-800 border-2 border-gray-100 rounded-md appearance-none focus:text-gray-500 focus:outline-none focus:border-gray-200" />
                <button type="submit" class="w-full py-3 mt-10 font-medium text-white uppercase bg-gray-600 rounded-md focus:outline-none hover:shadow-none">
                    Create
                </button>
            </form>
        </div>
    </section>
</main>
@endsection