<div class="mt-40">
    <h1 class="text-5xl text-green-500 text-center font-bold ">Give new password</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <form method="POST" action="/reset-password">
            @csrf
            <input type="text" name="token" value="{{ $this->token }}" hidden>
            <x-atoms.sucess-show />
            <livewire:components.atoms.label name="email" class="" />
            <livewire:components.atoms.input name="email" type="email" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />
            <livewire:components.atoms.label name="New password" class="" />
            <livewire:components.atoms.input name="password" type="password" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />
            <livewire:components.atoms.label name="Repeat password" class="" />
            <livewire:components.atoms.input name="passwordConfirmation" type="password"
                class="border-2 border-indigo-500 my-2" holder="" attributes="required" />
            <x-atoms.button class="mt-3" content="RESET" />
        </form>
    </div>
</div>
