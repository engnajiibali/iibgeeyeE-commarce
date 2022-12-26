<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\FrontEnd\IndexController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');
});


#all admin routs
Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('admin/Edit/Profile', [AdminProfileController::class, 'Admin_Edit_Profile'])->name('admin.profile.Edit');
Route::post('admin/profile/Store', [AdminProfileController::class, 'admin_profile_store'])->name('admin.profile.store');
Route::get('admin/Change/Password', [AdminProfileController::class, 'admin_change_password'])->name('admin.change.password');
Route::post('admin/Update/Password', [AdminProfileController::class, 'admin_Update_Password'])->name('admin.update.password');


 


#user controoler
Route::get('/', [IndexController::class, 'index']);
Route::get('User/logout', [IndexController::class, 'userlogout'])->name('user.logout');
Route::get('User/profile', [IndexController::class, 'userprofile'])->name('user.profile');
Route::post('user/profile/Store', [IndexController::class, 'usern_profile_store'])->name('user.profile.store');
Route::get('User/change/passwor', [IndexController::class, 'user_change_passwor'])->name('user.change.passwor');
Route::post('user/Update/Password', [IndexController::class, 'user_Update_Password'])->name('user.profile.updatePassword');

#Barands
Route::prefix('Brand')->group(function(){
Route::get('/View', [BrandController::class, 'BrandView'])->name('all.Barand');    

});







Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
         $id =Auth::user()->id;
        $user =User::find($id);
        return view('dashboard',compact('user'));
    })->name('dashboard');
});
 