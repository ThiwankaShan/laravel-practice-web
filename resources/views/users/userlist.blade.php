@extends('users.layout')
@section('content')
<div class="container">
 
    <div class="col-10 offset-1 mt-4 pt-4">
      <h1 class="bg-success text-center text-white">User List</h1>
      @if(session('msg'))
      <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
           <strong>{{ session('msg') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
      @endif
      <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">User Id</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user as $users)
                <tr>
                <th scope="row">{{ $users->id }}</th>
                <td>{{ $users->uname }}</td>
                <td>{{ $users->email }}</td>
                <td class="row">
                   <a href="{{ route('admin.view',$users->id) }}" class="btn btn-primary col-lg-3 mr-2 mb-1">View</a>
                   <a href="{{ route('admin.edit',$users->id) }}" class="btn btn-success col-lg-3 mr-2 mb-1">Edit</a>
                   <form action="{{ route('admin.delete',$users->id) }}" method="POST">
                   @csrf  
                   @method('DELETE')
                     <button class="btn btn-danger ">Delete</button>
                   </form>
                </td>
                </tr>
              @endforeach  
            </tbody>
</table>


    </div>
</div>
@endsection