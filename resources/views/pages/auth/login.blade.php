<div class="mt-40">
    <div class="mx-auto max-w-xl border shadow overflow-hidden bg-white rounded-xl p-6 mt-8 ">
        <h1 class="text-3xl text-green-500 text-center font-bold my-4 ">LogIn</h1>
        <form wire:submit.prevent="login">

            <label for="email" class="block font-medium leading-6 text-gray-900 text-sm">EMAIL</label>
            <x-atoms.input value="" model="email" name="email" type="email" class="mb-4 p-2 my-1"
                holder="" />
            @error('email')
                <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
            @enderror
            <label for="password" class="block font-medium leading-6 text-gray-900 text-sm">PASSWORD</label>
            <x-atoms.input value="" model="password" name="password" type="password" class="mb-4 p-2 my-1"
                holder="" />
            @error('password')
                <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
            @enderror
            <div class="text-indigo-500 my-2">
                <a href="/forget-password">Forget your password ?</a>
            </div>

            <x-atoms.button class="text-white border border-green-500 bg-green-500" content="LOG IN" />
        </form>

        @error('login')
            <div class="flex p-4 mt-4 text-sm text-red-700 rounded-lg bg-red-100" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="pl-2">
                    <span class="font-medium"> {{ $message }}</span>
                </div>
            </div>
        @enderror
        <p class="mt-6 text-center text-sm text-gray-500">
            Not a member?
            <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Join Us ! and
                Register</a>
        </p>
    </div>
</div>
