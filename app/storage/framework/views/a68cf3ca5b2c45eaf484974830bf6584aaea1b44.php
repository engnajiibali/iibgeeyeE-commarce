<script src="<?php echo e(asset('backend/js/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/icons/feather-icons/feather.min.js')); ?>"></script>	
	<script src="<?php echo e(asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')); ?>"></script>
	
	<!-- Sunny Admin App -->
	<script src="<?php echo e(asset('backend/js/template.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/js/pages/dashboard.js')); ?>"></script>
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
</script><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/admin/body/js.blade.php ENDPATH**/ ?>