@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (Session::has('fail'))
                <script type="text/javascript">
                    swal({
                        title: 'Oops!',
                        text: "  {{ Session::get('fail') }} ",
                        type: 'error',
                        timer: 5000
                    }).then((value) => {
                        //location.reload();
                    }).catch(swal.noop);

                </script>
            @endif

            @if (Session::has('success'))
                <script type="text/javascript">
                    swal({
                        title: 'Success!',
                        text: "{{ Session::get('success') }}",
                        timer: 5000,
                        type: 'success'
                    }).then((value) => {
                        //location.reload();
                    }).catch(swal.noop);

                </script>
            @endif

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Writer Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hello {{ auth()->user()->name }} You are logged in
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
