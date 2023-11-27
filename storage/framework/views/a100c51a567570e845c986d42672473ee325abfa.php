<?php  
if(!empty(session()->get('user_id')) || !empty(session()->get('guest_user'))){
 // echo session('user_id');die(); 
}else{
   session()->put('guest_user','9'.date('dhis'));
    // session('guest_user', '9'.date('dhis'));
// setcookie('guest_user', '9'.date('dhis'), time() + (86400 * 30), "/");
// echo session('guest_user');die();
} ?>
 <!DOCTYPE html>
<html>
  <head>
      
  <!-- Add script in head -->
    <script src="https://cdn.razorpay.com/widgets/affordability/affordability.js">
    </script>
    <title>Deskohome</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://www.dafontfree.net/embed/ZnV0dXJhLW5vcm1hbC1yZWd1bGFyJmRhdGEvMjUvZi8xMjU4NzYvRlVUVVJBLU4udHRm" rel="stylesheet" type="text/css"/>

<style>
body {
    font-family: Kumbh Sans, sans-serif !important;
}

.seachproduct {
    right: 18%;
    background: #fff;
    margin-top: 3rem;
    left: 0%;
    color: #000;
    border: 1px solid #ddd;
    z-index: -1;
    border-radius: 5px;
    box-shadow: 0 4px 4px 0 rgb(0 0 0 / 9%), 0 6px 9px 0 rgb(0 0 0 / 10%);
}
.seachproduct ul li{
    margin-left: 25px !important;
    display: block;
    line-height: 2.0;
}
.btn-clr{
    background-color: #412DB4 !important;
}
.div-pad .btn-success{
    border-color:#412DB4 !important;
}
.div-pad .btn-success:hover{
    border-color:#412DB4 !important;
}

#load{
        width: 100%;
    display: flex;
    height: 100%;
    position: fixed;
    z-index: 9999520;
    background: #ffffffe6;
    justify-content: center;
    align-items: center;
    /*background:url("https://www.fidelityhotel.net/images/ajax-loader_circle_zoom.gif") no-repeat center center rgba(0,0,0,0.25)*/
}

.lds-grid {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-grid div {
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background:#412DB4;
  animation: lds-grid 1.2s linear infinite;
}
.lds-grid div:nth-child(1) {
  top: 8px;
  left: 8px;
  animation-delay: 0s;
}
.lds-grid div:nth-child(2) {
  top: 8px;
  left: 32px;
  animation-delay: -0.4s;
}
.lds-grid div:nth-child(3) {
  top: 8px;
  left: 56px;
  animation-delay: -0.8s;
}
.lds-grid div:nth-child(4) {
  top: 32px;
  left: 8px;
  animation-delay: -0.4s;
}
.lds-grid div:nth-child(5) {
  top: 32px;
  left: 32px;
  animation-delay: -0.8s;
}
.lds-grid div:nth-child(6) {
  top: 32px;
  left: 56px;
  animation-delay: -1.2s;
}
.lds-grid div:nth-child(7) {
  top: 56px;
  left: 8px;
  animation-delay: -0.8s;
}
.lds-grid div:nth-child(8) {
  top: 56px;
  left: 32px;
  animation-delay: -1.2s;
}
.lds-grid div:nth-child(9) {
  top: 56px;
  left: 56px;
  animation-delay: -1.6s;
}
 .float{
	position:fixed;
		width:50px;
	height:50px;
	bottom:20px;
	right:80px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:10px;
}

/*Loder*/
#loader {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.8);
  z-index: 9999;
}

.loader-animation {
  display: inline-block;
  width: 50px;
  height: 50px;
  border: 3px solid #ccc;
  border-radius: 50%;
  border-top-color: #000;
  animation: spin 1s infinite ease-in-out;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

@keyframes  spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
} 

/*end loder*/

