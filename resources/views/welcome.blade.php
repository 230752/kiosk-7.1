<!-- filepath: /c:/xampp/htdocs/jaar 2/kiosk-7.1/resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiosk</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center">Welcome to Laravel</h1>
        <p class="mt-4 text-center">This is a sample page using Tailwind CSS.</p>
    </div>
</body>
</html>