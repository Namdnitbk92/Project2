@extends('layouts.app')

@section('content')
    <div class="login-form">
      <div class="card">
          
      </div>
      <div class="card">

        <h1 class="title">Login</h1>
         <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
        <div class="input-container">
            <input type="text" id="email" name="email" required="required">
            <label for="email">Email</label>
            <div class="bar"></div>
        </div>
        <div class="input-container">
            <input type="password" id="password" name="password" required="required">
            <label for="password">Password</label>
            <div class="bar"></div>
        </div>
        <div class="checkbox rememberme">
            <input type="checkbox" name="remember"/> &nbsp; Remember me
        </div>
        <div class="button-container">
            <button type="submit"><span>Go</span></button>
        </div>
        <div class="button-social">
            <button class="ui facebook button">
              <i class="facebook icon"></i>
              Facebook
            </button>
            <button class="ui twitter button">
              <i class="twitter icon"></i>
              Twitter
            </button>
            <button class="ui google plus button">
              <i class="google plus icon"></i>
              Google Plus
            </button>
        </div>
        <div class="footer"><a href="#">Forgot your password?</a></div>
        </form>
      </div>
      <div class="card alt">
        <div class="toggle"></div>
        <h1 class="title">Register
          <div class="close"></div>
        </h1>
        <form>
          <div class="input-container">
            <input type="text" id="Username" required="required">
            <label for="Username">Username</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="password" name="password" required="required">
            <label for="password">Password</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="Repeat Password" required="required">
            <label for="Repeat Password">Repeat Password</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button><span>Next</span></button>
          </div>
        </form>
      </div>
    </div>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
