@switch($nmbr=1)
    @case(1)
    <nav class="{{ $bg_pry_color ? : 'bg-gray-800' }} sticky top-0 z-10 {{ $class ?? '' }}">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 p-2">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex  items-center">

                        @if ($currentLink == '/dashboard/user' || $currentLink == '/dashboard/book' || $currentLink == '/dashboard/category' || $currentLink == '/dashboard/author' || $currentLink == '/dashboard'  || $currentLink == '/settings')
                        @else
                        <a href="/"><img class="pt-2.5 pr-2" src="{{ asset('storage/images/Lybrrarywhite.png') }}" alt="Lary avatar" width="50"></a>
                        <a href="/" class="text-2xl font-bold {{ $txt_pry_color ?: 'text-white' }} ">My Library </a>
                        @endif

                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4 ml-52">
                            @switch($currentLink)
                                @case('/dashboard/user')
                                    <span class="{{ $txt_pry_color?: 'text-white' }} text-center text-4xl  ml-96">Users Manager</span>
                                @break

                                @case('/dashboard/book')
                                    <span class="{{ $txt_pry_color?: 'text-white' }} text-center text-4xl  ml-96">Books</span>
                                @break

                                @case('/dashboard/category')
                                    <span class="{{ $txt_pry_color?: 'text-white' }} text-center text-4xl ml-96">Categories</span>
                                @break

                                @case('/dashboard/author')
                                    <span class="{{ $txt_pry_color?: 'text-white' }} text-center text-4xl  ml-96">Authors</span>
                                @break

                                @case('/dashboard')
                                    <span class="{{ $txt_pry_color?: 'text-white' }} text-center text-4xl  ml-96">Dashboard</span>
                                @break

                                @case('/settings')
                                    <span class="{{ $txt_pry_color?: 'text-white' }} text-center text-4xl  ml-96">Settings</span>
                                @break

                                @case('')
                                    @auth
                                        <a href="/" class="{{ $txt_sec_color?: 'text-white' }} {{ $txt_sec_hov_color ?: 'hover:text-white' }} px-3 py-2  font-medium"
                                            aria-current="page">Vitrine</a>
                                    @endauth
                                    @role('manager|owner')

                                        <a href="/dashboard" class="{{ $txt_sec_color?: 'text-gray-300' }} {{ $txt_sec_hov_color ?: 'hover:text-white' }} px-3 py-2 font-medium">Dashbord</a>
                                    @endrole

                                    @role('owner')
                                        <a href="/dashboard/user" class="{{ $txt_sec_color?: 'text-gray-300' }} {{ $txt_sec_hov_color ?: 'hover:text-white' }} px-3 py-2 font-medium">Users
                                            Manager</a>
                                    @endrole
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
                                class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold {{ $txt_sec_color ?: 'bg-black' }} text-left {{ $bg_sec_color ?: 'bg-gray-100' }} rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 {{ $txt_sec_hov_color ?: 'hover:text-gray-900' }} focus:text-gray-900 {{ $bg_sec_hov_color ?: 'hover:bg-gray-200' }} focus:bg-gray-200 focus:outline-none focus:shadow-outline">
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
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold {{ $bg_sec_color ?: 'bg-gray-100' }} rounded-t-lg  md:mt-0 {{ $txt_sec_color ?: 'text-gray-900' }} focus:text-gray-900 {{ $txt_sec_hov_color ?: 'hover:bg-gray-200' }} focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="/settings">Settings</a>
                                    <a @click.prevent="document.querySelector('#logout-form').submit()"
                                        class="block px-4 py-2 mt-2 text-sm font-semibold {{ $bg_sec_color ?: 'bg-gray-100' }} rounded-b-lg  md:mt-0 {{ $txt_sec_color ?: 'text-gray-900' }} focus:text-gray-900 {{ $txt_sec_hov_color ?: 'hover:bg-gray-200' }} focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="/logout">Sign out</a>
                                </div>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <a href="/login" class="{{ $txt_sec_color ?: 'bg-gray-300' }} {{ $txt_sec_hov_color ?: 'hover:bg-white' }} px-3 py-2  font-medium"
                            aria-current="page">Login</a>
                        <a href="/register" class="{{ $txt_sec_color ?: 'bg-gray-300' }} {{ $txt_sec_hov_color ?: 'hover:bg-white' }} px-3 py-2  font-medium"
                            aria-current="page">Register</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <form id="logout-form" class="hidden" method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @break

    @case(2)
        <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @break

    @case(4)
    @break

    @case(5)
    @break

    @case(6)
    @break

    @case(7)
    @break

    @default
@endswitch
