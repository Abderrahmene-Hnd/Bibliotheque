<div class="mx-auto max-w-screen-lg mt-60 pl-5">
    <form wire:submit.prevent="addComments">
        <livewire:components.atoms.label name="comment" content="Add a comment" class="text-3xl text-green-500 my-5 font-bold" />
        <textarea wire:model.lazy="newComment"
            class="border-2 border-indigo-500 my-2 rounded-lg p-2 w-full focus:outline-none focus:ring " name="comment"
            id="comment" placeholder="Write something" cols="80" rows="10" required></textarea>

        @error('comment')
            <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
        @enderror
        <livewire:components.atoms.button content="SUBMIT"  />
    </form>
</div>
