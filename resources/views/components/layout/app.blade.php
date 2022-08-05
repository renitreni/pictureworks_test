<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if($title)
        <title>{{ $title }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-5">
    {{ $slot }}
</div>
</body>
</html>
