
<?php $__env->startSection('main'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            
            <img class="card-img-top " style="border-radius: 50%;" src="<?php echo e((!empty($user->profile_photo_path)) ? 
                url('uploads/AdminImages/'.$user->profile_photo_path):url('uploads/no_image.jpg')); ?>" height="100%" width="100%">
                <ul class="list-group list-group-flush ">
                    <br>
                    <a href="<?php echo e((route('dashboard'))); ?>" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="<?php echo e((route('user.profile'))); ?>" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="<?php echo e(route('user.change.passwor')); ?>" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="<?php echo e(route('user.logout')); ?>" class="btn btn-danger btn-sm btn-block">Logout</a>

                </ul>       
        </div>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong><?php echo e(Auth::user()->name); ?> </strong>Change Password</h3>
                <h4 class="text-danger"> Ensure your account is using a long, random password to stay secure.</h4>
            </div>
            <div class="card-body">
                      <?php if(count($errors)): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="text-danger"> <?php echo e($error); ?> </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
                <form class="register-form outer-top-xs" role="form"  method="POST" action="<?php echo e(route('user.profile.updatePassword')); ?>" >
                       <?php echo csrf_field(); ?>
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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('ForontEnd.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/ForontEnd/Profile/change_passwor.blade.php ENDPATH**/ ?>