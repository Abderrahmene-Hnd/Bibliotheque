<div class="grid grid-cols-3">
    @foreach ($this->features as $feature )
    {{-- <livewire:components.molecules.card/> --}}
    <div class="border border-gray-600 grid-cols-2">
        <div>
            <div>{{$feature->title}}</div>
            <img src="asset('{{$feature->image}}')" alt="">
        </div>
        <div>
            <div>{{$feature->excerpt}}</div>
            <div>{{$feature->body}}</div>
        </div>
    </div>
    @endforeach
</div>
