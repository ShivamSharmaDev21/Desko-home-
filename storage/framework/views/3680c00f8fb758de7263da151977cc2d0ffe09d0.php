

<?php $__env->startSection('body'); ?>

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Video </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Videos </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Video </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_videos')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   Video List
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
											<h6 class="main-content-label mb-1"> Edit Video </h6>
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
										<form action="<?php echo e(url('update_video/'.$video->id)); ?>" method="post" >
										    <?php echo method_field('PUT'); ?>
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="<?php echo e($video->vdo_title); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="title">
										        <label for="floatingInput">Video Title</label>
										         <?php $__errorArgs = ['title'];
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
											        <!--<input type="text" value="<?php echo e(old('lname')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="lname">-->
										            <select name="subject" class="form-control" id="floatingInput">
										                <option value="">Select Subject</option>
										                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										                <option value="<?php echo e($subject->sub_id); ?>"<?php echo e(($subject->sub_id==$video->sub_id)?'selected':''); ?>><?php echo e($subject->sub_name); ?></option>
										                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										            </select>
										            <label for="floatingInput">Select Subject</label>
										             <?php $__errorArgs = ['subject'];
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
											<input type="text" value="<?php echo e($video->vdo_file_name); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="url">
											 <label for="floatingInput">Youtube Video URL</label>
											  <?php $__errorArgs = ['url'];
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
									
									<div class="row row-sm-12">
										
                                          	
											<div class="col-md-12 mb-2">
										    <div class="form-floating mb-3">
											 <!--<input type="text" value="<?php echo e(old('description')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="description">-->
										        <textarea name="description" class="form-control" id="floatingInput" ><?php echo e($video->description); ?></textarea>
										        <label for="floatingInput">Description</label>
										         <?php $__errorArgs = ['description'];
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
											
											<!--<div class="col-md-4 mb-2">-->
										 <!--       <div class="form-floating mb-3">-->
											<!--        <input type="text" value="<?php echo e(old('password')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">-->
										 <!--           <label for="floatingInput">Password</label>-->
										 <!--            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
           <!--                                        <span class="error"><?php echo e($message); ?></span> -->
           <!--                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
											<!--	</div>-->
											<!--</div>-->
											
									
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/goodwill_academy/resources/views/edit_video.blade.php ENDPATH**/ ?>