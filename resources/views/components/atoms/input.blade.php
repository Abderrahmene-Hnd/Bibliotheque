        <input class=" {{ $this->class }} rounded-lg p-2 w-full focus:outline-none focus:ring "
            type="{{ $this->type }}" name="{{ $this->name }}" id="{{ $this->name }}" placeholder="{{ $this->holder }}" required>
        @error('{{ $this->name }}')
            <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
        @enderror
