

<?php $__env->startSection('body'); ?>

  <!-- Internal DataTables css-->
		<link href="<?php echo e(asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" />
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
										<div class="table-responsive">
											<table id="exportexample" class="table text-center table-hover border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th class="">S.no.</th>
														<th class="">Customer Name</th>
														<th class="">Order Number</th>
														<th class="">Total Cost</th>
														<th class="">Order Date</th>
														<th class="">installation</th>
														<th class="">View Detail</th>
														<th class="">Order status</th>
														<th class="">Track Order</th>
													
													
													</tr>
												</thead>
												<tbody>
												    <?php $i=1; ?>
												    <?php if(isset($orders) && count($orders)>0): ?>
											 <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
												<tr>
												<td><?php echo e($i); ?></td>
												<td><?php echo e($order->fname.' '.$order->lname); ?></td>
												<td><?php echo e($order->order_id); ?></td>
												<td><?php echo e($order->sub_total); ?></td>
												<td><?php echo e(date('d-m-Y',strtotime($order->created_at))); ?></td>
													<td><?php echo($order->installation==1)?'Yes':'No'?></td>
												<td><a href="<?php echo e(url('/view_order_details/'.$order->order_id)); ?>" class="btn "><i class="fa fa-eye padd_eyes" aria-hidden="true"></i></a></td>
											    <td>
											        <select onchange="change_status(<?php echo $order->order_id?>,this.value)">
											            <option  class="text-warning" value="0"<?php echo($order->order_status==0)?'selected':''?>>Pending</option>
											            <option class="text-info" value="1"<?php echo($order->order_status==1)?'selected':''?>>Shipped</option>
											            <option class="text-success" value="2"<?php echo($order->order_status==2)?'selected':''?>>Delivered</option>
											            <option class="text-danger" value="3"<?php echo($order->order_status==3)?'selected':''?>>Cancelled</option>
											       </select>
											   </td>
											    <td><a href="<?php echo e(url('/track_order/'.$order->order_id)); ?>" class="btn btn-primary2" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Track Order"><i class="fa fa-truck" aria-hidden="true"></i></a></td>
											    	
               
												</tr>
												<?php $i++; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
												</tbody>
											</table>
											<?php echo e($orders->links()); ?>

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
		<script src="<?php echo e(asset('public/assets/plugins/datatable/jquery.dataTables.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/jszip.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/pdfmake.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/vfs_fonts.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.html5.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.print.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.colVis.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/js/table-data.js')); ?>"></script>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/admin/resources/views/view_orders.blade.php ENDPATH**/ ?>