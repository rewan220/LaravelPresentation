<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD

=======
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('csslink')
</head>
<<<<<<< HEAD

=======
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
<<<<<<< HEAD
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
=======
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
<<<<<<< HEAD
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
=======
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
=======
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @auth
<<<<<<< HEAD
            <div class="container">



                @include('flash-message')

                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="list-group">



                            <a class="list-group-item list-group-item-action "
                                href="{{ route('user.index', auth()->user()->id) }}">Profile</a>

                            <a class="list-group-item list-group-item-action"
                                href="{{ route('user.mail', auth()->user()->id) }}">Report</a>


                            @if (Auth::user()->is_admin == 1)
                                <a class="list-group-item list-group-item-action " href="{{ route('admin') }}">User's
                                    Managment</a>
                                <a class="list-group-item list-group-item-action "
                                    href="{{ route('admin.addusers') }}">Queue/Job</a>
=======
        <div class="container">


            
            @include('flash-message')

            <div class="row py-4">
                <div class="col-md-4">
                    <div class="list-group">
                      

                            
                            <a class="list-group-item list-group-item-action " href="{{route('user.index',auth()->user()->id)}}">Profile</a>

                            <a class="list-group-item list-group-item-action" href="{{route('user.mail',auth()->user()->id)}}">Report</a>

                            
                            @if(Auth::user()->is_admin == 1)
                            <a class="list-group-item list-group-item-action " href="{{route('admin')}}">User's Managment</a>
                            <a class="list-group-item list-group-item-action " href="{{route('admin.addusers')}}">Queue/Job</a>
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
                            @endif
                            <a class="list-group-item list-group-item-action " href="">Other2</a>


                            <a class="list-group-item list-group-item-action " href="">Other3</a>


<<<<<<< HEAD
                            <a class="list-group-item list-group-item-action " href="">Other4</a>




                        </div>
                    </div>
                    <div class="col-md-8">

                        <main>
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
=======
                            <a  class="list-group-item list-group-item-action " href="">Other4</a>

                            


                    </div>
                </div>
                <div class="col-md-8">

                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
        @else
            <main class="py-4">
                @yield('content')
            </main>
        @endauth
    </div>
<<<<<<< HEAD

=======
    
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
    @yield('script');
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>
<<<<<<< HEAD

=======
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
</html>
