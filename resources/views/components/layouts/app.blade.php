<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/4845a545eb.js" crossorigin="anonymous"></script>

    @livewireStyles
</head>
<body class="font-sans antialiased">
<div>
    <x-layouts.app-sidebar/>
    <div class="flex flex-col flex-1" x-data :class="$store.layout.navigationIsOpen ? 'md:pl-72' : 'md:pl-24'">
        <x-layouts.header/>
        <main class="flex-1 p-7">
            <div class="page-header">
                <div class="page-header__title">
                    {{ $title ?? '' }}
                </div>
                <div class="page-header__actions">
                    {{ $headerActions ?? '' }}
                </div>
            </div>

            <div class="page-content">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>

@livewireScripts

@stack('scripts')

</body>
</html>
