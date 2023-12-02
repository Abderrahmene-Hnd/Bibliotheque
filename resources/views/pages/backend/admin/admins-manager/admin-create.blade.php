<div class="mt-40">
    <div class="mx-auto max-w-xl border shadow overflow-hidden bg-white rounded-xl p-6 mt-8 ">
        <h1 class="text-3xl text-indigo-500 text-center font-bold my-4 ">Register a new Admin</h1>
        <form wire:submit.prevent="adminregister">
            <label for="admintype" class="font-semibold">ADMIN ROLE</label>
            <div>
                <select class="border-2 border-indigo-500 my-2 mb-5 rounded-xl px-4 py-2" name="admintype" id="admintype">
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                </select>
            </div>
            <label for="username" class="font-semibold text-sm">USERNAME</label>
            <x-atoms.input name="username" type="text"
                class="mb-4 p-2 my-1" holder=""
                model="username" />
            <label for="email" class="font-semibold text-sm">EMAIL</label>
            <x-atoms.input name="email" type="email"
                class="mb-4 p-2 my-1" holder=""
                model="email" />
            <label for="password" class="font-semibold text-sm">PASSWORD</label>
            <x-atoms.input name="password" type="password"
                class="mb-4 p-2 my-1" holder=""
                model="password" />
            <x-atoms.button class="mt-1" content="REGISTER" />
        </form>
        <x-atoms.show-errors />
    </div>
</div>
