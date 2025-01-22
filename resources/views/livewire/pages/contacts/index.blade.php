<div>

    <main class="w-full min-h-screen flex flex-col md:flex-row items-center justify-center mx-auto pl-56">
        <section class="w-full flex-1 flex justify-center items-center flex-col gap-4 p-4">
            <h1>Conteudo 1</h1>
        </section>

        <section class="w-full flex-1 flex justify-center items-center flex-col gap-4 p-4 pl-96">
            <h1 class="text-2xl font-semibold text-primary">Formulario para contato</h1>
            <div class="bg-white w-96 h-96 drop-shadow-2xl ">
                <form>
                    <div class="p-6">
                        <label>
                            <h3>Seu email</h3>
                        </label>
                        <div class="mt-2">
                            <input type="text" name="email" id="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6">
                        </div>
                    </div>

                    <div class="p-6">
                        <label>
                            <h3>Sua mensagem</h3>
                        </label>
                        <div class="mt-2">
                            <textarea name="description" wire:model="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6"></textarea>
                        </div>
                    </div>

                    <div class="pl-9">
                        <button
                            type="button"
                            class="bg-primary text-white text-center px-20 py-3 flex">
                            Enviar mensagem
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

</div>
