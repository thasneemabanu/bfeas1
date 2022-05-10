<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
  <!-- Content here -->
</div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--nav bar w3-->
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" >
                <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="C:\Users\sazmi\Downloads\download.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <div class="text-center">
            <font color="white" <i class="fa fa-align-justify" aria-hidden="true"></i><h3>Welcome to manage employee Attendance Details</h3></font>
            
</div>
  </div>
</nav>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    <li class="nav-item active">
                      <a class="nav-link" href="home">Home <span class="sr-only"></span></a> 
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="login">Admin Panal <span class="sr-only"></span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="login">Employee Panal <span class="sr-only"></span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="login">Supervisor Panal <span class="sr-only"></span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="login">Director Panal <span class="sr-only"></span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="">Leaves Management <span class="sr-only"></span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item active">
                      <a class="nav-link" href="login">Reports <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item active">
                      <a class="nav-link" href="home">Contact <span class="sr-only"></span></a>
                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
</body>
</html>
