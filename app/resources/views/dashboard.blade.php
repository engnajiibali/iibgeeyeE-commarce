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
                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong>{{ Auth::user()->name }} </strong>Welcome to Iibgeeye online shoping</h3>
            </div>
            
        </div>
    </div>
</div>
 @endsection