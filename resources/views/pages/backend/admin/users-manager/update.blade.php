<div class="mt-40">
    <div class="mx-auto max-w-xl border shadow overflow-hidden bg-white rounded-xl p-6 mt-8 ">
        <h1 class="text-3xl text-indigo-500 text-center font-bold mb-8 mt-5 ">Edit the admin</h1>
        <form wire:submit.prevent="adminEdit">
            <label for="admintype" class="font-semibold">ADMIN ROLE</label>
            <div>
                <select wire:model="adminType" class="border-2 border-indigo-500 my-2 mb-5 rounded-xl px-4 py-2 w-28"
                    name="admintype" id="admintype">
                    <option value="">Select</option>
                    <option value="1" class="text-red-300" disabled>Owner</option>
                    <option value="2">Admin</option>
                    <option value="3">Manager</option>
                    <option value="4">Client</option>
                </select>
            </div>
            <label for="username" class="font-semibold">USERNAME</label>
            <x-atoms.input value="" model="usernameInput" name="username" type="text" class="mb-4 p-2 my-1"
                holder="{{ $userInfos->username }}" />
            <label for="email" class="font-semibold">EMAIL</label>
            <x-atoms.input value="" model="emailInput" name="email" type="email" class="mb-4 p-2 my-1"
                holder="{{ $userInfos->email }}" />
            <label for="password" class="font-semibold">PASSWORD</label>
            <x-atoms.input value="" model="passwordInput" name="password" type="password" class="mb-4 p-2 my-1"
                holder="" />
            <x-atoms.button class="mt-1 text-white border border-indigo-500 bg-indigo-500" content="EDIT" />
        </form>
        <x-atoms.show-errors />
    </div>
</div>
