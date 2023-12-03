<form method="POST" action="/{{ $link }}">
    <x-atoms.input value="" name="newsletter" type="email" class="border-2 border-indigo-500 mb-5"
        holder="example@example.com" model="email" />
    <x-atoms.button class="" content="Send" />
</form>
