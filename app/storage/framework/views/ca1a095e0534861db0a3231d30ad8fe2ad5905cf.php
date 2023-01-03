
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
                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong><?php echo e(Auth::user()->name); ?> </strong>Update user Profile</h3>
            </div>
            <div class="card-body">
                <form class="register-form outer-top-xs" role="form"  method="POST" action="<?php echo e(route('user.profile.store')); ?>" enctype="multipart/form-data">
                       <?php echo csrf_field(); ?>
                    <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">FullName  <span>*</span></label>
            <input type="text" name="name" class="form-control unicase-form-control text-input" value="<?php echo e($user->name); ?>" >
  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input type="email" name="email" class="form-control unicase-form-control text-input" value="<?php echo e($user->email); ?>" >
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                     <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1"> Phone Number <span>*</span></label>
                        <input type="text" name="phonenumer" class="form-control unicase-form-control text-input" value="<?php echo e($user->phonenumer); ?>" >
              <?php $__errorArgs = ['phonenumer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                      <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1"> profile photo  <span>*</span></label>
                        <input type="file" name="profile_photo_path" class="form-control unicase-form-control text-input" v >
              <?php $__errorArgs = ['profile_photo_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info">Updat</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('ForontEnd.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/ForontEnd/Profile/userprofile.blade.php ENDPATH**/ ?>