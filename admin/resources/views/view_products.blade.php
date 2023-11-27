@extends('layout')

@section('body')
  <!-- Internal DataTables css-->
		<link href="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
<!--end header -->
	<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
                     <!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Product List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Products</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product List</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
								
									<a href="{{url('add_product')}}" class="btn btn-primary my-2 btn-icon-text">
									 Add Product
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
											<h6 class="main-content-label mb-1">Product List</h6>
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
										<div class="row row-sm">
									 <div class="col-lg-12 col-md-12">
										<div class="table-responsive">
											<table id="exportexample" class="table text-center table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th class="">S.no.</th>
														<th class="">Product Name</th>
														<th class="">Image</th>
														<th class="">Offer Price</th>
														<th class="">MRP</th>
														<th class="">Status</th>
														<th class="">Customized</th>
														<!--<th class="">Image</th>-->
														<th class=""  colspan="2">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $i=1; ?>
											 @foreach($products as $product)
										
												<tr>
												<td>{{$i}}</td>
												<td>{{$product->prod_name}}</td>
												<td><img src="{{URL::asset('public/feature_image/'.$product->feature_image)}}" height="50px"width="50px"></td>
												<td>{{$product->offer_price}}</td>
												<td>{{$product->mrp_price}}</td>
											    <td>
											        <select onchange="change_status(<?php echo $product->prod_id?>,this.value)">
        											     <option value="1"<?php echo($product->status==1)?'selected':''?>> Only Back</option>
        											     <option value="0"<?php echo($product->status==0)?'selected':''?>>In-active</option>
        											     <option value="2"<?php echo($product->status==2)?'selected':''?>>Only Front</option>
        											     <option value="3"<?php echo($product->status==3)?'selected':''?>>Both</option>
        											</select>
											    </td>
											    <td>
											        <select onchange="change_status_customized(<?php echo $product->prod_id?>,this.value)">
        											     <option value="1"<?php echo($product->is_customized==1)?'selected':''?>>Yes</option>
        											     <option value="0"<?php echo($product->is_customized==0)?'selected':''?>>No</option>
        											</select>
											    </td>
											    
											    <!--<td>-->
											    <!--    <select onchange="change_status_image(),this.value)">-->
        							<!--				     <option value="1"<?php echo($product->is_viedo==1)?'selected':''?>>Old</option>-->
        							<!--				     <option value="2"<?php echo($product->is_viedo==2)?'selected':''?>>New</option>-->
        							<!--				     <option value="0"<?php echo($product->is_viedo==0)?'selected':''?>>None</option>-->
        							<!--				</select>-->
											    <!--</td>-->
											    
												<td><a href="{{url('edit_product/'.$product->prod_id)}}" class="btn btn-primary">Edit</a></td>
                                                <td>
                                                    <form action="{{url('delete_product/'.$product->prod_id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</button>
                                                    </form>
                                                </td>
												</tr>
												<?php $i++; ?>
                                            @endforeach
												</tbody>
											</table>
												{{ $products->links() }}
										</div>
									</div>		
									</div>
								</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
			<!-- End Main Content-->

		
        <!-- End Page -->

   
		<!-- Internal Data Table js -->
		<script src="{{asset('public/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('public/assets/js/table-data.js')}}"></script>
		<script>
		    function  change_status(prod_id,str){
		      //  alert(user_id+'='+str);
		      $.ajax({
                url: "{{url('change_product_status')}}",
                type: 'post',
                data: {
                    str:str,
                    prod_id:prod_id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success:function(res){
                    location.reload();
                }
		      });

		    }
		</script>
		
		<script>
		    function  change_status_customized(prod_id,str){
		      $.ajax({
                url: "{{url('change_status_customized')}}",
                type: 'post',
                data: {
                    str:str,
                    prod_id:prod_id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success:function(res){
                    location.reload();
                }
		      });

		    }
		</script>
		
		
			<script>
		  //  function  change_status_image(prod_id,str){
		  //    $.ajax({
    //             url: "{{url('change_status_image')}}",
    //             type: 'post',
    //             data: {
    //                 str:str,
    //                 prod_id:prod_id,
    //                 _token: "{{ csrf_token() }}"
    //             },
    //             dataType: 'json',
    //             success:function(res){
    //                 location.reload();
    //             }
		  //    });

		  //  }
		</script>
		
		
		
@endsection