<article class="flex mt-10 bg-gray-50 rounded-xl border border-blue-700 p-4 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?img={{ rand(1, 10) }}" alt="" width="60" height="60"
            class="rounded-xl">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->user?->username }}</h3>
            <p class="text-xs">
                Posted <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p class="pt-2">
            {{ $comment->body }}
        </p>
    </div>
</article>
