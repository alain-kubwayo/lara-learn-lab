@extends('layouts.layout')
@section('content')
    <main class="container px-6 py-16 mx-auto md:px-0">
        <section>
            <h1 class="mb-10 text-3xl font-bold text-gray-600">All Equipments.</h1>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                <div>
                    <div class="bg-gray-300 bg-cover h-44" style="background-image: url('./img/barbells.jpg')"></div>
                    <h3 class="mt-2 text-lg font-semibold text-gray-500">Barbells</h3>
                </div>
                <div>
                    <div class="bg-gray-300 bg-cover h-44" style="background-image: url('./img/trackers.jpg')"></div>
                    <h3 class="mt-2 text-lg font-semibold text-gray-500">Fitness Tracker</h3>
                </div>
                <div>
                    <div class="bg-gray-300 bg-cover h-44" style="background-image: url('./img/dumbbells.jpg')"></div>
                    <h3 class="mt-2 text-lg font-semibold text-gray-500">Dumbbells</h3>
                </div>
            </div>
            <hr class="w-40 mx-auto border-4 rounded-md my-14 sm:mx-0" />
        </section>
    </main>
@endsection
