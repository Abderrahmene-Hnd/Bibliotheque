@extends('components.templates.base')
@section('body')
    <x-sections.navbar class='bg-blue-800' />
    {{ $slot }}
@endsection
