

<?php $__env->startSection('body'); ?>

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Add Banner </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Banners </a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Banner </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_banners')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   Banner List
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
											<h6 class="main-content-label mb-1"> Add Banner </h6>
											<p class="text-muted card-sub-title"></p>
										</div>
<div>
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>


</div>
										<form action="<?php echo e(url('store_banner')); ?>" method="post" enctype="multipart/form-data" >
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="<?php echo e(old('name')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="banner_name">
										        <label for="floatingInput">Banner Name</label>
										         <?php $__errorArgs = ['banner_name'];
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
											        <input type="file" accept="image/*"  class="form-control" id="floatingInput" placeholder="name@example.com" name="banner_image">
										            <!--<label for="floatingInput"></label>-->
										             <?php $__errorArgs = ['banner_image'];
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
											
									<!--	<div class="col-md-4  mb-2">-->
									<!--		<div class="form-floating mb-3">-->
									<!--		<input type="text" value="<?php echo e(old('email')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">-->
									<!--		 <label for="floatingInput">Email</label>-->
									<!--		  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
         <!--                                          <span class="error"><?php echo e($message); ?></span> -->
         <!--                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
									<!--		</div>-->
									<!--		</div>-->
									<!--</div>-->
									
									<!--<div class="row row-sm">-->
										
                                          	
									<!--		<div class="col-md-4 mb-2">-->
									<!--	    <div class="form-floating mb-3">-->
									<!--		 <input type="text" value="<?php echo e(old('mobile')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="mobile">-->
									<!--	        <label for="floatingInput">Mobile</label>-->
									<!--	         <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
         <!--                                          <span class="error"><?php echo e($message); ?></span> -->
         <!--                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
									<!--				</div>-->
									<!--		</div>-->
											
									<!--		<div class="col-md-4 mb-2">-->
									<!--	        <div class="form-floating mb-3">-->
									<!--		        <input type="text" value="<?php echo e(old('password')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">-->
									<!--	            <label for="floatingInput">Password</label>-->
									<!--	             <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
         <!--                                          <span class="error"><?php echo e($message); ?></span> -->
         <!--                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
									<!--			</div>-->
									<!--		</div>-->
											
									
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Add </button>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/assemble_desk/admin/resources/views/add_banner.blade.php ENDPATH**/ ?>