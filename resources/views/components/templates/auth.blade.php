@extends('components.templates.base')
@section('body')
    <x-sections.navbar class='bg-indigo-400' />
    {{ $slot }}
@endsection
