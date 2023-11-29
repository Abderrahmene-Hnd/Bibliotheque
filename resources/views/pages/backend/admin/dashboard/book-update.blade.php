<div>
    <h1 class="my-12 text-center font-semibold text-green-500 text-5xl">Update the Book</h1>
    <div class="border-2 border-indigo-500 bg-gray-200 rounded-xl max-w-4xl mx-auto p-5">
        <form wire:submit.prevent="bookupdate">
            @csrf
            <label for="category" class="block mb-2 uppercase font-bold text-sm text-gray-700">category</label>
            <select wire:model.lazy="category" name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }} ">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="author" class="block mb-2 uppercase font-bold text-sm text-gray-700">author</label>
            <select wire:model.lazy="authorinput" name="author" id="author">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }} ">{{ $author->name }}</option>
                @endforeach
            </select>

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-sm text-gray-700 ">title</label>
                <input wire:model.lazy="titleinput" class="rounded-lg p-2 w-full focus:outline-none focus:ring border-2 border-indigo-500"
                    type="text" name="title" id="title" placeholder="" required>
                @error('title')
                    <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-sm text-gray-700">excerpt</label>
                <textarea wire:model.lazy="excerptinput"
                    class="border-2 border-indigo-500 my-2 rounded-lg p-2 w-full focus:outline-none focus:ring " name="excerpt"
                    id="comment" placeholder="Write something" cols="80" rows="10" required></textarea>
                @error('excerpt')
                    <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-sm text-gray-700">body</label>
                <textarea wire:model.lazy="bodyinput"
                    class="border-2 border-indigo-500 my-2 rounded-lg p-2 w-full focus:outline-none focus:ring " name="body"
                    id="body" placeholder="Write something" cols="80" rows="10" required></textarea>
                @error('body')
                    <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                <label for="image" class="block mb-2 uppercase font-bold text-sm text-gray-700">image</label>
                <input wire:model.lazy="imageinput" class="rounded-lg p-2 w-full focus:outline-none focus:ring "
                    type="file" name="image" id="image" placeholder="" required>
                @error('image')
                    <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                @enderror
            </div> --}}

            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:gb-blue-500">
                Submit
            </button>

            @if ($errors->any())
                <div class="flex p-4 mt-4 text-sm text-red-700 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="pl-2">
                        <span class="font-medium"> Impossible to sumbit ! Fixe the errors </span>
                        @foreach ($errors->all() as $error)
                            <ul class="mt-1.5 list-disc list-inside">
                                <li> {{ $error }} </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            @endif
        </form>
    </div>
</div>

