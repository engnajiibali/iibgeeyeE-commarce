@extends('ForontEnd.main_master')
@section('main')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Forget Password</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">Forget Password</h4>
   
        @if (session('status'))
         <span class="invalid-feedback" role="alert">
                    <strong>{{ session('status') }}</strong>
          
        @endif
    <form class="register-form outer-top-xs" role="form"  method="POST" action="{{ route('password.update') }}" >
            @csrf
             <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" value="{{ $request->email}}" readonly  >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
          <div class="form-group">
            <label class="info-title" for="password">password <span>*</span></label>
            <input type="password" name="password" class="form-control unicase-form-control text-input" id="password" >
                @error('passworddd')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="password_confirmation">Confirm Password  <span>*</span></label>
            <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="password_confirmation" >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
      
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset Password</button>
    </form>                 
</div>
<!-- Sign-in -->


<!-- create a new account -->           </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
  @include('ForontEnd.body.brandCAROUSEL')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    
</div>
@endsection