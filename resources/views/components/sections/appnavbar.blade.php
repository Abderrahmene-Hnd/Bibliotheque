<header class="sticky top-0 z-10 {{ $class ?? '' }} text-white">

    <section class=" flex p-6 justify-between items-center">
        <div>
            <button id="mobile-open-button" class="text-3xl sm:hidden  focus:outline-none">&#9776;</button>
        </div>
        @switch($_SERVER['REQUEST_URI'])
            @case('/dashboard/user')
                <span class="text-white text-center text-4xl  ml-96 -mr-24">Users Manager</span>
            @break

            @case('/dashboard/book')
                <span class="text-white text-center text-4xl  ml-96 -mr-24">Books</span>
            @break

            @case('/dashboard/category')
                <span class="text-white text-center text-4xl ml-96 -mr-24">Categories</span>
            @break

            @case('/dashboard/author')
                <span class="text-white text-center text-4xl  ml-96 -mr-24">Authors</span>
            @break

            @case('/dashboard')
                <span class="text-white text-center text-4xl  ml-96 -mr-24">Dashboard</span>
            @break

            @case('/settings')
                <span class="text-white text-center text-4xl  ml-96 -mr-24">Settings</span>
            @break

            @default
        @endswitch

        <div aria-label="main" class="space-x-4 hidden sm:block text-lg ">

            @auth
                <a href="#" class="hover:opacity-80 " x-data="{}"
                    @click.prevent="document.querySelector('#logout-form').submit()">Logout</a>
                <form id="logout-form" class="hidden" method="POST" action="/logout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                <span class="text-red-500">Hello {{ auth()->user()?->username }}</span>
            @endauth
        </div>
    </section>

</header>

</nav>

