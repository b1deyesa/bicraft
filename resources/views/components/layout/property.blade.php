<x-layout.app class="property">
    
    {{-- Sidebar --}}
    <section class="property__sidebar">
        <div class="sidebar__container">
            <div class="sidebar__menu">
                <h3 class="menu__category">Typography</h3>
                <a href="{{ route('pages.font-family') }}" class="menu__item @if(request()->routeIs('pages.font-family')) active @endif">Font Family</a>
                <a href="{{ route('pages.font-size') }}" class="menu__item @if(request()->routeIs('pages.font-size')) active @endif">Font Size</a>
                <a href="{{ route('pages.font-style') }}" class="menu__item @if(request()->routeIs('pages.font-style')) active @endif">Font Style</a>
                <a href="{{ route('pages.font-weight') }}" class="menu__item @if(request()->routeIs('pages.font-weight')) active @endif">Font Weight</a>
                <a href="{{ route('pages.letter-spacing') }}" class="menu__item @if(request()->routeIs('pages.letter-spacing')) active @endif">Letter Spacing</a>
                <a href="{{ route('pages.line-height') }}" class="menu__item @if(request()->routeIs('pages.line-height')) active @endif">Line Height</a>
                <a href="{{ route('pages.text-decoration') }}" class="menu__item @if(request()->routeIs('pages.text-decoration')) active @endif">Text Decoration</a>
                <a href="{{ route('pages.text-transform') }}" class="menu__item @if(request()->routeIs('pages.text-transform')) active @endif">Text Transform</a>
                <a href="{{ route('pages.word-spacing') }}" class="menu__item @if(request()->routeIs('pages.word-spacing')) active @endif">Word Spacing</a>
                <a href="{{ route('pages.white-space') }}" class="menu__item @if(request()->routeIs('pages.white-space')) active @endif">White Space</a>
                <a href="{{ route('pages.text-align') }}" class="menu__item @if(request()->routeIs('pages.text-align')) active @endif">Text Align</a>
                <a href="{{ route('pages.text-indent') }}" class="menu__item @if(request()->routeIs('pages.text-indent')) active @endif">Text Indent</a>
                <a href="{{ route('pages.direction') }}" class="menu__item @if(request()->routeIs('pages.direction')) active @endif">Direction</a>
                <a href="{{ route('pages.writing-mode') }}" class="menu__item @if(request()->routeIs('pages.writing-mode')) active @endif">Writing Mode</a>
                <a href="{{ route('pages.vertical-align') }}" class="menu__item @if(request()->routeIs('pages.vertical-align')) active @endif">Vertical Align</a>
                <h3 class="menu__category">Border</h3>
                <a href="{{ route('pages.border-radius') }}" class="menu__item @if(request()->routeIs('pages.border-radius')) active @endif">Border Radius</a>
                <a href="{{ route('pages.border-width') }}" class="menu__item @if(request()->routeIs('pages.border-width')) active @endif">Border Width</a>
                <a href="{{ route('pages.border-style') }}" class="menu__item @if(request()->routeIs('pages.border-style')) active @endif">Border Style</a>
                <h3 class="menu__category">Color</h3>
                <a href="{{ route('pages.background-color') }}" class="menu__item @if(request()->routeIs('pages.background-color')) active @endif">Background Color</a>
                <a href="{{ route('pages.color') }}" class="menu__item @if(request()->routeIs('pages.color')) active @endif">Color</a>
            </div>
            <hr class="sidebar__line">
        </div>
    </section>
    
    {{-- Content --}}
    <section class="property__content">
        
        {{-- Header --}}
        <div class="property__header">
            <h6 class="header__category">{{ $category }}</h6>
            <h2 class="header__title">{{ $title }}</h2>
        </div>
        
        {{-- Token --}}
        @if ($tokens)
            <div class="property__token">
                <table>
                    <tr>
                        <th>Class</th>
                        <th>Variable</th>
                        <th>Value</th>
                    </tr>
                    @foreach ($tokens['values'] as $token)
                        <tr>
                            <td>.{{ $tokens['prefix'] }}-{{ $token['key'] }}</td>
                            <td>{{ $tokens['attribute'] }}: <code>var(--{{ $tokens['prefix'] }}-{{ $token['key'] }})</code></td>
                            <td>{{ $token['value'] }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
        
        {{-- Apply --}}
        <div class="property__apply">
            {{ $slot }}
        </div>
        
    </section>
    
</x-layout.app>