

<?php $__env->startSection('body'); ?>
<style>
  body {
	/*background: #eee;*/
	margin: 0;
	padding: 0;
	overflow-x: hidden;  
}
.checkout-page:before { 
    /*background: #F8F8F8;*/
        content: '';
    background: #2b628e08;
    position: fixed;
    width: 45%;
    height: calc(100%);
    right: 0;
    z-index: -1;
    border-left: 1px solid #d7d7d7;
}
.apperance
{
     position: absolute;
    right: 30px;
    margin-top: 15px;
    width: 16%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: gray;
    z-index: 0;
    pointer-events: none;
}

.apperance span:first-child
{
    width: 1px;
    height: 20px;
    background: #cac4c4;
    display: block;
    margin-left: 6px;
    font-size: 0px;
    margin-top: -4px;
}

.col-md-6 {
        position: relative;
}
footer.text-center.text-lg-start.bg-light.text-muted.mt-3, header .navbar-default.navbar-fixed-top
{
    display : none;
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
	background:transparent;
}

#site-header {
	margin: 0 0 30px 0;
}

#site-header h1 {
    font-size: 1.5rem;
    font-weight: 500;
    padding: 0px 0;
    position: relative;
    margin: 0;
    color:#000;
    margin-left: -35px;
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

.checkout-page .container {

	margin: 0 auto;
	width: 980px;
}

#cart {
	width: 540px;
}

#cart h1 {
    font-weight: 600;
    width: 210px;
    font-size: 15px;
}

#cart a {
	margin-top:35px;
	margin-left: 0px;
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
    overflow: hidden;
    border: 1px solid #eee;
    margin: 20px 0;
    width: 100%;
    border-radius: 10px;
    height: 100px;
    position: relative;
    -webkit-transition: margin .2s linear, opacity .2s linear;
    -moz-transition: margin .2s linear, opacity .2s linear;
    -ms-transition: margin .2s linear, opacity .2s linear;
    -o-transition: margin .2s linear, opacity .2s linear;
    transition: margin .2s linear, opacity .2s linear;
}

.product header, .product .content {
    background-color: transparent;
    border: 0px solid #ccc;
    border-style: none none solid none;
    float: left;
}

.product header {
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100px;
    height: 101px;
    border-radius: 5px 0px 0px 5px;
    display: flex;
    align-items: center;
    margin-right :10px;
    background: #fff;
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
	height: 100px;
	padding: 0 0px;
	width: 75%;
	display:flex;
	    align-items: center;
	border-radius: 0px 5px 5px 0px;
}

.product h1 {
	color: #000;
	font-size: 18px;
	font-weight: 300;
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
    width  : 65px;
    color: #000;
    float: right;
    font-size: 16px;
    font-weight: 700;
    line-height: 49px;
    margin: 0;
    margin-top:-40px;
    padding: 0 0px;
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
	font-size: 15px;
	line-height: 30px;
	width: 40px;
	text-align: center;
}

.qt-plus, .qt-minus {
	background: #ddd;
	border: none;
	font-size: 16px;
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
	background: #3e2b77;
	color: #fff;
	cursor: pointer;
	font-weight: 700;
}

.qt-plus {
	    line-height: 30px;
    height: 30px;
	margin-right: 50px;
	font-weight: 700;
}

.icon-style img
{  
      border-radius: 10px;  
}


.qt-minus {
	    line-height: 30px;
    height: 30px;
	font-weight: 700;
}

#site-footer {
	margin: 30px 0 0 0;
}

/*#site-footer {*/
/*	padding: 40px;*/
/*}*/

#site-footer h1 {
    background: transparent;
    border: 1px solid #ccc;
    border-style: solid none solid none;
    font-size: 24px;
    font-weight: 500;
    margin: 0 0 0px 0;
    padding: 14px 0px;
    color: #000;
}

#site-footer h2 {
    font-size: 22px;
    font-weight: 500;
    margin: 0px 0 0 0;
}

#site-footer h3 {
	font-size: 19px;
	font-weight: 400;
	margin: 8px 0;
}

.left {
	float: left;
}

