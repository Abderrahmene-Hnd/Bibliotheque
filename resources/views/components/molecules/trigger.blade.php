<x-atoms.button class="bg-blue-500 rounded-full pr-10 pl-5 flex flex-inline hover:text-purple-400" @click="show = !show" >
{{ $slot }}
<span><x-atoms.icones name="down-arrow" /></span>
</x-atoms.button>
