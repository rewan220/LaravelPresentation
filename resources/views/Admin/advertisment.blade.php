@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Users who like to recieve emails</div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                   
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <a class="btn btn-sm btn-success" href="{{route('job')}}">Send Advertising's emails</a>
    </div>
</div>
</div>
@endsection
