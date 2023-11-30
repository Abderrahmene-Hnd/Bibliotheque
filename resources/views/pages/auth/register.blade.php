<div class="mt-24">
    <h1 class="text-5xl text-blue-500 text-center font-bold ">Register</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <form wire:submit.prevent="register">
            @csrf
            <label for="username" class="font-semibold">USERNAME</label>
            <x-atoms.input name="username" type="text" class="border-2 border-indigo-500 my-2 rounded-xl" holder=""
                model="username" />
            <label for="email" class="font-semibold">EMAIL</label>
            <x-atoms.input name="email" type="email" class="border-2 border-indigo-500 my-2 rounded-xl"
                holder="" model="email" />
            <label for="password" class="font-semibold">PASSWORD</label>
            <x-atoms.input name="password" type="password" class="border-2 border-indigo-500 my-2 mb-5 rounded-xl"
                holder="" model="password" />
            <x-atoms.button class="mt-3" content="REGISTER" />
            @error('error')
                <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
            @enderror
        </form>
    </div>
</div>
