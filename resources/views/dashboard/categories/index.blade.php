@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>
      @if (session()->Has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
        {{session('success')}}
        </div>
      @endif
  <div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Actions</th>
        
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/categories/{{ $category->slug }}"><i class="fa-solid fa-eye" style="color: #2188e8;"></i></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit"><i class="fa-regular fa-pen-to-square" style="color: #09f619;"></i></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="border-0 bg-transparent"><i class="fa-solid fa-trash" style="color: #ff0a0a;" onclick="return confirm('Are you sure?')"></i></button>
                </form>
                
            </td>
        </tr>
        @endforeach
        
      
      </tbody>
    </table>
  </div>
@endsection