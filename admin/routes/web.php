<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmartFeatureController;
use App\Http\Controllers\ColourController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\DeskbottomController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FeatureImageController;
use App\Http\Controllers\SliderHomeController;
use App\Http\Controllers\VideoHomeController;
use App\Http\Controllers\ReviewHomeController;
use App\Http\Controllers\MsgHomeController;
use App\Http\Controllers\FaqHomeController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ContactFormHomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('login');
// });

/////////////////////////////// AdminController ///////////////////////////////////////////

// Route::get('/',[FrontPageController::class,'index']);
Route::post('/contact-us-form',[AdminController::class,'contactusform']);
Route::get('/admin',[AdminController::class,'index']);
Route::post('/login_admin', [AdminController::class,'loginAdmin']);
Route::get('/logout_admin', [AdminController::class,'logoutAdmin']);

Route::get('/add_feature_image_home',[FeatureImageController::class,'index']);
Route::post('/store_feature_image_home',[FeatureImageController::class,'storeFeatureImage']); 
Route::get('/view_feature_image_home', [FeatureImageController::class,'view']);
Route::post('/change_feature_image_home_status', [FeatureImageController::class,'changeFIHStatus']);
Route::delete('/delete_feature_image_home/{id}', [FeatureImageController::class,'deleteImage']);
Route::get('/edit_fih/{id}', [FeatureImageController::class,'editFIH']);
Route::put('/update_fih', [FeatureImageController::class,'updateFIH']);


Route::get('/add_slider_home', [SliderHomeController::class,'addSlider']);
Route::post('/store_slider_home', [SliderHomeController::class,'storeSlider']);
Route::get('/view_slider_home', [SliderHomeController::class,'index']);
Route::delete('/delete_slider_home/{id}', [SliderHomeController::class,'deleteSlider']);
Route::post('/change_slider_status_home', [SliderHomeController::class,'changeSliderStatus']);
Route::get('/edit_slider_home/{id}', [SliderHomeController::class,'editSlider']);
Route::put('/update_slider_home', [SliderHomeController::class,'updateSlider']);

Route::post('/contact_form_home', [ContactFormHomeController::class,'storeForm']);
Route::get('/view_form_home', [ContactFormHomeController::class,'index']);
Route::get('/view_contact_form_home/{id}', [ContactFormHomeController::class,'view']);



Route::get('/edit_video_home/{id}', [VideoHomeController::class,'editVideo']);
Route::put('/update_video_home', [VideoHomeController::class,'updateVideo']);


Route::get('/add_review_home', [ReviewHomeController::class,'addReview']);
Route::post('/store_review_home', [ReviewHomeController::class,'storeReview']);
Route::get('/view_review_home', [ReviewHomeController::class,'index']);
Route::delete('/delete_review_home/{id}', [ReviewHomeController::class,'deleteReview']);
Route::get('/edit_review_home/{id}', [ReviewHomeController::class,'editReview']);
Route::put('/update_review_home', [ReviewHomeController::class,'updateReview']);


Route::get('/add_msg_home', [MsgHomeController::class,'addMsg']);
Route::post('/store_msg_home', [MsgHomeController::class,'storeMsg']);
Route::get('/view_msg_home', [MsgHomeController::class,'index']);
Route::delete('/delete_msg_home/{id}', [MsgHomeController::class,'deleteMsg']);
Route::get('/edit_msg_home/{id}', [MsgHomeController::class,'editMsg']);
Route::put('/update_msg_home', [MsgHomeController::class,'updateMsg']);


Route::get('/add_faq_home', [FaqHomeController::class,'addFAQ']);
Route::post('/store_faq_home', [FaqHomeController::class,'storeFAQ']);
Route::get('/view_faq_home', [FaqHomeController::class,'index']);
Route::delete('/delete_faq_home/{id}', [FaqHomeController::class,'deleteFAQ']);
Route::get('/edit_faq_home/{id}', [FaqHomeController::class,'editFAQ']);
Route::put('/update_faq_home', [FaqHomeController::class,'updateFAQ']);


