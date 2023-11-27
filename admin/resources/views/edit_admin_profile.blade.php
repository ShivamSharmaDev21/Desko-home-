@extends('layout')

@section('body')
<style>
.form-floating>.form-control:not(:placeholder-shown)~label {

  
    background: white;
 
    padding: 5px 0px !important;
    height: 25px;
 

}
</style>
    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Admin Profile </h2>
							<!--<ol class="breadcrumb">-->
							<!--	<li class="breadcrumb-item"><a href="#">Users </a></li>-->
							<!--	<li class="breadcrumb-item active" aria-current="page">Edit User </li> -->
							<!--	</ol>-->
							</div>
							<!--<div class="d-flex">-->
							<!--	<div class="justify-content-center"> -->
								
							<!--		<a href="{{url('/view_users')}}" class="btn btn-primary my-2 btn-icon-text">-->
							<!--		   User List-->
							<!--		</a>-->
							<!--	</div>-->
							<!--</div>-->
						</div>
   
						<!-- End Page Header -->
	           <div class="row row-sm"> 
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<!--<div>-->
										<!--	<h6 class="main-content-label mb-1"> Edit User </h6>-->
										<!--	<p class="text-muted card-sub-title"></p>-->
										<!--</div>-->
<div>
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-success">{{Session::get('fail')}}</h6>
    @endif


</div>
										<form action="{{url('update_admin_profile/'.$admin->id)}}" method="POST" enctype="multipart/form-data" >
										     @method('PUT')
                                                @csrf
										
										<div class="row row-sm">
                                          	
											<div class="col-md-6 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="{{$admin->name}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
										        <label for="floatingInput">Name</label>
										         @error('name')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
													</div>
											</div>
											
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="text" value="{{$admin->email}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
										            <label for="floatingInput">Email</label>
										             @error('email')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											
										<div class="col-md-6  mb-2">
											<div class="form-floating mb-3">
											<input type="text" value="{{$admin->mobile}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="mobile">
											 <label for="floatingInput">Mobile</label>
											  @error('mobile')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
											</div>
											</div>
											<div class="col-md-4 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file" name="image"  class="form-control" id="floatingInput" placeholder="name@example.com" >
											        <input type="hidden" name="hidden_image" value="{{$admin->image}}"  class="form-control" id="floatingInput" placeholder="name@example.com" >
										            <label for="floatingInput">Profile Image</label>
										             @error('Image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											@if(!empty($admin->image))
												<div class="col-md-2 mb-2">
										            <img alt='tbl' src="{{asset('public/assets/img/'.$admin->image)}}" height="50px"width="50px">
											    </div>
											@else
											<div class="col-md-2 mb-2">
										            <img alt='fol' src="{{asset('public/assets/img/profile_image.jpg')}}" height="50px"width="50px">
											    </div>
											    @endif
									</div>
									
								
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="{{url('admin_profile')}}" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
@endsection