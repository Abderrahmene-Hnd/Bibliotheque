<div class="mt-20">
    <div class="mx-auto max-w-3xl border shadow overflow-hidden bg-white rounded-xl p-10">
        <h1 class="text-3xl text-indigo-500 text-center font-bold my-4 ">Create a new Book</h1>
        <form wire:submit.prevent="bookCreate">
            <div>
                <div class="flex justify-between">
                    <label for="category_ids"
                        class="block mb-1 uppercase font-bold text-gray-700 text-sm">category</label>
                </div>
                <select wire:model.lazy="category_ids" name="category_ids" id="category_ids" multiple
                    class="border border-gray-900/25 my-2 mb-5 rounded-md px-4 py-2 w-full">
                    <option value="">Choose category</option>
                    @foreach ($categories as $category)
                        @if ($category->parent_id == null)
                            <option class="text-blue-500 font-semibold" value="{{ $category->id }}" disabled>
                                {{ $category->title }}</option>
                        @endif
                        @foreach ($category->children as $child)
                            <div style="margin-left: 20px;">
                                <option value="{{ $child->id }}">{{ $child->title }}</option>
                            </div>
                        @endforeach
                    @endforeach
                </select>

                {{-- <div>
                <x-select label="Select Statuses" placeholder="Select many statuses" multiselect :options="['Active', 'Pending', 'Stuck', 'Done']"
                    wire:model.defer="model" />
            </div> --}}
                <div class="my-2">
                    <label for="author" class="block mb-1 uppercase font-bold text-gray-700 text-sm">author</label>
                    <select wire:model.lazy="authorInput" name="author" id="author"
                        class="border border-gray-900/25 my-2 mb-5 rounded-md px-4 py-2 w-full">
                        <option value="">Choose author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }} ">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="my-2">
                    <label for="title" class="block mb-1 uppercase font-bold text-gray-700 text-sm ">title</label>
                    <x-atoms.input value="" model="titleInput" name="title" type="text" class=""
                        holder="" />
                    @error('title')
                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="my-2">
                    <label for="excerpt"
                        class="block mb-1 mt-4 uppercase font-bold text-gray-700 text-sm">excerpt</label>
                    <textarea wire:model.lazy="excerptInput"
                        class="border border-gray-900/25 my-2 rounded-lg p-2 w-full shadow-sm ring-gray-300 placeholder:text-gray-400 focus:ring-2 "
                        name="excerpt" id="comment" placeholder="Write something" rows="5" required></textarea>
                    @error('excerpt')
                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="my-2">
                    <label for="body" class="block mb-1 uppercase font-bold text-gray-700 text-sm">body</label>
                    <textarea wire:model.lazy="bodyInput"
                        class="border border-gray-900/25 my-2 rounded-lg p-2 w-full shadow-sm ring-gray-300 placeholder:text-gray-400 focus:ring-2 "
                        name="body" id="body" placeholder="Write something" rows="8" required></textarea>
                    @error('body')
                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <h1 class="block mb-1 uppercase font-bold text-gray-700 text-sm">Book Image</h1>
                    <div
                        class="mb-5 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="image"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a Image</span>
                                    <input wire:model="imageInput" id="image" name="image" type="file"
                                        class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG up to 10MB</p>
                        </div>
                    </div>
                </div>
                <x-atoms.button class="text-white border border-indigo-500 bg-indigo-500" content="CREATE" />
                <x-atoms.show-errors />
        </form>
    </div>
</div>
