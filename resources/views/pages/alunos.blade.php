<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Aluno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('alunos.store') }}">
                @csrf

                <div>
                    <div class="flex">
                        <div>
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>
                        <div>
                            <x-label for="name" :value="__('Email')" />
                            <x-input id="name" class="block mt-1 w-full" type="email" name="email" required autofocus />
                        </div>

                        <div>
                            <x-label for="uf" :value="__('UF')" />
                            <x-input id="uf" class="block mt-1 w-full" type="text" name="uf" required autofocus />
                        </div>

                        <div>
                            <x-label for="dataNascimento" :value="__('Data de Nascimento')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="dataNascimento" required autofocus />
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <x-label for="sexo" :value="__('Sexo')" />
                            <x-input id="sexo" class="block mt-1 w-full" type="text"  name="sexo" required autofocus />
                        </div>

                        <div>
                            <x-label for="raca" :value="__('Raca')" />
                            <x-input id="raca" class="block mt-1 w-full" type="text"  name="raca" required autofocus />
                        </div>

                        <div>
                            <x-label for="ingresso" :value="__('Curso')" />
                            <x-input id="ingresso" class="block mt-1 w-full" type="text" name="curso" required autofocus />
                        </div>


                        <div>
                            <x-label for="status" :value="__('Forma Ingresso')" />
                            <x-input id="status" class="block mt-1 w-full" type="text" name="ingresso" required autofocus />
                        </div>

                        <div>
                            <x-label for="status" :value="__('Status')" />
                            <x-input id="status" class="block mt-1 w-full" type="text" name="status" required autofocus />
                        </div>
                    </div>
                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-3">
                        {{ __('Salvar Aluno') }}
                    </x-button>
                </div>
            </form>
        </div>

    </div>

    <div class="py-12">
    @if(count($alunos) > 0)
            <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex space-x-3 m-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                    @include('components.alunos.alunos')
                    </div>

                </div>
            </div>
            @endif
    </div>

</x-app-layout>
