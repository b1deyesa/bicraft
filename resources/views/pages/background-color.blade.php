<x-layout.property category="Color" title="Background Color" :tokens="$tokens">
       
    {{-- Apply --}}
    @foreach ($tokens['values'] as $index => $token)
        <div class="apply__item">
            {{-- <h5 class="item__title">{{ Str::of(array$token)->replace('-', ' ')->title() }}</h5> --}}
            <div class="item__box">
                <div class="box__display">
                    <div style="display: grid; grid-template-cols: repeat(auto, 200fr);">
                        @foreach ($token as $item)
                            <div class="{{ $tokens['prefix'] }}-{{ $item['key'] }}" style="height: 20px; width: 20px; background-color: {{ $item['value'] }}"></div>
                        @endforeach
                    </div>
                </div>
                <div class="box__code">
                    <div class="code__content" id="copy-{{ $index }}">
                        {{-- &lt;div class=&quot;{{ $tokens['prefix'] }}-{{ $token['key'] }}&quot; style=&quot;height: 20px; width: 20px; border-width: 1px; border-color: white&quot;&gt;&lt;/div&gt; --}}
                    </div>
                    <button class="copy code__copy" data-target="copy-{{ $index }}"><i class="fa-regular fa-copy"></i></button>
                </div>
            </div>
        </div>
    @endforeach
    
</x-layout.property>