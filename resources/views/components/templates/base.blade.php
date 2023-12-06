<!DOCTYPE html>
<html lang="en">
<!-- Alpine v3 -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Focus plugin -->
<script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>{{ $title ?? 'My page' }}</title>
    @vite('resources/css/app.css')
    <livewire:styles />

</head>
<body class="min-h-screen bg-slate-50 ">
    @yield('body')
    <x-atoms.flash-success />

    <livewire:scripts />
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    @livewire('livewire-ui-modal')
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</html>
