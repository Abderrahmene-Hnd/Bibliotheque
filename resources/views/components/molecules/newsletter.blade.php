<form method="POST" action="/{{ $link }}">
    <x-atoms.input value="" name="newsletter" type="email" class="border border-gray-100 mb-5 bg-gray-100"
        holder="example@example.com" model="email" />
    <x-atoms.button class="border border-gray-100 mb-5 bg-gray-100 text-gray-700 hover:text-gray-500" content="Send" />
</form>
