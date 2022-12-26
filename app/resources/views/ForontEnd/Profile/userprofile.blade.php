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
                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong>{{ Auth::user()->name }} </strong>Update user Profile</h3>
            </div>
            <div class="card-body">
                <form class="register-form outer-top-xs" role="form"  method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                       @csrf
                    <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">FullName  <span>*</span></label>
            <input type="text" name="name" class="form-control unicase-form-control text-input" value="{{ $user->name }}" >
  @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input type="email" name="email" class="form-control unicase-form-control text-input" value="{{ $user->email }}" >
              @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1"> Phone Number <span>*</span></label>
                        <input type="text" name="phonenumer" class="form-control unicase-form-control text-input" value="{{ $user->phonenumer }}" >
              @error('phonenumer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1"> profile photo  <span>*</span></label>
                        <input type="file" name="profile_photo_path" class="form-control unicase-form-control text-input" v >
              @error('profile_photo_path')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info">Updat</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
 @endsection