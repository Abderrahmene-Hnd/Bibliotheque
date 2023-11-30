<div class="mt-40">
    <h1 class="text-5xl text-blue-500 text-center font-bold ">Register a Admin</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <form wire:submit.prevent="adminregister">
            @csrf
            <label for="admintype" class="font-semibold">ADMIN ROLE</label>
            <div>
                <select class="border-2 border-indigo-500 my-2 mb-5 rounded-xl p-2" name="admintype" id="admintype">
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                </select>
            </div>
            <label for="username" class="font-semibold">USERNAME</label>
            <x-atoms.input name="username" type="text"
                class="rounded-lg p-2 w-full focus:outline-none focus:ring border-2 border-indigo-500" holder=""
                model="username" />
            <label for="email" class="font-semibold">EMAIL</label>
            <x-atoms.input name="email" type="email"
                class="rounded-lg p-2 w-full focus:outline-none focus:ring border-2 border-indigo-500" holder=""
                model="email" />
            <label for="password" class="font-semibold">PASSWORD</label>
            <x-atoms.input name="password" type="password"
                class="rounded-lg p-2 w-full focus:outline-none focus:ring border-2 border-indigo-500" holder=""
                model="password" />
            <x-atoms.button class="mt-3" content="REGISTER" />
        </form>
        @error('error')
            <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
        @enderror
    </div>
</div>
