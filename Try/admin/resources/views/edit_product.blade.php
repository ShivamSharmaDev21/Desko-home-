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
						<h2 class="main-content-title tx-24 mg-b-5">Edit Product </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Products </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product </li> 
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
											<h6 class="main-content-label mb-1"> Edit Product </h6>
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
										<form action="{{url('update_product')}}" method="post" enctype="multipart/form-data" >
										     @method('PUT')
										    @csrf
										<div class="row row-sm">
 											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="prod_name" value="{{$product->prod_name}}" required class="form-control" id="floatingInput" placeholder="Product name">
    											    <input type="hidden"  name="prod_id" value="{{$product->prod_id}}"  class="form-control" id="floatingInput" placeholder="Product name">
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
            											 <option value="{{$cat->cat_id}}"<?php echo($cat->cat_id==$product->cat_id)?"selected":""?>>{{$cat->cat_name}}</option>
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
    											    <input type="number"  name="minimum_price" value="{{$product->offer_price}}" required class="form-control" id="floatingInput" placeholder="Minimum price">
    										        <label for="floatingInput">Min Price</label>
    										         @error('minimum_price')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="maximum_price" value="{{$product->mrp_price}}" required class="form-control" id="floatingInput" placeholder="Maximum price">
    										        <label for="floatingInput">Max Price</label>
    										         @error('maximum_price')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											
											
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="url" value="{{$product->url}}" required class="form-control" id="floatingInput" placeholder="Product Url">
    											    <!--<input type="hidden"  name="url" value="{{$product->prod_id}}"  class="form-control" id="floatingInput" placeholder="Product Url">-->
    										        <label for="floatingInput">Product Url</label>
    										        
											    </div>
											</div>
											
											
												<div class="col-md-6 mb-2">
												    
												</div>
											
											
											
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="feature_image"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="hidden_feature_image"  value="{{$product->feature_image}}"  class="form-control" id="floatingInput" placeholder="Product image">
										                <span class="text-danger">(accept-.png,.jpg,.jpeg)</span>
										            <label for="floatingInput">Feature Image</label>
										             @error('product_image')
                                                        <span class="error">{{$message}}</span> 
                                                    @enderror
												</div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											       <img src="{{URL::asset('public/feature_image/'.$product->feature_image)}}" height="50px"width="50px">
												</div>
											</div>
											
											
											<!--Image Above Custom button-->
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="is_customized_image"  class="form-control" id="is_customized_image" placeholder="Customized Image">
											        <input type="hidden"  name="is_customized_image_hidden"  value="{{$product->is_customized_imageis_customized_image}}"  class="form-control" id="is_customized_image_hidden" placeholder="Customized Image">
										                <span class="text-danger">(accept-.png,.jpg,.jpeg)</span>
										            <label for="floatingInput">Customized Image</label>
										             @error('product_image')
                                                        <span class="error">{{$message}}</span> 
                                                    @enderror
												</div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											       <img src="{{URL::asset('public/feature_image/'.$product->is_customized_image)}}"  height="50px"width="50px" >
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
											
											@if(isset($galleries) && count($galleries)>0)
											<div class="col-md-6 mb-2">
										      	 @foreach($galleries as $gal)
											       <img src="{{URL::asset('public/gallery_image/'.$gal->gallery_image)}}" height="50px"width="50px">&nbsp;&nbsp;
											    @endforeach
											    <a href="{{url('/change_gallery_image/'.$product->prod_id)}}" class="btn ripple btn-outline-danger pd-x-30">Change Image</a>
											</div>
											@endif
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
												@if(isset($galleries_image) && count($galleries_image)>0)
											<div class="col-md-6 mb-2">
										      	 @foreach($galleries_image as $gall)
											       <img src="{{URL::asset('public/gallery_image/'.$gall->gallery_image)}}" height="50px"width="50px">&nbsp;&nbsp;
											    @endforeach
											    <a href="{{url('/change_gallery_image/'.$product->prod_id)}}" class="btn ripple btn-outline-danger pd-x-30">Change Image</a>
											</div>
											@endif
 											<div class="col-md-12 mb-2" style="display: flex;">
											    <?php if(isset($product_galleries)){
											       
                                    			foreach($product_galleries as $prod_gal_imgs) {
                                    			?>
                                    				<div style="width: 91px; margin-right: 10px;" > <span class="product-gallery--media">
                                    				        <span  onclick="delete_image(<?php echo $prod_gal_imgs->id ?>)"  id="close-button-div" class="close">&times;</span>
                                    				        <img src="https://deskohome.com/admin/public/gallery_image/<?=$prod_gal_imgs->gallery_image?>">
                                    				        </span>
                            				</div>
                    				<?php } } ?>
											</div>
												<div class="col-md-12 mb-2">
										        <div class="form-floating mb-3">
    											    <!--<input type="text"  name="description" value="{{old('description')}}" required class="form-control" id="floatingInput" placeholder="Product description">-->
    										         <textarea name="description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter Product Description">{{$product->description}}</textarea>
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
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update</button>
												<a href="{{url('/view_products')}}" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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
    //   console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });
    

    function delete_image( id ){
        $.ajax({
            url: "{{url('delete_product_img')}}",
            type: 'post',
            data: {
                id:id,
                _token: "{{ csrf_token() }}"
            },
            dataType: 'json',
            success:function(res){
                location.reload();
            }
	      });

     }

</script>
@endsection