.right {
	float: right;
	margin-right: 30px;
}
.badge-danger{
    margin-top: 20px;
    margin-left: -5px;

}
.div-pad{
    padding-top: 15px;
}
.btn-primary:hover{
    border-color:#3e2b77;
}
.btn-primary:focus{
    border-color:#3e2b77;
    box-shadow: 0 0 0 0.25rem rgb(62 43 119 / 50%);
}
.btn-primary:active:focus{
    border-color:#3e2b77;
    box-shadow: 0 0 0 0.25rem rgb(62 43 119 / 50%);
}
.btn {
    background: #3e2b77 !important;
    border: 1px solid #999;
    border-style: none none solid none;
    cursor: pointer;
    display: block;
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    padding: 10px 0;
    width: 200px;
    text-align: center;
    font-weight: 500;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition: all .2s linear;
    /*transition: all .2s linear;*/
    border-radius: 0.1rem;
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
    padding-top:8px;
}
#site-header .container{
    width:543px;
}
#cart-id{
     width:543px;
}
#check-out{
    float:right;
}
.my-span {
    /* float: left; */
}
label {
    padding-bottom: 6px;
}
.order-md-1 {
    order: 1!important;
    margin-left: -90px;
}
@media  only screen and (max-width: 667px){
    .row1 {
    --bs-gutter-x: 0rem !important;
}
.qt-plus, .qt-minus {

    padding: 0 10px !important;
}

#check-out {
    float: right;
     margin-right: 0px !important; 
}
.order-md-1 {
    order: 1!important;
    margin-left: 0px !important;
}
.py-5{
    padding-top: 0rem!important;
    padding-bottom: 1rem!important;
}
nav{
    border-bottom: 1px solid #ccc;
}
.product footer .full-price{
    padding: 0 10px;
}
}
.navbar-default ul, .navbar-default .div-pad {
    opacity: 0;
    pointer-events: none;
}

.checkboxs a
{
    margin-left: 7px;
    color: blue;
    margin-right: 6px;
    text-decoration: revert;
}


@font-face {
    font-family: 'Futura';
    font-style: normal;
    font-weight: normal;
    src: local('Futura'), url('https://cws.in.net/deskohome/public/assets/css/FuturaStdBook.woff') format('woff');
    }
/*label*/
/*{*/
/*    font-family: Futura, sans-serif;*/
/*}*/

.main-logo
{
    width: 75px;
    margin-top: -70px;
}

.smart_features_added {
    padding-left: 0rem;
    list-style: none;
    border: 1px solid #3e2b772e;
    border-radius: 12px;
    overflow: hidden;
}
.smart_features_added li {
    padding: 5px 12px;
    border-radius: 1px;
    border-radius: 0px;
    border-bottom: 1px solid #3e2b772e;
}
.smart_features_added li:last-child
{
    border:none;
}
.trusted_icons
{
    /*background: #8080801c;*/
    padding: 11px;
    border-radius: 4px;
}

.icon-style
{
    text-align:center;
    transition: 0.3s;
        cursor: pointer;
}
.icon-style:hover

{
       filter: drop-shadow(2px 4px 6px black); 
}

.path
{
        /*background: #e3e3e3;*/
    border-radius: 2px;
    padding: 4px;
    margin-bottom: 1rem;
    color: black;
    font-size: 15px;
}

.path span {
    margin-right: 4px;
    margin-left: 3px;
}
.path a
{
    color: #247b8c;
}

.required
{
    color: red;
    display: inline-block;
    margin-left: -3px;
}

label {
    padding-bottom: 6px;
    position: absolute;
    margin-left: 14px;
    margin-top: 5px;
    font-size: 15px;
    color: gray;
    z-index: 0;
    display : none;
    pointer-events: none;
}

.form-control {
    transition: 0.1s !important;
     padding:13px 8px 13px 15px;
}

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}
input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}

.product img
{
        max-width: 100%;
}
@media  screen and (max-width: 620px)
{
    #cart {
    width: 100%; 
      }
    .product header
    {
     width: 80px;
         padding: 5px;
     background: #d6d6d624;
    }
    #cart-id {
    width: 100%;
    }
    #cart h1
    {
        width: 100px;
        font-size: 13px;     
    }
    .product, .product .content, .product header
    {
        height: 80px;
    }
    .product .content
    {
      width: 73%;  
    }
    
    .product footer .full-price
    {
     width: 80px;
    float: right;
    font-size: 13px;
    }
    #site-footer h1 {
    width: 100% !important;
   }
   .checkout-page .path
   {
      left: 4px;
   }
   .main-logo 
   {
    left:0;  
   }
   #site-header h1 {
    margin-left: 0px !important;
    margin-bottom: -15px !important;
    font-size: 20px !important;
}
.my-span
{
    font-size: 22px;
}
    
}

