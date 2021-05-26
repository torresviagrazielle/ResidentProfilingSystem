<!DOCTYPE html>
<html>
    <head>
        <title>Barangay Profiling & Document Issuance System</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        @extends('layouts.loginapp')

        @section('content')
        <div class="container">
            <div class="row align-items-center">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col align-self-start">
                                    <img style="height:500px;"; src="https://conceptdraw.com/a2247c3/p14/preview/640/pict--image-wireframe---vector-stencils-library.png--diagram-flowchart-example.png" class="img-fluid" alt="...">
                                </div>

                                <div class="col align-self-center">
                                    <!--LOGIN HEADER-->
                                    <div class="form-group row">
                                        <div style="text-align:center;" class="col-md-8 offset-md-2">
                                            <h3>Barangay Profiling<br>and Document Issuance<br>Management System</h3>
                                        </div>
                                    </div>
                                    <!--EMAIL INPUT-->
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
                                    <!--PASSWORD INPUT-->
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
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--LOGIN BUTTON-->
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <button style="width:100%;"type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        @if (Route::has('password.request'))
                                        <a style="text-align: right" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}</a>
                                    </div>
                                    <div class="col-md-8 offset-md-2">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                     </div>
                                </div>
                                
                              
                                @endif
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>