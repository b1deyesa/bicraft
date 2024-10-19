<div class="input">
    
    {{-- Label --}}
    @if($label)<x-label :required="$required">{{ $label }}</x-label>@endif

    {{-- Type --}}
    @switch($type)
        @case('text')
            <span class="input-text{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}">
                @if($prefix) <span class="prefix">{{ $prefix }}</span> @endif
                <input 
                    type="text"
                    id="{{ $id }}" 
                    name="{{ $name }}"
                    autocomplete="off"
                    @if($live) wire:model.live="{{ $live }}" @endif
                    @if($wire) wire:model="{{ $wire }}" @endif
                    @if(old($name, $value)) value="{{ old($name, $value) }}" @endif
                    @if($placeholder) placeholder="{{ $placeholder }}" @endif
                    {{ $attributes }}
                    >
                @if($surfix) <span class="surfix">{{ $surfix }}</span> @endif
            </span>
            @break
        @case('password')
            <span class="input-text{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}">
                <input 
                    type="password"
                    id="{{ $id }}" 
                    name="{{ $name }}"
                    @if($live) wire:model.live="{{ $live }}" @endif
                    @if($wire) wire:model="{{ $wire }}" @endif
                    @if($placeholder) placeholder="{{ $placeholder }}" @endif
                    {{ $attributes }}
                    >
            </span>
            @break
        @case('textarea')
            <textarea
                class="input-textarea{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}"
                id="{{ $id }}" 
                name="{{ $name }}"
                @if($live) wire:model.live="{{ $live }}" @endif
                @if($wire) wire:model="{{ $wire }}" @endif
                @if($placeholder) placeholder="{{ $placeholder }}" @endif
                {{ $attributes }}
                >{{ old($name, $value) }}</textarea>
            @break
        @case('select')
            <span class="input-select{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}">
                @if($prefix) <span class="prefix">{{ $prefix }}</span> @endif
                <span class="input-container">
                    <input
                        type="text" 
                        id="select-{{ $id }}" 
                        autocomplete="off"
                        @if($placeholder) placeholder="{{ $placeholder }}" @endif
                        {{ $attributes }}
                        >
                </span>
                <input
                    type="hidden"
                    id="select-key-{{ $id }}"
                    name="{{ $name }}"
                    value="{{ old($name, $value) }}"
                    @if($live) wire:model.live="{{ $live }}" @endif
                    @if($wire) wire:model="{{ $wire }}" @endif
                    >
                <div class="options" id="options-{{ $id }}">
                    <ul>
                        @foreach ($options as $key => $option)
                            <li data-value="{{ $key }}">{{ $option }}</li>
                        @endforeach
                    </ul>
                </div>
                @if($surfix) <span class="surfix">{{ $surfix }}</span> @endif
            </span>
            @push('scripts')
                <script>
                    $(document).ready(function() {
                        var id = "{{ $id }}";
                        var $select = $('#select-' + id);
                        var $options = $('#options-' + id);
                        var $hiddenKey = $('#select-key-' + id);
                        var $items = $options.find('li');
                        var currentIndex = -1;
                        var initialKey = $hiddenKey.val();
                        var optionFound = false;

                        if (initialKey) {
                            $items.each(function(index) {
                                if ($(this).data('value') == initialKey) {
                                    var initialText = $(this).text();
                                    $select.val(initialText);
                                    $(this).addClass('highlight');
                                    currentIndex = index;
                                    optionFound = true;
                                    $(this)[0].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
                                }
                            });
                        }
                        if (!optionFound) {
                            $hiddenKey.val('');
                        }

                        function filterOptions() {
                            var inputVal = $select.val().toLowerCase();
                            var matched = false;

                            $items.each(function() {
                                var optionText = $(this).text().toLowerCase();
                                if (optionText.indexOf(inputVal) > -1) {
                                    $(this).show();
                                    matched = true;
                                } else {
                                    $(this).hide();
                                }
                            });

                            if (!matched) {
                                $hiddenKey.val('');
                                if ($select.val() !== '') {
                                    $options.hide();
                                } else {
                                    $options.hide();
                                }
                            } else {
                                $options.show();
                            }

                            currentIndex = -1;
                        }
                        function navigateOptions(direction) {
                            var visibleItems = $items.filter(':visible');

                            if (currentIndex === -1) {
                                if (visibleItems.hasClass('highlight')) {
                                    currentIndex = visibleItems.index(visibleItems.filter('.highlight'));
                                } else {
                                    currentIndex = 0;
                                }
                            }

                            if (direction === 'down') {
                                currentIndex = (currentIndex + 1) % visibleItems.length;
                            } else if (direction === 'up') {
                                currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length;
                            }

                            visibleItems.removeClass('highlight');
                            visibleItems.eq(currentIndex).addClass('highlight').focus();
                            visibleItems.eq(currentIndex)[0].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
                        }
                        function selectHighlightedOption() {
                            var visibleItems = $items.filter(':visible');
                            if (currentIndex >= 0 && currentIndex < visibleItems.length) {
                                var $selectedItem = visibleItems.eq(currentIndex);
                                var selectedKey = $selectedItem.data('value');
                                var selectedText = $selectedItem.text();
                                $select.val(selectedText);
                                $hiddenKey.val(selectedKey);
                                $options.hide();
                            }
                        }
                        function scrollToHighlighted() {
                            var highlighted = $items.filter('.highlight');
                            if (highlighted.length) {
                                highlighted[0].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
                            }
                        }

                        $select.on('focus click', function() {
                            filterOptions()
                            $options.show();
                            scrollToHighlighted();
                        });
                        $select.on('input', function() {
                            filterOptions();
                            var matched = false;

                            $items.each(function() {
                                var optionText = $(this).text().toLowerCase();
                                if (optionText === $select.val().toLowerCase()) {
                                    matched = true;
                                    $hiddenKey.val($(this).data('value'));
                                    $items.removeClass('highlight');
                                    $(this).addClass('highlight');
                                    $(this)[0].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
                                }
                            });

                            if (!matched) {
                                $hiddenKey.val('');
                            }
                        });
                        $select.on('keydown', function(e) {
                            if (e.key === 'Enter') {
                                e.preventDefault();
                                selectHighlightedOption();
                                $options.hide();
                                $select.blur();
                            } else if (e.key === 'ArrowDown') {
                                e.preventDefault();
                                navigateOptions('down');
                            } else if (e.key === 'ArrowUp') {
                                e.preventDefault();
                                navigateOptions('up');
                            }
                        });
                        $options.on('click', 'li', function() {
                            var selectedKey = $(this).data('value');
                            var selectedText = $(this).text();
                            $select.val(selectedText);
                            $hiddenKey.val(selectedKey);

                            $items.removeClass('highlight');
                            $(this).addClass('highlight');

                            $options.hide();
                        });

                        $(document).click(function(e) {
                            if (!$(e.target).closest($select).length && !$(e.target).closest($options).length) {
                                var inputVal = $select.val().toLowerCase();
                                var matched = false;

                                $items.each(function() {
                                    var optionText = $(this).text().toLowerCase();
                                    if (optionText === inputVal) {
                                        matched = true;
                                    }
                                });

                                if (!matched) {
                                    $select.val('');
                                    $hiddenKey.val('');
                                }

                                $options.hide();
                            }
                        });
                    });
                </script>
            @endpush
            @break
        @case('date')
            <span class="input-date{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}">
                <input
                    type="date"
                    id="{{ $id }}" 
                    name="{{ $name }}"
                    autocomplete="off"
                    @if($live) wire:model.live="{{ $live }}" @endif
                    @if($wire) wire:model="{{ $wire }}" @endif
                    @if(old($name, $value)) value="{{ old($name, $value) }}" @endif
                    @if($placeholder) placeholder="{{ $placeholder }}" @endif
                    {{ $attributes }}
                    >
                <i class="far fa-calendar"></i>
            </span>
            @push('scripts')
                <script>
                    $(document).ready(function() {
                        $('.fa-calendar').on('click', function() {
                            $('#{{ $id }}')[0].showPicker();
                        });

                        $('#{{ $id }}').on('change', function() {
                            var selectedDate = $(this).val();
                            if (selectedDate === '') {
                                $(this).css('opacity', '50%');
                            } else {
                                $(this).css('opacity', '100%');
                            }
                        }).trigger('change');
                    });
                </script>
            @endpush
            @break
        @case('radio')
            <span class="input-radio{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}">
                @foreach ($options as $key => $option)
                    <label for="{{ $id }}-{{ $key }}">
                        <span class="checkmark"></span>
                        <input
                            type="radio"
                            id="{{ $id }}-{{ $key }}" 
                            name="{{ $name }}"
                            value="{{ $key }}"
                            @if($live) wire:model.live="{{ $live }}" @endif
                            @if($wire) wire:model="{{ $wire }}" @endif
                            @checked(old($name, $value) == $key)
                            {{ $attributes }}
                            >
                        {{ $option }}
                    </label>
                @endforeach
            </span>
            @break
        @case('checkbox')
            <span class="input-checkbox{{ $errors->has($name) ? ' input-error' : '' }}{{ $class }}">
                @foreach ($options as $key => $option)
                    <label for="{{ $id }}-{{ $key }}">
                        <span class="checkmark">
                            <i class="fas fa-check"></i>
                        </span>
                        <input
                            type="checkbox"
                            id="{{ $id }}-{{ $key }}" 
                            name="{{ $name }}[{{ $key }}]"
                            value="{{ $key }}"
                            @if($live) wire:model.live="{{ $live }}.{{ $key }}" @endif
                            @if($wire) wire:model="{{ $wire }}.{{ $key }}" @endif
                            @checked(in_array($key, old($name, $value ?? [])))
                            {{ $attributes }}
                            >
                        {{ $option }}
                    </label>
                @endforeach
            </span>
            @break
        @case('file')
            @livewire('components.file', ['id' => $id, 'name' => $name, 'value' => $value, 'wire' => $wire, 'class' => $class, 'disabled' => $attributes['disabled'] ?? false])
            @break
    @endswitch
    
    {{-- Detail --}}
    <div class="detail">
        <div class="info">
            @if($message)<small class="message">{{ $message }}</small>@endif
            <x-error name="{{ $name }}" />
        </div>
        @if($max)<small class="max">0 / {{ $max }}</small>@endif
    </div>
    
</div>