<header class="sticky top-0 z-10 {{ $class ?? '' }} text-white">
    <section class="max-w-6xl mx-auto flex p-6  justify-between items-center">
        <div><button id="mobile-open-button" class="text-3xl sm:hidden  focus:outline-none">&#9776;</button></div>
        <div aria-label="main" class="space-x-4 hidden sm:block text-lg">
            @auth
                <a href="#" class="hover:opacity-80" x-data="{}"
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
