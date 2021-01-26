@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Photo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                   
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->age}}</td>
                    <td><img src="{{ asset($user->picture) }}" alt="image" style="width:50px" ></td>
                    <td><a href="{{ url('admin/delete/'.$user->id) }}" class="btn btn-sm btn-danger">delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
