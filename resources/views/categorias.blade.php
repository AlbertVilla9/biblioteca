<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="bg-black">

        <div class="fixed pl-0 pr-2 p-5 h-full w-64 bg-amber-800 rounded-tr-3xl rounded-br-3xl border-amber-900 border-8 border-l-0">
            <div class=" flex flex-col relative p-5 h-full w-56 bg-gray-400 rounded-tr-3xl rounded-br-3xl items-center  text-center">

                <a href="{{ route('home') }}" class="w-20 h-20">
                    <img src="\img\icono.png" alt="Icono Biblioteca">
                </a>

                <a href="{{ route('login') }}" class="text-2xl m-4 p-2 border-2 rounded-xl border-black bg-green-600 hover:bg-blue-600">
                    Log in
                </a>

                <a href="" class="text-2xl m-4 p-2 border-2 rounded-xl border-black bg-orange-600 hover:bg-blue-600">
                    Categorias
                </a>

                <a href="" class="text-2xl m-4 p-2 border-2 rounded-xl border-black bg-purple-600 hover:bg-blue-600">
                    Autores
                </a>

            </div>
        </div>

        <div class="pl-16 lg:pl-64 h-screen w-full flex flex-col">

            
            
            <div class="flex-grow bg-sky-500 rounded-tl-2xl rounded-bl-2xl">

                <div class="container p-4 flex flex-wrap justify-center">

                    @foreach($libros as $libro)
                    <div class=" m-2 text-center">
                        <img src="{{ $libro->imagen }}" alt="" class=" max-w-xs max-h-sm">
                        <br>
                        <p>
                            {{ $libro->nombre }}
                        </p>
                    </div>
                    @endforeach

                </div>
            </div>
            
            <footer class="p-1 bg-gray-300 rounded-tl-2xl rounded-bl-2xl">
                &copy; Alberto Villaescusa Simó
            </footer>
                    
        </div>

    </body>
</html>
