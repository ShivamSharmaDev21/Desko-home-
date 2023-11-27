

<?php $__env->startSection('body'); ?>
<style>
    .form input:checked+label:after, form input:checked+label:after {
    content: "";
    width: 20px;
    height: 20px;
    line-height: 17px;
    /* border-color: rgb(40, 81, 180) rgb(40, 81, 180) transparent; */
    /* border-style: solid; */
    border-width: 0 35px 35px 0;
    display: none;
    position: absolute;
    top: 0;
    right: 0;
}
</style>
    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Allot Subjects </h2>
							<!--<ol class="breadcrumb">-->
							<!--	<li class="breadcrumb-item"><a href="#">View Users </a></li>-->
							<!--	<li class="breadcrumb-item active" aria-current="page">Allot Subjects </li> -->
							<!--	</ol>-->
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_users')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   User List
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
											<!--<h6 class="main-content-label mb-1"> Allot subjects </h6>-->
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
										<form action="<?php echo e(url('store_sub_allotment')); ?>" method="post" enctype="multipart/form-data">
										    <?php echo csrf_field(); ?>
										     <input type="hidden"   name="user_id" value="<?php echo e($user_id); ?>">
										   
                                             
                                            
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
										<div class="row row-sm">
									
										    	<?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    										    	<div class="col-md-4 mb-2">
        
            										     <input type="checkbox" id="<?php echo e($subject->sub_name); ?>"  name="subject[]" value="<?php echo e($subject->sub_id); ?>"<?php foreach($sub_alloted as $allot){if($subject->sub_id==$allot->sub_id){echo "checked";}else{echo "";}}?>>
                                                            <label for="<?php echo e($subject->sub_name); ?>"> <?php echo e($subject->sub_name); ?></label><br>
            										    
    										    	</div>
										    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
                                              
                                              
										 <!--   <div class="col-md-4 mb-2">-->
    							<!--			      <label for="cars">Choose subjects:</label>-->
    
           <!--                                     <select name="subject[]" id="cars" multiple>-->
           <!--                                   	<?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
           <!--                                   	 <option value="<?php echo e($subject->sub_id); ?>"><?php echo e($subject->sub_name); ?></option>-->
    										
    							<!--				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    							<!--				 </select>-->
											<!--</div> -->
											 
											
									
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/goodwill_academy/resources/views/subject_alloted_to_user.blade.php ENDPATH**/ ?>