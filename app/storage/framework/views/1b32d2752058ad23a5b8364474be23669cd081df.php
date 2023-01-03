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
                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong><?php echo e(Auth::user()->name); ?> </strong>Welcome to Iibgeeye online shoping</h3>
            </div>
            
        </div>
    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('ForontEnd.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/dashboard.blade.php ENDPATH**/ ?>