@media(max-width:767px) {
.float {
    width: 50px;
    height: 50px;
    right: 15px;
}
.my-float {
    margin-top: 10px;
}
}
@keyframes  lds-grid {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}
.none-logo
{
    display : none;
}
@media  only screen and (max-width: 600px) {
    .cart-icon span a {
    padding-left: 64px;
    font-size: 1rem;
    color: #82898f;
    text-decoration: none;
}
.navbar-header .navbar-brand img {
    /* padding-top: 11px; */
    width: 59px;
    margin-top: -13px;
  }
}
</style>
  </head>

 <!--<div id="loader">-->
 <!--         <img src="https://www.fidelityhotel.net/images/ajax-loader_circle_zoom.gif" alt="loader image">-->
 <!--</div>-->
 
 <!--<div id="load">-->
 <!--    <div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>-->
 <!--</div>-->

 
 
  <body id=""  class="smallsize" style="overflow-x: hidden;">
      
        <!--loder-->
        <div id="loader">
            <div class="loader-animation"></div>
        </div>
        
        
       <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFDRCBF"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
      <header>
    <!--<div class="header-banner">-->
    <!--    <h1>Desk Home</h1>-->
    <!--</div>-->
    <div class="clear"></div>
    <nav  class="navbar-default navbar-fixed-top">
         <div class="navbar-header" style=" left: 3px; " ><div class="navbar-brand"
         ><a href="<?php echo e(url('/')); ?>">
             <!--<img src="<?php echo e(URL::asset('public/assets/img/desko_logo.png')); ?>"  class="block-logo" alt="Image"/>-->
             <img src="<?php echo e(URL::asset('public/assets/img/desko_black.png')); ?>"  class="block-logo" alt="Image"/>
             <img src="<?php echo e(URL::asset('public/assets/img/desko_white.png')); ?>" class="none-logo" alt="Image"/>
             
            </a></div></div>
       
       
            <ul>
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
             <li><a href="<?php echo e(url('/about-us')); ?>">About Us</a></li>
            <li><a href="<?php echo e(url('/view-products')); ?>">Product</a></li>
              <li> <a href="<?php echo e(url('/custom')); ?>">Customize</a></li>

            <li><a href="<?php echo e(url('/contact-us')); ?>">Contact Us</a></li>
        </ul>
        <!--<div class="div-pad">-->
        <!--    <span>-->
        <!--    <form class="form-inline"method="post" action="<?php echo e(url('search_product')); ?>"id="search_form">-->
        <!--        <?php echo csrf_field(); ?> -->
        <!--        <input name="prod_name"id="txt_search"autocomplete="off"  class="form-control my-input" type="search" placeholder="Search for products..." aria-label="Search">-->
        <!--        <button class="btn btn-success my-2 my-sm-0 btn-clr" type="submit" id="search-btn"><i class="fas fa-search"></i></button>-->
                
        <!--        <div class="seachproduct">-->
        <!--            <ul id="searchResult" style="text-align: left;"></ul>-->
        <!--        </div>-->

        <!--     </form>-->
        <!--    </span>-->
        <!--</div>-->
        <div class="cart-icon login-right">
            <?php
             $user_id=(session('user_id'))?session('user_id'):session('guest_user');
    	       $wish_count = Illuminate\Support\Facades\DB::table('wishlist')->where('user_id',$user_id)->get()->count();
    	       $cart_count = Illuminate\Support\Facades\DB::table('cart')->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->get()->count();
    	       $desk_cart_count = Illuminate\Support\Facades\DB::table('desk_cart')->where('status',0)->where('user_id',$user_id)->get()->count();
    	       $total_cart_count=$cart_count+$desk_cart_count;
    	       ?>
             <!--<span class="my-cart-pad"><a class=""href="<?php echo e(url('/view-wishlist')); ?>" ><i class="fas fa-heart"></i> <span class="badge badge-danger"><?=(!empty($wish_count))?$wish_count:0?></span></a></span>-->
             <!--<span class="my-cart-pad"><a class=""href="<?php echo e(url('/view-cart')); ?>" ><i class="fas fa-cart-arrow-down"></i> <span class="badge badge-danger"><?=(!empty($total_cart_count))?$total_cart_count:0?></span></a></span>-->
             <span class="my-cart-pad"><a class=""href="<?php echo e(url('/checkout')); ?>" ><i class="fas fa-cart-arrow-down"></i> <span class="badge badge-danger"><?=(!empty($total_cart_count))?$total_cart_count:0?></span></a></span>
              <!--<span class=""><a href="#"><i class="fas fa-user"></i> Login / Register</a></span>-->
              <!--<span class="user-div"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-user"></i> Login/SignUp</a></span>-->
               
               <!--<span class="dropdown" style="float:right;" id="drop">-->
               <!--   <button class="dropbtn"><i class="fas fa-user"></i><i class="fas fa-caret-down my-down"></i></button>-->
               <!--   <span class="dropdown-content">-->
               <!--       	<?php if(empty(session()->get('user_id'))): ?>-->
               <!--     <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login/SignUp</a>-->
               <!--     <?php else: ?>-->
               <!--     <a href="<?php echo e(url('/my-profile')); ?>">My Profile</a>-->
               <!--     <a href="<?php echo e(url('/my-orders')); ?>">My Orders</a>-->
                    <!--<a href="<?php echo e(url('/track-orders')); ?>">Track Orders</a>-->
                    
               <!--     <a href="<?php echo e(url('/logout-user')); ?>">Logout</a>-->
               <!--     <?php endif; ?>-->
               <!--   </span>-->
               <!-- </span>-->
        </div>
       
         <div class="mobile-menu"><span onclick="openNav()"><i class="fas fa-bars"></i></span></div>
        
        
    </nav>
    <div id="myNav" class="overlay">

   <!--Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

   <!--Overlay content -->
  <div class="overlay-content">
    <a href="<?php echo e(url('/')); ?>">Home</a>
    <a href="<?php echo e(url('/view-products')); ?>">Product</a>
    <a href="<?php echo e(url('/custom')); ?>">Customize</a>
    <a href="<?php echo e(url('/about-us')); ?>">About Us</a>
    <a href="<?php echo e(url('/contact-us')); ?>">Contact Us</a>
  </div>

</div>

 <!--Use any element to open/show the overlay navigation menu -->

    
</header><?php /**PATH /home/desko2023/public_html/devvsh/resources/views/include/header.blade.php ENDPATH**/ ?>