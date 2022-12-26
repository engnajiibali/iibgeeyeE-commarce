<!DOCTYPE html>
<html lang="en">
<head>
 @include('ForontEnd.body.head')
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
 @include('ForontEnd.body.header')
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  @yield('main')
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
 @include('ForontEnd.body.footer')
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
 @include('ForontEnd.body.js')
</body>
</html>