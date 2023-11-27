

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
						<h2 class="main-content-title tx-24 mg-b-5">Edit Desk Top </h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Desk Top </a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Desk Top </li> 
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center"> 
								
									<a href="<?php echo e(url('/view_desk_top')); ?>" class="btn btn-primary my-2 btn-icon-text">
									   Desk Top List
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
											<h6 class="main-content-label mb-1"> Edit Desk Top </h6>
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
										<form action="<?php echo e(url('update_desk_top')); ?>" method="post" enctype="multipart/form-data" >
										    <?php echo csrf_field(); ?>
										     <?php echo method_field('PUT'); ?>
										<div class="row row-sm">
                                          	
										
											<div class="col-lg-4 mb-2">
                                                <select name="top_material"  class="selectpicker form-control" id="number-multiple" data-container="body" data-live-search="true" title="Select Top Material" data-hide-disabled="true" data-actions-box="true" data-virtual-scroll="false">
                                                    <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            											 <option value="<?php echo e($mat->id); ?>"<?=($mat->id==$desktop->top_material)?'selected':''?>><?php echo e($mat->material_name); ?></option>
            											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                                <!--<span class="text-danger">* You can add  multiple colour</span>-->
                                                <!--<label for="floatingInput">Top Material</label>-->
                                                 <?php $__errorArgs = ['top_material'];
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
                                            <div class="col-md-4 mt-2 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="text"  name="top_name" value="<?php echo e($desktop->top_name); ?>" required class="form-control" id="floatingInput" placeholder="Top name ">
    											    <input type="hidden"  name="top_id" value="<?php echo e($desktop->top_id); ?>" required class="form-control" id="floatingInput" placeholder="Top name ">
    										        <label for="floatingInput">Top Name</label>
    										         <?php $__errorArgs = ['top_name'];
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
											<div class="col-md-4 mt-2 mb-2">
										        <div class="form-floating mb-3">
    											    <input type="number"  name="top_price"value="<?php echo e($desktop->top_price); ?>"  id="top_price" required class="form-control" id="floatingInput" placeholder="Top price">
    										        <label for="floatingInput">Top Price</label>
    										         <?php $__errorArgs = ['top_price'];
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
											<?php if(isset($top_gall) && count($top_gall)>0){
											foreach($top_gall as $tpg){?>
											 <div class="row">
                                        
                                             
											<div class="col-lg-3 mb-2">
											     <div class="form-floating mb-3">
    											    <input type="text"  name="topclr" value="<?php echo e($tpg->colour_name); ?>"readonly="readonly"  class="form-control" id="floatingInput" placeholder="Top name ">
    										        <label for="floatingInput">Top Colour</label>
    										         <?php $__errorArgs = ['topclr'];
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
                                            
										
											<div class="col-md-2 mb-2">
										 <img src="<?php echo e(URL::asset('public/desk_top_image/'.$tpg->image)); ?>" height="50px"width="50px">
											</div>
											<div class="col-md-1 ">
                                                <a href="<?php echo e(url('remove_desk_topgall/'.$desktop->top_id.'/'.$tpg->id)); ?>" id="remove_image" type="button"  class="btn btn-danger">Remove</a>
                                    	    </div>
								</div>
								<?php } } ?>
									 <div class="row">
                                        
                                             
											<div class="col-lg-5 mb-2">
                                                <select name="top_colour[]" class="form-control">
                                                     <option selected disabled>-select colour-</option>
                                                     <?php $__currentLoopData = $colours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            											 <option value="<?php echo e($cal->id); ?>"><?php echo e($cal->colour_name); ?></option>
            											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                                <!--<span class="text-danger">* You can add  multiple colour</span>-->
                                                <!--<label for="floatingInput">Top Colour</label>-->
                                                 <?php $__errorArgs = ['top_colour'];
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
                                            
										
											<div class="col-md-5 mb-2">
										        <div class="form-floating mb-3">
											        <input type="file"  name="top_image[]"  class="form-control" id="floatingInput" >
										             <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
										            <label for="floatingInput">Top Image</label>
										             <?php $__errorArgs = ['top_image'];
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
											<div class="col-md-2 ">
                                                <button id="addRow" type="button"  class="btn btn-info">Add More</button>
                                    	    </div>
								</div>
								 <div id="newRow"></div>
								 
										
											<div class="col-md-12 ">
										        <div class="form-floating mb-3">
    											 
    										         <textarea name="top_description" class="form-control" id="editor" rows="3" style="height: 100px;" placeholder="Enter  Description"><?php echo e($desktop->top_description); ?></textarea>
    										        <!--<label for="floatingInput">Product Description</label>-->
    										         <?php $__errorArgs = ['top_description'];
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
												<button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update </button>
												<a href="<?php echo e(url('/view_desk_top')); ?>" class="btn ripple btn-outline-danger pd-x-30">Cancel</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
 function my_fun(m_id){
     //alert(m_id);
      $.ajax({
                url: "<?php echo e(url('get_top_price')); ?>",
                type: 'post',
                data: {
                   
                    m_id:m_id,
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success:function(res){
                    
                     if(res.status){
                         $('#top_price').val(res.body.material_price);
                        
                     }
                   // location.reload();
                }
		      });
 }

</script>
 <script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var xyz="<?=base64_encode(json_encode($colours))?>";
            var colour=atob(xyz);
            var abc=$.parseJSON(colour);
                    
           
         //console.log(abc);
           var html=` <div class="row"> 
						<div class="col-lg-5 mb-2">
                            <select name="top_colour[]" class=" form-control" > <option selected disabled>-select colour-</option>`;
                              var opt='';
                                for(var i=0; i<abc.length; i++){
						opt+=	 `<option value="`+abc[i].id+`">`+abc[i].colour_name+`</option>`;
                                }
                                
                          html+=  opt;     
                        html+=    ` </select>
                           
                          
                            
               </div>
					
						<div class="col-md-5 mb-2">
					        <div class="form-floating mb-3">
						        <input type="file"  name="top_image[]"  class="form-control" id="floatingInput" >
					            
					            <label for="floatingInput">Top Image</label>
					           
							</div>
						</div>
						<div class="col-md-2 ">
                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                	    </div>
			</div>`;

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            // $(this).closest('#inputFormRow').remove();
            $(this).parent().parent().remove();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cwsinnim/public_html/deskohome/admin/resources/views/edit_desk_top.blade.php ENDPATH**/ ?>