

<?php $__env->startSection('body'); ?>

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Change password </h2>
							<!--<ol class="breadcrumb">-->
							<!--	<li class="breadcrumb-item"><a href="#">Users </a></li>-->
							<!--	<li class="breadcrumb-item active" aria-current="page">Add User </li> -->
							<!--	</ol>-->
							</div>
							<div class="d-flex">
								<!--<div class="justify-content-center"> -->
								
								<!--	<a href="<?php echo e(url('/view_users')); ?>" class="btn btn-primary my-2 btn-icon-text">-->
								<!--	   User List-->
								<!--	</a>-->
								<!--</div>-->
							</div>
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
										<form action="<?php echo e(url('update_password/'.$admin->id)); ?>" method="post" >
										    <?php echo csrf_field(); ?>
										    <?php echo method_field('PUT'); ?>
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="password"  value="<?php echo e(old('old_password')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="old_password">
										        <label for="floatingInput">Old Password</label></label>
										         <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <span class="error"><?php echo e($message); ?></span> 
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
													</div>
											</div>
											
											<div class="col-md-4 mb-2">
										        <div class="form-floating mb-3">
											        <input type="password" value="<?php echo e(old('new_password')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="new_password">
										            <label for="floatingInput">New Password</label>
										             <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <span class="error"><?php echo e($message); ?></span> 
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
												</div>
											</div>
											
										<div class="col-md-4  mb-2">
											<div class="form-floating mb-3">
											<input type="password" value="<?php echo e(old('re_entered_password')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="re_entered_password">
											 <label for="floatingInput">Re-Enter New Password</label>
											  <?php $__errorArgs = ['re_entered_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <span class="error"><?php echo e($message); ?></span> 
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div>
											</div>
									</div>
									
								
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Change Password </button>
												<button type="reset" class="btn ripple btn-outline-danger pd-x-30">Cancel</button>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/admin/resources/views//change_password.blade.php ENDPATH**/ ?>