@extends('layout')

@section('body')

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Subject </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Subjects </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Subject </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="{{url('/view_subjects')}}" class="btn btn-primary my-2 btn-icon-text">
									   Subject List
									</a>
								</div>
							</div>
						</div>
   
						<!-- End Page Header -->
	           <div class="row row-sm"> 
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1"> Edit Subject </h6>
											<p class="text-muted card-sub-title"></p>
										</div>
<div>
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-success">{{Session::get('fail')}}</h6>
    @endif


</div>
										<form action="{{url('update_subject/'.$subject->sub_id)}}" method="post" enctype="multipart/form-data" >
										    @method('PUT')
										    @csrf
										    
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="{{$subject->sub_name}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="subject_name">
										        <label for="floatingInput">Subject Name</label>
										         @error('subject_name')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
													</div>
											</div>
											
											<div class="col-md-4 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  class="form-control" id="floatingInput" placeholder="name@example.com" name="subject_image">
										            <label for="floatingInput">Subject Image</label>
										             @error('subject_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											
									<!--	<div class="col-md-4  mb-2">-->
									<!--		<div class="form-floating mb-3">-->
									<!--		<input type="text" value="{{old('email')}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">-->
									<!--		 <label for="floatingInput">Email</label>-->
									<!--		  @error('email')-->
         <!--                                          <span class="error">{{$message}}</span> -->
         <!--                                     @enderror-->
									<!--		</div>-->
									<!--		</div>-->
									<!--</div>-->
									
									<!--<div class="row row-sm">-->
										
                                          	
									<!--		<div class="col-md-4 mb-2">-->
									<!--	    <div class="form-floating mb-3">-->
									<!--		 <input type="text" value="{{old('mobile')}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="mobile">-->
									<!--	        <label for="floatingInput">Mobile</label>-->
									<!--	         @error('mobile')-->
         <!--                                          <span class="error">{{$message}}</span> -->
         <!--                                     @enderror-->
									<!--				</div>-->
									<!--		</div>-->
											
									<!--		<div class="col-md-4 mb-2">-->
									<!--	        <div class="form-floating mb-3">-->
									<!--		        <input type="text" value="{{old('password')}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">-->
									<!--	            <label for="floatingInput">Password</label>-->
									<!--	             @error('password')-->
         <!--                                          <span class="error">{{$message}}</span> -->
         <!--                                     @enderror-->
									<!--			</div>-->
									<!--		</div>-->
											
									
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Add </button>
												<button type="reset" class="btn ripple btn-outline-danger pd-x-30">Cancel</button>
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