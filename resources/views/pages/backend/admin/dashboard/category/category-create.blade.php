<div class="mt-20">
    <div class="mx-auto max-w-3xl border shadow overflow-hidden bg-white rounded-xl p-10">
        <h1 class="text-3xl text-indigo-500 text-center font-bold my-4 ">Create a new Category</h1>
        <form wire:submit.prevent="categoryCreate">
            @if ($categories->toArray() != null)
                <label for="newOrVariante" class="font-semibold">New or Variante ?</label>
                <div>
                    <select wire:model="newOrVariante"
                        class="border-2 border-indigo-500 my-2 mb-5 rounded-xl px-4 py-2 w-28" name="adminType"
                        id="adminType">
                        <option value="1">New</option>
                        <option value="2">Variante</option>
                    </select>
                </div>
                @if ($newOrVariante == 2)
                    <select wire:model.lazy="parentId" name="category" id="category"
                        class="border border-gray-900/25 my-2 mb-5 rounded-md px-4 py-2 w-full">
                        <option value="">Choose the parent</option>
                        @foreach ($categories as $category)
                            @if ($category->parent_id == null)
                                <option class="text-blue-500 font-semibold" value="{{ $category->id }}">
                                    {{ $category->title }}</option>
                            @endif
                        @endforeach
                    </select>
                @endif
            @endif
            <label for="titleInput" class="block mb-2 uppercase font-bold text-gray-700 text-sm">title</label>
            <x-atoms.input value="" model="titleInput" name="titleInput" type="text" class="mb-3"
                holder="" />
            <div>
                <h1 class="block mb-2 uppercase font-bold text-gray-700 text-sm">Book Image</h1>
                <div class="mb-5 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
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
            <x-atoms.button class="" content="CREATE" />
            <x-atoms.show-errors />
        </form>
    </div>
</div>
