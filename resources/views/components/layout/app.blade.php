<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $title }}</title>
    
    <script src="{{ asset('vendor/fontawsome.js') }}"></script>
    <script src="{{ asset('vendor/jquery.js') }}"></script>
    <script src="{{ asset('vendor/dataTables.js') }}"></script>

    @vite(['resources/sass/app.scss'])
    @livewireStyles
    @stack('styles')
</head>
<body {{ $attributes->merge(['class' => 'light']) }}>
    
    {{-- Slot --}}
    {{ $slot }}
    
    {{-- Footer --}}
    @if ($footer)
        <footer>Copyright © 2024 bideyesa. All Rights Reserved.</footer>
    @endif
    
    @livewireScripts
    @stack('scripts')
</body>
</html>