@extends('admin.admin_master')
@section('admin')
<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Admin Chnage  Password</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Admin</li>
								<li class="breadcrumb-item active" aria-current="page">Chnage Password</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin  Change Password</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					  @if(count($errors))
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                @endforeach

            @endif
			  <form method="post" action="{{ route('admin.update.password') }}" >
                @csrf
					  <div class="row">
                        <div class="col-6">	
                        <div class="form-group">
								<h5>OLd Password <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="oldpassword" id="oldpassword" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
							
							</div>
							 <div class="form-group">
								<h5>New Password  <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="newpassword" class="form-control"  data-validation-required-message="This field is required" id="newpassword"> <div class="help-block"></div></div>
							</div>
							  <div class="form-group">
								<h5>Confirm Password  <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="confirm_password" class="form-control" id="confirm_password"  data-validation-required-message="This field is required" > <div class="help-block"></div></div>
							</div>
                        </div>
                      
						
					
					  </div>
					
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>


</script>
@endsection