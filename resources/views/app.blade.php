<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Laracamp</title> -->
    @vite('resources/js/app.js')
    @inertiaHead
    @routes()
</head>

<body class="antialiased">
    @inertia
    <div id="modal"></div>
</body>

</html>