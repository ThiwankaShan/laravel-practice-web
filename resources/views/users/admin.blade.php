@extends('users.layout')
@section('content')
 
<div class="container">
    <div class="col-8 offset-2">
    @if(Session::has('massg'))
       <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('massg') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
 
    @endif
     <h1 class="mt-4">Admin Login</h1>
         <form action="{{ route('admin.check') }}" method="POST">
         @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="mail">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
         </form>
    </div>
</div>

@endsection