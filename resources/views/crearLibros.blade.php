<x-app-layout>
    <x-slot name="header">

        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')">
                {{ __('Categorias') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')">
                {{ __('Autores') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-amber-600 border-8 border-amber-800">
                    <div class="container p-4 flex flex-wrap justify-center">

                        <form method="GET" action="{{ route('crearLibro') }}" class=" leading-loose">
                               
                            Nombre: <input name="nombre" id="nombre" type="text" class="m-2 w-60"> <br>

                            Autor: <input name="autor" id="autor" type="text" class="m-2 w-60"> <br>

                            Categoria: <input name="categoria" id="categoria" type="text" class="m-2 w-60"> <br>
                            
                            Editorial: <input name="editorial" id="editorial" type="text" class="m-2 w-60"> <br>

                            Imagen : <input name="imagen" id="imagen" type="text" class="m-2 w-60"> <br>

                            <div class=" m-3 place-items-center">
                                <x-button>
                                    {{ __('Crear') }}
                                </x-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>