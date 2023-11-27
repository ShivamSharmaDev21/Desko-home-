

<?php $__env->startSection('body'); ?>
<style>
  body {
	background: #eee;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}
.badge-danger{
    margin-top: 20px;
    margin-left: -5px;
}

.div-pad{
    padding-top: 15px;
}
.content a{
    float:right;
}
.clearfix {
  content: "";
  display: table;
  clear: both;	
}

#site-header, #site-footer {
	background: #fff;
}

#site-header {
	margin: 0 0 30px 0;
}

#site-header h1 {
	font-size: 31px;
	font-weight: 300;
	padding: 40px 0;
	position: relative;
	margin: 0;
	color: #000;
}

a {
	color: #000;
	text-decoration: none;

	-webkit-transition: color .2s linear;
	-moz-transition: color .2s linear;
	-ms-transition: color .2s linear;
	-o-transition: color .2s linear;
	transition: color .2s linear;
}

a:hover {
	color: #53b5aa;
}

#site-header h1 span {
	color: #53b5aa;
}

#site-header h1 span.last-span {
	background: #fff;
	padding-right: 150px;
	position: absolute;
	left: 217px;

	-webkit-transition: all .2s linear;
	-moz-transition: all .2s linear;
	-ms-transition: all .2s linear;
	-o-transition: all .2s linear;
	transition: all .2s linear;
}

#site-header h1:hover span.last-span, #site-header h1 span.is-open {
	left: 363px;
}

#site-header h1 em {
	font-size: 16px;
	font-style: normal;
	vertical-align: middle;
}

.container {

	margin: 0 auto;
	width: 980px;
}

#cart {
	width: 100%;
}

#cart h1 {
	font-weight: 400;
	padding-right: 50px;
}

#cart a {
	margin-top:65px;
	margin-left: 100px;
	text-decoration: none;

	-webkit-transition: color .2s linear;
	-moz-transition: color .2s linear;
	-ms-transition: color .2s linear;
	-o-transition: color .2s linear;
	transition: color .2s linear;
}

#cart a:hover {
	color: #000;
}

.product.removed {
	margin-left: 980px !important;
	opacity: 0;
}

.product {
	border: 1px solid #eee;
	margin: 20px 0;
	width: 100%;
	height: 195px;
	position: relative;

	-webkit-transition: margin .2s linear, opacity .2s linear;
	-moz-transition: margin .2s linear, opacity .2s linear;
	-ms-transition: margin .2s linear, opacity .2s linear;
	-o-transition: margin .2s linear, opacity .2s linear;
	transition: margin .2s linear, opacity .2s linear;
}

.product img {
	width: 100%;
	max-width:85%;
	height: 100%;
}

.product header, .product .content {
	background-color: #fff;
	border: 1px solid #ccc;
	border-style: none none solid none;
	float: left;
}

.product header {
	/*background: #000;*/
	margin: 0 0% 20px 0;
	overflow: hidden;
	padding: 0;
	position: relative;
	width: 24%;
	height: 194px;
	border-radius: 5px 0px 0px 5px;
}

.product header:hover img {
	opacity: .7;
}

.product header:hover h3 {
	bottom: 73px;
}

.product header h3 {
	background: #53b5aa;
	color: #fff;
	font-size: 22px;
	font-weight: 300;
	line-height: 49px;
	margin: 0;
	padding: 0 30px;
	position: absolute;
	bottom: -50px;
	right: 0;
	left: 0;

	-webkit-transition: bottom .2s linear;
	-moz-transition: bottom .2s linear;
	-ms-transition: bottom .2s linear;
	-o-transition: bottom .2s linear;
	transition: bottom .2s linear;
}

.remove {
	cursor: pointer;
}

.product .content {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	height: 194px;
	padding: 0 0px;
	width: 75%;
	display:flex;
	border-radius: 0px 5px 5px 0px;
}

.product h1 {
	color: #000;
	font-size: 23px;
	font-weight: 300;
	margin: 70px 0 20px 0;
}

.product footer.content {
	height: 50px;
	margin: 6px 0 0 0;
	padding: 0;
}

.product footer .price {
	background: #fcfcfc;
	color: #000;
	float: right;
	font-size: 15px;
	font-weight: 300;
	line-height: 49px;
	margin: 0;
	padding: 0 30px;
	display:none;
}

.product footer .full-price {
    /* background: #53b5aa; */
    color: #000;
    float: right;
    font-size: 22px;
    font-weight: 700;
    line-height: 49px;
    margin: 0;
    padding: 0 30px;
    -webkit-transition: margin .15s linear;
    -moz-transition: margin .15s linear;
    -ms-transition: margin .15s linear;
    -o-transition: margin .15s linear;
    transition: margin .15s linear;
}

