<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laracamp Notes App</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

{{-- 
    
    <livewire:notes-app.header />
    <main class="flex flex-col mb-20">
        <livewire:notes-app.section-one />
    </main>
    
    --}}
</body>

</html>