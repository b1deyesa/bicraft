@switch($type)
    @case('anchor')
        <a {{ $attributes->merge(['class' => 'button']) }}>{{ $slot }}</a>
        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('.button').each(function() {
                        if ($(this).attr('disabled') === 'disabled') {
                            $(this).addClass('disabled');
                            $(this).click(function(event) {
                                event.preventDefault();
                                event.stopImmediatePropagation();
                            });
                        }
                    });
                });
            </script>
        @endpush
        @break
    @default
        <button type="{{ $type }}" {{ $attributes->merge(['class' => 'button']) }}>{{ $slot }}</button>
@endswitch