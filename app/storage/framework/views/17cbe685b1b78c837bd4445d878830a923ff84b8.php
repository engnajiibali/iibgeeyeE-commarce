<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('backend/login/fonts/icomoon/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/login/css/owl.carousel.min.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('backend/login/css/bootstrap.min.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('backend/login/css/style.css')); ?>">
<title>IIBGEEYE ADMIN LOGIN</title>
</head>
<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-6 order-md-2">
<img src="<?php echo e(asset('backend/login/images/undraw_file_sync_ot38.svg')); ?>" alt="Image" class="img-fluid">
</div>
<div class="col-md-6 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h3><strong>IIBGEEYE ADMIN </strong>LOGIN</h3>
</div>
<form method="POST" action="<?php echo e(isset($guard) ? url($guard.'/login') : route('login')); ?>">
            <?php echo csrf_field(); ?>
<div class="form-group first">
<label for="username">Username</label>
<input type="email" name="email" class="form-control" id="email">
</div>
<div class="form-group last mb-4">
<label for="password">Password</label>
<input type="password" class="form-control" name="password" id="password">
</div>
<div class="d-flex mb-5 align-items-center">

<span class="ml-auto"><a href="<?php echo e(route('password.request')); ?>" class="forgot-pass">Forgot Password</a></span>
</div>
<input type="submit" value="Log In" class="btn text-white btn-block btn-primary">


</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="<?php echo e(asset('backend/login/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/login/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/login/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/login/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/auth/admin_login.blade.php ENDPATH**/ ?>