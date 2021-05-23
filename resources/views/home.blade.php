<!DOCTYPE html>
  <html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
    </head>
    <body>
        @extends('layouts.app')

@section('content')
<div class="container">
    
   <div class="row justify-content-right">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                          <div class="row">
                            <div class="col align-self-start">
                                <img style="height:500px;"; src="https://i2.wp.com/cumminsandwhite.com/wp-content/uploads/2017/03/Black-Desk-Background.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col align-self-center">
                                    <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-md-2">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <button style="width:100%;"type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                          <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    @if (Route::has('password.request'))
                                    <a style="float:right"; class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

    </body>
  </html>