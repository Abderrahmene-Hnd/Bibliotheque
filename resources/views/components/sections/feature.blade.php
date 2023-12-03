<div class="grid grid-cols-3 mt-60 space-x-8 space-y-8 ">
    @foreach ($books as $book)
        <livewire:components.atoms.card :book="$book" class="border-2 border-indigo-500" />
    @endforeach
</div>
