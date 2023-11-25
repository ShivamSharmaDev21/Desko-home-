@extends('layout')

@section('body')

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit User </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Users </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit User </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
							
									<a href="{{url('view_users')}}" class="btn btn-primary my-2 btn-icon-text">
									   User List
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
											<h6 class="main-content-label mb-1"> Edit User </h6>
											<p class="text-muted card-sub-title"></p>
										</div>
<div class="remove_alert">
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-success">{{Session::get('fail')}}</h6>
    @endif
</div>
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
</script>
										<form action="{{url('update_user/'.$user->user_id)}}" method="POST" >
										     @method('PUT')
                                                @csrf
										
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="{{$user->fname}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="fname">
										        <label for="floatingInput">First Name</label>
										         @error('fname')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
													</div>
											</div>
											
											<div class="col-md-4 mb-2">
										        <div class="form-floating mb-3">
											        <input type="text" value="{{$user->lname}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="lname">
										            <label for="floatingInput">Last Name</label>
										             @error('lname')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											
										<div class="col-md-4  mb-2">
											<div class="form-floating mb-3">
											<input type="text" value="{{$user->email}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
											 <label for="floatingInput">Email</label>
											  @error('email')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
											</div>
											</div>
									</div>
									
									<div class="row row-sm">
										
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="{{$user->mobile}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="mobile">
										        <label for="floatingInput">Mobile</label>
										         @error('mobile')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
													</div>
											</div>
											
											<!--<div class="col-md-4 mb-2">-->
										 <!--       <div class="form-floating mb-3">-->
											<!--        <input type="text" value="{{$user->password}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">-->
										 <!--           <label for="floatingInput">Password</label>-->
										 <!--            @error('password')-->
           <!--                                        <span class="error">{{$message}}</span> -->
           <!--                                   @enderror-->
											<!--	</div>-->
											<!--</div>-->
											
									
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="{{url('/view_users')}}"  type="reset" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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