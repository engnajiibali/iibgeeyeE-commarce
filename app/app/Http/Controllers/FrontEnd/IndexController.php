<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        return view('ForontEnd.index');
    }

    public function userlogout(){
        Auth::logout();
       return redirect()->route('login');
    }
    public function userprofile(){
        $id =Auth::user()->id;
        $user =User::find($id);
        return view('ForontEnd.Profile.userprofile',compact('user'));
    }

    
    public function usern_profile_store(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phonenumer = $request->phonenumer;
        if ($request->file('profile_photo_path')) {
           $file = $request->file('profile_photo_path');
           @unlink(public_path('uploads/UserImages/'.$data->profile_photo_path));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('uploads/UserImages'),$filename);
           $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
      
    }

        public function user_change_passwor(){
        $id =Auth::user()->id;
        $user =User::find($id);
        return view('ForontEnd.Profile.change_passwor',compact('user'));
    }

    

      public function user_Update_Password(Request $request){

        $validateData = $request->validate([
            'current_password' => 'required',
            'newpassword' => 'required',
            'password_confirmation' => 'required|same:newpassword',

        ]);
       
       
        $hashedPassword =  Auth::user()->password;
        if (Hash::check($request->current_password,$hashedPassword )) {
            $userData = User::find(Auth::id()); 
            $userData->password = bcrypt($request->newpassword);
            $userData->save();
            Auth::logout();
            session()->flash('message','Password Updated Successfully');
            return redirect()->route('login');
        } else{
            session()->flash('message','Old password is not match');
            return redirect()->back();
        }

    }// End Method


}
