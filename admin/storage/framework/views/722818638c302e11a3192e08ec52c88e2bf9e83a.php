

<?php $__env->startSection('body'); ?>

  <!-- Internal DataTables css-->
		<!--<link href="<?php echo e(asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />-->
		<!--<link href="<?php echo e(asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')); ?>" rel="stylesheet" />-->
		<!--<link href="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" />-->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
	    
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
								<h2 class="main-content-title tx-24 mg-b-5">Order List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Orders</a></li>
									<li class="breadcrumb-item active" aria-current="page">Order List</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
								
									<!--<a href="<?php echo e(url('add_user')); ?>" class="btn btn-primary my-2 btn-icon-text">-->
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
											<h6 class="main-content-label mb-1">Order List</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
                                        <div class="remove_alert">
                                         <?php if(Session::get('success')): ?>
                                                <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
                                            <?php endif; ?>
                                            <?php if(Session::get('fail')): ?>
                                                <h6 class="alert alert-success"><?php echo e(Session::get('fail')); ?></h6>
                                            <?php endif; ?>
                                        </div>
                                        <script>
                                            setTimeout(function(){
                                               $('.remove_alert').fadeOut();;
                                                 },3000);
                                        </script>
										<div class="row row-sm">
									 <div class="col-lg-12 col-md-12">
										<div class="table-responsive" >
											<table id="example" class="table text-center table-hover border-t0 key-buttons text-nowrap w-100 display nowrap" >
										
												<thead>
													<tr>
														<th class="">S.no.</th>
														<th class="">Customer Name</th>
														<th class="">Order Number</th>
														<th class="">Total Cost</th>
														<th class="">Transection Id</th>
														<th class="">Order Date</th>
														<th class="">installation</th>
														<th class="">View Detail</th>
														<th class="">Order status</th>
														<th class="">Track Order</th>
														<th class="">GSTIN</th>
														<th class="">Company</th>
														<th class="">Included</th>
														<th class="">Address</th>
													
													
													</tr>
												</thead>
												<tbody>
												    <?php $i=1; ?>
												    <?php if(isset($orders) && count($orders)>0): ?>
											 <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 												<tr>
												<td><?php echo e($i); ?></td>
												<td><?php echo e($order['order_details']->fname.' '.$order['order_details']->lname); ?></td>
												<td><?php echo e($order['order_details']->order_id); ?></td>
												<td><?php echo e($order['order_details']->sub_total); ?></td>
												<td><?php echo e($order['order_details']->payment_id); ?></td>
												<td><?php echo e(date('d-m-Y',strtotime($order['order_details']->created_at))); ?></td>
													<td><?php echo($order['order_details']->installation==1)?'Yes':'No'?></td>
												<td><a href="<?php echo e(url('/view_order_details/'.$order['order_details']->order_id)); ?>" class="btn "><i class="fa fa-eye padd_eyes" aria-hidden="true"></i></a></td>
											    <td>
											         <?php echo($order['order_details']->order_status==0)?'Pending':''?>
											        <?php echo($order['order_details']->order_status==1)?'Shipped':''?>
											        <?php echo($order['order_details']->order_status==2)?'Delivered':''?>
											        <?php echo($order['order_details']->order_status==3)?'Cancelled':''?>
											        <?php echo($order['order_details']->order_status==4)?'Failed':''?>
											       <!-- <select onchange="change_status(<?php echo $order['order_details']->order_id?>,this.value)">-->
											       <!--     <option  class="text-warning" value="0"<?php echo($order['order_details']->order_status==0)?'selected':''?>>Pending</option>-->
											       <!--     <option class="text-info" value="1"<?php echo($order['order_details']->order_status==1)?'selected':''?>>Shipped</option>-->
											       <!--     <option class="text-success" value="2"<?php echo($order['order_details']->order_status==2)?'selected':''?>>Delivered</option>-->
											       <!--     <option class="text-danger" value="3"<?php echo($order['order_details']->order_status==3)?'selected':''?>>Cancelled</option>-->
											       <!--     <option disabled class="text-danger" value="4"<?php echo($order['order_details']->order_status==4)?'selected':''?>>Failed</option>-->
											       <!--</select>-->
											   </td>
											    <td><a href="<?php echo e(url('/track_order/'.$order['order_details']->order_id)); ?>" class="btn btn-primary2" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Track Order"><i class="fa fa-truck" aria-hidden="true"></i></a></td>
											    		<td><?php echo e($order['order_details']->gstin); ?></td>
											    		<td><?php echo e($order['order_details']->comp_name); ?></td>
											    		<td><?php echo e($order['top']); ?></td>
               	<td><?php echo e($order['order_details']->address.' Email -'.$order['order_details']->email.' contact -'.$order['order_details']->mobile.'State - '.$order['order_details']->state_name.'City - '.$order['order_details']->city_name . ' - ' . $order['order_details']->pincode); ?></td>
												</tr>
												<?php $i++; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
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

   
		 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>

		<script>
		    function  change_status(order_id,str){
		      //  alert(user_id+'='+str);
		      $.ajax({
                url: "<?php echo e(url('change_order_status')); ?>",
                type: 'post',
                data: {
                    str:str,
                    order_id:order_id,
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success:function(res){
                    location.reload();
                }
		      });

		    }
		</script>
		
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/admin/resources/views/view_orders.blade.php ENDPATH**/ ?>