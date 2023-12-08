<main class="relative flex flex-col justify-center bg-slate-50 overflow-hidden">
    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-20">
        <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none">
            <div class="h-full">
                <div
                    class="text-center text-3xl relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200  shadow shadow-slate-950/5">
                    <div class="mb-5">
                        <div class="text-slate-900 font-semibold mb-5 ">Books
                        </div>
                        <div class="inline-flex items-baseline mb-5">
                            <span class="text-indigo-500 font-bold text-4xl">
                                <h3>{{ $books->count() }}</h3>
                            </span>
                        </div>
                        <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150"
                            href="/dashboard/book">
                            More Infos
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-full">
                <div
                    class="text-center text-3xl relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200  shadow shadow-slate-950/5">
                    <div class="mb-5">
                        <div class="text-slate-900 font-semibold mb-5 ">Categories
                        </div>
                        <div class="inline-flex items-baseline mb-5">
                            <span class="text-indigo-500 font-bold text-4xl">
                                <h3>{{ $categories->count() }}</h3>
                            </span>
                        </div>
                        <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150"
                            href="/dashboard/category">
                            More Infos
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-full">
                <div
                    class="text-center text-3xl relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200  shadow shadow-slate-950/5">
                    <div class="mb-5">
                        <div class="text-slate-900 font-semibold mb-5 ">Authors
                        </div>
                        <div class="inline-flex items-baseline mb-5">
                            <span class="text-indigo-500 font-bold text-4xl">
                                <h3>{{ $authors->count() }}</h3>
                            </span>
                        </div>
                        <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150"
                            href="/dashboard/author">
                            More Infos
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>
