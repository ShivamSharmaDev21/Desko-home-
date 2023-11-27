

<?php $__env->startSection('body'); ?>
<style>
.form-floating>.form-control:not(:placeholder-shown)~label {

  
    background: white;
 
    padding: 5px 0px !important;
    height: 25px;
 

}
.ck.ck-editor__editable_inline[dir=ltr] {
    text-align: left;
    height: 150px;
}
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <div class="main-content side-content pt-0">
		<div class="container-fluid">
		<div class="inner-body">
             <!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Edit Product </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Products </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_products')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   Product List
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
											<h6 class="main-content-label mb-1"> Edit Product </h6>
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
										<form action="<?php echo e(url('update_product')); ?>" method="post" enctype="multipart/form-data" >
										     <?php echo method_field('PUT'); ?>
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
                                          	
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="prod_name" value="<?php echo e($product->prod_name); ?>" required class="form-control" id="floatingInput" placeholder="Product name">
    											    <input type="hidden"  name="prod_id" value="<?php echo e($product->prod_id); ?>"  class="form-control" id="floatingInput" placeholder="Product name">
    										        <label for="floatingInput">Product Name</label>
    										         <?php $__errorArgs = ['prod_name'];
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
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
        											 <select name="category"  required class="form-control" id="floatingInput">
            											 <option selected disabled>--Select Category--</option>
            											 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            											 <option value="<?php echo e($cat->cat_id); ?>"<?php echo($cat->cat_id==$product->cat_id)?"selected":""?>><?php echo e($cat->cat_name); ?></option>
            											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        											 </select>
        										        <label for="floatingInput">Category</label>
        										         <?php $__errorArgs = ['category'];
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
											
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="minimum_price" value="<?php echo e($product->offer_price); ?>" required class="form-control" id="floatingInput" placeholder="Minimum price">
    										        <label for="floatingInput">Min Price</label>
    										         <?php $__errorArgs = ['minimum_price'];
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
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="maximum_price" value="<?php echo e($product->mrp_price); ?>" required class="form-control" id="floatingInput" placeholder="Maximum price">
    										        <label for="floatingInput">Max Price</label>
    										         <?php $__errorArgs = ['maximum_price'];
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
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="feature_image"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="hidden_feature_image"  value="<?php echo e($product->feature_image); ?>"  class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">(accept-.png,.jpg,.jpeg)</span>
										            <label for="floatingInput">Feature Image</label>
										             <?php $__errorArgs = ['product_image'];
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
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											       <img src="<?php echo e(URL::asset('public/feature_image/'.$product->feature_image)); ?>" height="50px"width="50px">
												</div>
											</div>
										
												<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image[]"  multiple class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">You can add your multiple product Table image</span>
										            <label for="floatingInput">Table Image</label>
										             <?php $__errorArgs = ['gallery_image'];
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
											
											<?php if(isset($galleries) && count($galleries)>0): ?>
											<div class="col-md-6 mb-2">
										      	 <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											       <img src="<?php echo e(URL::asset('public/gallery_image/'.$gal->gallery_image)); ?>" height="50px"width="50px">&nbsp;&nbsp;
											    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											    <a href="<?php echo e(url('/change_gallery_image/'.$product->prod_id)); ?>" class="btn ripple btn-outline-danger pd-x-30">Change Image</a>
											</div>
											<?php endif; ?>
												<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image_item[]"  multiple class="form-control" id="floatingInput" placeholder="Product image">
										             <span class="text-danger">You can add your multiple product gallery image</span>
										            <label for="floatingInput">Gallery Image</label>
										             <?php $__errorArgs = ['gallery_image'];
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
												<?php if(isset($galleries_image) && count($galleries_image)>0): ?>
											<div class="col-md-6 mb-2">
										      	 <?php $__currentLoopData = $galleries_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											       <img src="<?php echo e(URL::asset('public/gallery_image/'.$gall->gallery_image)); ?>" height="50px"width="50px">&nbsp;&nbsp;
											    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											    <a href="<?php echo e(url('/change_gallery_image/'.$product->prod_id)); ?>" class="btn ripple btn-outline-danger pd-x-30">Change Image</a>
											</div>
											<?php endif; ?>
												<div class="col-md-12 mb-2">
										        <div class="form-floating mb-3">
    											    <!--<input type="text"  name="description" value="<?php echo e(old('description')); ?>" required class="form-control" id="floatingInput" placeholder="Product description">-->
    										         <textarea name="description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter Product Description"><?php echo e($product->description); ?></textarea>
    										        <!--<label for="floatingInput">Product Description</label>-->
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
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update</button>
												<a href="<?php echo e(url('/view_products')); ?>" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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
<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cwsinnim/public_html/deskohome/admin/resources/views/edit_product.blade.php ENDPATH**/ ?>