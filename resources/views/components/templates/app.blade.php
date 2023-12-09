@extends('components.templates.base')
@section('body')
<x-sections.navbar class='' />
    <x-sections.sidebar>

        {{ $slot }}
    </x-sections.sidebar>
@endsection
