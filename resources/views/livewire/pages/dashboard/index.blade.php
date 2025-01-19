<div>
    <div class="flex lg:gap-[920px]">
        <div class="items-baseline pr-8 pl-8">
            <h1 class="font-bold text-3xl mt-4 mb-6">
                Casas Disponiveis
            </h1>
        </div>
        <div class="mt-4">
{{--            <span class="hidden md:block text-gray-600">Mais de 30 casas encontradas</span>--}}
            <button
                type="button"
                x-on:click="Livewire.navigate('{{ route('register.house') }}')"
                class="font-semibold text-white bg-secondary hover:bg-primary duration-300 px-6 py-2 rounded-xl"
            >
                <div class="flex">
                                <span>
                                    Cadastrar casa
                                </span>
                    <div class="w-5 h-5 ml-2">
                        <x-svg.house/>
                    </div>
                </div>
            </button>
        </div>
    </div>

    <section class="w-full px-3 lg:px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach($this->houses as $house)
            <a href="#" class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col hover:shadow-lg duration-300">
                <div>
                    <div class="group overflow-hidden rounded-lg">
                        <div class="flex justify-between gap-44 absolute z-40 top-5 left-5">
                            <div class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-3 px-3 py-1 rounded-full">
                                <i class="bi bi-map-fill text-black" style="font-size: 12px;"></i>
                                <span class="font-medium text-sm">{{ $house->city }}</span>
                            </div>

                            <div class="pl-6">
                                <div class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-3 px-3 py-1 rounded-full">
                                    <div class="flex gap-5">
                                        <button
                                            type="button"
                                            x-on:click="Livewire.navigate('{{ route('edit.house', $house) }}')"
                                        >
                                            <i class="bi bi-pencil-square text-black" style="font-size: 12px;"></i>
                                        </button>
                                        <button
                                            wire:click="deleteHouse({{ $house->id }})"
                                        >
                                            <i class="bi bi-trash-fill text-black" style="font-size: 12px;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img
                            src="/assets/images/house.jpg"
                            alt="Foto casa"
                            class="rounded-lg w-full h-64 object-cover group-hover:scale-110 duration-300"
                        />
                    </div>

                    <div class="w-full flex flex-col gap-1 my-2">
                        <h2 class="text-lg font-bold">{{ $house->title }}</h2>
                        <div>
                            <p class="my-1 font-bold text-indigo-500">R$<span>{{ $house->price }}</span>/mes</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <span class="font-medium text-sm">{{ $house->email }}</span>
                </div>

                <div class="mt-auto">
                    <span class="font-medium text-sm">{{ $house->description }}</span>
                </div>

                <div class="flex mt-4">
                    <button class="font-semibold text-white bg-secondary hover:bg-primary duration-300 px-3 py-2 rounded-xl">
                        <div class="flex">
                                <span>
                                    Alugar quarto
                                </span>
                            <div class="w-5 h-5 ml-2 mt-0.5">
                                <x-svg.check-circle/>
                            </div>
                        </div>
                    </button>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</div>
