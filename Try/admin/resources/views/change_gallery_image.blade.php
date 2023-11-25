@extends('layout')

@section('body')
<style>
.form-floating>.form-control:not(:placeholder-shown)~label {

  
    background: white;
 
    padding: 5px 0px !important;
    height: 25px;
 

}
.ck.ck-editor__editable_inline[dir=ltr] {
    text-align: left;
    height: 150px;
}
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Gallery Image </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Products </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Gallery Image </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="{{url('/view_products')}}" class="btn btn-primary my-2 btn-icon-text">
									   Product List
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
											<h6 class="main-content-label mb-1"> Edit Gallery Image </h6>
											<p class="text-muted card-sub-title"></p>
										</div>
<div class="remove_alert">
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-danger">{{Session::get('fail')}}</h6>
    @endif
</div>
                              
                                        <?php if(isset($galleries) && count($galleries)>0){ ?>
										<form action="{{url('update_product_gallery')}}" method="post" enctype="multipart/form-data" >
										    @csrf
										<div class="row row-sm">
										    <?php 
                                          	 for($i=0;$i<count($galleries);$i++) { ?>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image_{{$i}}"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="hidden_gallery_image_{{$i}}"  value="{{$galleries[$i]->gallery_image}}"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="prod_id"  value="{{$galleries[0]->prod_id}}"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="img_count"  value="{{count($galleries)}}"  class="form-control" id="floatingInput" placeholder="Product image">
										             <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
										            <label for="floatingInput">Gallery Image</label>
										             @error('gallery_image')
                                                   <span class="error">{{$message}}</span> 
                                                     @enderror
												</div>
											</div>
											<div class="col-md-3 mb-2">
										        <div class="form-floating mb-3">
											       <img src="{{URL::asset('public/gallery_image/'.$galleries[$i]->gallery_image)}}" height="50px"width="50px">
												</div>
											</div>
												<div class="col-md-3 mb-2">
										        <div class="form-floating mb-3">
											       <a href="{{url('/delete_gallery_image/'.$galleries[$i]->id.'/'.$galleries[$i]->prod_id)}}" class="btn ripple btn-outline-danger pd-x-30">Remove Image</a>
												</div>
											</div>
										<?php } ?>
										
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="{{url('/view_products')}}" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
											</div>
										</div>
										</form>
										<?php }else{?>
										<script>window.location.href="{{url('edit_product/'.$prod_id)}}";</script>
									
                                        <?php } ?>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });

</script>
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();
         },3000);
</script> 
@endsection