@extends('layouts.app')
@section('content')
<<<<<<< HEAD
    <div class="card">
        <div class="card-header">Report</div>
        <div class="card-body">
            <form action="{{ route('user.sendet') }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" value="{{ auth()->user()->name }}" class="form-control" type="text" name="name"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="email">From</label>
                    <input id="email" value="{{ auth()->user()->email }}" class="form-control" type="email" name="email"
                        disabled>
                </div>

                <div class="form-group">
                    <label for="about">Message</label>
                    <textarea id="content" placeholder="about you" class="form-control" rows="4" name="usercomment"
                        required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Send</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
            </form>
        </div>
    </div>
=======
<div class="card">
   <div class="card-header">Report</div>
   <div class="card-body">
      <form action="{{route('user.sendet')}}" method="GET" enctype="">
         @csrf
                  @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
               </ul>
            </div>
         @endif
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
            <textarea id="content"  placeholder="about you" class="form-control" rows="4" name="message" required></textarea>
        </div>
         <div class="form-group">
            <button type="submit" class="btn btn-success">Send</button>
            <button type="reset" class="btn btn-success">Reset</button>
         </div>
      </form>
   </div>
</div>
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
@endsection
