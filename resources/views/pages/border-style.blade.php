<x-layout.property category="Border" title="Border Style" :tokens="$tokens">
       
    {{-- Apply --}}
    @foreach ($tokens['values'] as $index => $token)
        <div class="apply__item">
            <h5 class="item__title">{{ Str::of($token['key'])->replace('-', ' ')->title() }}</h5>
            <div class="item__box">
                <div class="box__display">
                    <div class="{{ $tokens['prefix'] }}-{{ $token['key'] }}" style="height: 50px; width: 50px; border-width: 1px; border-color: white"></div>
                </div>
                <div class="box__code">
                    <div class="code__content" id="copy-{{ $index }}">
                        &lt;div class=&quot;{{ $tokens['prefix'] }}-{{ $token['key'] }}&quot; style=&quot;height: 50px; width: 50px; border-width: 1px; border-color: white&quot;&gt;&lt;/div&gt;
                    </div>
                    <button class="copy code__copy" data-target="copy-{{ $index }}"><i class="fa-regular fa-copy"></i></button>
                </div>
            </div>
        </div>
    @endforeach
    
</x-layout.property>