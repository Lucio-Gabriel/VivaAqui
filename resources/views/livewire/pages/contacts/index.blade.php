<div>
    <main class="w-full min-h-screen flex flex-col md:flex-row items-center justify-center mx-auto pl-56">
        <div class="bg-primary h-96 w-1 text-primary mb-10">
            .
        </div>

        <section class="w-full flex-1 flex justify-center items-center flex-col gap-4 p-4">
            <div class="mb-16">
                <h1 class="text-2xl font-semibold text-gray-black">Entre em contato conosco<span class="text-primary">.</span></h1>

                <div>
                    <div>
                        <h1 class="mt-10 font-semibold text-primary">Endereço</h1>
                        <p class="mt-5 font-semibold">Rua das Palmeiras, 1234</p>
                        <p class="font-semibold">Bairro Jardim Esperança</p>
                        <p class="font-semibold">Cidade Nova Horizonte - SP</p>
                        <p class="font-semibold">CEP: 12345-678</p>
                    </div>
                </div>

                <div>
                    <div>
                        <h1 class="mt-10 font-semibold text-primary">Contatos</h1>
                        <p class="mt-5 font-semibold">contato@empresaexemplo.com.br</p>
                        <p class="font-semibold">(11) 99876-5432</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full flex-1 flex justify-center items-center flex-col gap-4 p-4 pl-72 mt-3">
            <h1 class="text-2xl font-semibold text-primary">Formulário para contato</h1>
            <div class="bg-white w-96 h-96 drop-shadow-2xl">
                <form>
                    <div class="p-6">
                        <label>
                            Seu email
                        </label>
                        <div class="mt-2">
                            <input type="text" name="email" id="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6">
                        </div>
                    </div>

                    <div class="p-6">
                        <label>
                            Sua mensagem
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
