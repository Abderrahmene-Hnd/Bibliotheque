<div>
    <h1 class="mt-12 text-5xl font-semibold text-center text-red-500">Manage the Admins and the Clients</h1>
    <h3 class="container mx-auto mt-5 text-xl font-semibold"><a href="/dashboard/admin/create"
            class="border border-indigo-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-3.5">Create a new Admin</a>
    </h3>

    <body class="font-sans antialiased">
        <div class="container px-4 mx-auto sm:px-8">
            <div class="pb-8">
                <div class="flex flex-col my-5 sm:flex-row">
                    <div class="flex flex-row mb-1 sm:mb-0">
                        <div class="relative">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                    <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
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
                                        </td>                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>
