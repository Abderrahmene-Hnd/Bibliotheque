<div class=" {{ $class }} rounded-xl p-8 bg-gray-100 ">
    <div class="flex space-x-5">
        <img src="{{ asset($feature->image) }}" alt="book pic" width="200" >
        <div class="text-3xl  w-72">{{ $feature->title }}</div>
    </div>
    <div class="mt-5 w-96">
        {{ $feature->excerpt }}
        {{ $feature->body }}
    </div>
</div>
