@extends('layouts.layout')
@section('content')
<main class="container px-6 py-16 mx-auto md:px-0">
    <section>
        <h1 class="mb-10 text-3xl font-bold text-center text-gray-600">All Categories</h1>
        @if($categories->count() < 1)
            <div class="space-y-4 text-center text-gray-500">
                <h2 class="mt-4 text-2xl font-bold">No Category Found</h2>
                <p>Click <a class="font-extrabold text-blue-700 hover:underline" href="{{ route('categories.create') }}">here</a> to create one.</p>
            </div>   
        @else
        @if(session('message'))
            <div class="w-1/2 p-3 mx-auto my-3 text-center text-green-600 bg-gray-200 rounded">{{ session('message') }}</div>
        @endif
        <table class="w-1/2 mx-auto">
            <div class="w-1/2 mx-auto mb-2 text-right text-white"><a href="{{ route('categories.create') }}" class="px-4 py-2 bg-gray-600 rounded hover:bg-gray-400">New Category</a></div>
            <thead>
                <tr>
                    <th class="p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300">Name</th>
                    <th class="p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr class="w-full mb-10 lg:hover:bg-gray-100">
                        <td class="p-3 text-center text-gray-800 border border-b">
                            {{ $category->name }}
                        </td>
                        <td class="p-3 text-center text-gray-800 border border-b">
                            <a href="#" class="text-blue-400 underline hover:text-blue-600">Edit</a>
                            <a href="#" class="pl-6 text-blue-400 underline hover:text-blue-600">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </section>
</main>
@endsection