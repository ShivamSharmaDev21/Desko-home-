@extends('layout')

@section('body')

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Material </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Materials </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Material </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="{{url('/view_materials')}}" class="btn btn-primary my-2 btn-icon-text">
									   Material List
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
											<h6 class="main-content-label mb-1"> Edit Material </h6>
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
										<form action="{{url('update_material/'.$material->id)}}" method="post" >
										    @method('PUT')
										    @csrf
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="{{$material->material_name}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="material_name">
										        <label for="floatingInput">Material Name</label>
										         @error('material_name')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
													</div>
											</div>
											<!--	<div class="col-md-4 mb-2">-->
										 <!--   <div class="form-floating mb-3">-->
											<!-- <input type="text" value="{{$material->material_price}}" class="form-control" id="floatingInput" placeholder="name@example.com" name="material_price">-->
										 <!--       <label for="floatingInput">Material Price</label>-->
										 <!--        @error('material_price')-->
           <!--                                        <span class="error">{{$message}}</span> -->
           <!--                                   @enderror-->
											<!--		</div>-->
											<!--</div>-->
											
										
											
									
									</div>
									
								
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="{{url('/view_materials')}}" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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