.qt, .qt-plus, .qt-minus {
	display: block;
	float: left;
}

.qt {
    font-size: 22px;
    line-height: 50px;
    font-weight: 500;
    width: 70px;
}

.qt-plus, .qt-minus {
	background: #F8F8FA;
	border: none;
	font-size: 30px;
	font-weight: 300;
	height: 100%;
	padding: 0 20px;
	-webkit-transition: background .2s linear;
	-moz-transition: background .2s linear;
	-ms-transition: background .2s linear;
	-o-transition: background .2s linear;
	transition: background .2s linear;

}

.qt-plus:hover, .qt-minus:hover {
	background: #53b5aa;
	color: #fff;
	cursor: pointer;
	font-weight: 700;
}

.qt-plus {
	line-height: 50px;
	height: 50px;
	margin-right: 50px;
	font-weight: 700;
}

.qt-minus {
	line-height: 47px;
	height: 50px;
	font-weight: 700;
}

#site-footer {
	margin: 30px 0 50px 0;
}

#site-footer {
	padding: 40px;
}

#site-footer h1 {
	background: #fcfcfc;
	border: 1px solid #ccc;
	border-style: none none solid none;
	font-size: 24px;
	font-weight: 300;
	margin: 0 0 7px 0;
	padding: 14px 40px;
	text-align: center;
}

#site-footer h2 {
	font-size: 24px;
	font-weight: 300;
	margin: 10px 0 0 0;
}

#site-footer h3 {
	font-size: 19px;
	font-weight: 300;
	margin: 15px 0;
}

.left {
	float: left;
}

.right {
	float: right;
	margin-right: 64px;
}

.btn {
	background: #53b5aa;
	border: 1px solid #999;
	border-style: none none solid none;
	cursor: pointer;
	display: block;
	color: #fff;
	font-size: 20px;
	font-weight: 300;
	/*padding: 16px 0;*/
	width: 300px;
	text-align: center;
	font-weight: 500;

	-webkit-transition: all .2s linear;
	-moz-transition: all .2s linear;
	-ms-transition: all .2s linear;
	-o-transition: all .2s linear;
	transition: all .2s linear;
}
.btn-paddd{
    padding: 16px 0;
}
.btn:hover {
	color: #fff;
	background: #429188;
}

.type {
	background: #fcfcfc;
	font-size: 13px;
	padding: 10px 16px;
	left: 100%;
}

.type, .color {
	border: 1px solid #ccc;
	border-style: none none solid none;
	position: absolute;
}

.color {
	width: 40px;
	height: 40px;
	right: -40px;
}

.red {
	background: #cb5a5e;
}

.yellow {
	background: #f1c40f;
}

.blue {
	background: #3598dc;
}

.minused {
	margin: 0 50px 0 0 !important;
}

