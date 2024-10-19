<div class="input-file{{ $errors->has($name) ? ' input-error' : '' }}{{ $disabled ? ' disabled' : null }}{{ $class }}">
    @if ($rename)
        <form wire:submit.prevent="submit" x-on:click.outside="$wire.call('submit')" @keydown.enter="$refs.submit.click()" class="file-form">
            <input type="text" wire:model="filename" autocomplete="off" x-data x-init="$refs.input.focus()" x-ref="input">
            <div class="confirm">
                <button type="button" wire:click="cancel()"><i class="fas fa-xmark"></i></button>
                <button type="submit" x-ref="submit"><i class="fas fa-check"></i></button>
            </div>
        </form>
    @elseif ($success)
        <span class="value">{{ $data['name'] }}.{{ $data['extension'] }}</span>
        <div class="tools" x-data="{ open: false }">
            <i class="fas fa-ellipsis{{ $disabled ? ' disabled' : null }}" @if(!$disabled) x-on:click="open = ! open" @endif></i>
            <ul x-show="open" x-on:click.outside="open = false" x-cloak>
                <li wire:click="onRename()">Rename</li>
                <li wire:click="delete()">Delete</li>
                <li x-on:click="$refs.file.click()">Change File</li>
            </ul>
        </div>
    @else
        <button type="button" x-on:click="$refs.file.click()" @disabled($disabled)>Choose</button>
        <span class="placeholder">No file chosen</span>
    @endif
    
    <input type="file" id="file-{{ $id }}" x-ref="file" wire:model="file">
    <input type="hidden" id="{{ $id }}" name="{{ $name }}"
        @if(old($name, $value)) value="{{ old($name, $value) }}" @endif
        >
</div>