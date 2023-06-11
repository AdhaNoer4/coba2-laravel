
@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- tidak melakukan escaping terhadap plain text html --}}
    {!! $post->body !!} 
    <a href="/blog">Kembali</a>
</article>
@endsection