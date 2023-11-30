@extends('components.templates.base')
@section('body')
    <x-sections.navbar class='bg-green-700' />
    {{ $slot }}
@endsection
