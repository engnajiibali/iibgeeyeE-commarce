@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Edit Admin  Profile</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Admin</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
			  <h4 class="box-title">Edit Admin  Profile</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
			  <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
             				   @csrf
					  <div class="row">
                        <div class="col-6">	
                        <div class="form-group">
								<h5>Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" class="form-control"  required="" data-validation-required-message="This field is required" value="{{ $adminEditData->name }}"> <div class="help-block"></div></div>
							
							</div>
                        </div>
                        <div class="col-6">	
                        <div class="form-group">
								<h5>Email  <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required" value="{{ $adminEditData->email }}"> <div class="help-block"></div></div>
							</div>
                        </div>
						
					
					  </div>
					    <div class="row">
                        <div class="col-6">	
                        <div class="form-group">
                    <h5>Photo <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="file"  id="image" name="profile_photo_path" class="form-control" > <div class="help-block"></div></div>
                    </div>
                        </div>
                        <div class="col-6">	
                      	<img id="showImage"  src="{{ (!empty($adminEditData->profile_photo_path)) ? 
                url('uploads/AdminImages/'.$adminEditData->profile_photo_path):url('uploads/no_image.jpg') }}" aty  style="height: 100px;width:px ;" alt="User Avatar">
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

	  <script type="text/javascript">
	  $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection