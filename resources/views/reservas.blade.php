<x-app-layout>
    <x-slot name="header">

        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')">
                {{ __('Categorias') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')">
                {{ __('Reservas') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-amber-600 border-8 border-amber-800">
                    <div class="container p-4 flex flex-wrap justify-center">

                        @foreach($reservas as $reserva)
                        <div class=" m-5 text-center">
                            {{ $reserva->nombre }}
                            
                        </div>
                        @endforeach

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>