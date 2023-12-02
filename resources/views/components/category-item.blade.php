<div>
    {{ $category->title }} ({{ $category->id }})

    @foreach ($category->children as $child)
        <div style="margin-left: 20px;">
            <x-category-item :category="$child" />
        </div>
    @endforeach
</div>


{{-- <div>
    <option value="{{ $category->id }} ">{{ $category->name }}</option>
    @foreach ($category->children as $child)
        <div style="margin-left: 20px;">
            <option value="{{ $child->id }} ">{{ $child->name }}</option>
        </div>
    @endforeach
</div> --}}