.my-span
{
    width: 100%;
    justify-content: space-between;
    display: flex;  
}


</style>


  </head>

  <body>
	<section class="checkout-page"><div class="container">
  <div class="py-5 text-center">
   
  </div>

  <div class="row row1">
    <div class="col-md-4 order-md-2 mb-4">
     	<header id="site-header">
    		<div class="container">
    			<h1>Your cart</h1>
    		</div>
	    </header>

     <?php if((isset($desk_cart) && count($desk_cart)>0) || (isset($cart_prod) && count($cart_prod)>0)): ?>
	<div class="container" id="cart-id">

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
				    <a class="remove" href="<?php echo e(url('remove_cart_checkout/'.'desk'.'/'.$desk->desk_cart_id)); ?>">
						<h3><i class="fa fa-trash mb-1 text-danger"></i></h3>
					</a>
				</div>
			</article>
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
					   <i class="far fa-rupee-sign"></i><?php echo e(($cart->qty*$cart->offer_price)); ?>

					</h2>
					<!--<h2 class="price">-->
					<!--<i class="far fa-rupee-sign"></i> <?php echo e(($cart->qty*$cart->offer_price)); ?>-->
					<!--</h2>-->
				    </footer>
				    <a class="remove" href="<?php echo e(url('remove_cart_checkout/'.'prod'.'/'.$cart->id)); ?>">
						<h3><i class="fa fa-trash mb-1 text-danger"></i></h3>
					</a>
				</div>
			</article>
			<?php $sub_total=$sub_total+($cart->qty*$cart->offer_price);?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</section>
		<div id="site-footer">
		<div class="clearfix" id="cart-id">
		    <h5>Order Summary</h5>
	        <ul class="smart_features_added">
	             <?php if(isset($top) && count($top)>0): ?>
                    <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <li><?=$topp->top_name?> </li>
				      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
	             <?php if(isset($bottom) && count($bottom)>0): ?>
                    <?php $__currentLoopData = $bottom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bottomm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <li><?=$bottomm->bottom_name?> </li>
				      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
	             <?php if(isset($smart_prod) && count($smart_prod)>0): ?>
                    <?php $__currentLoopData = $smart_prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smart_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <li><?=$smart_pro->feature_name?></li>
				      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
	
				</ul>
				
				
				 <!--<hr class="mb-4 text-right">-->
				<div class="left w-100">
				<h2 class="subtotal">Subtotal: <span style="float:right"><i class="far fa-rupee-sign"></i><span id="check-out-1"class="sub_1"> <?php echo e($sub_total); ?></span></span></h2>
				<a style="display: flex;width: 100%;justify-content: space-between;">
		     	<h3 class="shipping">	<input id='Installation' name ='' value='1' style="margin-right: 1px;height: 17px;width: 17px;" type='checkbox' />
				Installation</h3>
				<h3 style="display: none;" class="sub_12" id="check-out-installment"><i class="far fa-rupee-sign"></i> 500</h3>
				    
				</a>
				
				<h3 class="shipping">Shipping (4 days) <span id="check-out">Free</span></h3>
				<h1 class="total"><span class="my-span">Total:<span style="float:right"> <i class="far fa-rupee-sign"></i> <span id="check-out-2"class="sub_1"> <?php echo e($sub_total); ?></span></span></h1>
			</div>
			
		</div>
	</div>

	</div>
	<?php else: ?>
            <?php echo e('Your cart is empty .'); ?>

            <?php endif; ?>
    </div>
    <div class="col-md-8 order-md-1">
         <div class="remove_alert">
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>
</div>

     <img src="<?php echo e(URL::asset('public/assets/img/desko_logo.png')); ?>" alt="Image" class="main-logo" />
       <div class="path">
           <span> <i class="far fa-home"></i> Home</span><span>/</span><span>Product Detail</span><span>/</span><spn>Shipping Address</spn>
       </div>
      <h4 class="mb-3">Shipping Address</h4>
           <!--<form method="post" action="<?php echo e(url('place_order')); ?>"class="needs-validation">-->
           <form id="basic-form" method="post" action="<?php echo e(url('payment-method')); ?>"  class="needs-validation">
          <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name <span class="required">*</span></label>
            <input type="hidden" name="address_id" value="<?php echo e((isset($address->address_id))?$address->address_id:''); ?>" class="form-control" id="" placeholder="" >
            <input type="hidden" name="installation" value="0"  id="installation_input" >
            <input type="hidden" name="sub_total" value="<?php echo e($sub_total); ?>" class="form-control" id="" placeholder="" >
            <input type="text" name="fname" value="<?php echo e((isset($address->fname))?$address->fname:''); ?>" class="form-control" id="firstName" placeholder="First name" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name <span class="required">*</span></label>
            <input type="text"name="lname" value="<?php echo e((isset($address->lname))?$address->lname:''); ?>" class="form-control" id="lastName" placeholder="Last name"  required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <!-- <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div> -->
         <div class="row">
          <div class="col-md-6 mb-3">
           <label for="email">Email Address <span class="required">*</span></label>
          <input type="email"name="email" value="<?php echo e((isset($address->email))?$address->email:''); ?>" class="form-control" id="email"  placeholder="Email Address" required>
            <div class="invalid-feedback">
             Please enter a valid email address for shipping updates.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="mobile">Mobile <span class="required">*</span></label>
            <input type="number"name="mobile" value="<?php echo e((isset($address->mobile))?$address->mobile:''); ?>" max="99999999999"  class="form-control" id="mobile" placeholder="Mobile Number" required>
            <div class="invalid-feedback">
              Valid mobile required.
            </div>
          </div>
        </div>
        
         <div class="row">
          <div class="col-md-6 mb-3">
           <label for="gst">GSTIN Number</label>
          <input type="text" name="GSTIN" value="" class="form-control" id="gst" placeholder="GSTIN Number">
          </div>
          <div class="col-md-6 mb-3">
            <label for="company">Company Name</label>
            <input type="text" name="company" value=""  class="form-control" id="company" placeholder="Company Name" >
           
          </div>
        </div>

        

        <div class="mb-3">
          <label for="address">Address <span class="required">*</span></label>
          <input type="text" name="address" value="<?php echo e((isset($address->address))?$address->address:''); ?>" placeholder="Address" class="form-control" id="address"  required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <!--<div class="mb-3">-->
        <!--  <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>-->
        <!--  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">-->
        <!--</div>-->

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="country" style="display: block;  font-size: 12px;">Country </label>
            <div class="apperance">
               <span>|</span>
               <span><i class="fas fa-caret-down"></i></span>
            </div>
            <select name="country" class="custom-select d-block w-100 form-control" id="country" required aria-required="true" style="padding: 20px 8px 4px 12px;"> 
              <option  value="" selected="" disabled="">Choose...</option>
              <option value="India"<?php echo e((isset($address->country)&&($address->country=='India'))?'selected':''); ?>>India</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="state" style="display: block;  font-size: 12px;">State </label>
             <div class="apperance">
               <span>|</span>
               <span><i class="fas fa-caret-down"></i></span>
            </div>
            <select name="state"onchange="get_city(this.value)" class="custom-select d-block w-100 form-control" id="state" required aria-required="true" style="padding: 20px 8px 4px 12px;">
              <option value="" selected="" disabled="">Choose...</option>
              <?php if(isset($state) && count($state)>0): ?>
              <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($st->s_id); ?>"<?php echo e((isset($address->state)&&($address->state==$st->s_id))?'selected':''); ?>><?php echo e($st->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </select>
            
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
        </div>
        
         <div class="row">
             <div class="col-md-6 mb-3">
            <label for="state" style="display: block;     font-size: 12px;">City </label>
            <div class="apperance">
               <span>|</span>
               <span><i class="fas fa-caret-down"></i></span>
            </div>
            <select name="city" class="custom-select d-block w-100 form-control" id="city-dd" required aria-required="true" style="padding: 20px 8px 4px 12px;">
              <option value="">Choose...</option>
               <?php if(isset($city) && count($city)>0): ?>
              <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($ct->id); ?>"<?php echo e((isset($address->city)&&($address->city==$ct->id))?'selected':''); ?>><?php echo e($ct->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </select>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          
         <div class="col-md-6 mb-3">
            <label for="zip">Pin code <span class="required">*</span></label>
            <input type="number"name="pincode" value="<?php echo e((isset($address->pincode))?$address->pincode:''); ?>" class="form-control" id="zip" placeholder="Pin code " required>
            <div class="invalid-feedback">
              Pincoe code required.
            </div>
          </div>
         </div>
         <div class="col-lg-12 d-flex checkboxs">
             <input type="checkbox" name="check" checked required style="height: 21px; width: 20px; margin-right : 10px;">
                Accept <a href="<?php echo e(url('/terms')); ?>" target="blank"> Terms</a>
              and
             <a href="<?php echo e(url('/privacy-policy')); ?>" target="blank">Privacy Policy</a>
         </div>
          
        <hr class="mb-4 text-right">
        
        <div class="">
         <div class="trusted_icons mb-3 pt-0">
            <div class="row align-items-center">
                 <div class="col-lg-3">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/ssl.png')); ?>" alt="" width="150px">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/rozer.png')); ?>" alt="" width="180px">
                    </div>
                </div>
               
            </div>
        </div>
        
        <div id="check-out">
            	<button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Continue</button>
            <!--<button class="btn btn-primary btn-lg btn-block" type="submit">Place Oreder</button>-->
        </div>
        
      </form>
    </div>
  </div>

 
