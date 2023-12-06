<div class="container mx-auto px-4 sm:px-8">
    <a class=" inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150"
        href="/dashboard/user/create">
        Create a new User
    </a>
    <div class="pb-8">
        <div class="my-5 flex sm:flex-row flex-col">
            <div class=" sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto container">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-600 uppercase border-b-2 border-gray-200">
                                    Username
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-600 uppercase border-b-2 border-gray-200">
                                    Role
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-600 uppercase border-b-2 border-gray-200">
                                    Created at
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-600 uppercase border-b-2 border-gray-200">

                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-600 uppercase border-b-2 border-gray-200">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-center text-gray-900 whitespace-no-wrap">
                                                    {{ $user->username }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-center text-gray-900 whitespace-no-wrap">
                                            {{ $user->role_id == 1 ? 'Admin' : ($user->role_id == 2 ? 'Manager' : 'Client') }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-center text-gray-900 whitespace-no-wrap">
                                            {{ $user->created_at }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <button type="button" wire:click="editAdmin({{ $user->id }})"
                                            class="text-blue-500 hover:text-blue-600">Edit</button>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <button type="button" wire:click="deleteAdmin({{ $user->id }})"
                                            class="text-red-500 hover:text-red-600">Delete</button>
                                    </td>
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
