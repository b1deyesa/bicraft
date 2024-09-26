<span x-data="{ open: false }">
    @if ($trigger)
        <span x-on:click="open = true">
            {{ $trigger }}
        </span>
    @else
        <x-button class="medium" x-on:click="open = true">{{ $label }}</x-button>
    @endif
    <template x-teleport="body">
        <div class="modal{{ $class }}" x-show="open" x-trap="open" x-transition.opacity x-cloak>
            <div class="modal-container" x-on:click.outside="open = false">
                @if ($slot == '') 
                    <small class="modal-empty">Fill modal content.</small>
                @else
                    {{ $slot }}
                @endif
            </div>
        </div>
    </template>
</span>