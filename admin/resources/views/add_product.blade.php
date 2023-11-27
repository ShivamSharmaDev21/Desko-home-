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
						<h2 class="main-content-title tx-24 mg-b-5">Add Product </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Products </a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Product </li> 
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
											<h6 class="main-content-label mb-1"> Add Product </h6>
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
										<form action="{{url('store_product')}}" method="post" enctype="multipart/form-data" >
										    @csrf
										<div class="row row-sm">
                                          	
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="prod_name" value="{{old('prod_name')}}" required class="form-control" id="floatingInput" placeholder="Product name">
    										        <label for="floatingInput">Product Name</label>
    										         @error('prod_name')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
        											 <select name="category"  required class="form-control" id="floatingInput">
            											 <option selected disabled>--Select Category--</option>
            											 @foreach($categories as $cat)
            											 <option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
            											 @endforeach
        											 </select>
        										        <label for="floatingInput">Category</label>
        										         @error('category')
                                                           <span class="error">{{$message}}</span> 
                                                         @enderror
												</div>
											</div>
											
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="minimum_price" value="{{old('minimum_price')}}" required class="form-control" id="floatingInput" placeholder="Minimum price">
    										        <label for="floatingInput">Min Price</label>
    										         @error('minimum_price')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="maximum_price" value="{{old('maximum_price')}}" required class="form-control" id="floatingInput" placeholder="Maximum price">
    										        <label for="floatingInput">Max Price</label>
    										         @error('maximum_price')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="feature_image"  class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">(accept-.png,.jpg,.jpeg)</span>
										            <label for="floatingInput">Feature Image</label>
										             @error('product_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
										
												<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image[]"  multiple class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">You can add your multiple product Table image</span>
										            <label for="floatingInput">Table Image</label>
										             @error('gallery_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image_item[]"  multiple class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">You can add your multiple product gallery image</span>
										            <label for="floatingInput">Gallery Image</label>
										             @error('gallery_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
												<div class="col-md-12 mb-2">
										        <div class="form-floating mb-3">
    											    <!--<input type="text"  name="description" value="{{old('description')}}" required class="form-control" id="floatingInput" placeholder="Product description">-->
    										         <textarea name="description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter Product Description"></textarea>
    										        <!--<label for="floatingInput">Product Description</label>-->
    										         @error('description')
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
@endsection