

<?php $__env->startSection('body'); ?>
<!--Login/signup Modal -->
<style>
    .badge-danger{
    margin-top: 20px;

}
.div-pad{
    padding-top: 15px;
}
.modal-content {
    width: 100%;
}
</style>
<div class="" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      </div>
      <div class="remove_alert">
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>
</div>
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
</script>
      <div class="modal-body">
      
	    
	    
	       <div class="form-modal">
    
   

    <div >
       <form method="post" action="<?php echo e(url('login-user')); ?>">
          <?php echo csrf_field(); ?>
            <labal>Email</labal>
            <input type="email" name="email" placeholder="Enter email " required/>
            <br>
            
            <labal>Password</labal>
            <input type="password" name="password" placeholder="Enter password" required/>
            <br>
           
            <button type="submit" class="btn login">login</button>
            <p>Yet not sign up?<a href="<?php echo e(url('register')); ?>">sign up</a></p>
            
        </form>
    </div>

    

</div>

	        
	    </div>
	    
	
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Understood</button>-->
      <!--</div>-->
    </div>
  </div>
<!-- End Login/signup Modal -->
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/devvsh/resources/views/login.blade.php ENDPATH**/ ?>