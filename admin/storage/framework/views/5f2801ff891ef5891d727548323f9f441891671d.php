

<?php $__env->startSection('body'); ?>

  <!-- Internal DataTables css-->
		<link href="<?php echo e(asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" />
<!--end header -->
<style>
  
</style>
	<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
                     <!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Order Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Orders</a></li>
									<li class="breadcrumb-item active" aria-current="page">Order Details</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
								
									<!--<a href="<?php echo e(url('add_user')); ?>" class="btn btn-primary my-2 btn-icon-text">-->
									<!-- Add user-->
									<!--</a>-->
								</div>
							</div>
						</div>
						<!-- End Page Header -->

					<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Order Details</h6>
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
										<div class="row row-sm">
									 <div class="col-lg-12 col-md-12">
									     <!---->
									     <div class="view_coup"> 

    
 
 <div class="row detai_cutomer">
     <?php if(isset($address) && count($address)>0): ?>
   <div class="col-lg-6">
       <h6>Customer Name - <span><?php echo e($address[0]->fname.' '.$address[0]->lname); ?></span></h6>
       <h6>Email address - <span><?php echo e($address[0]->email); ?></span></h6> 
       <h6>Phone - <span><?php echo e($address[0]->mobile); ?></span></h6>
        <h6>Address - </h6>
      <address>
        <?php echo e($address[0]->fname.' '.$address[0]->lname); ?>,<br>
        <?php echo e($address[0]->address); ?>,<br>
         <?php echo e($address[0]->city_name); ?>, <?php echo e($address[0]->state_name); ?>,<br>
        <?php echo e($address[0]->country.' '. $address[0]->pincode); ?>

      </address>
      
   </div> 
   <?php endif; ?>
   <div class="col-lg-6 text-end" id="text-end">
       <!--<h6>Totat Amount - <span>₹</span><span>700</span></h6>-->
       <?php if(isset($address[0]->order_date)): ?>
       <h6>Order Date - <span><?php echo e(date('d-m-Y',strtotime($address[0]->order_date))); ?></span></h6> 
       <?php endif; ?>
 </div>
 </div>

