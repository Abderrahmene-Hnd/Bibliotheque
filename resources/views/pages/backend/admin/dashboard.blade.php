<h1 class="text-indigo-500 text-5xl font-semibold text-center mt-12">Our Books</h1>

<div class="grid grid-cols-3 mt-16 ml-60">
    <h3 class="font-semibold text-xl "><a href="/dashboard/book/create"
            class="border border-green-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-2.5">Create a new book</a>
    </h3>
    <h3 class="font-semibold text-xl "><a href="/dashboard/category/create"
            class="border border-green-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-2.5">Create a new
            Category</a></h3>
    <h3 class="font-semibold text-xl "><a href="/dashboard/author/create"
            class="border border-green-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-2.5">Create a new
            Author</a></h3>
</div>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="pb-8">
            <div class="my-5 flex sm:flex-row flex-col">
                <div class="flex flex-row mb-1 sm:mb-0">
                    <div class="relative">
                        {{-- <x-category-dropdown /> --}}
                    </div>
                </div>
                {{-- <div class="block relative ml-5">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                </div> --}}
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Title
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
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
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap text-center">
                                                    {{ $book->title }}
                                                </p>
                                            </div>
                                        </div>
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
                                        <a href=" /dashboard/book/{{ $book->id }}/edit"
                                            class="text-blue-500 hover:text-blue-600">Edit</a>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{-- <form method="POST" action="/dashboard/admin/posts/{{ $user->id }}">

                                                @method('DELETE')
                                            </form> --}}
                                        <button class="text-red-400 hover:text-red-600">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
