@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
             
          
              <div class="form-floating">
                <input type="text" class="form-control rounded-top" id="name" placeholder="Name..." name="name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="UserName..." name="username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
          
             
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
              
            </form>
            
            <small class="d-block text-center mt-3">
                Already Registered? 
                <a href="/login" >Login!</a>
            </small>
          </main>
    </div>
</div>
    



@endsection