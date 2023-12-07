<div class="grid grid-cols-5 space-x-2 space-y-2 mt-7" id="features">
    @foreach ($books as $book)
        <livewire:components.atoms.card :book="$book"/>
    @endforeach
</div>
