@extends('components.templates.base')
@section('body')
<x-sections.navbar class='bg-gray-800' />
    <x-sections.sidebar>

        {{ $slot }}
    </x-sections.sidebar>
@endsection
