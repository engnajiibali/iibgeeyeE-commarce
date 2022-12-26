@extends('ForontEnd.main_master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            
            <img class="card-img-top " style="border-radius: 50%;" src="{{ (!empty($user->profile_photo_path)) ? 
                url('uploads/AdminImages/'.$user->profile_photo_path):url('uploads/no_image.jpg') }}" height="100%" width="100%">
                <ul class="list-group list-group-flush ">
                    <br>
                    <a href="{{(route('dashboard'))}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{(route('user.profile'))}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('user.change.passwor')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>

                </ul>       
        </div>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong>{{ Auth::user()->name }} </strong>Change Password</h3>
                <h4 class="text-danger"> Ensure your account is using a long, random password to stay secure.</h4>
            </div>
            <div class="card-body">
                      @if(count($errors))
                @foreach ($errors->all() as $error)
                <p class="text-danger"> {{ $error}} </p>
                @endforeach

            @endif
                <form class="register-form outer-top-xs" role="form"  method="POST" action="{{ route('user.profile.updatePassword') }}" >
                       @csrf
                    <div class="form-group">
            <label class="info-title" for="current_password">Olad Password  <span>*</span></label>
            <input type="password" name="current_password" id="current_password" class="form-control unicase-form-control text-input">
          
         
        </div>
            <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">New Password <span>*</span></label>
            <input type="password" name="newpassword" id="newpassword" class="form-control unicase-form-control text-input">
         
        </div>
            <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Confirm Password   <span>*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control unicase-form-control text-input">
        
        </div>
                    <button type="submit" class="btn btn-rounded btn-info">Change Password</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
 @endsection