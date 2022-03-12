@extends('layouts/main')
@section('container')
    {{-- <h1>Hello, world!</h1> --}}
    @foreach ($home as $homes)
    <article>
        <h2><a href="/home/{{ $homes -> id }}">{{ $homes -> title }}</a></h2>
        <p>{{ $homes -> exc }}</p>
    </article>

    @endforeach

@endsection
