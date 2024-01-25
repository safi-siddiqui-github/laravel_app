<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laracamp Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    {{-- 
        <livewire:app-v1.header />
        --}}

    <main class="flex flex-col relative mb-20">

        <livewire:app-v1.hero />
        <livewire:app-v1.section-one />
        <livewire:app-v1.section-two />

        <livewire:app-v1.footer />
    </main>

</body>

</html>