@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger " onclick="return confirm('Are you sure ?')"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
           @if ($post->image)
           <div style=" max-height: 350px; overflow:hidden;">
               <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
           </div>
           @else
           <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
               
           @endif
            
            {{-- tidak melakukan escaping terhadap plain text html --}}
            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article>
           
           
        </div>
    </div>
</div>

@endsection