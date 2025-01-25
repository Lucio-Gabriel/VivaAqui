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
                        <a href="{{ route('dashboard') }}"
                        class="text-primary text-3xl font-bold"
                        >
                            VivaAqui
                    </a>
                    </div>

                    <nav class="flex flex-col mt-8 gap-5">
                        <a href="{{ route('dashboard') }}"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            <div class="flex">
                                <span>
                                    Aluguel
                                </span>
                                <div class="w-5 h-5 ml-2">
                                    <x-svg.house/>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('services.house') }}"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            <div class="flex">
                                <span>
                                    Serviços
                                </span>
                                <div class="w-5 h-5 ml-2">
                                    <x-svg.clipboard/>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('contacts.house') }}"
                           class="text-gray-500 font-medium hover:text-white hover:bg-secondary/80 p-3 rounded-lg duration-300"
                        >
                            <div class="flex">
                                <span>
                                    Contatos
                                </span>
                                <div class="w-5 h-5 ml-2">
                                    <x-svg.phone/>
                                </div>
                            </div>
                        </a>
                    </nav>
                </div>

                <button class="w-11 h-11 rounded-full bg-gray-200 fixed z-30 bottom-5 left-4 hover:bg-secondary/80 duration-300">
                    <i class="bi bi-telephone-fill" style="font-size:16px;"></i>
                </button>
            </aside>

            <main>
{{--                <header class="bg-white w-full py-5 px-3 flex flex-row items-center justify-between">--}}
{{--                    <div class="flex items-center bg-slate-100 px-3 py-2 w-full max-w-xs lg:max-w-full rounded-lg lg:mr-8">--}}
{{--                        <i class="bi bi-search" style="font-size: 16px;"></i>--}}
{{--                        <input--}}
{{--                            type="text"--}}
{{--                            class="w-full bg-slate-100 px-2 outline-none"--}}
{{--                            placeholder="Procurando casa?"--}}
{{--                        />--}}
{{--                    </div>--}}

{{--                    <div class="flex gap-3 items-center">--}}
{{--                        <a href="#"--}}
{{--                           class="w-8 h-8 p-5 bg-slate-100 hidden md:flex items-center justify-center rounded-full"--}}
{{--                        >--}}
{{--                            <i class="bi bi-heart-fill text-gray-500" style="font-size: 16px;"></i>--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </header>--}}


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
