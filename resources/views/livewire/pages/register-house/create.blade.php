<div class="flex justify-center items-center flex-col pl-52">
    <div class="flex w-full items-baseline pl-6">
        <h1 class="font-bold text-3xl mt-4 mb-6">Cadastrar casa</h1>
    </div>

    <div class="bg-white p-3 rounded-lg h-[700px] w-[900px] flex flex-col shadow-lg duration-300">
        <form>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Cadastre sua casa</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Essas informações serão exibidas publicamente, portanto, tenha cuidado com o que você compartilha.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm/6 font-medium text-gray-900">Titulo</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm/6 font-medium text-gray-900">Localizacao</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="price" class="block text-sm/6 font-medium text-gray-900">Preço</label>
                            <div class="mt-2">
                                <input type="number" name="price" id="price" min="0" step="1" autocomplete="off" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="about" class="block text-sm/6 font-medium text-gray-900">Sobre</label>
                            <div class="mt-2">
                                <textarea name="about" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Deixe detalhes sobre a sua casa para que atraia mais clientes interresados.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button
                    type="button" class="text-sm/6 font-semibold text-blue-gray"
                    x-on:click="Livewire.navigate('{{ route('dashboard') }}')"
                >
                    Cancelar
                </button>
                <button
                    type="button"
                    class="text-sm/6 font-semibold text-white bg-secondary hover:bg-primary duration-300 px-3 py-2 rounded-xl"
                >
                    Cadastrar casa
                </button>
            </div>
        </form>
    </div>
</div>
