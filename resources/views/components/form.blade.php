<form   
    action="{{ $action }}"
    method="{{ $method }}"
    @if($wire) wire:submit="{{ $wire }}" @endif
    {{ $attributes->marge('class' => 'form') }}
    >
    @if($method_type) @method($method_type) @endif
    @if($method != 'GET') @csrf @endif
    {{ $slot }}
</form>