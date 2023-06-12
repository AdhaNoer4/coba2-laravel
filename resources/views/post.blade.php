
@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }} " class="text-decoration-none">{{ $post->category->name }}</a></p>
    {{-- tidak melakukan escaping terhadap plain text html --}}
    {!! $post->body !!} 
    <a href="/blog" class="d-block mt-3">Kembali</a>
</article>
@endsection