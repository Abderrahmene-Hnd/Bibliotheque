<input class=" {{ $class }} p-2 w-full my-2" wire:model.lazy="{{$model}}"
type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $holder }}" required>
@error('{{ $name }}')
<p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
@enderror
