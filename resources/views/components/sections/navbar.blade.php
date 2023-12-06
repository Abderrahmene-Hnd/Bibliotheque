<nav class="bg-gray-800 sticky top-0 z-10 {{ $class ?? '' }}">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 p-2">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex  items-center">
                    @if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/register')
                        <h1><a href="/" class="text-2xl font-bold  text-white ">My Library 📖</a></h1>
                    @endif
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4 ml-52">
                        @switch($_SERVER['REQUEST_URI'])
                            @case('/dashboard/user')
                                <span class="text-white text-center text-4xl  ml-96">Users Manager</span>
                            @break

                            @case('/dashboard/book')
                                <span class="text-white text-center text-4xl  ml-96">Books</span>
                            @break

                            @case('/dashboard/category')
                                <span class="text-white text-center text-4xl ml-96">Categories</span>
                            @break

                            @case('/dashboard/author')
                                <span class="text-white text-center text-4xl  ml-96">Authors</span>
                            @break

                            @case('/dashboard')
                                <span class="text-white text-center text-4xl  ml-96">Dashboard</span>
                            @break

                            @case('/settings')
                                <span class="text-white text-center text-4xl  ml-96">Settings</span>
                            @break

                            @case('/')
                                <a href="/" class="text-gray-300 hover:text-white px-3 py-2  font-medium"
                                    aria-current="page">Vitrine</a>
                                    <a href="/login" class="text-gray-300 hover:text-white px-3 py-2  font-medium"
                                    aria-current="page">Login</a>
                                    <a href="/register" class="text-gray-300 hover:text-white px-3 py-2  font-medium"
                                    aria-current="page">Register</a>
                                @manager
                                    <a href="/dashboard" class="text-gray-300 hover:text-white px-3 py-2 font-medium">Dashbord</a>
                                @endmanager
                                @admin
                                    <a href="/dashboard/user" class="text-gray-300 hover:text-white px-3 py-2 font-medium">Users
                                        Manager</a>
                                @endadmin
                            @break

                            @default
                        @endswitch
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                @auth

                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-100 rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>Hello {{ auth()->user()?->username }}</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div x-show="open" style="display: none" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class=" rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-100 rounded-t-lg  md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="/settings">Settings</a>
                                <a @click.prevent="document.querySelector('#logout-form').submit()"
                                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-100 rounded-b-lg  md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="/logout">Sign out</a>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
<form id="logout-form" class="hidden" method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>
