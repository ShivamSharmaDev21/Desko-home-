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
						<h2 class="main-content-title tx-24 mg-b-5">Edit Smart Feature </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Smart Feature </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Smart Feature </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="{{url('/view_smart_feature')}}" class="btn btn-primary my-2 btn-icon-text">
									   Smart Feature List
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
											<h6 class="main-content-label mb-1"> Edit Smart Feature </h6>
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
										<form action="{{url('update_smart_feature')}}" method="post" enctype="multipart/form-data" >
										     @method('PUT')
										    @csrf
										<div class="row row-sm">
                                          	
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="feature_name" value="{{$smart_feature->feature_name}}" required class="form-control" id="floatingInput" placeholder="Product name">
    											    <input type="hidden"  name="smart_feature_id" value="{{$smart_feature->id}}"  class="form-control" id="floatingInput" placeholder="Product name">
    										        <label for="floatingInput">Smart Feature Name</label>
    										         @error('feature_name')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>

											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="price" value="{{$smart_feature->price}}" required class="form-control" id="floatingInput" placeholder="Minimum price">
    										        <label for="floatingInput">Price</label>
    										         @error('price')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
										
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="feature_image"  class="form-control" id="floatingInput">
											        <input type="hidden"  name="hidden_feature_image"  value="{{$smart_feature->image}}"  class="form-control" id="floatingInput">
										             <span class="text-danger">(accept-.png,.jpg,.jpeg)</span>
										            <label for="floatingInput">Smart Feature Image</label>
										             @error('product_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											       <img src="{{URL::asset('public/smart_feature_image/'.$smart_feature->image)}}" height="50px"width="50px">
												</div>
											</div>
											
										
											@if(isset($galleries) && count($galleries)>0)
												<div class="col-md-6 mb-2">
    										        <div class="form-floating mb-3">
    											        <input type="file"  name="gallery_image[]"  multiple class="form-control" id="floatingInput" placeholder="Product image">
    										             <span class="text-danger">You can add your multiple Smart feature gallery images</span>
    										            <label for="floatingInput">Gallery Image</label>
    										             @error('gallery_image')
                                                       <span class="error">{{$message}}</span> 
                                                  @enderror
    												</div>
											</div>
										
											<div class="col-md-6 mb-2">
										      	 @foreach($galleries as $gal)
											       <img src="{{URL::asset('public/smart_feature_gallery_image/'.$gal->smart_gallery_image)}}" height="50px"width="50px">&nbsp;&nbsp;
											    @endforeach
											    <a href="{{url('/change_smart_feature_gallery_image/'.$smart_feature->id)}}" class="btn ripple btn-outline-danger pd-x-30">Change Image</a>
											</div>
										
												<div class="col-md-12 mb-2">
										        <div class="form-floating mb-3">
    											    <!--<input type="text"  name="description" value="{{old('description')}}" required class="form-control" id="floatingInput" placeholder="Product description">-->
    										         <textarea name="description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter Product Description">{{$smart_feature->description}}</textarea>
    										        <!--<label for="floatingInput">Product Description</label>-->
    										         @error('description')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											@else
												<!---->
											<div class="row row-sm " id="show_div"style="display:none">
												<div class="col-md-12 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image[]"  multiple class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">*You can add multiple smart feature gallery images</span>
										            <label for="floatingInput">Smart Feature Gallery Image</label>
										             @error('gallery_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											
												<div class="col-md-12 mb-2">
										        <div class="form-floating mb-3">
    											   
    										         <textarea name="description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter Smart feature description"></textarea>
    										      
    										        <!--<label for="floatingInput">Product Description</label>-->
    										         @error('description')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
										</div>
											<!---->
											<div class="row row-sm">
										    <div class="col-sm-2 mb-2">
    										    <div class="form-floating mb-3">
    											    <input type="button" value="Add Extra details" class="btn ripple btn-secondary pd-x-30 mg-r-5" id="add_details" >
    											</div>
										    </div>
										</div>
											@endif
											
											<div class="col-12 ">
                                                <div class="form-group">
                                                    <label>Short Note</label>
                                                    <textarea class="form-control whichKey" name="short_note" rows="5" id="short_note" placeholder="Enter the short note " data-phrasetype="objective">{{ !empty($smart_feature->short_note ) ? $smart_feature->short_note : ''}}</textarea>
                                                 </div>
                                            </div>
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update</button>
												<a href="{{url('/view_smart_feature')}}" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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
	<!----------------Jquery---------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    <script>
    $(document).ready(function() {
         $(".add-more").click(function(){ 
    var elem = $("<input/>",{
        type: "file",
        name: "detail_image[]"
    });

    var removeLink = $("<span/>").html("Remove").click(function(){
        $(elem).remove();
        $(this).remove();
    });

     $(".more-feilds").append(elem).append(removeLink);
    });
});
    $( document ).ready(function() {
          $(document).on('click','#add_details',function(){
    			      $("#show_div").toggle();
                      
        });
   });
			   
	</script>
@endsection