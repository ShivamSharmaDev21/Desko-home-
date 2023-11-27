@extends('layout')

@section('body')

  <!-- Internal DataTables css-->
		<link href="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
<!--end header -->
<style>
  
</style>
	<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
                     <!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Order Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Orders</a></li>
									<li class="breadcrumb-item active" aria-current="page">Order Details</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
								
									<!--<a href="{{url('add_user')}}" class="btn btn-primary my-2 btn-icon-text">-->
									<!-- Add user-->
									<!--</a>-->
								</div>
							</div>
						</div>
						<!-- End Page Header -->

					<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Order Details</h6>
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
									     <!---->
									     <div class="view_coup"> 

    
 
 <div class="row detai_cutomer">
     @if(isset($address) && count($address)>0)
   <div class="col-lg-6">
       <h6>Customer Name - <span>{{$address[0]->fname.' '.$address[0]->lname}}</span></h6>
       <h6>Email address - <span>{{$address[0]->email}}</span></h6> 
       <h6>Phone - <span>{{$address[0]->mobile}}</span></h6>
        <h6>Address - </h6>
      <address>
        {{$address[0]->fname.' '.$address[0]->lname}},<br>
        {{$address[0]->address}},<br>
         {{$address[0]->city_name}}, {{$address[0]->state_name}},<br>
        {{$address[0]->country.' '. $address[0]->pincode}}
      </address>
      
   </div> 
   @endif
   <div class="col-lg-6 text-end" id="text-end">
       <!--<h6>Totat Amount - <span>₹</span><span>700</span></h6>-->
       @if(isset($address[0]->order_date))
       <h6>Order Date - <span>{{date('d-m-Y',strtotime($address[0]->order_date))}}</span></h6> 
       @endif
 </div>
 </div>

<div class="table-responsive">
<table id="datatable-buttons" class="table text-center table-bordered">
  <thead>
    <tr class="my-tabelst text-center">
       <th scope="col">S.No.</th>
       <th scope="col">Item Name</th>
       <th scope="col">Item Type</th>
       <th scope="col">Item Quantity</th>
       <th scope="col">Item Price</th>
       <!--<th scope="col">Discount%</th>-->
       <th scope="col">Total Price</th>
        <th scope="col">Reviews</th>
        <th scope="col">View Desk</th>
    </tr>
  </thead>
  <tbody>
     <?php $i=1; $sub_total=0; ?>
      @if((isset($prod_details) && count($prod_details)>0) || (isset($top_details) && count($top_details)>0) || (isset($bottom_details) && count($bottom_details)>0) || (isset($feature_details) && count($feature_details)>0))
    
     @if(isset($prod_details) && count($prod_details)>0)
      @foreach($prod_details as $d)
    <tr>
         <td class="w-5">{{$i}}</td>
         <td>{{$d->prod_name?$d->prod_name:'Custom Product'}}</td>
         <td>{{$d->iteam_type=="Smart_feature"?$d->feature_name:$d->iteam_type}}</td>
         <td>{{$d->quantity}}</td>
         <td>{{$d->offer_price}}</td>
         <!--<td>0</td>-->
         <td><span>₹</span>{{$d->iteam_total}}</td>
         <td><a href="{{url('/view_iteam_review/'.$d->iteam_type.'/'.$d->iteam_id.'/'.$d->user_id)}}" class="rewies"> Reviews</a></td>
      <td><a href="{{url('/public/capture_desk_image').'/'.$d->captured_desk_img}}">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $d->iteam_total; ?>
        @endforeach
         @endif
         
     @if(isset($top_details) && count($top_details)>0)
      @foreach($top_details as $t_d)
    <tr>
         <td class="w-5">{{$i}}</td>
         <td>{{$t_d->top_name.' '.'(Colour : '.$t_d->colour_name.', Material : '.$t_d->material_name.')'}}</td>
         <td>{{'Desk '.$t_d->iteam_type}}</td>
         <td>{{$t_d->quantity}}</td>
         <td>{{$t_d->offer_price}}</td>
         <!--<td>0</td>-->
         <td><span>₹</span>{{$t_d->iteam_total}}</td>
         <td><a href="{{url('/view_iteam_review/'.$t_d->iteam_type.'/'.$t_d->iteam_id.'/'.$t_d->user_id)}}" class="rewies"> Reviews</a></td>
      <td><a href="{{url('/public/capture_desk_image').'/'.$d->captured_desk_img}}">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $t_d->iteam_total; ?>
        @endforeach
         @endif
         
    @if(isset($bottom_details) && count($bottom_details)>0)
      @foreach($bottom_details as $b_d)
    <tr>
         <td class="w-5">{{$i}}</td>
         <td>{{$b_d->bottom_name.' '.'(Colour : '.$b_d->colour_name.', Material : '.$b_d->material_name.')'}}</td>
         <td>{{'Desk '.$b_d->iteam_type}}</td>
         <td>{{$b_d->quantity}}</td>
         <td>{{$b_d->offer_price}}</td>
         <!--<td>0</td>-->
         <td><span>₹</span>{{$b_d->iteam_total}}</td>
         <td><a href="{{url('/view_iteam_review/'.$b_d->iteam_type.'/'.$b_d->iteam_id.'/'.$b_d->user_id)}}" class="rewies"> Reviews</a></td>
 <td><a href="{{url('/public/capture_desk_image').'/'.$d->captured_desk_img}}">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $b_d->iteam_total; ?>
        @endforeach
         @endif

    @if(isset($feature_details) && count($feature_details)>0)
      @foreach($feature_details as $f_d)
    <tr>
         <td class="w-5">{{$i}}</td>
         <td>{{$f_d->feature_name}}</td>
         <td>{{$f_d->iteam_type}}</td>
         <td>{{$f_d->quantity}}</td>
         <td>{{$f_d->offer_price}}</td>
         <!--<td>0</td>-->
         <td><span>₹</span>{{$f_d->iteam_total}}</td>
         <td><a href="{{url('/view_iteam_review/'.$f_d->iteam_type.'/'.$f_d->iteam_id.'/'.$f_d->user_id)}}" class="rewies"> Reviews</a></td>
 <td><a href="{{url('/public/capture_desk_image').'/'.$d->captured_desk_img}}">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $f_d->iteam_total; ?>
        @endforeach
         @endif
     </tbody><tfoot>
         <tr class="detail_th">
         <th class="detail_th" colspan="5">Items Subtotal :</th>
         <th class="th_text"><span>₹</span> {{$sub_total}}          </th>
         </tr>
     </tfoot>
    @endif
 
      </table>
  </div>
 </div>
									     <!---->
										
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
		    function  change_status(order_id,str){
		      //  alert(user_id+'='+str);
		      $.ajax({
                url: "{{url('change_order_status')}}",
                type: 'post',
                data: {
                    str:str,
                    order_id:order_id,
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