<!--  this is the login page -->
@extends('layouts.loginlayout')<!-- this statement kindof includes the layout of the design to this page -->

@section('content_login_form')
<div class="container">
    <div id="site-section">
        <div class="site-form">
            <div class="form">
            <div class="form-header">
            <h3>{{ __('Login') }}</h3>
          </div>
         <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="e-form">
              <p>Email</p>
            <input id="email" type="text"  name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="e.g. prince@gmail.com" required autocomplete="email" />
            <!-- the code below generates and error message -->
            @error('email')  
            <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
            <div class="p-form">
              <p>Password</p>
              <i class="fa fa-eye" id="eye"></i>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" required autocomplete="current-password" />
           <!-- this displays error in the password field-->
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        
           
           <div class="sbt-form">
            <input type="submit"  class="sbtn" />
          </div>
          <div class="txt-form">
              <!-- the code that will run if the user forgets his password-->

            @if (Route::has('password.request'))

            <a href="{{ route('password.request') }}">Forgot Password?</a>
            <p>don't have account? <a href="/register">creat new account here</a></p>
            @endif
          </div>
          </form>
            </div>
        </div>
@endsection
