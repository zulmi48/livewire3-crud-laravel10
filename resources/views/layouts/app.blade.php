<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <x-navbar />
        <div class="container p-3">
            {{ $slot }}
        </div>
    </body>
</html>
