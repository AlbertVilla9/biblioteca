<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-amber-600 border-8 border-amber-800">
                    <div class="container p-4 flex flex-wrap justify-center">

                        <form method="GET" action="{{ route('crearLibro') }}" class=" leading-loose">
                               
                            <p>Nombre:</p> <input name="nombre" id="nombre" type="text" class="m-2 w-60">

                            <p>Autor:</p> <input name="autor" id="autor" type="text" class="m-2 w-60">

                            <p>Categoria:</p> 

                            <select name="categoria" id="categoria" class="m-2 w-60">
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->nombre }}">
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>

                            
                            <p>Editorial:</p> <input name="editorial" id="editorial" type="text" class="m-2 w-60">

                            <p>Imagen:</p> <input name="imagen" id="imagen" type="text" class="m-2 w-60">

                            <div class=" m-3 flex justify-center">
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