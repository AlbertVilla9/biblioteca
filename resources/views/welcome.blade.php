<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="bg-black">

        <div class="fixed pl-0 pr-2 p-5 h-full w-64 bg-amber-800 rounded-tr-3xl rounded-br-3xl border-amber-900 border-8 border-l-0">
            <div class=" relative p-5 h-full w-56 bg-gray-400 rounded-tr-3xl rounded-br-3xl text-center">

                <a href="{{ route('home') }}" class="text-2xl underline text-right">
                  Biblioteca
                </a>

            </div>
        </div>

        <div class="pl-16 lg:pl-64 h-screen w-full flex flex-col">

            <header class="p-3 pt-0 mb-0 pl-20 bg-amber-600 text-2xl rounded-tl-2xl rounded-bl-2xl box-border flex flex-row-reverse">
                
                <a href="{{ route('home') }}" class="flex pt-1 mx-2 w-24 h-10">
                    <img src="\img\icono.png" alt="Icono Biblioteca">
                </a>
            
                <a href="{{ route('login') }}" class="flex pt-1 mx-2 w-24 h-10 justify-center text-xl bg-green-600 hover:bg-blue-600 border-black rounded-bl-xl rounded-br-xl border border-t-0">
                    Log in
                </a>
                
                <a href="" class=" flex pt-1 mx-2 w-24 h-10 justify-center text-xl bg-red-600 hover:bg-blue-600 border-black rounded-bl-xl rounded-br-xl border border-t-0">
                    Categorias
                </a>

                <a href="" class=" flex mx-2 pt-1 w-24 h-10 justify-center text-xl bg-yellow-600 hover:bg-blue-600 border-black rounded-bl-xl rounded-br-xl border border-t-0">
                    Autores
                </a>
            </header>
            
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
