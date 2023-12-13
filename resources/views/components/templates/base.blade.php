<!DOCTYPE html>
<html lang="en">
<!-- Alpine v3 -->
<!-- Focus plugin -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        @import 'https://fonts.googleapis.com/icon?family=Material+Icons';
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');

body {
  text-align: center;
}

.hr-text {
  line-height: 1em;
  position: relative;
  outline: 0;
  border: 0;
  color: black;
  text-align: center;
  height: 1.5em;
  opacity: 0.5;
}
.hr-text:before {
  content: "";
  background: linear-gradient(to right, transparent, #818078, transparent);
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 1px;
}
.hr-text:after {
  content: attr(data-content);
  position: relative;
  display: inline-block;
  color: black;
  padding: 0 0.5em;
  line-height: 1.5em;
  color: #818078;
  background-color: #fcfcfa;
}

    </style>
    <title>{{ $title ?? 'My page' }}</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
    <livewire:styles />
    <wireui:scripts />
</head>

<body class="min-h-screen bg-slate-50 ">
    @yield('body')
    <x-atoms.flash-success />
    <x-atoms.flash-error />

    <livewire:scripts />
    @livewire('livewire-ui-modal')
</body>

</html>
