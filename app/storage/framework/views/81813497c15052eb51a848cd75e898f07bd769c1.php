<script src="<?php echo e(asset('ForontEnd/assets/js/jquery-1.11.1.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/bootstrap.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/bootstrap-hover-dropdown.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/owl.carousel.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/echo.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/jquery.easing-1.3.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/bootstrap-slider.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/jquery.rateit.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('ForontEnd/assets/js/lightbox.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/bootstrap-select.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/wow.min.js')); ?>"></script> 
<script src="<?php echo e(asset('ForontEnd/assets/js/scripts.js')); ?>"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
         <script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>
<?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/ForontEnd/body/js.blade.php ENDPATH**/ ?>