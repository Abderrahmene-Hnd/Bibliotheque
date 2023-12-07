<div class="max-w-sm p-2">
    <div class="row">
        <div class="col-md-3">
            <div class="wsk-cp-product {{ $class }}">
                <div class="wsk-cp-img ">
                    <a href="/books/{{ $book->id }}"><img src="{{ asset('storage/' . $book->image?->url) }}" alt="book pic"
                        class="img-responsive"/></a>
                </div>
                <div class="wsk-cp-text">
                    <div class="category">
                        <span>{{ $book->author?->name }}</span>
                    </div>
                    <div class="title-product">
                        <a href=""><h3>{{ $book->title }}</h3></a>
                    </div>
                    <div class="description-prod">
                        <p class="text-sm">{{ $book->excerpt }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
