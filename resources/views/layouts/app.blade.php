<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-200">

        <div class="flex w-full">
            <aside class="border-2 hidden sm:flex w-full max-w-[200px] min-h-screen relative bg-white flex-col px-2 py-5">
                <div class="fixed">
                    <div>
                        <h1 class="text-primary text-3xl font-bold">VivaAqui</h1>
                    </div>

                    <nav class="flex flex-col mt-8 gap-5">
                        <a href="#"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            Aluguel
                        </a>

                        <a href="#"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            Compra
                        </a>

                        <a href="#"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            Servicos
                        </a>

                        <a href="#"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            Contatos
                        </a>
                    </nav>
                </div>

                <button class="w-11 h-11 rounded-full bg-gray-200 fixed z-30 bottom-5 left-4 hover:bg-secondary/80 duration-300">
                    <i class="bi bi-telephone-fill" style="font-size:16px;"></i>
                </button>
            </aside>

            <main>
                <header class="px-3">
                    <div class="flex w-full items-baseline justify-between">
                        <h1 class="font-bold text-3xl mt-4 mb-6">{{ $heading }}</h1>
                        <!-- <span class="hidden md:block text-gray-600">100 casas encontradas</span> -->
                    </div>
                </header>

                {{ $slot }}
            </main>

        </div>

        <!-- <div class="min-h-screen">

              <livewire:layout.navigation /

             Page Heading
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            Page Content

        </div>
        -->
    </body>
</html>
