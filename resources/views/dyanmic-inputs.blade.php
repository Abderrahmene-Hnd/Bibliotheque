<div class="container mx-auto px-4 sm:px-8  max-w-3xl border shadow overflow-hidden bg-white rounded-xl p-6 mt-8 ">
    <x-color-picker
    label="Select a Color"
    placeholder="Select the book color"
    :colors="[
        [ 'name' => 'White',  'value' => '#FFF' ],
        [ 'name' => 'Black',  'value' => '#000' ],
        [ 'name' => 'Teal',   'value' => '#14b8a6' ],
        [ 'name' => 'Slate',  'value' => '#64748b' ],
        [ 'name' => 'Red',    'value' => '#ef4444' ],
        [ 'name' => 'Lime',   'value' => '#a3e635' ],
        [ 'name' => 'Sky',    'value' => '#38bdf8' ],
        [ 'name' => 'Violet', 'value' => '#8b5cf6' ],
        [ 'name' => 'Pink',   'value' => '#8b5cf6' ],
        [ 'name' => 'Indigo', 'value' => '#6366f1' ],
    ]"
/>
    <header class="justify-between flex items-center mb-4 border-b pb-4">
        <button wire:click="add()" type="button" class="focus:outline-none text-white bg-purple-500 px-3 py-2 rounded-lg">
            Add contact
        </button>
    </header>
    <table class="w-full text-sm text-left text-slate-300 my-5">
        <x-atoms.show-success />
        <thead class="text-xs text-slate-700 uppercase bg-slag-50">
            <tr>
                <th scope="col" clas="px-6 py-3">
                    name
                </th>
                <th scope="col" clas="px-6 py-3">
                    email
                </th>
                <th scope="col" clas="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $contact)
                <tr class="bg-white  border-b border-slate-200">
                    <td class="px-6 py-4">
                        <input wire:model.lazy="contacts.{{ $key }}.name" name="contact"
                            class="border border-gray-900/25 my-2 mb-5 rounded-md px-4 py-2 w-full" placeholder="name">
                    </td>
                    <td class="px-6 py-4">
                        <input wire:model.lazy="contacts.{{ $key }}.email" name="contact"
                            class="border border-gray-900/25 my-2 mb-5 rounded-md px-4 py-2 w-full" placeholder="email">
                    </td>
                    <td class="px-6 py-4">
                        <button wire:click="delete({{ $key }})" type="button"
                            class="focus:outline-none text-white bg-red-500 px-3 py-2 rounded-lg">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <button wire:click="save()" type="button"
    class="focus:outline-none text-white bg-green-500 px-3 py-2 rounded-lg">
    Save
</button>
</div>
