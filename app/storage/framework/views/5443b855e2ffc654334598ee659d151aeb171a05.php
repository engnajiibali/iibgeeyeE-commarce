<?php $__env->startSection('main'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Forget Password</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">Forget Password</h4>
   
        <?php if(session('status')): ?>
         <span class="invalid-feedback" role="alert">
                    <strong><?php echo e(session('status')); ?></strong>
          
        <?php endif; ?>
    <form class="register-form outer-top-xs" role="form"  method="POST" action="<?php echo e(route('password.update')); ?>" >
            <?php echo csrf_field(); ?>
             <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" value="<?php echo e($request->email); ?>" readonly  >
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
            <label class="info-title" for="password">password <span>*</span></label>
            <input type="password" name="password" class="form-control unicase-form-control text-input" id="password" >
                <?php $__errorArgs = ['passworddd'];
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
            <label class="info-title" for="password_confirmation">Confirm Password  <span>*</span></label>
            <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="password_confirmation" >
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
      
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset Password</button>
    </form>                 
</div>
<!-- Sign-in -->


<!-- create a new account -->           </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
  <?php echo $__env->make('ForontEnd.body.brandCAROUSEL', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ForontEnd.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>