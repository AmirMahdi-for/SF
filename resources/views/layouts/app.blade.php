<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard</title>

        <!-- Scripts -->
        @vite('resources/css/app.css')

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
        @livewireStyles
    </head>
    <body class="antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main><div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                            <x-jet-validation-errors class="mb-6" />
                        </div>
                    @if ($message = session('message'))
                        <div class="bg-green-400 overflow-hidden text-gray-50 shadow-xl sm:rounded-lg p-4">    
                            {{$message}}
                        </div>
                    @endif
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            </main>
        </div>

        @stack('modals')

        <script src="{{mix('js/app.js')}}" defer></script>
        <script src="{{asset('js/custom.js')}}" defer></script>

        @livewireScripts
    </body>
</html>
