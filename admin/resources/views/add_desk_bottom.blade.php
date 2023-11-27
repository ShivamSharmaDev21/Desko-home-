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
						<h2 class="main-content-title tx-24 mg-b-5">Add Desk Bottom </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Desk Bottom </a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Desk Bottom </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="{{url('/view_desk_bottom')}}" class="btn btn-primary my-2 btn-icon-text">
									   Desk Bottom List
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
											<h6 class="main-content-label mb-1"> Add Desk Bottom </h6>
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
										<form action="{{url('store_desk_bottom')}}" method="post" enctype="multipart/form-data" >
										    @csrf
										<div class="row row-sm">
                                          	
										
											<div class="col-lg-4 mb-2">
                                                <select name="bottom_material"   class="selectpicker form-control" id="number-multiple" data-container="body" data-live-search="true" title="Select Bottom Material" data-hide-disabled="true" data-actions-box="true" data-virtual-scroll="false">
                                                    @foreach($materials as $mat)
            											 <option value="{{$mat->id}}">{{$mat->material_name}}</option>
            											 @endforeach
                                                 </select>
                                                <!--<span class="text-danger">* You can add  multiple colour</span>-->
                                                <!--<label for="floatingInput">Top Material</label>-->
                                                 @error('top_material')
                                                           <span class="error">{{$message}}</span> 
                                                 @enderror
                                            </div>
                                            <div class="col-md-4 mt-2 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="bottom_name" value="{{old('bottom_name')}}" required class="form-control" id="floatingInput" placeholder="Bottom name ">
    										        <label for="floatingInput">Bottom Name</label>
    										         @error('top_name')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
											<div class="col-md-4 mt-2 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="bottom_price" value="{{old('bottom_price')}}"  id="bottom_price" required class="form-control" id="floatingInput" placeholder="Bottom price">
    										        <label for="floatingInput">Bottom Price</label>
    										         @error('bottom_price')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
									 <div class="row">
                                        
                                             
											<div class="col-lg-5 mb-2">
                                                <select name="bottom_colour[]" class="form-control">
                                                     <option selected disabled>-select colour-</option>
                                                     @foreach($colours as $cal)
            											 <option value="{{$cal->id}}">{{$cal->colour_name}}</option>
            											 @endforeach
                                                 </select>
                                                <!--<span class="text-danger">* You can add  multiple colour</span>-->
                                                <!--<label for="floatingInput">Top Colour</label>-->
                                                 @error('bottom_colour')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
                                            </div>
                                            
										
											<div class="col-md-5 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="bottom_image[]"  class="form-control" id="floatingInput" >
										             <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
										            <label for="floatingInput">Bottom Image</label>
										             @error('bottom_image')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
												</div>
											</div>
											<div class="col-md-2 ">
                                                <button id="addRow" type="button"  class="btn btn-info">Add More</button>
                                    	    </div>
								</div>
								 <div id="newRow"></div>
								 
										
											<div class="col-md-12 ">
										        <div class="form-floating mb-3">
    											 
    										         <textarea name="bottom_description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter  Description">{{old('bottom_description')}}</textarea>
    										        <!--<label for="floatingInput">Product Description</label>-->
    										         @error('bottom_description')
                                                       <span class="error">{{$message}}</span> 
                                                     @enderror
											    </div>
											</div>
										
											
												
									
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Add </button>
												<a href="add_desk_bottom" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
 function my_fun(m_id){
     //alert(m_id);
      $.ajax({
                url: "{{url('get_bottom_price')}}",
                type: 'post',
                data: {
                   
                    m_id:m_id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success:function(res){
                    
                     if(res.status){
                         $('#bottom_price').val(res.body.material_price);
                        
                     }
                   // location.reload();
                }
		      });
 }

</script>
<script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var xyz="<?=base64_encode(json_encode($colours))?>";
            var colour=atob(xyz);
            var abc=$.parseJSON(colour);
                    
           
         //console.log(abc);
           var html=` <div class="row"> 
						<div class="col-lg-5 mb-2">
                            <select name="bottom_colour[]" class=" form-control" > <option selected disabled>-select colour-</option>`;
                              var opt='';
                                for(var i=0; i<abc.length; i++){
						opt+=	 `<option value="`+abc[i].id+`">`+abc[i].colour_name+`</option>`;
                                }
                                
                          html+=  opt;     
                        html+=    ` </select>
                           
                          
                            
               </div>
					
						<div class="col-md-5 mb-2">
					        <div class="form-floating mb-3">
						        <input type="file"  name="bottom_image[]"  class="form-control" id="floatingInput" >
					            
					            <label for="floatingInput">Bottom Image</label>
					           
							</div>
						</div>
						<div class="col-md-2 ">
                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                	    </div>
			</div>`;

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            // $(this).closest('#inputFormRow').remove();
            $(this).parent().parent().remove();
        });
    </script>
@endsection