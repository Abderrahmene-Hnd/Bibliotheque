<div>
    <h1 class="text-green-500 text-5xl font-semibold text-center border-b border-gray-300 pb-9">Dashboard</h1>

     {{-- @foreach ($books->categories as $category)
                {{ $category->pivot->created_at }}
            @endforeach --}}

            {{--@foreach ($categories->books as $book)
                {{ $book->pivot->created_at }}
            @endforeach --}}

    <body class="antialiased font-sans mt-20">
        <h1 class="text-red-500 text-3xl font-semibold text-center mt-8">Books</h1>

        <div class="container mx-auto px-4 sm:px-8">
            <h3 class="font-semibold"><a href="/dashboard/book/create"
                    class="border border-green-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-2.5">Create a new
                    book</a>
            </h3>
            <div class="pb-8">
                <div class="my-5 flex sm:flex-row flex-col">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Book Image
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Category
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Author
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider ">
                                            Excerpt
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Created at
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                         @foreach ($book->categories as $category)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <img src="{{ asset('storage/' . $book->image?->url) }}"
                                                        alt="Book Image" width="50">
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $category->pivot->title }}
                                                    </p>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $book->author?->name }}
                                                    </p>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $book->title }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $book->excerpt }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $book->created_at }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <button type="button" wire:click="editBook({{ $book->id }})"
                                                        class="text-blue-500 hover:text-blue-600">Edit</button>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <button type="button" wire:click="deleteBook({{ $book->id }})"
                                                        class="text-red-500 hover:text-red-600">Delete</button>
                                                </td>
                                            </tr>
                                         @endforeach 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ----------------------------------------------------- Categories ----------------------------------------------------------- --}}
        <div class="grid grid-cols-2 mx-auto space-x-12 ">
            <div class=" mx-auto px-4 sm:px-8 ">
                <h1 class="text-red-500 text-2xl font-semibold text-center mt-5">Categories</h1>
                <h3 class="font-semibold "><a href="/dashboard/category/create"
                        class="border border-green-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-2.5">Create a
                        new
                        Category</a></h3>
                <div class="pb-8">
                    <div class="my-5 flex sm:flex-row flex-col">
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Category Image
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Belongs to
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Created at
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <img src="{{ asset('storage/' . $category->image?->url) }}"
                                                        alt="Category Image" width="50">
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $category->title }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        @foreach ($categories as $parent)
                                                            @if ($parent->id == $category->parent_id)
                                                                {{ $parent->title }}
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $category->created_at }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                                    <button type="button"
                                                        wire:click="editCategory({{ $category->id }})"
                                                        class="text-blue-500 hover:text-blue-600">Edit</button>
                                                </td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                                    <button type="button"
                                                        wire:click="deleteCategory({{ $category->id }})"
                                                        class="text-red-500 hover:text-red-600">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ----------------------------------------------------- Authors ----------------------------------------------------------- --}}

            <div class=" mx-auto px-4 sm:px-8 ">
                <h1 class="text-red-500 text-2xl font-semibold text-center mt-5">Authors</h1>
                <h3 class="font-semibold"><a href="/dashboard/author/create"
                        class="border border-green-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-2.5">Create a
                        new
                        Author</a></h3>
                <div class="pb-8">
                    <div class="my-5 flex sm:flex-row flex-col">
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Author Image
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Author Name
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Created at
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($authors as $author)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <img src="{{ asset('storage/' . $author->image?->url) }}"
                                                        alt="Author Image" width="50">
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-40">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $author->name }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                                        {{ $author->created_at }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                                    <button type="button"
                                                        wire:click="editAuthor({{ $author->id }})"
                                                        class="text-blue-500 hover:text-blue-600">Edit</button>
                                                </td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                                    <button type="button"
                                                        wire:click="deleteAuthor({{ $author->id }})"
                                                        class="text-red-500 hover:text-red-600">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>
