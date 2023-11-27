

<?php $__env->startSection('body'); ?>

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Material </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Materials </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Material </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_materials')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   Material List
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
											<h6 class="main-content-label mb-1"> Edit Material </h6>
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
										<form action="<?php echo e(url('update_material/'.$material->id)); ?>" method="post" >
										    <?php echo method_field('PUT'); ?>
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="<?php echo e($material->material_name); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="material_name">
										        <label for="floatingInput">Material Name</label>
										         <?php $__errorArgs = ['material_name'];
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
											<!--	<div class="col-md-4 mb-2">-->
										 <!--   <div class="form-floating mb-3">-->
											<!-- <input type="text" value="<?php echo e($material->material_price); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="material_price">-->
										 <!--       <label for="floatingInput">Material Price</label>-->
										 <!--        <?php $__errorArgs = ['material_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
           <!--                                        <span class="error"><?php echo e($message); ?></span> -->
           <!--                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
											<!--		</div>-->
											<!--</div>-->
											
										
											
									
									</div>
									
								
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="<?php echo e(url('/view_materials')); ?>" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cwsinnim/public_html/deskohome/admin/resources/views/edit_material.blade.php ENDPATH**/ ?>