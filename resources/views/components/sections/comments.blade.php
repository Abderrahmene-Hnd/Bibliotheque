<div>
    @auth
        <div class="mx-auto max-w-screen-lg pl-5">
            <form wire:submit.prevent="addComments">
                <label for="comment" class="text-2xl text-gray-800 my-5 font-bold">Add a comment</label>
                <textarea wire:model.lazy="newComment"
                    class=" border border-gray-900/25 my-2 rounded-lg p-2 w-full shadow-sm ring-gray-300 placeholder:text-gray-400 focus:ring-2  " name="comment"
                    id="comment" placeholder="Write something" cols="80" rows="10" required></textarea>

                @error('comment')
                    <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                @enderror
                <x-atoms.button content="SUBMIT" class="border border-gray-700 bg-gray-700 text-white" />
            </form>
        </div>
    @else
        <div class="mx-auto max-w-screen-lg border-2 border-indigo-500 p-5 mt-52 bg-gray-100 rounded-xl  ">
            <p>To participate to the comment section you need to <span class="text-green-500 font-semibold"><a
                        href="/login">Login</a> </span> or <span class="text-indigo-500 font-semibold"> <a
                        href="/register">Register</a></span> </p>
        </div>
    @endauth

    <div class=" mx-auto max-w-screen-lg mt-10">
        <div>
            @foreach ($this->comments as $comment)
                <livewire:components.atoms.comment-card class=" mt-3" content="Submit" :comment="$comment"
                    :wire:key="$comment->id" />
            @endforeach
        </div>
    </div>
</div>
