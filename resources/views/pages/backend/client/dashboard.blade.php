<div class="mt-24">
    <h1 class="text-5xl text-blue-500 text-center font-bold ">Settings</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <div class="space-y-12 py-12">
            <form wire:submit.prevent="changerUsername">
                @csrf
                <label for="username" class="font-semibold">USERNAME</label>
                <div class="grid grid-cols-5 space-x-5 h-16 ">
                    <x-atoms.input name="username" type="text"
                        class="border-2 border-indigo-500 my-2 rounded-xl col-span-3" holder="" model="username" />
                    <x-atoms.button class="mt-1.5 col-span-2 w-56 " content="Changer Username" />
                </div>
            </form>

            <form wire:submit.prevent="changerEmail">
                @csrf
                <label for="email" class="font-semibold">EMAIL</label>
                <div class="grid grid-cols-5 space-x-5 h-16 ">
                    <x-atoms.input name="email" type="email"
                        class="border-2 border-indigo-500 my-2 rounded-xl col-span-3" holder="" model="email" />
                    <x-atoms.button class="mt-1.5 col-span-2 w-44 " content="Changer Email" />
                </div>
            </form>

            <form wire:submit.prevent="changerPassword">
                @csrf
                <label for="password" class="font-semibold">PASSWORD</label>
                <div class="grid grid-cols-5 space-x-5 h-16">
                    <x-atoms.input name="password" type="password"
                        class="border-2 border-indigo-500 my-2 rounded-xl col-span-3" holder="" model="password" />
                    <x-atoms.button class="mt-1.5 col-span-2 w-56 " content="Changer Password" />
                    @error('error')
                        <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>
