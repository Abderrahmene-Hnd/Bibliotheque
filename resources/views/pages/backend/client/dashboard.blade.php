<div class="mx-auto max-w-5xl border shadow overflow-hidden bg-gray-100/10 rounded-xl px-14 py-14 mt-5 ">
    <h2 class=" text-3xl text-center font-semibold leading-7 text-indigo-700">Personal Informations</h2>

    <div class="mt-10 space-y-8 ">
        <h2 class="text-lg font-semibold leading-7 text-gray-900 -mb-3">Change your Username and email</h2>
        <form wire:submit.prevent="changerUsername">
            <div class="sm:col-span-4">
                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                <div class="mt-2 justify-between space-x-5 flex ">
                    <x-atoms.input value="" model="username" name="username" type="text" class=""
                        holder="{{ auth()->user()->username }}" />

                    <button type="submit"
                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                </div>
            </div>
        </form>
        <form wire:submit.prevent="changerEmail">
            <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                    address</label>
                <div class="mt-2 justify-between space-x-5 flex ">
                    <x-atoms.input value="" model="email" name="email" type="email" class=""
                        holder="{{ auth()->user()->email }}" />

                    <button type="submit"
                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                </div>
            </div>
        </form>
    </div>
    <form wire:submit.prevent="changerPassword">
        <div class="mt-10 space-y-8 ">
            <h2 class="text-lg font-semibold leading-7 text-gray-900 -mb-3">Change the password</h2>
            <div class="sm:col-span-4">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Old
                    Password</label>
                <div class="mt-2">
                    <x-atoms.input value="" model="oldPassword" name="oldPassword" type="password" class=""
                        holder="" />
                </div>
                @error('oldPassword')
                    <p class='text-red-500 text-xs mb-2'> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-4">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">New
                    Password</label>
                <div class="mt-2">
                    <x-atoms.input value="" model="newPassword" name="newPassword" type="password" class=""
                        holder="" />
                </div>
            </div>
            <button type="submit"
                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
        </div>
    </form>
    <x-atoms.show-errors />
</div>
