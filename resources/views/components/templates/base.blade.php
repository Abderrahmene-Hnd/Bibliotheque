<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Library</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-slate-50 ">
    <livewire:components.sections.navbar class=" bg-indigo-500"/>
    {{ $slot }}
    <x-atoms.success session="session()" />
    <livewire:components.atoms.auth-success session="session()" />
</body>

</html>
