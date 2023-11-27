<?php  
if(isset($_COOKIE['guest_user'])){
   //echo $_COOKIE['guest_user'];die(); 
}else{
setcookie('guest_user', '9'.date('dhis'), time() + (86400 * 30), "/");
} ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Table</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
<style>
    .seachproduct {
    right: 18%;
    background: #fff;
    margin-top: 3rem;
    left: 0%;
    color: #000;
    border: 1px solid #ddd;
    z-index: 1;
    border-radius: 5px;
    box-shadow: 0 4px 4px 0 rgb(0 0 0 / 9%), 0 6px 9px 0 rgb(0 0 0 / 10%);
}
.seachproduct ul li{
    margin-left: 25px !important;
    display: block;
    line-height: 2.0;
}
</style>
  </head>

  <body id="">
            <header>
    <div class="header-banner">
        <h1>Desk Home</h1>
    </div>
    <div class="clear"></div>
    <nav>
         <div class="site-title"><a href="<?php echo e(url('/')); ?>">Desk Home</a></div>
       
       
            <ul>
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('/view-products')); ?>">Product</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="div-pad">
            <span>
            <form class="form-inline"method="post" action="<?php echo e(url('search_product')); ?>"id="search_form">
                <?php echo csrf_field(); ?> 
                <input name="prod_name"id="txt_search"autocomplete="off"  class="form-control my-input" type="search" placeholder="Search for products..." aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit" id="search-btn"><i class="fas fa-search"></i></button>
                
                <div class="seachproduct">
                    <ul id="searchResult" style="text-align: left;"></ul>
                </div>

             </form>
            </span>
        </div>
        <div class="cart-icon login-right">
            <?php
             $user_id=(session('user_id'))?session('user_id'):$_COOKIE['guest_user'];
    	       $wish_count = Illuminate\Support\Facades\DB::table('wishlist')->where('user_id',$user_id)->get()->count();
    	       $cart_count = Illuminate\Support\Facades\DB::table('cart')->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->get()->count();
    	       $desk_cart_count = Illuminate\Support\Facades\DB::table('desk_cart')->where('status',0)->where('user_id',$user_id)->get()->count();
    	       $total_cart_count=$cart_count+$desk_cart_count;
    	       ?>
             <span class="my-cart-pad"><a class=""href="<?php echo e(url('/view-wishlist')); ?>" ><i class="fas fa-heart"></i> <span class="badge badge-danger"><?=(!empty($wish_count))?$wish_count:0?></span></a></span>
             <span class="my-cart-pad"><a class=""href="<?php echo e(url('/view-cart')); ?>" ><i class="fas fa-cart-arrow-down"></i> <span class="badge badge-danger"><?=(!empty($total_cart_count))?$total_cart_count:0?></span></a></span>
              <!--<span class=""><a href="#"><i class="fas fa-user"></i> Login / Register</a></span>-->
              <!--<span class="user-div"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-user"></i> Login/SignUp</a></span>-->
               
               <span class="dropdown" style="float:right;" id="drop">
                  <button class="dropbtn"><i class="fas fa-user"></i><i class="fas fa-caret-down my-down"></i></button>
                  <span class="dropdown-content">
                      	<?php if(empty(session()->get('user_id'))): ?>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login/SignUp</a>
                    <?php else: ?>
                    <a href="<?php echo e(url('/my-profile')); ?>">My Profile</a>
                    <a href="<?php echo e(url('/my-orders')); ?>">My Orders</a>
                    <!--<a href="<?php echo e(url('/track-orders')); ?>">Track Orders</a>-->
                    
                    <a href="<?php echo e(url('/logout-user')); ?>">Logout</a>
                    <?php endif; ?>
                  </span>
                </span>
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
    <a href="#">About</a>
    <a href="#">Contact</a>
  </div>

</div>

 <!--Use any element to open/show the overlay navigation menu -->

    
</header><?php /**PATH C:\xampp\htdocs\deskohome\resources\views/include/header.blade.php ENDPATH**/ ?>