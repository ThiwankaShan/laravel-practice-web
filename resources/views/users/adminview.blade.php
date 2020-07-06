@extends('users.layout')
@section('content')
<div class="container">
    <div class="col-6 offset-3">
            <div class="card mt-5">
                <div class="card-header bg-warning">
                   <h1 class="text-dark">Your Profle</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-3">User Id:</div>
                      <div class="col-3 px-0 text-left">{{ $user->id }}</div>
                    </div>
                    <div class="row">
                      <div class="col-3">First Name:</div>
                      <div class="col-3 px-0 text-left">{{ $user->fname }}</div>
                    </div>
                    <div class="row">
                      <div class="col-3">Last Name:</div>
                      <div class="col-3 px-0 text-left">{{ $user->lname }}</div>
                    </div>
                    <div class="row">
                      <div class="col-3">User Name:</div>
                      <div class="col-3 px-0 text-left">{{ $user->uname }}</div>
                    </div>
                    <div class="row">
                      <div class="col-3">Email:</div>
                      <div class="col-3 px-0 text-left">{{ $user->email }}</div>
                    </div>
                    <div class="row">
                      <a href="{{ route('admin.list') }}" class="col-4 btn btn-info mt-3">Back</a>
                    </div>
                </div>
            </div>          
     
    </div>
</div>

@endsection
