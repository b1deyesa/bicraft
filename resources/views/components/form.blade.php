<form   
    action="{{ $action }}"
    method="{{ $method }}"
    @if($wire) wire:submit="{{ $wire }}" @endif
    {{ $attributes }}
    >
    @if($method_type) @method($method_type) @endif
    @if($method != 'GET') @csrf @endif
    {{ $slot }}
</form>