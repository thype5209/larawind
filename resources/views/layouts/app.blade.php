<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('CV.THAHIRA') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}" defer></script>

    <link rel="stylesheet" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @livewireStyles
    {{-- <script>
        import Turbolinks from 'turbolinks';
        Turbolinks.start()
    </script> --}}
    <script>
        new WOW().init();
    </script>
    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script> --}}
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        {{-- @include('layouts.menu') --}}
        @include('layouts.mobile-menu')

        <div class="flex flex-col flex-1 w-full">
            @include('layouts.navigation-dropdown')
            <main class="h-full overflow-y-auto">
                {{ $slot }}
            </main>
        </div>


        @stack('modals')

        @livewireScripts
        {{-- <script src="{{ asset('js/main.js') }}"></script> --}}

    </div>
</body>

</html>
