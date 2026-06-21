<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    <meta name="description" content="HZ HBO-ICT student portfolio website">

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Fonts (reduced to 2 for consistency) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300..900&family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>

<header>
    <x-nav-bar />
</header>

<main>
    {{ $slot }}
</main>

<footer>
    <x-footer />
</footer>

</body>
</html>
