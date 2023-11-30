<h1 class="mt-12 text-5xl font-semibold text-center text-red-500">Manage the Admins</h1>
<h3 class="container mx-auto mt-5 text-xl font-semibold"><a href="/admin/register"
        class="border border-indigo-500 rounded-3xl bg-indigo-500 text-white px-5 py-2 pb-3.5">Create a new Admin</a>
</h3>

<body class="font-sans antialiased">
    <div class="container px-4 mx-auto sm:px-8">
        <div class="pb-8">
            <div class="flex flex-col my-5 sm:flex-row">
                <div class="flex flex-row mb-1 sm:mb-0">
                    <div class="relative">
                        {{-- <x-category-dropdown /> --}}
                    </div>
                </div>
                {{-- <div class="relative block ml-5">
                    <span class="absolute inset-y-0 left-0 flex items-center h-full pl-2">
                        <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500 fill-current">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                </div> --}}
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
                                        <a href=" /dashboard/{{ $user->id }}/edit"
                                            class="text-blue-500 hover:text-blue-600">Edit</a>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        {{-- <form method="POST" action="/admin/posts/{{ $user->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form> --}}
                                        <button class="text-red-400 hover:text-red-600">Delete</button>
                                    </td>
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
