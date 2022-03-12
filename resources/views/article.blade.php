    @extends('layouts/main')
    @section('container')
        {{-- <h1>Hello, world!</h1> --}}
        
        <article>
            <h2>{{ $article -> title }}</h2>
            <p>{{ $article -> body }}</p>
        </article>

        <a href="/home"> Back</a>
        

    @endsection
