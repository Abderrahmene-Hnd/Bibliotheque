<div>
    {{-- ----------------------------------------------------navbar------------------------------------------------------------- --}}
    <nav class="bg-gray-800 sticky top-0 z-10 {{ $class ?? '' }}">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 p-2">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex  items-center">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="">
                            <span class="text-white text-center text-4xl  ml-96">Website Manager</span>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @auth
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-100 rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>Hello {{ auth()->user()?->username }}</span>
                                <svg fill="currentColor" viewBox="0 0 20 20"
                                    :class="{ 'rotate-180': open, 'rotate-0': !open }"
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
                    @guest
                        <a href="/login" class="text-gray-300 hover:text-white px-3 py-2  font-medium"
                            aria-current="page">Login</a>
                        <a href="/register" class="text-gray-300 hover:text-white px-3 py-2  font-medium"
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

    {{-- ----------------------------------------------------sidebar------------------------------------------------------------- --}}
    <div class="w-full h-full">
        <dh-component>
            <div class="flex flex-no-wrap text-left">
                <div style="min-height: 1000px"
                    class="w-96 bg-gray-800 shadow md:h-full flex-col justify-between flex sticky top-0 z-10  ">
                    <div class="px-5">
                        <a href="/dashboard" class="mb-5 font-bold text-gray-300 hover:text-gray-100">... Go back to
                            dashboard</a>
                        <div class="mt-16 w-full flex items-center">
                            <a href="/dashboard/website" class="text-3xl font-bold text-white">Tool Box</a>
                        </div>
                        <ul class="mt-5">
                            <li class="w-full text-black text-sm space-y-3 cursor-pointer items-center mb-6">
                                @if (!$navbar)
                                    <button class="border border-gray-2300 px-2 py-1 rounded-lg bg-gray-200 "
                                        wire:click="navbarEdit">Navbar</button>
                                @else
                                    <select wire:model.lazy="navbar_type" name="navbar" id="navbar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select navbar</option>
                                        <option value="1">Library</option>
                                        <option value="2">Flowbit</option>
                                        <option value="3">Other</option>
                                    </select>
                                    {{-- <div class="flex space-x-2">

                                        <x-color-picker
                                        label="Select a Color"
                                        placeholder="Select the book color"
                                        color-name-as-value
                                    />
                                    </div> --}}
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="navbar_bg_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="navbar_bg_pry_hov_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="navbar_bg_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="sidebar_bg_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="navbar_txt_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="navbar_txt_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="navbar_txt_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="navbar_txt_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <button wire:click="setNavbar"
                                        class="border border-gray-100 bg-gray-100 px-3 py-2 rounded-lg"
                                        type="button">save</button>
                                @endif
                            </li>
                            <li class="w-full text-black text-sm space-y-3 cursor-pointer items-center mb-6">
                                @if (!$herosection)
                                    <button class="border border-gray-2300 px-2 py-1 rounded-lg bg-gray-200 "
                                        wire:click="herosectionEdit">Hero section</button>
                                @else
                                    <select wire:model.lazy="herosection_type" name="navbar" id="navbar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select Hero section</option>
                                        <option value="1">Library</option>
                                        <option value="2">Flowbit</option>
                                        <option value="3">Other</option>
                                    </select>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="herosection_bg_pry_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="herosection_bg_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="herosection_bg_sec_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="herosection_bg_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="herosection_txt_pry_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="herosection_txt_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="herosection_txt_sec_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="herosection_txt_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <button wire:click="setHerosection"
                                        class="border border-gray-100 bg-gray-100 px-3 py-2 rounded-lg"
                                        type="button">save</button>
                                @endif
                            </li>
                            <li class=" w-full text-black text-sm space-y-3 cursor-pointer items-center mb-6">
                                @if (!$card)
                                    <button class="border border-gray-2300 px-2 py-1 rounded-lg bg-gray-200 "
                                        wire:click="cardEdit">Card</button>
                                @else
                                    <select wire:model.lazy="card_type" name="navbar" id="navbar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select footer</option>
                                        <option value="1">first footer</option>
                                        <option value="2">second footer</option>
                                        <option value="3">third footer</option>
                                    </select>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="card_bg_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="card_bg_pry_hov_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="card_bg_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="card_bg_sec_hov_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="card_txt_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="card_txt_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="card_txt_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="card_txt_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <button wire:click="setCard"
                                        class="border border-gray-100 bg-gray-100 px-3 py-2 rounded-lg"
                                        type="button">save</button>
                                @endif
                            </li>
                            <li class=" w-full text-black text-sm space-y-3 cursor-pointer items-center mb-6">
                                @if (!$calltoaction)
                                    <button class="border border-gray-2300 px-2 py-1 rounded-lg bg-gray-200 "
                                        wire:click="calltoactionEdit">Call to action</button>
                                @else
                                    <select wire:model.lazy="calltoaction_type" name="navbar" id="navbar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select footer</option>
                                        <option value="1">first footer</option>
                                        <option value="2">second footer</option>
                                        <option value="3">third footer</option>
                                    </select>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="calltoaction_bg_pry_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="calltoaction_bg_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="calltoaction_bg_sec_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="calltoaction_bg_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="calltoaction_txt_pry_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="calltoaction_txt_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="calltoaction_txt_sec_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="calltoaction_txt_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <button wire:click="setCalltoaction"
                                        class="border border-gray-100 bg-gray-100 px-3 py-2 rounded-lg"
                                        type="button">save</button>
                                @endif
                            </li>
                            <li class=" w-full text-black text-sm space-y-3 cursor-pointer items-center mb-6">
                                @if (!$sidebar)
                                    <button class="border border-gray-2300 px-2 py-1 rounded-lg bg-gray-200 "
                                        wire:click="sidebarEdit">Sidebar</button>
                                @else
                                    <select wire:model.lazy="sidebar_type" name="navbar" id="navbar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select sidebar</option>
                                        <option value="1">first sidebar</option>
                                        <option value="2">second sidebar</option>
                                        <option value="3">third sidebar</option>
                                    </select>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="sidebar_bg_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="sidebar_bg_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="sidebar_bg_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="sidebar_bg_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="sidebar_txt_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="sidebar_txt_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="sidebar_txt_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="sidebar_txt_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <button wire:click="setSidebar"
                                        class="border border-gray-100 bg-gray-100 px-3 py-2 rounded-lg"
                                        type="button">save</button>
                                @endif
                            </li>

                            <li class=" w-full text-black text-sm space-y-3 cursor-pointer items-center mb-6">
                                @if (!$footer)
                                    <button class="border border-gray-2300 px-2 py-1 rounded-lg bg-gray-200 "
                                        wire:click="footerEdit">Footer</button>
                                @else
                                    <select wire:model.lazy="footer_type" name="navbar" id="navbar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select footer</option>
                                        <option value="1">first footer</option>
                                        <option value="2">second footer</option>
                                        <option value="3">third footer</option>
                                    </select>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="footer_bg_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="footer_bg_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="footer_bg_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary bg Color</option>
                                            <option value=" bg-black ">black</option>
                                            <option value=" bg-gray-800 ">gray</option>
                                            <option value=" bg-white ">white</option>
                                            <option value=" bg-blue-500 ">blue</option>
                                            <option value=" bg-red-500 ">red</option>
                                            <option value=" bg-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="footer_bg_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:bg-black ">black</option>
                                            <option value=" hover:bg-gray-800 ">gray</option>
                                            <option value=" hover:bg-white ">white</option>
                                            <option value=" hover:bg-blue-500 ">blue</option>
                                            <option value=" hover:bg-red-500 ">red</option>
                                            <option value=" hover:bg-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="footer_txt_pry_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Primary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="footer_txt_pry_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <div class="flex space-x-2">
                                        <select wire:model.lazy="footer_txt_sec_color" name="navbar" id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Secondary text Color</option>xs
                                            <option value=" text-black ">black</option>
                                            <option value=" text-white ">white</option>
                                            <option value=" text-gray-200 ">gray</option>
                                            <option value=" text-blue-500 ">blue</option>
                                            <option value=" text-red-500 ">red</option>
                                            <option value=" text-green-500 ">green</option>
                                        </select>
                                        <select wire:model.lazy="footer_txt_sec_hov_color" name="navbar"
                                            id="navbar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Hover Color</option>
                                            <option value=" hover:text-black  ">black</option>
                                            <option value=" hover:text-white ">white</option>
                                            <option value=" hover:text-gray-200 ">gray</option>
                                            <option value=" hover:text-blue-500 ">blue</option>
                                            <option value=" hover:text-red-500 ">red</option>
                                            <option value=" hover:text-green-500 ">green</option>
                                        </select>
                                    </div>
                                    <button wire:click="setFooter"
                                        class="border border-gray-100 bg-gray-100 px-3 py-2 rounded-lg"
                                        type="button">save</button>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container mx-auto py-10  md:w-4/5 w-11/12 px-6">
                    <div class="w-full h-full rounded ">
                        <div>
                            <div class="p-10">
                                <div class="border-2 border-gray-300 border-dashed rounded-lg p-2">
                                    <iframe id="inlineFrameExample" title="Inline Frame Example" width="1350"
                                        height="700" src="http://bibliotheque.test">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                var sideBar = document.getElementById("mobile-nav");
                var openSidebar = document.getElementById("openSideBar");
                var closeSidebar = document.getElementById("closeSideBar");
                sideBar.style.transform = "translateX(-260px)";

                function sidebarHandler(flag) {
                    if (flag) {
                        sideBar.style.transform = "translateX(0px)";
                        openSidebar.classList.add("hidden");
                        closeSidebar.classList.remove("hidden");
                    } else {
                        sideBar.style.transform = "translateX(-260px)";
                        closeSidebar.classList.add("hidden");
                        openSidebar.classList.remove("hidden");
                    }
                }
            </script>
        </dh-component>
    </div>
</div>
