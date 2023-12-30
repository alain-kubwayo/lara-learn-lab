<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraGym</title>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="container mx-auto">
        <h1 class="my-4 text-2xl font-bold text-gray-500">
            <a href="/">LaraGym</a>
        </h1>
        </nav>
    </header>
    @yield('content')
    <footer class="px-6 mb-6 md:px-0">
        <div class="container mx-auto space-x-6">
            <div class="space-y-2 text-gray-500">
                <h1 class="text-2xl font-bold">LaraGym</h1>
                <p>The largest online community to buy gym equipments in Kigali.</p>
                <p>© {{ date('Y') }}.</p>
            </div>
        </div>
    </footer>
</body>
</html>
