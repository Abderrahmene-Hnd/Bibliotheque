<div class="grid grid-cols-3 mt-60 space-x-8 space-y-8 ">
    @foreach ($features as $feature)
        <livewire:components.atoms.card :feature="$feature" class="border-2 border-indigo-500" />
    @endforeach
</div>
