<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make('admin.body.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
  
<div class="wrapper">

 <?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
     <?php echo $__env->yieldContent('admin'); ?>
    <!-- /.content -->
    </div>
 
  <!-- /.content-wrapper -->
  <?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
    
   
  <!-- Vendor JS -->
  <?php echo $__env->make('admin.body.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  
</body>
</html>
<?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/admin/admin_master.blade.php ENDPATH**/ ?>