.added {
	margin: 0 -50px 0 0 !important;
}
.pad-top{
    padding-top:60px;
}
@media  only screen and (max-width: 667px){
   . product h1{
    font-size: 16px !important;
    margin: 45px 0 0px 0 !important;
}
/*.left span{*/
/*    margin-left: 8rem !important;*/
/*}*/
.product img{
   max-width:100% !important;
}
#site-footer {
    padding: 10px !important;
}
#site-footer h1 {
    padding: 14px 20px;
    text-align: left;
}
.far{
    margin-left:6rem;
}
.qt-minus {
    line-height: 30px !important;
    height: 40px !important;
    font-weight: 700;
}
.qt {
    font-size: 18px !important;
    line-height: 40px !important;
    width: 30px !important;
    text-align: center;
}
.qt-plus {
    line-height: 30px !important;
    height: 40px !important;
    margin-right: 50px !important;
    font-weight: 700;
}
.pad-top {
    padding-top: 45px !important;
    margin-left: -20px;
}
.product footer .full-price{
    font-size: 16px !important;
}
#cart h1{
    padding-right: 10px !important;
}
#cart a {
    margin-top: 50px !important;
    margin-left: -32px !important;
    
}
.qt-plus, .qt-minus {
    padding: 0 10px  !important;
}
.product footer .full-price{
    padding: 0 40px !important;
    line-height: 0px !important;
    margin: -22px 16px 0px 0px !important;
}
.product .content{
    padding: 0 4px !important;
    height: 130px !important;
}
.product header{
    height: 130px !important;
}
.product{
     height: 130px !important;
}
.product h1 {
   font-size: 16px !important;
    font-weight: 300;
    margin: 40px 0 20px 0 !important;
}
.tax-p{
    margin-left: 11rem;
}
/*.tax-p1{*/
/*    margin-left: 8rem;*/
/*}*/
/*.tax-p2{*/
/*    margin-left: 7rem;*/
/*}*/
.total-price{
   margin-left: -1rem;
}
/*.right{*/
/*    margin-left: -22px;*/
/*}*/
}
.modal-footer .btn{
    width: 200px;
}
</style>

  </head>

  <body>
   
	<div id="site-header">
		<div class="container">
			<h1>Shopping cart</h1>
		</div>
	</div>
		<div id="site-header">
		<div class="container">
	<div class="remove_alert">
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>
</div>
	</div>
	</div>
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
</script>
      <?php if((isset($desk_cart) && count($desk_cart)>0) || (isset($cart_prod) && count($cart_prod)>0)): ?>
	<div class="container">
		<section id="cart">
		    <?php $sub_total=0;?>
		    <?php if(isset($desk_cart) && count($desk_cart)>0): ?>
                    <?php $__currentLoopData = $desk_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<article class="product">
				<header>
					<img src="<?php echo e(URL::asset('admin/public/capture_desk_image/'.$desk->captured_desk_img)); ?>" alt="">
				</header>
				<div class="content">
					<h1>Desk</h1>
					<footer class="pad-top">
					<span class="qt-minus"data_cartId="<?php echo e($desk->desk_cart_id); ?>"data_item_type="desk"data_offerPrice="<?php echo e(($desk->desk_price / $desk->desk_qty)); ?>">-</span>
					<span class="qt"><?php echo e($desk->desk_qty); ?></span>
					<span class="qt-plus"data_cartId="<?php echo e($desk->desk_cart_id); ?>"data_item_type="desk"data_offerPrice="<?php echo e(($desk->desk_price/$desk->desk_qty)); ?>">+</span>

					<h2 class="full-price"id="<?php echo e($desk->desk_cart_id); ?>_<?php echo e(($desk->desk_price / $desk->desk_qty)); ?>">
					   <i class="far fa-rupee-sign"></i><?php echo e($desk->desk_price); ?>

					</h2>
					<!--<h2 class="price">-->
					<!--<i class="far fa-rupee-sign"></i> <?php echo e($desk->desk_price); ?>-->
					<!--</h2>-->
				    </footer>
				    <a onclick="myfun(this);"class="remove" href="#" data-toggle="modal" data-target="deletems_desk<?php echo e($desk->desk_cart_id); ?>">
				        <h3><i class="fa fa-trash mb-1 text-danger"></i></h3>
				    </a>
				 <!--   <a class="remove" href="<?php echo e(url('remove_cart/'.'desk'.'/'.$desk->desk_cart_id)); ?>">-->
					<!--	<h3><i class="fa fa-trash mb-1 text-danger"></i></h3>-->
					<!--</a>-->
				</div>
			</article>
			<!--delete model-->
			 <div id="deletems_desk<?php echo e($desk->desk_cart_id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                                                <button type="button" class="close hide_model" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Sure you want to delete this product ?</h6>
                                                <p></p>
                                               
                                            </div>
                                            <div class="modal-footer">
            <div class="btn-flex">
                 <a href="<?php echo e(url('remove_cart/'.'desk'.'/'.$desk->desk_cart_id)); ?>">
           <button type="button" class="btn btn-default" id="modbutt">Yes</button></a>
            </div>
            <div class="btn-flex pt-4">
                <button type="button" class="btn btn-info waves-effect hide_model" data-dismiss="modal">Close</button>
                </div>
           
           
                                                
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
			<?php $sub_total=$sub_total+$desk->desk_price;?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		 <?php if(isset($cart_prod) && count($cart_prod)>0): ?>
                    <?php $__currentLoopData = $cart_prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<article class="product">
			    
				<header>
					<img src="<?php echo e(URL::asset('admin/public/feature_image/'.$cart->feature_image)); ?>" alt="">
				</header>
				<div class="content">
					<h1><?php echo e($cart->prod_name); ?></h1>
					<footer class="pad-top">
					<span class="qt-minus"data_cartId="<?php echo e($cart->id); ?>"data_item_type="prod"data_offerPrice="<?php echo e($cart->offer_price); ?>">-</span>
					<span class="qt"><?php echo e($cart->qty); ?></span>
					<span class="qt-plus"data_cartId="<?php echo e($cart->id); ?>"data_item_type="prod"data_offerPrice="<?php echo e($cart->offer_price); ?>">+</span>

					<h2 class="full-price"id="<?php echo e($cart->id); ?>_<?php echo e($cart->offer_price); ?>">
					   <i class="far fa-rupee-sign">&nbsp;</i><?php echo e(($cart->qty*$cart->offer_price)); ?>

					</h2>
					<!--<h2 class="price">-->
					<!--<i class="far fa-rupee-sign"></i> <?php echo e(($cart->qty*$cart->offer_price)); ?>-->
					<!--</h2>-->
				    </footer>
				    <a onclick="myfun(this);"class="remove" href="#" data-toggle="modal" data-target="deletems_prod<?php echo e($cart->id); ?>">
				        <h3><i class="fa fa-trash mb-1 text-danger"></i></h3>
				    </a>
				 <!--   <a class="remove" href="<?php echo e(url('remove_cart/'.'prod'.'/'.$cart->id)); ?>">-->
					<!--	<h3><i class="fa fa-trash mb-1 text-danger"></i></h3>-->
					<!--</a>-->
				</div>
			</article>
			<!--delete model-->
			 <div id="deletems_prod<?php echo e($cart->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                                                <button type="button" class="close hide_model" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Sure you want to delete this product ?</h6>
                                                <p></p>
                                               
                                            </div>
                                            <div class="modal-footer">
             <div class="btn-flex">
                 <a href="<?php echo e(url('remove_cart/'.'prod'.'/'.$cart->id)); ?>">
           <button type="button" class="btn btn-default" id="modbutt">Yes</button></a>
            </div>
            <div class="btn-flex pt-4">
                <button type="button" class="btn btn-info waves-effect hide_model" data-dismiss="modal">Close</button>
                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
			<?php $sub_total=$sub_total+($cart->qty*$cart->offer_price);?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            
            
            
		</section>
		<div id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <i class="far fa-rupee-sign"></i> <span class="tax-p1 sub_1"> <?php echo e($sub_total); ?></span></h2>
				<!--<h3 class="tax">Taxes (5%): <span class="tax-p"> $8.2</span></h3>-->
				<h3 class="shipping">Shipping: <span class="tax-p">Free</span></h3>
			</div>

			<div class="right">
				<h1 class="total"><span class="total-price">Total: <i class="far fa-rupee-sign"></i></span> <span class="tax-p2 sub_1"> <?php echo e($sub_total); ?></span></h1>
				<a href="<?php echo e(url('checkout')); ?>" class="btn btn-paddd">Checkout</a>
			</div>

		</div>
	</div>

	</div>
	<?php else: ?>
		<!--<div id="site-header">-->
		<div class="container">
			<h6 class="text-danger" >Cart is empty.</h6>
		</div>
	<!--</div>-->
	<?php endif; ?>
	<!--  -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
           <script>
           function myfun(obj){
               var delete_iteam=$(obj).attr('data-target');
               $('#'+delete_iteam).modal('show');
                $(".hide_model").click(function(){
            $('#'+delete_iteam).modal('hide');
        });
           }
            $('.qt-plus').click(function () {
                var cart_id=$(this).attr('data_cartId');
                var offer_price=parseInt($(this).attr('data_offerPrice'));
                var iteam_type=$(this).attr('data_item_type');
                
                var current_plusqty=parseInt($(this).prev().html());
              $(this).prev().html(current_plusqty+1);
              var current_val = parseInt($(this).prev().html());
             
              var new_price= offer_price*(current_plusqty+1);
             // alert('new='+new_price);
               $('#'+cart_id+'_'+offer_price).html('<i class="far fa-rupee-sign"></i>'+new_price);
               
                var current_subtotal=parseInt($('.sub_1').html());
             $('.sub_1').html((current_subtotal+offer_price));
              
                $.ajax({
                url: "<?php echo e(url('change_cart_qty')); ?>",
                type: 'post',
                data: {
                    cart_id:cart_id,
                    current_val:current_val,
                    iteam_type:iteam_type,
                    action:'plus',
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success:function(res){
                   // location.reload();
                    
                }
		      });
            });
            $('.qt-minus').click(function () {
                 var cart_id=$(this).attr('data_cartId');
                var offer_price=parseInt($(this).attr('data_offerPrice'));
                 var iteam_type=$(this).attr('data_item_type');
                 
               var current_minusqty=parseInt($(this).next().html());
                if (current_minusqty == 1) {
                    
            		}else{
            	$(this).next().html(current_minusqty-1);  
            	var current_val =  parseInt($(this).next().html()); 
            	
            	 var new_price= offer_price*(current_minusqty-1);
               $('#'+cart_id+'_'+offer_price).html('<i class="far fa-rupee-sign"></i>'+new_price);
               
                var current_subtotal=parseInt($('.sub_1').html());
             $('.sub_1').html((current_subtotal-offer_price));
            	
            	 $.ajax({
                url: "<?php echo e(url('change_cart_qty')); ?>",
                type: 'post',
                data: {
                    cart_id:cart_id,
                    current_val:current_val,
                     iteam_type:iteam_type,
                      action:'minus',
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success:function(res){
                //  location.reload();
                  
                }
		      });
            		}
            		
            });
           
        </script>


  </body>
 
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/resources/views/view-cart.blade.php ENDPATH**/ ?>