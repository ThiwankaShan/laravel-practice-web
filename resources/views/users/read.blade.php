@extends('users.layout')
@section('content')

<div class="col-12 col-md-8 offset-md-2 card mt-4">
  <h1 class="card-header bg-primary">
    Your Profile
  </h1>
  <div class="card-body">

                         <dl class="row">
                            <dt class=" col-md-4 offset-md-2 text-md-right">First Name:</dt>
                            <dd class="col-md-6"> {{ $user->fname }}</dd>
                            <dt class=" col-md-4 offset-md-2 text-md-right">Last Name:</dt>
                            <dd class="col-md-6">{{ $user->lname }}</dd>
                            <dt class=" col-md-4 offset-md-2 text-md-right">User Name:</dt>
                            <dd class=" col-md-6">{{ $user->uname }}</dd>
                            <dt class=" col-md-4 offset-md-2 text-md-right">Email:</dt>
                            <dd class=" col-md-6">{{ $user->email }}</dd>
                        </dl>

 
  </div>

  <div class="row justify-content-center ">
  <a href="{{ route('users.edit',$user->id)}}" class="btn btn-info col-auto mr-2">Edit </a>
 <form action="{{ route('users.destroy',$user->id) }}" method="POST">
 @csrf
@method('DELETE')
 <button  class="btn btn-danger col-auto mr-2">Delete </button>
 </form>
 <a href="{{ route('home')}}" class="btn btn-secondary col-auto">Back</a>
 
  
  </div>
 
 

</div>












@endsection
