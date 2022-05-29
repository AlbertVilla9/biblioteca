<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('categorias')">
                {{ __('Categorias') }}
            </x-nav-link>
            <form method="GET" action="{{ route('reservas') }}">
                <input name="usuario" type="hidden" value="{{ Auth::user()->id }}">
                <button type="submit">
                    <x-nav-link>
                        {{ __('Reservas') }}
                    </x-nav-link>
                </button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-amber-600 border-8 border-amber-800">
                    <div class="container p-4 flex flex-wrap justify-center">

                        @foreach($libros as $libro)
                        <div class=" m-5 text-center">
                            <form action="{{ route('detalles') }}" method="GET">
                                <input name="id" id="id" type="hidden" value="{{ $libro->id }}">

                                <button type="submit">
                                    <img src="{{ $libro->imagen }}" alt="" class=" max-w-xs max-h-60 rounded-sm">
                                </button>
                            </form>

                            <br>

                            <p>
                                {{ $libro->nombre }}
                            </p>
                            
                        </div>
                        @endforeach

                    </div>

                    {{ $libros->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>