<div class="mt-40">
    <h1 class="text-5xl text-green-500 text-center font-bold ">LogIn</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <form method="POST" action="/login">
            @csrf
            <livewire:components.atoms.label name="email" class="" />
            <livewire:components.atoms.input name="email" type="email" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />
            <livewire:components.atoms.label name="password" class="" />
            <livewire:components.atoms.input name="password" type="password" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />

                <a href="/forget-password" class="text-indigo-500 mt-1">Forget your password ?</a>

            <livewire:components.atoms.button class="mt-3" content="LOG IN"/>
            @error('login')
                <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
            @enderror
        </form>
    </div>
</div>
