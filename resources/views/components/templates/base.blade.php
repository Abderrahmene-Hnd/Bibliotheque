<!DOCTYPE html>
<html lang="en">
<!-- Alpine v3 -->
<!-- Focus plugin -->
<script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <title>{{ $title ?? 'My page' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <livewire:styles />
    <wireui:scripts />

</head>
<body class="min-h-screen bg-slate-50 ">
    @yield('body')
    <x-atoms.flash-success />
    <x-atoms.flash-error />

    <livewire:scripts />
    @livewire('livewire-ui-modal')
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
