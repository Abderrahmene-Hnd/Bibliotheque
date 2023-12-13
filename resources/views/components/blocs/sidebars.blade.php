@switch($nmbr?:1)
    @case(1)
    <div class="w-full h-full">
        <dh-component>
            <div class="flex flex-no-wrap">
                <div style="min-height: 1000px"
                    class="w-64 {{ $sb_bg_color }} shadow md:h-full flex-col justify-between flex sticky top-0 z-10  ">
                    <div class="px-5 ">
                        <div class="h-16 w-full flex items-center">
                            <a href="/" class="text-3xl font-bold {{ $sb_txt_color }}">Flowbite</a>
                        </div>
                        <ul class="mt-12">
                            <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $sb_txt_color }} cursor-pointer items-center mb-6">
                            <a href="/dashboard"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                    <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                </svg>
                                <span class="text-sm ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $sb_txt_color }} cursor-pointer items-center mb-6">
                            <a href="/dashboard/book"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                    <polyline points="4 12 12 16 20 12" />
                                    <polyline points="4 16 12 20 20 16" />
                                </svg>
                                <span class="text-sm ml-2">Books</span>
                            </a>
                        </li>
                        <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $sb_txt_color }} cursor-pointer items-center mb-6">
                            <a href="/dashboard/category"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                    <polyline points="4 12 12 16 20 12" />
                                    <polyline points="4 16 12 20 20 16" />
                                </svg>
                                <span class="text-sm ml-2">Categories</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar ends -->
                <!-- Remove class [ h-64 ] when adding a card block -->
                <div class="container mx-auto py-10  md:w-4/5 w-11/12 px-6">
                    <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                    <div class="w-full h-full rounded ">
                        {{ $slot }}
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
    @break

    @case(2)
    <div class="w-full h-full">
        <dh-component>
            <div class="flex flex-no-wrap">
                <div style="min-height: 1000px"
                    class="w-64 bg-gray-800 shadow md:h-full flex-col justify-between flex sticky top-0 z-10  ">
                    <div class="px-5 ">
                        <div class="h-16 w-full flex items-center">
                            <a href="/" class="text-3xl font-bold text-white">Tool Box</a>
                        </div>
                        <ul class="mt-12">
                            <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $_SERVER['REQUEST_URI'] == '/dashboard' ? 'text-gray-100' : 'text-gray-400' }} cursor-pointer items-center mb-6">
                            <a href="/dashboard"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                    <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                </svg>
                                <span class="text-sm ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $_SERVER['REQUEST_URI'] == '/dashboard/book' ? 'text-gray-100' : 'text-gray-400' }} cursor-pointer items-center mb-6">
                            <a href="/dashboard/book"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                    <polyline points="4 12 12 16 20 12" />
                                    <polyline points="4 16 12 20 20 16" />
                                </svg>
                                <span class="text-sm ml-2">Books</span>
                            </a>
                        </li>
                        <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $_SERVER['REQUEST_URI'] == '/dashboard/category' ? 'text-gray-100' : 'text-gray-400' }} cursor-pointer items-center mb-6">
                            <a href="/dashboard/category"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                    <polyline points="4 12 12 16 20 12" />
                                    <polyline points="4 16 12 20 20 16" />
                                </svg>
                                <span class="text-sm ml-2">Categories</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar ends -->
                <!-- Remove class [ h-64 ] when adding a card block -->
                <div class="container mx-auto py-10  md:w-4/5 w-11/12 px-6">
                    <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                    <div class="w-full h-full rounded ">
                        {{ $slot }}
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
    @break

    @case(3)
    <div class="w-full h-full">
        <dh-component>
            <div class="flex flex-no-wrap">
                <div style="min-height: 1000px"
                    class="w-64 bg-gray-800 shadow md:h-full flex-col justify-between flex sticky top-0 z-10  ">
                    <div class="px-5 ">
                        <div class="h-16 w-full flex items-center">
                            <a href="/" class="text-3xl font-bold text-white">Tool Box</a>
                        </div>
                        <ul class="mt-12">
                            <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $_SERVER['REQUEST_URI'] == '/dashboard' ? 'text-gray-100' : 'text-gray-400' }} cursor-pointer items-center mb-6">
                            <a href="/dashboard"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                    <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                </svg>
                                <span class="text-sm ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $_SERVER['REQUEST_URI'] == '/dashboard/book' ? 'text-gray-100' : 'text-gray-400' }} cursor-pointer items-center mb-6">
                            <a href="/dashboard/book"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                    <polyline points="4 12 12 16 20 12" />
                                    <polyline points="4 16 12 20 20 16" />
                                </svg>
                                <span class="text-sm ml-2">Books</span>
                            </a>
                        </li>
                        <li
                            class="flex w-full justify-between  hover:text-gray-300 {{ $_SERVER['REQUEST_URI'] == '/dashboard/category' ? 'text-gray-100' : 'text-gray-400' }} cursor-pointer items-center mb-6">
                            <a href="/dashboard/category"
                                class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                    width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                    <polyline points="4 12 12 16 20 12" />
                                    <polyline points="4 16 12 20 20 16" />
                                </svg>
                                <span class="text-sm ml-2">Categories</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar ends -->
                <!-- Remove class [ h-64 ] when adding a card block -->
                <div class="container mx-auto py-10  md:w-4/5 w-11/12 px-6">
                    <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                    <div class="w-full h-full rounded ">
                        {{ $slot }}
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
