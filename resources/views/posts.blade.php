@extends('layouts.main')


@section('container')
    <h1>Halaman Posts</h1>

    @foreach ($posts as $post)
        <h2> 
             <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>{{ $post["penulis"] }}</h5>
        <p>{{ $post["body"] }}</p>
    @endforeach

@endsection