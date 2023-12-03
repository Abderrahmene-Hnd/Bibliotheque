<div class=" {{ $class }} rounded-xl p-8 bg-gray-100 ">
    <div class="flex space-x-5">
        <img src="{{ asset('storage/' . $book->image?->url) }}" alt="book pic" width="200" >
        <div class="text-3xl  w-72">{{ $book->title }}</div>
    </div>
    <div class="mt-5 w-96">
        {{ $book->excerpt }}
    </div>
</div>
