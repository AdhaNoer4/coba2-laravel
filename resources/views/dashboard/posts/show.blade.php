@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to my post</a>
            <a href="" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i> Edit</a>
            <a href="" class="btn btn-danger"><i class="fa-regular fa-circle-x"></i> Delete</a>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            {{-- tidak melakukan escaping terhadap plain text html --}}
            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article>
           
            <a href="/posts" class="d-block mt-3">Kembali</a>
        </div>
    </div>
</div>

@endsection