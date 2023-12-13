@switch($nmbr?:1)
    @case(2)
        <div class="max-w-sm p-2">
            <div class="row">
                <div class="col-md-3">
                    <div class="wsk-cp-product {{ $class }}">
                        <div class="wsk-cp-img ">
                            <a href="/books/{{ $book->id }}"><img src="{{ asset('storage/' . $book->image?->url) }}"
                                    alt="book pic" class="img-responsive" /></a>
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>{{ $book->author?->name }}</span>
                            </div>
                            <div class="title-product">
                                <a href="">
                                    <h3>{{ $book->title }}</h3>
                                </a>
                            </div>
                            <div class="description-prod">
                                <p class="text-sm">{{ $book->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @break

    @case(1)
        <!-- component -->
        <div class="bg-white rounded-md shadow-lg max-w-3xl ">
            <div class="md:flex px-4 leading-none ">
                <div class="flex-none ">
                    <a href="/books/{{ $book->id }}"><img src="{{ asset('storage/' . $book->image?->url) }}" alt="pic"
                            class="h-72 w-45 rounded-md translate-y-4 border-4 border-gray-300 shadow-lg overflow-hidden hover:scale-105 hover:shadow-xl transform duration-500 cursor-pointer" /></a>
                </div>
                <div class="flex-col text-gray-300">
                    <p class="pt-4 text-xl font-bold text-gray-700">{{ $book->title }}</p>
                    <hr class="hr-text" data-content="">
                    <div class="text-md flex justify-between px-4 my-2 text-gray-600">
                        @foreach ($book->categories as $category)
                            <span class="font-bold ">
                                Category : {{ $categories->find($category->pivot->category_id)->title }}
                            </span>
                        @endforeach
                    </div>
                    <p class="hidden md:block px-4 my-4 text-left text-gray-600 text-sm">{{ $book->excerpt }} </p><br>
                    <span class="font-bold text-gray-600 text-md">By : {{ $book->author?->name }} </span>
                </div>
                <a href="/books/{{ $book->id }}">
                    <button class="font text-md rounded-lg bg-gray-700 text-white border border-gray-700 px-3 py-2 shadow-lg overflow-hidden hover:scale-105 hover:shadow-xl transform duration-500 cursor-pointer">
                        M <br> O <br> R <br> E </button></a>
            </div>
        </div>
    @break

    @case(4)
    @break

    @case(5)
    @break

    @default
@endswitch
