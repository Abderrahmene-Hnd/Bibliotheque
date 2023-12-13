<div class="grid {{ App\Models\Card::first()?->type ==1 ? 'grid-cols-5' :( App\Models\Card::first()?->type ==2 ? 'grid-cols-3' : 'grid-cols-3' ) }} grid-cols-3 space-x-8 space-y-8 mt-7" id="features">
    @foreach ($books as $book)
        <livewire:components.blocs.cards :book="$book" nmbr="{{ $card?->type }}"
            bg_pry_color="{{ $card?->bg_pry_color }}" bg_pry_hov_color="{{ $card?->bg_pry_hov_color }}"
            bg_sec_color="{{ $card?->bg_sec_color }}" bg_sec_hov_color="{{ $card?->bg_sec_hov_color }}"
            txt_pry_color="{{ $card?->txt_pry_color }}" txt_pry_hov_color="{{ $card?->txt_pry_hov_color }}"
            txt_sec_color="{{ $card?->txt_sec_color }}" txt_sec_hov_color="{{ $card?->txt_sec_hov_color }}" />
    @endforeach
</div>
