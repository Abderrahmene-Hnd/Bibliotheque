<div class="mt-40">
    <h1 class="text-5xl text-blue-500 text-center font-bold ">Reset your password</h1>
    <div class="container mx-auto max-w-2xl border shadow overflow-hidden bg-gray-100 rounded-xl p-5 mt-8 ">
        <form method="POST" action="/forget-password">
            @csrf
            <x-atoms.sucess-show/>
            <livewire:components.atoms.label name="email" class="" />
            <livewire:components.atoms.input name="email" type="email" class="border-2 border-indigo-500 my-2"
                holder="" attributes="required" />
                <p class="text-indigo-400 py-2 w-96">To resete your password we will send you a confimartion code to your email address.</p>
            <livewire:components.atoms.button class="my-3" content="SEND CODE"/>
            <x-atoms.errors-show/>
        </form>
    </div>
</div>
