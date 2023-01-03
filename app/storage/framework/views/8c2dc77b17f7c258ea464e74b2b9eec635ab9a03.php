<!DOCTYPE html>
<html lang="en">
<head>
 <?php echo $__env->make('ForontEnd.body.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
 <?php echo $__env->make('ForontEnd.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <?php echo $__env->yieldContent('main'); ?>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
 <?php echo $__env->make('ForontEnd.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
 <?php echo $__env->make('ForontEnd.body.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\iibgeeyeecomarce\resources\views/ForontEnd/main_master.blade.php ENDPATH**/ ?>