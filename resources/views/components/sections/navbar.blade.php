        <header class="sticky top-0 z-10 {{ $class ?? '' }} text-white">
            <section class="max-w-6xl mx-auto flex p-4  justify-between items-center">
                <h1><a href="/" class="text-3xl font-bold  text-white ">My Library 📖</a></h1>
                <div><button id="mobile-open-button" class="text-3xl sm:hidden  focus:outline-none">&#9776;</button></div>
                <div aria-label="main" class="space-x-4 hidden sm:block text-lg">
                    @auth
                        <a href="/" class=" hover:opacity-80">Vitrine</a>
                        @manager
                            <a href="/dashboard" class="hover:opacity-80 text-green-500">Dashbord</a>
                        @endmanager

                        @admin
                            <a href="/dashboard/admin" class="hover:opacity-80 text-red-600">AdminManager</a>
                        @endadmin
                        <a href="#" class="hover:opacity-80" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">Logout</a>
                        <form id="logout-form" class="hidden" method="POST" action="/logout">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                        <span class="">Hello {{ auth()->user()?->username }}</span>
                    @else
                        <a href="{{ route('login') }}" class="hover:opacity-80">LogIn</a>
                        <a href="/register" class="hover:opacity-80">Register</a>
                    @endauth

                </div>
            </section>
        </header>
        </nav>
