

<?php $__env->startSection('body'); ?>

    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Add Smart Feature </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Smart Feature </a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Smart Feature </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_smart_feature')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   Smart Feature List
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
											<h6 class="main-content-label mb-1"> Add Smart Feature </h6>
											<p class="text-muted card-sub-title"></p>
										</div>
<div>
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>


</div>
										<form action="<?php echo e(url('store_smart_feature')); ?>" method="post" enctype="multipart/form-data" >
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
                                          	
											<div class="col-md-4 mb-2">
										    <div class="form-floating mb-3">
											 <input type="text" value="<?php echo e(old('name')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="feature_name">
										        <label for="floatingInput">Smart Feature Name</label>
										         <?php $__errorArgs = ['feature_name'];
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
											        <input type="file" accept="image/*"  class="form-control" id="floatingInput" placeholder="name@example.com" name="image">
										            <!--<label for="floatingInput"></label>-->
										             <?php $__errorArgs = ['image'];
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
											 <input type="text" value="<?php echo e(old('name')); ?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="price">
										        <label for="floatingInput">Smart Feature Price</label>
										         <?php $__errorArgs = ['price'];
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
										    <div class="col-sm-2 mb-2">
    										    <div class="form-floating mb-3">
    											    <input type="button" value="Add details" class="btn ripple btn-secondary pd-x-30 mg-r-5" id="add_details" >
    											</div>
										    </div>
										</div>
									

    <div class="row row-sm " id="show_div"style="display:none">
        <div class="row">
           	<div class="col-md-12 mb-2">
			    <div class="form-floating mb-3">
					 <input type="text"  name="description"  class="form-control" id="floatingInput" placeholder="name@example.com">
				        <label for="floatingInput">Description</label>
				         <?php $__errorArgs = ['feature_name'];
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
			 <!--<div id="tab_logic" class="after-add-more">-->
		<div class="row">
			 <div class="col-md-8 mb-2 after-add-more" id="tab_logic">
		        <div class="form-floating mb-3">
			        <input type="file" name="detail_image[]" accept="image/*"  class="form-control" id="floatingInput" placeholder="name@example.com" >
		            <label for="floatingInput"></label>
		             <?php $__errorArgs = ['image'];
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
			<div class="col-md-2">
                <div class="form-group change">
                    <label for="">&nbsp;</label><br/>
                    <a class="btn btn-success add-more">+ Add More</a>
                </div>
            </div>
        </div>
</div>  

<div class="more-feilds"></div>

							
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
		
				<!----------------Jquery---------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    <script>
    $(document).ready(function() {
         $(".add-more").click(function(){ 
    var elem = $("<input/>",{
        type: "file",
        name: "detail_image[]"
    });

    var removeLink = $("<span/>").html("Remove").click(function(){
        $(elem).remove();
        $(this).remove();
    });

     $(".more-feilds").append(elem).append(removeLink);
    });
});
    $( document ).ready(function() {
          $(document).on('click','#add_details',function(){
    			      $("#show_div").toggle();
                      
        });
   });
			   
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/admin/resources/views/add_features.blade.php ENDPATH**/ ?>