Route::group(['middleware'=>'admin_auth'],function(){
            Route::get('/admin_profile', [AdminController::class,'adminProfile']);
            Route::get('/edit_admin_profile/{id}', [AdminController::class,'ediAdminProfile']);
            Route::put('/update_admin_profile/{id}', [AdminController::class,'updateAdminProfile']);
            Route::get('/dashboard', [AdminController::class,'dashboard']);
            Route::get('/change_password', [AdminController::class,'changePassword']);
            Route::put('/update_password/{id}', [AdminController::class,'updatePassword']);
            
            ////////////////////////// SliderController ///////////////////////////////////////////////
            Route::get('/add_slider', [SliderController::class,'addSlider']);
            Route::post('/store_slider', [SliderController::class,'storeSlider']);
            Route::get('/view_slider', [SliderController::class,'index']);
            Route::get('/edit_slider/{id}', [SliderController::class,'editSlider']);
            Route::post('/change_slider_status', [SliderController::class,'changeSliderStatus']);
            Route::put('/update_slider', [SliderController::class,'updateSlider']);
            Route::delete('/delete_slider/{id}', [SliderController::class,'deleteSlider']);
            
            Route::post('/update_smart_gallery', [SliderController::class,'updateSmartGallery']);
            Route::get('/delete_smart_gallery_image/{id}/{smart_feature_id}', [SliderController::class,'deleteSmartGalleryImage']);
            Route::get('/change_smart_feature_gallery_image/{id}', [SliderController::class,'changeSmartFeatureGalleryImage']);
            
            ////////////////////////// DesktopController ///////////////////////////////////////////////
            Route::get('/add_desk_top', [DesktopController::class,'addDeskTop']);
            Route::post('/store_desk_top', [DesktopController::class,'storeDeskTop']);
            Route::post('/get_top_price', [DesktopController::class,'getTopPrice']);
            Route::get('/view_desk_top', [DesktopController::class,'index']);
            Route::post('/change_desk_top_status', [DesktopController::class,'changeDeskTopStatus']);
            Route::delete('/delete_desk_top/{id}', [DesktopController::class,'deleteDeskTop']);
            Route::get('/edit_desk_top/{id}', [DesktopController::class,'editDeskTop']);
            Route::put('/update_desk_top', [DesktopController::class,'updateDeskTop']);
            Route::get('/remove_desk_topgall/{top_id}/{gall_id}', [DesktopController::class,'removeDeskTopgall']);
            
            ////////////////////////// DeskbottomController ///////////////////////////////////////////////
            Route::get('/add_desk_bottom', [DeskbottomController::class,'addDeskBottom']);
            Route::post('/store_desk_bottom', [DeskbottomController::class,'storeDeskBottom']);
            Route::post('/get_bottom_price', [DeskbottomController::class,'getBottomPrice']);
            Route::get('/view_desk_bottom', [DeskbottomController::class,'index']);
            Route::post('/change_desk_bottom_status', [DeskbottomController::class,'changeDeskBottomStatus']);
            Route::delete('/delete_desk_bottom/{id}', [DeskbottomController::class,'deleteDeskBottom']);
            Route::get('/edit_desk_bottom/{id}', [DeskbottomController::class,'editDeskBottom']);
            Route::put('/update_desk_bottom', [DeskbottomController::class,'updateDeskBottom']);
            Route::get('/remove_desk_bottomgall/{bottom_id}/{gall_id}', [DeskbottomController::class,'removeDeskBottomgall']);
            
            ////////////////////////// CategoryController ///////////////////////////////////////////////
            Route::get('/add_category', [CategoryController::class,'addCategory']);
            Route::post('/store_category', [CategoryController::class,'storeCategory']);
            Route::get('/view_categories', [CategoryController::class,'index']);
            Route::get('/edit_category/{id}', [CategoryController::class,'editCategory']);
            Route::put('/update_category/{id}', [CategoryController::class,'updateCategory']);
            Route::delete('/delete_category/{id}', [CategoryController::class,'deleteCategory']);
            Route::post('/change_category_status', [CategoryController::class,'changeCategoryStatus']);
            
            ////////////////////////// COUPONS ///////////////////////////////////////////////
            Route::get('/coupons_list', [CategoryController::class,'couponsList']);
            Route::get('/add_coupons', [CategoryController::class,'addCoupons']);
            Route::get('/store_coupon', [CategoryController::class,'storeCoupon']);
            Route::post('/change_coupon_status', [CategoryController::class,'changeCouponStatus']);
            Route::delete('/delete_coupon/{id}', [CategoryController::class,'deleteCoupon']);
            Route::get('/edit_coupon/{id}', [ProductController::class,'editCoupons']);
            Route::post('/store_edited_coupon/{id}', [ProductController::class,'storeEditedCoupon']);






            
            ////////////////////////// ProductController ///////////////////////////////////////////////
            Route::get('/add_product', [ProductController::class,'addProduct']);
            Route::post('/store_product', [ProductController::class,'storeProduct']);
            Route::get('/view_products', [ProductController::class,'index']);
            Route::get('/edit_product/{id}', [ProductController::class,'editProduct']);
            Route::put('/update_product', [ProductController::class,'updateProduct']);
            Route::delete('/delete_product/{id}', [ProductController::class,'deleteProduct']);
            Route::post('/change_product_status', [ProductController::class,'changeProductStatus']);
            Route::post('/change_status_customized', [ProductController::class,'changeProductCustomized']);
            Route::post('/change_status_image', [ProductController::class,'changeStatusImage']);


            Route::get('/view_deactivated_products', [ProductController::class,'inactiveProducts']);
            Route::get('/change_gallery_image/{id}', [ProductController::class,'changeGalleryImage']);
            Route::post('/update_product_gallery', [ProductController::class,'updateProductGallery']);
            Route::get('/delete_gallery_image/{id}/{prod_id}', [ProductController::class,'deleteGalleryImage']);
            Route::post('/delete_product_img', [ProductController::class,'deleteProductImg']);

            ////////////////////////// SmartFeatureController ///////////////////////////////////////////////
            Route::get('/add_smart_feature', [SmartFeatureController::class,'addSmartFeature']);
            Route::post('/store_smart_feature', [SmartFeatureController::class,'storeSmartFeature']);
            Route::get('/view_smart_feature', [SmartFeatureController::class,'index']);
            Route::get('/edit_smart_feature/{id}', [SmartFeatureController::class,'editSmartFeature']);
            Route::post('/change_smart_feature_status', [SmartFeatureController::class,'changeSmartFeatureStatus']);
            Route::post('/change_sequence_smart_feature', [SmartFeatureController::class,'changeSmartFeatureSequence']);

            Route::put('/update_smart_feature', [SmartFeatureController::class,'updateSmartFeature']);
            Route::delete('/delete_smart_feature/{id}', [SmartFeatureController::class,'deleteSmartFeature']);
            Route::post('/update_smart_gallery', [SmartFeatureController::class,'updateSmartGallery']);
            Route::get('/delete_smart_gallery_image/{id}/{smart_feature_id}', [SmartFeatureController::class,'deleteSmartGalleryImage']);
            Route::get('/change_smart_feature_gallery_image/{id}', [SmartFeatureController::class,'changeSmartFeatureGalleryImage']);
            
              ////////////////////////// MaterialController ///////////////////////////////////////////////
            Route::get('/add_material', [MaterialController::class,'addMaterial']);
            Route::post('/store_material', [MaterialController::class,'storeMaterial']);
            Route::get('/view_materials', [MaterialController::class,'index']);
            Route::get('/edit_material/{id}', [MaterialController::class,'editMaterial']);
            Route::put('/update_material/{id}', [MaterialController::class,'updateMaterial']);
            Route::delete('/delete_material/{id}', [MaterialController::class,'deleteMaterial']);
            
            ////////////////////////// ColourController ///////////////////////////////////////////////
            Route::get('/add_colour', [ColourController::class,'addColour']);
              Route::get('/addNumber', [ColourController::class,'addNumber']);
              Route::post('/updatenumber', [ColourController::class,'updateNumber']);
            Route::post('/store_colour', [ColourController::class,'storeColour']);
            Route::get('/view_colours', [ColourController::class,'index']);
            Route::get('/edit_colour/{id}', [ColourController::class,'editColour']);
            Route::put('/update_colour/{id}', [ColourController::class,'updateColour']);
            Route::delete('/delete_colour/{id}', [ColourController::class,'deleteColour']);
            
            ////////////////////////// UserController ///////////////////////////////////////////////
            Route::get('/add_user', [UserController::class,'addUser']);
            Route::post('/store_user', [UserController::class,'storeUser']);
            Route::get('/view_users', [UserController::class,'index']);
            Route::get('/view_active_users', [UserController::class,'viewActiveUsers']);
            Route::get('/view_inactive_users', [UserController::class,'viewInActiveUsers']);
            Route::get('/edit_user/{user_id}', [UserController::class,'editUser']);
            Route::put('/update_user/{user_id}', [UserController::class,'updateUser']);
            Route::delete('/delete_user/{user_id}/{state}', [UserController::class,'deleteUser']);
            Route::get('/sub_alloted_user/{user_id}', [UserController::class,'subjectAllotedToUser']);
            Route::post('/store_sub_allotment', [UserController::class,'storeSubjectAllotedToUser']);
            Route::post('/change_user_status', [UserController::class,'changeUserStatus']);
            
            ////////////////////////// OrderController ///////////////////////////////////////////////
            Route::get('/view_all_orders', [OrderController::class,'index']);
            Route::get('/leads', [OrderController::class,'leads']);
            Route::get('/view_order_details/{order_id}', [OrderController::class,'viewOrderDetails']);
            Route::post('/change_order_status', [OrderController::class,'changeOrderStatus']);
            Route::post('/change_review_status', [OrderController::class,'changeReviewStatus']);
            Route::get('/view_iteam_review/{iteam_type}/{iteam_id}/{user_id}', [OrderController::class,'viewIteamReview']);
            Route::get('/track_order/{order_id}', [OrderController::class,'trackOrder']);
            Route::get('/download_lead', [OrderController::class,'downloadLead'])->name('download_lead');
           
            
                
    
    
});
