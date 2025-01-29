<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-200">
        <main class="w-full min-h-screen flex flex-col md:flex-row items-center justify-center mx-auto">
            <section class="w-full flex-1 flex flex-col items-center justify-center">
                <div class="pl-64">
                    <h1 class="text-primary text-center mb-5 text-5xl font-bold">
                        Viva Aqui
                    </h1>

                    <img
                        src="/assets/images/LogoVivaAqui.png"
                        alt="logo viva aqui"
                        class="w-96 h-96"
                    />

                </div>
            </section>

            <section class="hidden  md:flex gap-9 w-full flex-1  h-screen items-center justify-center flex-col p-4">
                <div class="pr-64">
                    <h1 class="text-center text-slate-950 text-4xl font-bold">
                        Começar agora
                    </h1>

                    <p class="text-gray-700 text-center mt-3 font-semibold">
                        Encontre casas e kitnets Comece agora!
                    </p>

                    <div class="flex flex-col gap-4 mt-4">
                        <a
                            href="{{ route('login') }}"
                            class="px-36 py-3 text-white text-center text-sm font-semibold bg-secondary hover:bg-green-500 duration-300 rounded-lg drop-shadow-lg"
                        >
                            Entrar
                        </a>

                        <a
                            href="{{ route('register') }}"
                            class="px-36 py-3 text-white  text-center text-sm font-semibold bg-[#161A1E] hover:bg-gray-800 duration-300 rounded-lg drop-shadow-lg"
                        >
                            Registrar
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
