<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin_pofile_view',compact('adminData'));
    }

    public function Admin_Edit_Profile(){
        $adminEditData = Admin::find(1);
        return view('admin.Admin_Edit_Profile',compact('adminEditData'));
    }
    public function admin_profile_store(Request $request){
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
           $file = $request->file('profile_photo_path');
           @unlink(public_path('uploads/AdminImages/'.$data->profile_photo_path));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('uploads/AdminImages'),$filename);
           $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
      
    }
    public function admin_change_password(){
        $adminEditData = Admin::find(1);
        return view('admin.admin_change_password',compact('adminEditData'));
    }

     public function admin_Update_Password(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);
       
       
        $hashedPassword =  Admin::find(1)->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $adminData = Admin::find(1);
            $adminData->password = bcrypt($request->newpassword);
            $adminData->save();
            Auth::logout();
            session()->flash('message','Password Updated Successfully');
            return redirect()->route('admin.logout');
        } else{
            session()->flash('message','Old password is not match');
            return redirect()->back();
        }

    }// End Method
    
}
