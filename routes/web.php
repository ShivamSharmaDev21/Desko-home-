<?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\WishlistController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\CartController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\FrontPageController;
    
    // Route::get('/', function () {
    //     return view('login');
    // });

    ///////////////////////////////  ///////////////////////////////////////////
    Route::get('/',[FrontPageController::class,'index']);
    Route::get('/custom',[HomeController::class,'index']);
    Route::get('/home',[HomeController::class,'home']);
    
    // Route::post('/flagship_workstations',[HomeController::class,'flagshipWorkstations']);//old
    Route::post('/custom/Your-Desk',[HomeController::class,'flagshipWorkstations']);//New 
    Route::redirect('/flagship_workstations', '/custom/Your-Desk', 301); //redirect
    
    
    Route::get('/Products/custom',[HomeController::class,'index']); //For custum from product listing



    
    
    Route::post('/register',[UserController::class,'storeUser']);
    Route::get('/login',[UserController::class,'viewLogin']);
    Route::get('/register',[UserController::class,'viewSignup']);
    Route::post('/login-user',[UserController::class,'loginUser']);
    Route::get('/logout-user',[UserController::class,'logoutUser']);

    Route::post('/desk-add-to-cart-by-js', [CartController::class,'deskAddToCartsecond']);
    Route::post('/desk-add-to-cart', [CartController::class,'deskAddToCart']);
    // Route::post('/desk-add-leads', [CartController::class,'deskAddleads']);
    Route::post('/desk-add-leads', [HomeController::class,'deskAddleads']);
    Route::post('/capture_image_script', [HomeController::class,'capture_image_script']);
    // Route::get('/test_by_shubha', [HomeController::class,'test']);
    Route::get('/add-to-cart/{prod_id}', [CartController::class,'addToCart']);
    Route::get('/view-cart', [CartController::class,'index']);
    Route::get('/remove_cart/{iteam_type}/{cart_id}', [CartController::class,'removeCart']);
    Route::get('/remove_cart_checkout/{iteam_type}/{cart_id}', [CartController::class,'removeCartCheckout']);
    Route::post('/add_cart', [CartController::class,'addCart']);
    Route::post('/change_cart_qty', [CartController::class,'changeCartQty']);
    Route::post('/get_city', [CartController::class,'getCity']);
    
    Route::get('/add-product-to-cart/{prod_id}', [CartController::class,'addProductToCart'])->name('addProductToCart');
    
    ////////////////////////// Coupons ///////////////////////////////////////////////
    Route::get('/coupon_code_name_using', [CartController::class,'couponCodeNameUsing']);


    ////////////////////////// ProductController ///////////////////////////////////////////////
    Route::get('/view-products', [ProductController::class,'index']);
    Route::post('/live-search-product', [ProductController::class,'liveSearchProduct']);
    Route::post('/search_product', [ProductController::class,'searchProduct']);

    ////////////////////////// WishlistController ///////////////////////////////////////////////
    Route::get('/add-to-wishlist/{prod_id}', [WishlistController::class,'addToWishlist']);
    Route::get('/view-wishlist', [WishlistController::class,'index']);
    Route::get('/remove_wish/{iteam_type}/{wish_id}', [WishlistController::class,'removeWish']);
    Route::get('/wish-to-cart', [WishlistController::class,'wishToCart']);
    Route::post('/change_wish_qty', [WishlistController::class,'changeWishQty']);
    // Route::get('/privacy-policy', );

    Route::get('/privacy-policy', function(){
    return view('privacy-policy');});

    Route::get('/terms', function(){
    return view('terms-and-conditions');});

    Route::get('/product-detail', function(){
    return view('product-detail');});

    Route::get('/shipping', function(){
    return view('shipping');});

    Route::get('/refund', function(){
    return view('refund');});

    Route::get('/contact-us', function(){
    return view('contact_us');});

    Route::get('/about-us', function(){
    return view('about_us');});

    // Route::get('/payment-method', function(){
    // return view('payment-method');});
    Route::post('/contact-us-form',[HomeController::class,'contactusform']);
    Route::get('/email',[HomeController::class,'email']);
    
    
    // Route::get('/product-detail/{id}',[HomeController::class,'product_detail']); // old
    Route::get('/Products/{url}',[HomeController::class,'product_detail']); // new 
    Route::redirect('/product-detail/{id}', '/view-products', 301); //redirect
    

    Route::get('/invoice/{id}',[OrderController::class,'invoice']);

    Route::get('/checkout', [CartController::class,'checkout']);// old
    Route::get('/{page}/{product}/checkout', [CartController::class,'checkout'])->name('checkout'); //new
    // Route::redirect('/checkout', '/custom', 301); //redirect

    
    Route::post('/payment-method', [OrderController::class,'placeOrder_checkout']);
    Route::get('/checkout_payment', [CartController::class,'checkout_payment']);

    Route::post('/place_order', [OrderController::class,'placeOrder']);
    Route::get('/my-orders', [OrderController::class,'index']);
    Route::get('/order-detail/{order_id}', [OrderController::class,'orderDetail']);
    Route::get('/order_success/{id}', [OrderController::class,'orderSuccess']);
    // Route::post('/order_success/{id}', [OrderController::class, 'orderSuccess'])->name('post.store');
    Route::get('/download_invoice/{id}', [OrderController::class,'downloadInvoice'])->name('invoice.download');

                
    Route::group(['middleware'=>'user_auth'],function(){
        
        //////////////////////////// CartController ///////////////////////////////////////////////
        ////////////////////////// OrderController ///////////////////////////////////////////////
        ////////////////////////// UserController ///////////////////////////////////////////////
        Route::get('/my-profile', [UserController::class,'myProfile']);
        Route::post('/update_user_profile', [UserController::class,'updateUserProfile']);
    });
