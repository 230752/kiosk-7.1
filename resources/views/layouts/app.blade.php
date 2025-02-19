<!-- filepath: /c:/xampp/htdocs/jaar 2/kiosk-7.1/resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kiosk')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100 text-gray-900 min-h-s h-screen w-full flex flex-col">
    <header class="">
        @section('header')
        <div id="header-content" class="shadow-lg">
            <img src="{{asset('img/happy_logo.png')}}" alt="logo" class="w-32">
        </div>
        @show
    </header>
    <main class="flex-grow w-full flex">
        <div class="flex w-full">
            @yield('content')
        </div>
    </main>
    <footer class="bg-white">
        @yield('footer')
    </footer>
</body>

</html>