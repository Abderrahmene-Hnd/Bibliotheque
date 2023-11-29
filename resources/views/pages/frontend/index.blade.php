<livewire:components.sections.hero-section />
<livewire:components.sections.feature />
<livewire:components.sections.call-to-action />

<div class=" mx-auto max-w-screen-lg mt-64">
    <a class="text-green-500 text-2xl font-bold mb-5" href="/comments">Add a comment</a>
    @foreach ($comments as $comment)
        <livewire:components.atoms.comment-card class=" mt-3" content="Submit" :comment="$comment" />
    @endforeach
</div>
