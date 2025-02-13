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
<body class="bg-gray-100 text-gray-900 min-h-s h-screen flex flex-col p-0 m-0">
    <header class="">
    @yield('header')
    </header>
    <main class="flex-grow flex">
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>
    <footer class=" p-4">
        @yield('footer')
    </footer>
</body>
</html>