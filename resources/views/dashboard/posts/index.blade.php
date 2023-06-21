@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">Category</th>
          <th scope="col">Actions</th>
        
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}"><i class="fa-solid fa-eye" style="color: #2188e8;"></i></a>
                <a href=""><i class="fa-regular fa-pen-to-square" style="color: #09f619;"></i></a>
                <a href=""><i class="fa-solid fa-trash" style="color: #ff0a0a;"></i></a>
            </td>
        </tr>
        @endforeach
        
      
      </tbody>
    </table>
  </div>
@endsection