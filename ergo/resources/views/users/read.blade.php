@extends('users.layout')
@section('content')

<div class="card text-center">
  <h1 class="card-header bg-warning">
    Your Profile
  </h1>
  <div class="card-body">
    
                         <dl class="row">
                            <dt class="col-6">First Name:</dt>
                            <dd class="col-6"> {{ $user->fname }}</dd>
                            <dt class="col-6">Last Name:</dt>
                            <dd class="col-6">{{ $user->lname }}</dd>
                            <dt class="col-6">User Name:</dt>
                            <dd class="col-6">{{ $user->uname }}</dd>
                            <dt class="col-6">Email:</dt>
                            <dd class="col-6">{{ $user->email }}</dd>
                        </dl>

 <a href="#" class="btn btn-primary">Edit Your Profile</a>
 <a href="#" class="btn btn-danger">Delete Your Profile</a>
 <a href="#" class="btn btn-secondary">Back</a>

  </div>
 
</div>









 
   

@endsection