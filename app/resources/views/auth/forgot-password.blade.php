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
    <form class="register-form outer-top-xs" role="form"  method="POST" action="{{ route('password.email') }}" >
            @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" >
  @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Email Password Reset Link</button>
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