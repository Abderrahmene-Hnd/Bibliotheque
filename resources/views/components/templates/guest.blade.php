@extends('components.templates.base')
@section('body')
    <x-sections.navbar class='' />
    {{ $slot }}
@endsection
