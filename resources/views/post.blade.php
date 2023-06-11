
@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By : Adha Noer in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {{-- tidak melakukan escaping terhadap plain text html --}}
    {!! $post->body !!} 
    <a href="/blog">Kembali</a>
</article>
@endsection