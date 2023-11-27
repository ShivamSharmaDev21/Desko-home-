

<?php $__env->startSection('body'); ?>

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Admin Profile </h2>
							<!--<ol class="breadcrumb">-->
							<!--	<li class="breadcrumb-item"><a href="#">Users </a></li>-->
							<!--	<li class="breadcrumb-item active" aria-current="page">Add User </li> -->
							<!--</ol>-->
					</div>
							<!--<div class="d-flex">-->
							<!--	<div class="justify-content-center"> -->
								
							<!--		<a href="<?php echo e(url('/view_users')); ?>" class="btn btn-primary my-2 btn-icon-text">-->
							<!--		   User List-->
							<!--		</a>-->
							<!--	</div>-->
							<!--</div>-->
						</div>
   
						<!-- End Page Header -->
	           <div class="row row-sm"> 
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<!--<div>-->
										<!--	<h6 class="main-content-label mb-1"> Add User </h6>-->
										<!--	<p class="text-muted card-sub-title"></p>-->
										<!--</div>-->
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
										<form action="<?php echo e(url('store_user')); ?>" method="post" >
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
                                          	
										<tr>
										    <td>Name : </td><td><?php echo e($admin->name); ?></td>
										</tr><br><br>
											<tr>
										    <td>Email : </td><td><?php echo e($admin->email); ?></td>
										</tr><br><br>
											<tr>
										    <td>Mobile : </td><td><?php echo e($admin->mobile); ?></td>
										</tr><br><br>
											
										
									
									</div>
									
								
										<div class="row row-sm">
											<div class="col-md-6">
											    <a class="btn ripple btn-primary pd-x-30 mg-r-5" href="<?php echo e(url('edit_admin_profile/'.$admin->id)); ?>">Edit Profile</a>
												<!--<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Add </button>-->
												<!--<button type="reset" class="btn ripple btn-outline-danger pd-x-30">Cancel</button>-->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/admin/resources/views//view_profile.blade.php ENDPATH**/ ?>