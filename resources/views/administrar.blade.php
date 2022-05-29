<x-app-layout>
    <x-slot name="header" class="hidden">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-amber-600 border-8 border-amber-800">
                    <div class="container p-4 flex flex-wrap justify-center">

                        @foreach($libros as $libro)
                        <div class=" m-5 text-center">
                            <form action="{{ route('detallesAD') }}" method="GET">
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