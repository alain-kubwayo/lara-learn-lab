@extends('layouts.layout')
@section('content')
    <header>
        <nav class="container mx-auto">
        <h1 class="my-4 text-2xl font-bold text-gray-500">LaraGym</h1>
        </nav>
        <div class="container flex items-center mx-auto bg-gray-400 rounded-md h-96">
            <div class="text-center sm:ml-20 text-gray-50 sm:text-left">
                <h1 class="mb-4 text-5xl font-bold">
                Buy gym <br />
                equipments.
                </h1>
                <p class="inline-block text-lg sm:block">The largest online community to buy gym equipments in Kigali.</p>
                <div class="mt-8">
                    <a href="{{ route('equipments.index') }}" class="px-4 py-2 bg-gray-600 rounded">Browse equipments</a>
                </div>
            </div>
        </div>
    </header>
    <main class="container px-6 py-16 mx-auto md:px-0">
        <section>
            <h1 class="mb-10 text-3xl font-bold text-gray-600">Here's our top pick for you.</h1>
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
        <section>
            <h1 class="inline-block text-3xl font-bold text-gray-600">
                How does laragym work.
            </h1>
            <div class="container w-full h-full mx-auto">
                <div class="relative h-full p-10 overflow-hidden wrap">
                  <div class="absolute h-full border border-2-2 border-yellow-555"
                    style="right: 50%; border: 2px solid #718096; border-radius: 1%;"></div>
                  <div class="absolute h-full border border-2-2 border-yellow-555"
                    style="left: 50%; border: 2px solid #718096; border-radius: 1%;"></div>
                  <div class="flex flex-row-reverse items-center justify-between w-full mb-8 left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                        <p class="-mb-2 text-lg font-extrabold text-yellow-500">01</p>
                        <h4 class="mb-3 text-lg font-bold md:text-2xl">Browse</h4>
                        <p class="text-sm leading-snug text-gray-500 text-opacity-100 md:text-base">
                            Start by searching for the equipment you would like to buy.
                        </p>
                    </div>
                  </div>
                  <div class="flex items-center justify-between w-full mb-8 right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-left">
                        <p class="-mb-2 text-lg font-extrabold text-yellow-500">02</p>
                        <h4 class="mb-3 text-lg font-bold md:text-2xl">Availability</h4>
                        <p class="text-sm leading-snug text-gray-500 text-opacity-100 md:text-base">
                            Check the availability status of the equipment and if available, fill the form with your details and the equipment(s) of your choice.
                        </p>
                    </div>
                  </div>
                  <div class="flex flex-row-reverse items-center justify-between w-full mb-8 left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                        <p class="-mb-2 text-lg font-extrabold text-yellow-500">03</p>
                        <h4 class="mb-3 text-lg font-bold md:text-2xl">Payment</h4>
                        <p class="text-sm leading-snug text-gray-500 text-opacity-100 md:text-base">
                            Proceed with payment with a payment method of your choice.
                        </p>
                    </div>
                  </div>
      
                  <div class="flex items-center justify-between w-full mb-8 right-timeline">
                    <div class="order-1 w-5/12"></div>
      
                    <div class="order-1 w-5/12 px-1 py-4">
                        <p class="-mb-2 text-lg font-extrabold text-yellow-500">04</p>
                        <h4 class="mb-3 text-lg font-bold text-left md:text-2xl">Delivery</h4>
                        <p class="text-sm leading-snug text-gray-500 text-opacity-100 md:text-base">
                            Upon succesful payment, we deliver the equipment(s) to your doorstep.
                        </p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </main>
    <footer class="px-6 mb-6 md:px-0">
        <div class="container mx-auto space-x-6">
            <div class="space-y-2 text-gray-500">
                <h1 class="text-2xl font-bold">LaraGym</h1>
                <p>The largest online community to buy gym equipments in Kigali.</p>
                <p>© {{ date('Y') }}.</p>
            </div>
        </div>
    </footer>
@endsection
