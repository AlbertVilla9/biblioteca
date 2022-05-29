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

                       
                        <div class=" m-2 text-center">
                            <img src="{{ $libros->imagen }}" alt="" class=" max-w-xs max-h-60 rounded-sm">
                        </div>

                        <div class="m-2">
                            <p class="leading-loose">
                                Titulo: {{ $libros->nombre }} <br>

                                Autor: {{ $libros->autor }} <br>

                                Editorial: {{ $libros->editorial }} <br>

                                Categoria: {{ $libros->categoria }} <br>
                            </p>

                            <form action="{{ route('reservarLibro') }}" class="my-5 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <input name="libro" type="hidden" value="{{ $libros->id }}">
                                <input name="usuario" type="hidden" value="{{ Auth::user()->id }}">

                                <button type="submit">
                                    Reservar
                                </button>
                            </form>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
