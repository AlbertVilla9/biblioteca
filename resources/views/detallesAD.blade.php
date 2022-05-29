<x-app-layout>
    <x-slot name="header">
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
                            <form method="GET" action="{{ route('modificar') }}" >

                                <input name="id" type="hidden" value="{{ $libros->id }}">

                                <p class="leading-loose flex  flex-col">
                                    Titulo: <input name="nombre" type="text" value="{{ $libros->nombre }}"> <br>

                                    Autor: <input name="autor" type="text" value="{{ $libros->autor }}"> <br>

                                    Editorial: <input name="editorial" type="text" value="{{ $libros->editorial }}"> <br>

                                    Imagen: <input name="imagen" type="text" value="{{ $libros->imagen }}"> <br>

                                    Categoria: 
                                    <select name="categoria" id="categoria" class="m-2 w-60">
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->nombre }}">
                                            {{ $categoria->nombre }}
                                        </option>
                                    @endforeach
                                    </select> <br>
                                </p>

                                <x-button type="submit" class="m-2">
                                    Modificar
                                </x-button>
                            </form>

                            <form action="{{ route('eliminar') }}" class="inline">
                                    <input name="id" type="hidden" value="{{ $libros->id }}">
                                    <x-button type="submit" class="m-2">
                                        Eliminar
                                    </x-button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
