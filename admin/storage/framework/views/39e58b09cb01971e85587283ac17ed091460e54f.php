

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
						<h2 class="main-content-title tx-24 mg-b-5">Edit Gallery Image </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Products </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Gallery Image </li> 
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
											<h6 class="main-content-label mb-1"> Edit Gallery Image </h6>
											<p class="text-muted card-sub-title"></p>
										</div>
<div class="remove_alert">
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>
</div>
                              
                                        <?php if(isset($galleries) && count($galleries)>0){ ?>
										<form action="<?php echo e(url('update_product_gallery')); ?>" method="post" enctype="multipart/form-data" >
										    <?php echo csrf_field(); ?>
										<div class="row row-sm">
										    <?php 
                                          	 for($i=0;$i<count($galleries);$i++) { ?>
											<div class="col-md-6 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="gallery_image_<?php echo e($i); ?>"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="hidden_gallery_image_<?php echo e($i); ?>"  value="<?php echo e($galleries[$i]->gallery_image); ?>"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="prod_id"  value="<?php echo e($galleries[0]->prod_id); ?>"  class="form-control" id="floatingInput" placeholder="Product image">
											        <input type="hidden"  name="img_count"  value="<?php echo e(count($galleries)); ?>"  class="form-control" id="floatingInput" placeholder="Product image">
										             <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
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
											<div class="col-md-3 mb-2">
										        <div class="form-floating mb-3">
											       <img src="<?php echo e(URL::asset('public/gallery_image/'.$galleries[$i]->gallery_image)); ?>" height="50px"width="50px">
												</div>
											</div>
												<div class="col-md-3 mb-2">
										        <div class="form-floating mb-3">
											       <a href="<?php echo e(url('/delete_gallery_image/'.$galleries[$i]->id.'/'.$galleries[$i]->prod_id)); ?>" class="btn ripple btn-outline-danger pd-x-30">Remove Image</a>
												</div>
											</div>
										<?php } ?>
										
									</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="<?php echo e(url('/view_products')); ?>" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
											</div>
										</div>
										</form>
										<?php }else{?>
										<script>window.location.href="<?php echo e(url('edit_product/'.$prod_id)); ?>";</script>
									
                                        <?php } ?>
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
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();
         },3000);
</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/admin/resources/views/change_gallery_image.blade.php ENDPATH**/ ?>