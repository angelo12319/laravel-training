@extends('layouts.app')
@section('content')

{{-- <h2>{{$users}}</h2> --}}
<div class="container justify-content center">
    <div class="m4-4 card">
      <div class="card-body bg-white">
          <h1> USER INDEX  <a href="{{route('users.create')}}"class="btn btn-success"style="float: right;">Create User</a>  </h1>

         
<table class="table">
    <thead>
      <tr>
        <th >ID</th>
        <th >Name</th>
         <th >Email</th>
         <th >Created</th>
      </tr>
    </thead>
    <tbody>
        @foreach( $users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                  <a  href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-info">Edit</a>
                  <form method="POST" action="{{route('users.destroy',['id'=>$user->id])}}" style="display: inline">
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button> 
                  </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </div>
    </div>
</div>
@endsection