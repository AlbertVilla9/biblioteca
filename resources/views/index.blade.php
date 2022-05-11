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