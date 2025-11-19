<x-layout.property category="Typography" title="Vertical Align" :tokens="$tokens">
    
    {{-- Apply --}}
    @foreach ($tokens['values'] as $index => $token)
        <div class="apply__item">
            <h5 class="item__title">{{ Str::of($token['key'])->replace('-', ' ')->title() }}</h5>
            <div class="item__box">
                <div class="box__display">
                    <span class="{{ $tokens['prefix'] }}-{{ $token['key'] }}" style="font-size: 1.5em">Bicraft is where creativity meets craft in digital form.</span>
                </div>
                <div class="box__code">
                    <div class="code__content" id="copy-{{ $index }}">
                        &lt;p class=&quot;{{ $tokens['prefix'] }}-{{ $token['key'] }}&quot;&gt;Bicraft is where creativity meets craft in digital form.&lt;/p&gt;
                    </div>
                    <button class="copy code__copy" data-target="copy-{{ $index }}"><i class="fa-regular fa-copy"></i></button>
                </div>
            </div>
        </div>
    @endforeach
    
</x-layout.property>