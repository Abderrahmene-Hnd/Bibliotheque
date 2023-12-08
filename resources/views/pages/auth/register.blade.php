<div class="mt-40">
    <div class="mx-auto max-w-xl border shadow overflow-hidden bg-white rounded-xl p-6 mt-8 ">
        <h1 class="text-4xl text-indigo-500 text-center font-bold my-4 ">Register</h1>
        <form wire:submit.prevent="register">
            <label for="username" class="font-semibold text-sm">USERNAME</label>
            <x-atoms.input value="" model="username" name="username" type="text" class="mb-4 p-2 my-1"
                holder="" />
            @error('username')
                <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
            @enderror
            <label for="email" class="font-semibold text-sm">EMAIL</label>
            <x-atoms.input value="" model="email" name="email" type="email" class="mb-4 p-2 my-1"
                holder="" />
            @error('email')
                <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
            @enderror
            <label for="password" class="font-semibold text-sm">PASSWORD</label>
            <x-atoms.input value="" model="password" name="password" type="password" class="mb-4 p-2 my-1"
                holder="" />
            @error('password')
                <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
            @enderror
            <label for="passwordConfirmation" class="font-semibold text-sm">PASSWORD CONFIRMATION</label>
            <x-atoms.input value="" model="passwordConfirmation" name="passwordConfirmation" type="password"
                class="mb-4 p-2 my-1" holder="" />
            @error('passwordConfirmation')
                <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
            @enderror
            <x-atoms.button class="text-white border border-blue-500 bg-blue-500" content="REGISTER" />
        </form>
        <x-atoms.show-errors />
        <p class="mt-6 text-center text-sm text-gray-500">
            Welcome to
            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">My ! Library</a>
        </p>
    </div>
</div>
