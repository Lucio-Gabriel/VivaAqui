<div class="flex justify-center items-center flex-col pl-52">
    <div class="flex w-full items-baseline pl-6">
        <h1 class="font-bold text-3xl mt-4 mb-6">Cadastrar casa</h1>
    </div>

    <div class="bg-white p-10 rounded-lg h-[800px] w-[900px] flex flex-col shadow-lg duration-300">
        <form wire:submit="save">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Cadastre sua casa</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Essas informações serão exibidas publicamente, portanto, tenha cuidado com o que você compartilha.</p>

                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="title" class="block text-sm/6 font-medium text-gray-900">Titulo</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="title" name="title" id="title" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6">
                                    <div class="mt-2 text-red-500">
                                        @error('title') <span class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="city" class="block text-sm/6 font-medium text-gray-900">Localização</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="city" name="city" id="city" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6">
                                    <div class="mt-2 text-red-500">
                                        @error('city') <span class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="email" wire:model="email"  name="email" id="email" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6">
                                    <div class="mt-2 text-red-500">
                                        @error('email') <span class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="price" class="block text-sm/6 font-medium text-gray-900">Preço</label>
                                <div class="mt-2">
                                    <input type="number"  wire:model="price" name="price" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6">
                                    <div class="mt-2 text-red-500">
                                        @error('price') <span class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="description" class="block text-sm/6 font-medium text-gray-900">Descrição</label>
                            <div class="mt-2">
                                <textarea name="description" wire:model="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-secondary sm:text-sm/6"></textarea>
                                <div class="mt-2 text-red-500">
                                    @error('description') <span class="error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Deixe mais detalhes sobre sua casa para atrair mais clientes!</p>
                        </div>
                </div>


            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button
                    type="button" class="text-sm/6 font-semibold text-blue-gray focus:outline-secondary"
                    x-on:click="Livewire.navigate('{{ route('dashboard') }}')"
                >
                    Cancelar
                </button>
                <button
                    type="submit"
                    class="text-sm/6 font-semibold text-white bg-secondary hover:bg-primary  duration-300 px-3 py-2 rounded-xl"
                >
                    Cadastrar casa
                </button>
            </div>
        </form>

    </div>
</div>
