@php $navbar = App\Models\Navbar::first(); @endphp
@extends('components.templates.base')
@section('body')
    <livewire:components.blocs.navbars class='{{ $navbar?->type }}' nmbr='2' bg_pry_color='{{ $navbar?->bg_pry_color }}'
        bg_pry_hov_color='{{ $navbar?->bg_pry_hov_color }}' bg_sec_color='{{ $navbar?->bg_sec_color }}'
        bg_sec_hov_color='{{ $navbar?->bg_sec_hov_color }}' txt_pry_color='{{ $navbar?->txt_pry_color }}'
        txt_pry_hov_color='{{ $navbar?->txt_pry_hov_color }}' txt_sec_color='{{ $navbar?->txt_sec_color }}'
        txt_sec_hov_color='{{ $navbar?->txt_sec_hov_color }}' />
    {{ $slot }}
@endsection
