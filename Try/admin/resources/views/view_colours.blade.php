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
								<h2 class="main-content-title tx-24 mg-b-5">Colour List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Colours</a></li>
									<li class="breadcrumb-item active" aria-current="page">Colour List</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
								
									<a href="{{url('add_colour')}}" class="btn btn-primary my-2 btn-icon-text">
									 Add Colour
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
											<h6 class="main-content-label mb-1">Colour List</h6>
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
														<th class="">Colour Name</th>
														<th class="">Colour Value</th>
														<!--<th class="">Colour </th>-->
														<!--<th class="">Colour Price</th>-->
														<th class=""  colspan="2">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $i=1; ?>
											 @foreach($colours as $col)
										
												<tr>
												<td>{{$i}}</td>
												<td>{{$col->colour_name}}</td>
												<td>{{$col->colour_value}}</td>
												<!--<td><span style="width:29px;height:36px;background-color:{{$col->colour_value}}"></span></td>-->
												<!--<td>{{$col->colour_price}}</td>-->
												<td><a href="{{url('edit_colour/'.$col->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{url('delete_colour/'.$col->id)}}" method="POST">
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
@endsection