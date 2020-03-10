@extends('layouts.app')

@section('content')

        <div class="content">
                <div class="title m-b-md">
                    <a href = "{{ url('/') }}"> Canteen Ordering System </a>
                </div>
        </div>

        <!-- <div class = "NavigationBar1" > </div> -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-zlabel" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- CSS -->

<style>
            html, body 
            {
                position: relative;
                z-index: -1;
                background-color: #fff;
                color: #F8FAFC;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height 
            {
                height: 100vh;
            }

            .flex-center 
            {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref 
            {
                position: relative;
            }

            .top-right 
            {
                position: absolute;
                right: 10px;
                top: 26.5px;
            }

            .content 
            {
                position: absolute;
                color: gray;
                text-align: center;
                z-index: 1;
                top: 1.4em;
                left: 1.3em;
            }

            .title
            {
                position: relative;
                width: 13em;
                height: 1.5em;
                top: -.2em;
                left: 6em;
                background-color: white;
                font-family: century gothic;
                font-size: 1.2em;
            }

            .title a
            {
                color: gray;
                text-decoration: none;
            }

            .title a:hover
            {
                color: gray;
                text-decoration: none;
            }
 
            .links > a 
            {
                color: #90857F;
                padding: 0 25px;
                font-size: 13.4px;
                font-weight: 300;
                letter-spacing: .08em;
                text-decoration: none;
            }

            .links > a:hover
            {
                color: #B51D29;
                padding: 0 25px;
                font-size: 13.4px;
                font-weight: 300;
                letter-spacing: .08em;
                text-decoration: none;
            }

            .imageBackground
            {
                position: absolute;
                left: 43em;
                height: 40em;
            }

            .NavigationBar1
            {
                position: absolute;
                background-color: #F8FAFC;
                width: 100%;
                height: 4.5em;
                border-bottom: .2em solid black;
            }

        </style>