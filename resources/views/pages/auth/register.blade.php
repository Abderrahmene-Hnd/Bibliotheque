<div class="mt-40">
    <h1 class="text-5xl text-blue-500 text-center font-bold ">Register</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <form method="POST" action="/register">
            @csrf
            <livewire:components.atoms.label name="username" class="font-semibold" content="USERNAME"/>
            <livewire:components.atoms.input name="username" type="text" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />
            <livewire:components.atoms.label name="email" class="font-semibold" content="EMAIL"/>
            <livewire:components.atoms.input name="email" type="email" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />
            <livewire:components.atoms.label name="password" class="font-semibold" content="PASSWORD"/>
            <livewire:components.atoms.input name="password" type="password" class="border-2 border-indigo-500 my-2 mb-5"
                holder="" attributes="required" />
            <livewire:components.atoms.button class="mt-3" content="REGISTER"/>
        </form>
    </div>
</div>
