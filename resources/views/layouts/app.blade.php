<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/450e41a5eb.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/function.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark mb-0 shadow-sm">
            <div class="container">
                <ul class="list-cab">
                    <li>
                        <a href="{{ route('admin.users.index')}}">
                            Z6
                        </a>
                    </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i> <p>INSTAGRAM</p> </a>
                </li>
                    <li>
                        <a href="#"><i class="fab fa-whatsapp"></i><p> WHATSSAP</p></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-facebook-square"></i><p> FACEBOOK</p></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-discord"></i> <p>DISCORD</p></a>
                    </li>
                </ul>

                <div>
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <h2> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></h2>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <h2> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></h2>
                                </li>
                            @endif
                        @else
                            <li class="nav-item ">
                                    <a class="nav-link"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-1">
            @if(Session::has('message'))
                <div class="container">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <h5>{!! Alert::success(Session::get('message'))->close() !!}</h5>
                        </div>

                    </div>

                </div>


            @endif
       @yield('content')
        </main>
    </div>
</body>
</html>
