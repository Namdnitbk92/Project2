<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <div class="ui fixed inverted menu">
        <div class="ui container">
          <a href="#" class="header item ct-header">
          <!--   <img class="logo" src="{{ asset('images/icon') }}"> -->
            FOOTBALL NEWS
          </a>
            <a href="{{ url('/home') }}" class="item"><i class="home icon"></i>&nbsp;Home</a>
            <a href="{{ url('/home') }}" class="item"><i class="newspaper icon"></i>&nbsp;News</a>
            <div class="ui search item">
              <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search...">
                <i class="search icon"></i>
              </div>
              <div class="results"></div>
            </div>
            <!-- <div class="ui simple dropdown item">
                Dropdown <i class="dropdown icon"></i>
                <div class="menu">
                  <a class="item" href="#">Link Item</a>
                  <a class="item" href="#">Link Item</a>
                  <div class="divider"></div>
                  <div class="header">Header Item</div>
                  <div class="item">
                    <i class="dropdown icon"></i>
                    Sub Menu
                    <div class="menu">
                      <a class="item" href="#">Link Item</a>
                      <a class="item" href="#">Link Item</a>
                    </div>
                  </div>
                  <a class="item" href="#">Link Item</a>
                </div>
            </div> -->
            <div class="right item">
                @if(Auth::guest())
                <a class="item" href="{{ url('/login') }}" class="ui inverted button"><i class="sign in icon"></i>&nbsp;Log in</a>
                @else
                <div class="ui simple dropdown item">
                    {{ Auth::user()->name }}  <i class="dropdown icon"></i>
                    <div class="menu">
                       <a class="item" href="{{ url('/logout') }}" class="ui inverted button"><i class="sign out icon"></i>&nbsp;Log out</a>
                      <a class="item" href="#"><i class="user icon"></i>&nbsp;Profile</a>
                      <a class="item" href="#"><i class="flag outline icon"></i>&nbsp;Languages</a>
                    </div>
                </div>
               
                @endif
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> -->

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('js/semantic.min.js') }}" rel="stylesheet">
</body>
</html>
