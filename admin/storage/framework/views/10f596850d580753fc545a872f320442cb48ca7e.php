

<?php $__env->startSection('body'); ?>
  <!-- Internal DataTables css-->
		<link href="<?php echo e(asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" />
<!--end header -->
	<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
                     <!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">User List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Users</a></li>
									<li class="breadcrumb-item active" aria-current="page">User List</li>
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
											<h6 class="main-content-label mb-1">User List</h6>
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
											<table id="exportexample" class="table text-center table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th class="">S.no.</th>
														<th class="">First Name</th>
														<th class="">Last Name</th>
														<th class="">Email</th>
														<th class="">Mobile</th>
														<th class="">Status</th>
														<th class=""  colspan="2">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $i=1; ?>
											 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
												<tr>
												<td><?php echo e($i); ?></td>
												<td><?php echo e($users->fname); ?></td>
												<td><?php echo e($users->lname); ?></td>
												<td><?php echo e($users->email); ?></td>
												<td><?php echo e($users->mobile); ?></td>
											    <td><select onchange="change_status(<?php echo $users->user_id?>,this.value)"><option value="1"<?php echo($users->status==1)?'selected':''?>>Active</option><option value="0"<?php echo($users->status==0)?'selected':''?>>In-active</option></select></td>
												<td><a href="<?php echo e(url('edit_user/'.$users->user_id)); ?>" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('delete_user/'.$users->user_id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</button>
                    </form>
                </td>
												</tr>
												<?php $i++; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
											</table>
												<?php echo e($users->links()); ?>

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
		    function  change_status(user_id,str){
		      //  alert(user_id+'='+str);
		      $.ajax({
                url: "<?php echo e(url('change_user_status')); ?>",
                type: 'post',
                data: {
                    str:str,
                    user_id:user_id,
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/admin/resources/views/view_users.blade.php ENDPATH**/ ?>