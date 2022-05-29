<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="bg-gray-200">

        <div class="h-screen w-full flex flex-col">

            <header class="pb-3 pt-0 mb-0 bg-amber-600 text-2xl rounded-b-full box-border border-amber-900 border-8 border-t-0 flex flex-row justify-center">
            
                <a href="{{ route('login') }}" class="flex pt-1 mx-2 w-24 h-10 justify-center text-xl bg-green-600 hover:bg-blue-600 border-black rounded-bl-xl rounded-br-xl border border-t-0">
                    Log in
                </a>

                <a href="{{ route('home') }}" class="flex pt-1 mx-2 w-10 h-10">
                    <img src="\img\icono.png" alt="Icono Biblioteca">
                </a>
                
                <a href="{{ route('register') }}" class=" flex pt-1 mx-2 w-24 h-10 justify-center text-xl bg-green-600 hover:bg-blue-600 border-black rounded-bl-xl rounded-br-xl border border-t-0">
                    Register
                </a>
            </header>
            
            <div class="flex-grow rounded-tl-2xl rounded-bl-2xl">

                <div class="container p-4 flex flex-wrap justify-center">

                    @foreach($libros as $libro)
                    <div class=" m-2 text-center flex flex-col">
                        <img src="{{ $libro->imagen }}" alt="" class=" max-w-xs max-h-60 rounded-sm">
                        <br>
                        <p>
                            {{ $libro->nombre }}
                        </p>
                    </div>
                    @endforeach

                </div>

                
                {{ $libros->links() }}
                
            </div>
            
            <footer class="p-1 rounded-tl-2xl rounded-bl-2xl">
                &copy; Alberto Villaescusa Simó
            </footer>
                    
        </div>

    </body>
</html>
