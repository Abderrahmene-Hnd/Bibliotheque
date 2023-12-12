@php
    $herosection = App\Models\Herosection::first();
@endphp
<x-sections.hero-section nmbr="{{ $herosection?->type }}" bg_pry_color="{{ $herosection?->bg_pry_color }}"
    bg_pry_hov_color="{{ $herosection?->bg_pry_hov_color }}" bg_sec_color="{{ $herosection?->bg_sec_color }}"
    bg_sec_hov_color="{{ $herosection?->bg_sec_hov_color }}" txt_pry_color="{{ $herosection?->txt_pry_color }}"
    txt_pry_hov_color="{{ $herosection?->txt_pry_hov_color }}" txt_sec_color="{{ $herosection?->txt_sec_color }}"
    txt_sec_hov_color="{{ $herosection?->txt_sec_hov_color }}" />
<livewire:components.sections.products />
<livewire:components.sections.features />
<livewire:components.sections.call-to-action />
<livewire:components.sections.footer />
