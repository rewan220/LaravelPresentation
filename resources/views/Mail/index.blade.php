@extends('layouts.app')
@section('content')
<div class="card">
   <div class="card-header">Report</div>
   <div class="card-body">
      <form action="{{route('user.sendet')}}" method="GET" enctype="">
         @csrf
         <div class="form-group">
            <label for="name">Name</label>
            <input id="name" value="{{auth()->user()->name}}" class="form-control" type="text" name="name" disabled>
         </div>
         <div class="form-group">
            <label for="email">From</label>
            <input id="email" value="{{auth()->user()->email}}" class="form-control" type="email" name="email" disabled>
         </div>

         <div class="form-group">
            <label for="about">Message</label>
            <textarea id="content"  placeholder="about you" class="form-control" rows="4" name="about"></textarea>
        </div>
         <div class="form-group">
            <button type="submit" class="btn btn-success">Send</button>
            <button type="reset" class="btn btn-success">Reset</button>
         </div>
      </form>
   </div>
</div>
@endsection
