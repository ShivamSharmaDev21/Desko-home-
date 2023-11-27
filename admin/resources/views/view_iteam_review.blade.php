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
								<h2 class="main-content-title tx-24 mg-b-5">Reviews </h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Orders</a></li>
									<li class="breadcrumb-item active" aria-current="page">Reviews </li>
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
											<h6 class="main-content-label mb-1">Reviews</h6>
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
											<table id="exportexample" class="table text-center table-hover border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th class="">S.no.</th>
														<th class="">Customer Name</th>
														<th class="">Comment</th>
														<th class="">Submitted on</th>
														<th class="">status</th>
													</tr>
												</thead>
												<tbody>
												    <?php $i=1; ?>
												    @if(isset($reviews) && count($reviews)>0)
											 @foreach($reviews as $review)
										
												<tr>
												<td>{{$i}}</td>
												<td>{{$review->fname.' '.$review->lname}}</td>
												<td>{{substr($review->comment,0,25)}}... <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   <i class="fa fa-eye padd_eyes" aria-hidden="true"></i>
  </button></td>
  
												<td>{{date('d-m-Y',strtotime($review->created_at))}}</td>
											    <td>
											        <select onchange="change_status(<?php echo $review->review_id?>,this.value)">
											            <option  class="text-danger" value="0"<?php echo($review->status==0)?'selected':''?>>In-active</option>
											            <option class="text-success" value="1"<?php echo($review->status==1)?'selected':''?>>Active</option>
											           
											       </select>
											   </td>
											  
											    	
               
												</tr>
																 <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Comment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         {{$review->comment}}
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
												<?php $i++; ?>
                                            @endforeach
                                            @endif
												</tbody>
											</table>
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
		    function  change_status(review_id,str){
		      //  alert(user_id+'='+str);
		      $.ajax({
                url: "{{url('change_review_status')}}",
                type: 'post',
                data: {
                    str:str,
                    review_id:review_id,
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