<div class="table-responsive">
<table id="datatable-buttons" class="table text-center table-bordered">
  <thead>
    <tr class="my-tabelst text-center">
       <th scope="col">S.No.</th>
       <th scope="col">Item Name</th>
       <th scope="col">Item Type</th>
       <th scope="col">Item Quantity</th>
       <th scope="col">Item Price</th>
       <!--<th scope="col">Discount%</th>-->
       <th scope="col">Total Price</th>
        <th scope="col">Reviews</th>
        <th scope="col">View Desk</th>
    </tr>
  </thead>
  <tbody>
     <?php $i=1; $sub_total=0; ?>
      <?php if((isset($prod_details) && count($prod_details)>0) || (isset($top_details) && count($top_details)>0) || (isset($bottom_details) && count($bottom_details)>0) || (isset($feature_details) && count($feature_details)>0)): ?>
    
     <?php if(isset($prod_details) && count($prod_details)>0): ?>
      <?php $__currentLoopData = $prod_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
         <td class="w-5"><?php echo e($i); ?></td>
         <td><?php echo e($d->prod_name?$d->prod_name:'Custom Product'); ?></td>
         <td><?php echo e($d->iteam_type=="Smart_feature"?$d->feature_name:$d->iteam_type); ?></td>
         <td><?php echo e($d->quantity); ?></td>
         <td><?php echo e($d->offer_price); ?></td>
         <!--<td>0</td>-->
         <td><span>₹</span><?php echo e($d->iteam_total); ?></td>
         <td><a href="<?php echo e(url('/view_iteam_review/'.$d->iteam_type.'/'.$d->iteam_id.'/'.$d->user_id)); ?>" class="rewies"> Reviews</a></td>
      <td><a href="<?php echo e(url('/public/capture_desk_image').'/'.$d->captured_desk_img); ?>">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $d->iteam_total; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endif; ?>
         
     <?php if(isset($top_details) && count($top_details)>0): ?>
      <?php $__currentLoopData = $top_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
         <td class="w-5"><?php echo e($i); ?></td>
         <td><?php echo e($t_d->top_name.' '.'(Colour : '.$t_d->colour_name.', Material : '.$t_d->material_name.')'); ?></td>
         <td><?php echo e('Desk '.$t_d->iteam_type); ?></td>
         <td><?php echo e($t_d->quantity); ?></td>
         <td><?php echo e($t_d->offer_price); ?></td>
         <!--<td>0</td>-->
         <td><span>₹</span><?php echo e($t_d->iteam_total); ?></td>
         <td><a href="<?php echo e(url('/view_iteam_review/'.$t_d->iteam_type.'/'.$t_d->iteam_id.'/'.$t_d->user_id)); ?>" class="rewies"> Reviews</a></td>
      <td><a href="<?php echo e(url('/public/capture_desk_image').'/'.$d->captured_desk_img); ?>">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $t_d->iteam_total; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endif; ?>
         
    <?php if(isset($bottom_details) && count($bottom_details)>0): ?>
      <?php $__currentLoopData = $bottom_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b_d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
         <td class="w-5"><?php echo e($i); ?></td>
         <td><?php echo e($b_d->bottom_name.' '.'(Colour : '.$b_d->colour_name.', Material : '.$b_d->material_name.')'); ?></td>
         <td><?php echo e('Desk '.$b_d->iteam_type); ?></td>
         <td><?php echo e($b_d->quantity); ?></td>
         <td><?php echo e($b_d->offer_price); ?></td>
         <!--<td>0</td>-->
         <td><span>₹</span><?php echo e($b_d->iteam_total); ?></td>
         <td><a href="<?php echo e(url('/view_iteam_review/'.$b_d->iteam_type.'/'.$b_d->iteam_id.'/'.$b_d->user_id)); ?>" class="rewies"> Reviews</a></td>
 <td><a href="<?php echo e(url('/public/capture_desk_image').'/'.$d->captured_desk_img); ?>">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $b_d->iteam_total; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endif; ?>

    <?php if(isset($feature_details) && count($feature_details)>0): ?>
      <?php $__currentLoopData = $feature_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
         <td class="w-5"><?php echo e($i); ?></td>
         <td><?php echo e($f_d->feature_name); ?></td>
         <td><?php echo e($f_d->iteam_type); ?></td>
         <td><?php echo e($f_d->quantity); ?></td>
         <td><?php echo e($f_d->offer_price); ?></td>
         <!--<td>0</td>-->
         <td><span>₹</span><?php echo e($f_d->iteam_total); ?></td>
         <td><a href="<?php echo e(url('/view_iteam_review/'.$f_d->iteam_type.'/'.$f_d->iteam_id.'/'.$f_d->user_id)); ?>" class="rewies"> Reviews</a></td>
 <td><a href="<?php echo e(url('/public/capture_desk_image').'/'.$d->captured_desk_img); ?>">View Desk</a></td>
     </tr>  
     <?php $i++; $sub_total=$sub_total + $f_d->iteam_total; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endif; ?>
     </tbody><tfoot>
         <tr class="detail_th">
         <th class="detail_th" colspan="5">Items Subtotal :</th>
         <th class="th_text"><span>₹</span> <?php echo e($sub_total); ?>          </th>
         </tr>
     </tfoot>
    <?php endif; ?>
 
      </table>
  </div>
 </div>
									     <!---->
										
									</div>		
									</div>
								</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
			<!-- End Main Content-->

		
        <!-- End Page -->

   
		<!-- Internal Data Table js -->
		<script src="<?php echo e(asset('public/assets/plugins/datatable/jquery.dataTables.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/jszip.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/pdfmake.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/vfs_fonts.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.html5.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.print.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/plugins/datatable/fileexport/buttons.colVis.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/js/table-data.js')); ?>"></script>
		<script>
		    function  change_status(order_id,str){
		      //  alert(user_id+'='+str);
		      $.ajax({
                url: "<?php echo e(url('change_order_status')); ?>",
                type: 'post',
                data: {
                    str:str,
                    order_id:order_id,
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success:function(res){
                    location.reload();
                }
		      });

		    }
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/admin/resources/views/view_order_details.blade.php ENDPATH**/ ?>