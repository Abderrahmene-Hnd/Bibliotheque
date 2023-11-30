<div>
    <h1 class="my-12 text-center font-semibold text-green-500 text-5xl">Edit a Book</h1>
    <div class="border-2 border-indigo-500 bg-gray-200 rounded-xl max-w-4xl mx-auto p-5">
        <form wire:submit.prevent="bookedit">
            @csrf
            <label for="category" class="block mb-2 uppercase font-bold text-sm text-gray-700">category</label>
            <select  wire:model.lazy="categoryinput" name="category" id="category">
                <option value="">Choose category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }} ">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="author" class="block mb-2 uppercase font-bold text-sm text-gray-700">author</label>
            <select wire:model.lazy="authorinput" name="author" id="author">
                <option value="">Choose author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }} ">{{ $author->name }}</option>
                @endforeach
            </select>

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-sm text-gray-700 ">title</label>
                <x-atoms.input name="title" type="text" class="rounded-lg p-2 w-full focus:outline-none focus:ring border-2 border-indigo-500" holder="" model="titleinput" />
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
            @error('error')
                <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
            @enderror
            @endif
        </form>
    </div>
</div>

