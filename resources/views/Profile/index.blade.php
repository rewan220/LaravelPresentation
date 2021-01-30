@extends('layouts.app')
@section('content')
<<<<<<< HEAD
    <div class="card">
        <div class="card-header">Profile</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <img src="{{ auth()->user()->picture_path }}" alt="Avatar" style=" vertical-align: middle;
                width: 100px;
                height: 100px;
                border-radius: 30%;">
                </div>
                <div class="form-group">
                    <label for="image">Avatar</label>
                    <input id="image" class="form-control-file" type="file" name="file" accept="image/*">
                </div>
                <div class="form-group">


                    <label for="name">Name</label>
                    <input id="name" value="{{ auth()->user()->name }}" class="form-control" type="text" name="name"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" value="{{ auth()->user()->email }}" class="form-control" type="email" name="email"
                        required>
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea id="content" placeholder="about you" class="form-control" rows="4" name="about"
                        required>{{ auth()->user()->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input id="age" value="{{ auth()->user()->age }}" class="form-control" type="number" name="age"
                        required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" value="{{ auth()->user()->address }}" class="form-control" type="text"
                        name="address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" value="{{ auth()->user()->phone }}" class="form-control" type="text" name="phone"
                        required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Profile</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
            </form>
        </div>
    </div>
=======
<div class="card">
   <div class="card-header">Profile</div>
   <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
         </ul>
      </div>
   @endif
      <form action="{{route('user.update',auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div>
            <img src="{{ asset(auth()->user()->picture) }}" alt="Avatar"
             style=" vertical-align: middle;
            width: 100px;
            height: 100px;
            border-radius: 30%;">
         </div>
         <div class="form-group" >
             <label for="image">Avatar</label>
             <input id="image"  class="form-control-file" type="file" name="file" accept="image/*">
         </div>
         <div class="form-group">
            

            <label for="name">Name</label>
            <input id="name" value="{{auth()->user()->name}}" class="form-control" type="text" name="name" disabled>
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input id="email" value="{{auth()->user()->email}}" class="form-control" type="email" name="email" required>
         </div>

         <div class="form-group">
            <label for="about">About</label>
            <textarea id="content"  placeholder="about you" class="form-control" rows="4" name="about" required>{{auth()->user()->about}}</textarea>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input id="age" value="{{auth()->user()->age}}" class="form-control" type="number" name="age" required>
         </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input id="address" value="{{auth()->user()->address}}" class="form-control" type="text" name="address" required>
         </div>
         <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" value="{{auth()->user()->phone}}" class="form-control" type="text" name="phone" required>
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-success">Update Profile</button>
            <button type="reset" class="btn btn-success">Reset</button>
         </div>
      </form>
   </div>
</div>
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
@endsection
