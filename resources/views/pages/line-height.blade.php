<x-layout.property category="Typography" title="Line Height" :tokens="$tokens">
    
    {{-- Apply --}}
    @foreach ($tokens['values'] as $index => $token)
        <div class="apply__item">
            <h5 class="item__title">{{ Str::of($token['key'])->replace('-', ' ')->title() }}</h5>
            <div class="item__box">
                <div class="box__display">
                    <span class="{{ $tokens['prefix'] }}-{{ $token['key'] }}" style="font-size: 1.1em">Bicraft is where creativity meets craft in digital form—a space where imaginative ideas are transformed into authentic and meaningful digital creations. Blending the artistry of traditional craftsmanship with the precision of modern technology.</span>
                </div>
                <div class="box__code">
                    <div class="code__content" id="copy-{{ $index }}">
                        &lt;p class=&quot;{{ $tokens['prefix'] }}-{{ $token['key'] }}&quot;&gt;Bicraft is where creativity meets craft in digital form—a space where imaginative ideas are transformed into authentic and meaningful digital creations. Blending the artistry of traditional craftsmanship with the precision of modern technology.&lt;/p&gt;
                    </div>
                    <button class="copy code__copy" data-target="copy-{{ $index }}"><i class="fa-regular fa-copy"></i></button>
                </div>
            </div>
        </div>
    @endforeach
    
</x-layout.property>