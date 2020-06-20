@extends('layouts.registerlayout')

@section('content')

    <div class="site-form">
       <div class="form">
         <div class="form-header">
           <h3>Sign up here</h3>
         </div>
         <form  method="POST" action="{{ route('register') }}" >
           @csrf
           <div class="e-form">
             <p>Name</p>
           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="e.g. JOHN SHEGU ADAMU" />
           @error('name')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
         </div>
         <div class="e-form">
          <p>Email</p>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="e.g. prince@gmail.com" />
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
      </div>
           <div class="p-form">
             <p>Password</p>
             <i class="fa fa-eye" id="eye"></i>
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="" required id="pwd"/>
        @error('password')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
         </div>
           <div class="cp-form">
             <p>Confirm Password</p>
             <i class="fa fa-eye" id="c-eye"></i>
           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="" required id="c-pwd" />
         </div>
           
          <div class="sbt-form">
           <input type="submit" value="sign up" class="sbtn"  />
             
           
         </div>
         <div class="txt-form">
           <p>Already a user? <a href="/login">Login here.</a></p>
         </div>
         </form>
       
     </div>
     </div>
@endsection