</div></section>

<!--order-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    

        <script>
		    function  get_city(state_id){
		        //alert(state_id);
		         $("#city-dd").html('');
		      $.ajax({
                url: "<?php echo e(url('get_city')); ?>",
                type: 'post',
                data: {
                  
                    state_id:state_id,
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success:function(res){
                  $('#city-dd').html('<option selected disabled value="">Choose...</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                }
		      });

		    }
		</script>
		 <script>
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
                    location.reload();
                    
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
                 location.reload();
                  
                }
		      });
            		}
            		
            });
           
        </script>
	
        <!--   <script>-->
        <!--    $('.qt-plus').click(function () {-->
        <!--        var cart_id=$(this).attr('data_cartId');-->
               
        <!--        var offer_price=$(this).attr('data_offerPrice');-->
                
        <!--        var current_plusqty=parseInt($(this).prev().html());-->
        <!--      $(this).prev().html(current_plusqty+1);-->
        <!--      var current_val = parseInt($(this).prev().html());-->
               
        <!--        $.ajax({-->
        <!--        url: "<?php echo e(url('change_cart_qty')); ?>",-->
        <!--        type: 'post',-->
        <!--        data: {-->
        <!--            cart_id:cart_id,-->
        <!--            current_val:current_val,-->
        <!--            _token: "<?php echo e(csrf_token()); ?>"-->
        <!--        },-->
        <!--        dataType: 'json',-->
        <!--        success:function(res){-->
        <!--            location.reload();-->
                    
        <!--        }-->
		      <!--});-->
        <!--    });-->
        <!--    $('.qt-minus').click(function () {-->
        <!--         var cart_id=$(this).attr('data_cartId');-->
               
        <!--        var offer_price=$(this).attr('data_offerPrice');-->
        <!--       var current_minusqty=parseInt($(this).next().html());-->
        <!--        if (current_minusqty == 1) {-->
                    
        <!--    		}else{-->
        <!--    	$(this).next().html(current_minusqty-1);  -->
        <!--    	var current_val =  parseInt($(this).next().html()); -->
            	
        <!--    	 $.ajax({-->
        <!--        url: "<?php echo e(url('change_cart_qty')); ?>",-->
        <!--        type: 'post',-->
        <!--        data: {-->
        <!--            cart_id:cart_id,-->
        <!--            current_val:current_val,-->
        <!--            _token: "<?php echo e(csrf_token()); ?>"-->
        <!--        },-->
        <!--        dataType: 'json',-->
        <!--        success:function(res){-->
        <!--           location.reload();-->
                  
        <!--        }-->
		      <!--});-->
        <!--    		}-->
            		
        <!--    });-->
           
        <!--</script>-->


  <script>
      $(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});
  </script>
  
  

  
  <script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
         $('#Installation').change(function() {
    if (!$(this).is(':checked')) {
         let test = $('#check-out-2').html();
         var x = Number(test)
          $('#check-out-2').text(x - 500);
        //   $('#check-out-1').text(x - 500);
         $('#check-out-installment').hide();
          $('#installation_input').val('0');
        
        //  alert(test);
    }else{
         let test = $('#check-out-2').html();
         var x = Number(test)
          $('#installation_input').val('1');
          $('#check-out-2').text(x + 500);
        //   $('#check-out-1').text(x + 500);
         $('#check-out-installment').show();
        //  alert(test);
    }
  });
   
</script>


  </body>
 <?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cwsinnim/public_html/deskohome/resources/views/checkout.blade.php ENDPATH**/ ?>