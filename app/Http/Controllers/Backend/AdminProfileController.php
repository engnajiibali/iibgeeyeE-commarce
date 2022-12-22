<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

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
}
