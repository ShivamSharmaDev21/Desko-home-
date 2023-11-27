

<?php $__env->startSection('body'); ?>
<style>
@media  only screen and (max-width: 768px){
    .h5, h5 {
    font-size: 1.05rem;
}

.manage-slide{
    margin-top:70px;
}
.manage-slide-bottom {
    margin-bottom: 3rem !important;
}
.smart_feture .smart_slider img {
    height: 50px;
    width: 50% !important;
}
.pricesmart{
    width:100% !important;
}
.slick-next {
    right: -15px !important;
}
.slider-top .arrow_coustom .fal{
    margin-top:-25px;
}
.slider-bottom .arrow_coustom .fal{
    margin-top:110px;
}
.color_choose_table{
       margin-top: 5rem !important;
}
#expand{
    color:red;
}

}
</style>
      <!--<div id="loader">-->
      <!--    <img src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" alt="loader image">-->
      <!--</div> -->
    <div id="page">
      <div class="flr-wrap" style="margin-top: 2rem;">

        <div class="">
          <div class="btn-group dropend">
           <!--   <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Frames
            </button> -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item button active" href="#" data-rel="#content-1"><img src="<?php echo e(asset('public/assets/img/small_desk.JPG')); ?>"></a></li>
              <li><a class="dropdown-item button" href="#" data-rel="#content-2"><img src="<?php echo e(asset('public/assets/img/big_desk.JPG')); ?>"></a></li>
            </ul>
          </div><br>
        </div>
      </div>
      <form method="post" action="<?php echo e(url('flagship_workstations')); ?>">
          <?php echo csrf_field(); ?>
      <div class="m_mobile" style="width: 100%;">
        <div class="container">
          <div class="">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="smart_feture text-center mb-5">
                  <h5 class="mb-4"><?php echo e((!empty($smart_count))?$smart_count:''); ?> Smart Features Scroll (Multi-Select)</h5>

                  <div class="" id="calculator">

                  <div class="smart_slider">  
                    <?php if(isset($smart_features) && count($smart_features)>0): ?>
                    <?php $__currentLoopData = $smart_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                      <a href="#" class="smart_title wirles_charge"  id ="wirles_charge">
                        <div class="inputbox">
                           <label class="pricesmart" for="wirles_price">
                           <input type="checkbox" name="addprice" id="wirles_price" store="checkbox1" value="<?php echo e($s_f->price); ?>">
                           <span><img src="<?php echo e(asset('admin/public/smart_feature_image/'.$s_f->image)); ?>"> 
                            <p><?php echo e($s_f->feature_name); ?></p>
                           </span>
                        </label>
                      </div>
                       </a>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                
                  </div>

              </div>
            </div>
         
              <div class="top_slider">

                  <div class="text1 desk small_desk active_desk" id="content-1">
                    <!--<div class="smart_feture_img">-->
                    <!--  <img src="<?php echo e(asset('public/assets/img/smart/sm1.png')); ?>">-->
                    <!--</div>-->
                    <div class="slider  slider-top">
                    <?php if(isset($desktops) && count($desktops)>0): ?>
                    <?php $i=1; ?>
                    <?php $__currentLoopData = $desktops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div>
                        <div class="color_choose_table">
                          <h5>Top Color</h5>
                           <div class="colorpicker top_color_first">
                               <?php  $gall_clr_ids=DB::table('top_gallery')->orderBy('id','asc')->where('top_id','=',$top->top_id)->select('colour_id')->get();?>
                              <?php if(isset($gall_clr_ids) && count($gall_clr_ids)>0): ?>
                              <?php $j=0; ?>
                                 <?php $__currentLoopData = $gall_clr_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_clr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if (in_array($top_clr->colour_id, $colour_arr))
                                  { $colour_val= App\Models\Colour::where('id',$top_clr->colour_id)->first();
                                    //echo "<pre>"; echo($colour_val);die;
                                  ?>
                            <div class=""style="background-color:<?php echo e($colour_val->colour_value); ?>">
                              <label class="style_color active_input row<?=$i;?>_col<?=$j;?>"  count_data="<?=count($desktops);?>" data-rel="#checkeds" >
                                <input type="radio" class=" pickimg " name="colorradio" row_data="<?=$i?>" c_data="<?=$j?>" count_data="<?=count($desktops);?>" value="<?php echo e($colour_val->colour_value); ?>">
                                <span ></span>
                              </label>
                            </div>
                           
                                    <?php $j++; } ?>
                           
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                          </div>
                        </div>
                        <div class="manage-slide">
                               <?php $b=0; 	
                             $top_imges=DB::table('top_gallery')->orderBy('id','asc')->where('top_id','=',$top->top_id)->select('image')->get(); 
                                //echo "<pre>"; print_r($topimges);die;
                                if(isset($top_imges) && count($top_imges)>0){
                             foreach($top_imges as $top_img){ ?>
                            
                           
                           <div class="imgdesk gray1 "id="<?=$i.'_aj_'.$b?>">
                            <img src="<?php echo e(URL::asset('admin/public/desk_top_image/'.$top_img->image)); ?>" >
                          </div>
                         <?php $b++; } } ?>
                          <div class="price">
                          
                          <h3>&nbsp;&nbsp;<i class="fas fa-info-circle mr5 price01" data-bs-toggle="modal" data-bs-target="#myModal"></i>
                            &nbsp;<i class="far fa-rupee-sign"></i><input class="price-title " type="texxt" value="<?php echo e($top->top_price); ?>" readonly /></h3>
                          </div>
                        </div>
                      </div>
                      <?php $i++;?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                     

                    </div>

                    <!-- power management image -->
                    <div class="power_mange_img">
                      <img src="<?php echo e(asset('public/assets/img/smart/sm2.png')); ?>">
                    </div>
                    
                    <!-- Footrest image -->
                     <div class="footrest_img">
                      <img src="<?php echo e(asset('public/assets/img/smart/sm3.png')); ?>">
                    </div>

                    <!-- drawer image -->
                     <div class="drawer_img">
                      <img src="<?php echo e(asset('public/assets/img/smart/sm4.png')); ?>">
                    </div>
               

                <!-- wheels image -->
                     <div class="wheels_img">
                      <img src="https://static.connect2india.com/c2icd/product_resources/images/table-wheel.jpg">
                    </div>
                    <div class="wheels_img" style="width: 35.9%;margin-top: 185px;right: 28px;">
                      <img src="https://static.connect2india.com/c2icd/product_resources/images/table-wheel.jpg">
                    </div>

                    <div class="slider slider-bottom">

                      <!-- first slide - -->
                      <div>

                      <div class="manage-slide-bottom">

                          <div class="imgleg whiteleg checked_inputb"  id="checkedb1">
                            <img src="<?php echo e(asset('public/assets/img/bot2.png')); ?>">
                          </div>

                          <div class="imgleg blackleg" id="checkedb2">
                            <img src="<?php echo e(asset('public/assets/img/bot1.png')); ?>"> 
                          </div>

                          <div class="imgleg darkblack" id="checkedb3">
                            <img src="<?php echo e(asset('public/assets/img/bot4.png')); ?>">
                          </div>

                        </div>
                        
                        <div class="plus-popup">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal1">
                            <div class="expand-container" >
                          <div class="plus-area">
                            <div class="plus">
                              <div class="cover ne"></div>
                              <div class="cover nw"></div>
                              <div class="cover se"></div>
                              <div class="cover sw"></div>
                            </div>
                          </div>
                        </div>
                        </a>
                       </div>
                        <div class="color_choose_table">
                          <h5>Bottom Color</h5>
                          <div class="colorpicker">
                              
                            <div class="whitesmoke">
                              <label class="style_color colorbot active_input" data-rel="#checkedb1">
                                <input type="radio" name="lagradio" value="whiteleg">
                                <span></span>
                              </label>
                            </div>

                            <div class="black">
                              <label class="style_color colorbot" data-rel="#checkedb2">
                                <input type="radio" name="lagradio" value="blackleg">
                                <span></span>
                              </label>
                            </div>

                            <div class="darkblack">
                              <label class="style_color colorbot" data-rel="#checkedb3">
                                <input type="radio" name="lagradio" value="darkblack">
                                <span></span>
                              </label>
                            </div>
                          </div>
                      </div>
                       
                      
                      
                       
                      </div>

                      <!-- second slide  -->
                      <div>

                        <div class="manage-slide-bottom">
                          <div class="imgleg1 botblue checked_inputbs" id="checkedbs1">
                            <img src="<?php echo e(asset('public/assets/img/botblue.png')); ?>" >
                          </div>

                          <div class="imgleg1 botgreen" id="checkedbs2">
                            <img src="<?php echo e(asset('public/assets/img/botgreen.png')); ?>" >
                          </div>

                          <div class="imgleg1 botyellow" id="checkedbs3">
                            <img src="<?php echo e(asset('public/assets/img/botyellow.png')); ?>" >
                          </div>

                        </div>
                         <div class="plus-popup">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal1">
                            <div class="expand-container" >
                          <div class="plus-area">
                            <div class="plus">
                              <div class="cover ne"></div>
                              <div class="cover nw"></div>
                              <div class="cover se"></div>
                              <div class="cover sw"></div>
                            </div>
                          </div>
                        </div>
                        </a>
                       </div>
                        <div class="color_choose_table">
                          <h5>Bottom Color</h5>
                          <div class="colorpicker">

                            <div class="botblue">
                              <label class="style_color colorbots active_input" data-rel="#checkedbs1">
                                <input type="radio" name="lagradio_one" value="botblue">
                                <span></span>
                              </label>
                            </div>

                            <div class="botgreen">
                              <label class="style_color colorbots" data-rel="#checkedbs2">
                                <input type="radio" name="lagradio_one" value="botgreen">
                                <span></span>
                              </label>
                            </div>

                            <div class="botyellow">
                              <label class="style_color colorbots" data-rel="#checkedbs3">
                                <input type="radio" name="lagradio_one" value="botyellow">
                                <span></span>
                              </label>
                            </div>
                          </div>
                          
                        </div>
                        
                      </div>
                      

                    </div>


                  </div>
                  <div class="desk big_desk" id="content-2">
                    <div class="color_choose_table">
                      <h5>Top Color</h5>
                      <div class="colorpicker">


                        <div class="lightgray">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="gray">
                            <span></span>
                          </label>
                        </div>

                        <div class="whitesmoke">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="white">
                            <span></span>
                          </label>
                        </div>

                        <div class="black">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="black">
                            <span></span>
                          </label>
                        </div>

                        <div class="darkblack">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="darkblackleg">
                            <span></span>
                          </label>
                        </div>
                      </div>

                    </div>

                    <div class="slider  slider-top">

                      <!-- first slide - -->
                      <div>
                        <div class="manage-slide">
                          <div class="imgdesk gray" style="display: block;">
                            <img src="<?php echo e(asset('public/assets/img/big/top4.png')); ?>')}}">
                          </div>

                          <div class="imgdesk white">
                            <img src="<?php echo e(asset('public/assets/img/big/top3.png')); ?>')}}">
                          </div>

                          <div class="imgdesk black">
                            <img src="<?php echo e(asset('public/assets/img/big/top2.png')); ?>')}}">
                          </div>
                          <div class="imgdesk darkblackleg">
                            <img src="<?php echo e(asset('public/assets/img/big/top1.png')); ?>')}}">
                          </div>

                          <div class="price">
                            <h3>Price : 15689/-</h3>
                          </div>
                        </div>

                      </div>

                      <!-- second slide - -->
                      <div>
                        <div class="manage-slide">
                          <div class="imgdesk gray" style="display: block;">
                            <img src="<?php echo e(asset('public/assets/img/big/top4.png')); ?>')}}">
                          </div>

                          <div class="imgdesk white">
                            <img src="<?php echo e(asset('public/assets/img/big/top3.png')); ?>')}}">
                          </div>

                          <div class="imgdesk black">
                            <img src="<?php echo e(asset('public/assets/img/big/top2.png')); ?>')}}">
                          </div>
                          <div class="imgdesk darkblackleg">
                            <img src="<?php echo e(asset('public/assets/img/big/top1.png')); ?>')}}">
                          </div>

                          <div class="price">
                            <h3>Price : 18589/-</h3>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="slider slider-bottom">

                      <!-- first slide -->
                      <div>
                        <div class="manage-slide-bottom">
                          <div class="imgleg whiteleg" style="display: block;">
                            <img src="<?php echo e(asset('public/assets/img/big/bot1.png')); ?>')}}">
                          </div>

                          <div class="imgleg blackleg">
                            <img src="<?php echo e(asset('public/assets/img/big/bot3.png')); ?>')}}">
                          </div>

                          <div class="imgleg darkblack">
                            <img src="<?php echo e(asset('public/assets/img/big/bot1.png')); ?>')}}">
                          </div>

                        </div>
                      </div>

                      <!-- second slide  -->
                      <div>
                        <div class="manage-slide-bottom">
                          <div class="imgleg whiteleg" style="display: block;">
                            <img src="<?php echo e(asset('public/assets/img/big/bot1.png')); ?>')}}">
                          </div>

                          <div class="imgleg blackleg">
                            <img src="<?php echo e(asset('public/assets/img/big/bot3.png')); ?>')}}">
                          </div>

                        </div>
                      </div>

                    </div>

                    <div class="color_choose_table">
                      <h5>Bottom Color</h5>
                      <div class="colorpicker">

                        <div class="whitesmoke">
                          <label class="style_color">
                            <input type="radio" name="lagradio" value="whiteleg">
                            <span></span>
                          </label>
                        </div>

                        <div class="black">
                          <label class="style_color">
                            <input type="radio" name="lagradio" value="blackleg">
                            <span></span>
                          </label>
                        </div>

                      </div>

                    </div>



                    <!-- <div class="slider nav-bottom">
                      <div><img src="assets/img/big/bot4.png"></div>
                      <div><img src="assets/img/big/bot2.png"></div>
                      <div><img src="assets/img/big/bot3.png"></div>
                      <div><img src="assets/img/big/bot1.png"></div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button  type="submit" class="btn btn-primary ">Next</button>
                <!--<a href="#" type="button" class="btn btn-primary next_buy" id="btnset">Next</a>-->
                <!--<img id="img" src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif">-->
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>

    </div>
<!--Model-->
<div class="modal" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Whats included</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="slider slider-bottom" id="slider-bottom">

                      <!-- first slide  -->
                      <div>

                      <div class="manage-slide-bottom">

                          <div class="imgleg whiteleg checked_inputb"  id="checkedb1">
                            <img src="<?php echo e(asset('public/assets/img/bot2.png')); ?>">
                          </div>

                          <div class="imgleg blackleg" id="checkedb2">
                            <img src="<?php echo e(asset('public/assets/img/bot1.png')); ?>"> 
                          </div>

                          <div class="imgleg darkblack" id="checkedb3">
                            <img src="<?php echo e(asset('public/assets/img/bot4.png')); ?>">
                          </div>

                        </div>
                        
                       
                      </div>

                      <!-- second slide  -->
                      <div>

                        <div class="manage-slide-bottom">
                          <div class="imgleg1 botblue checked_inputbs" id="checkedbs1">
                            <img src="<?php echo e(asset('public/assets/img/botblue.png')); ?>" >
                          </div>

                          <div class="imgleg1 botgreen" id="checkedbs2">
                            <img src="<?php echo e(asset('public/assets/img/botgreen.png')); ?>" >
                          </div>

                          <div class="imgleg1 botyellow" id="checkedbs3">
                            <img src="<?php echo e(asset('public/assets/img/botyellow.png')); ?>" >
                          </div>

                        </div>
                        
                        
                      </div>
                      
                       
                    </div>
                </div>
                 <div class="col-sm-6">
                    <h5>Desk</h5>
                    <h6>Leg, adjustable</h6>
                    <span>Black</span>
                    <span>Min. height: 60 cm, Max. height: 90 cm, Max. load: 13 kg</span>
                    <span class="price-pop"><h1>&#8377;550</h1></span>
                    <a href="#">View more product information</a>
                 </div>
                       
            </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
      <div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <!--<h5 class="modal-title" id="exampleModalLabel">What's included</h5>-->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
             <div class="">
                    <table class="table table-bordered table-dark mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                            <td>Desk 120x60 cm</td>
                            <td><i class="far fa-rupee-sign mr5"></i>5000</td>
                          </tr>
                          <tr class="snone smprice">
                            <td>Wireless Charger</td>
                            <td><i class="far fa-rupee-sign mr5"></i>999</td>
                          </tr>
                          <tr class="snone pmprice">
                            <td>Power Management</td>
                            <td><i class="far fa-rupee-sign mr5"></i>1000</td>
                          </tr>
                           <tr class="snone sdprice">
                            <td>Sleek Drawer</td>
                            <td><i class="far fa-rupee-sign mr5"></i>3000</td>
                          </tr>
                           <tr class="snone wsprice">
                            <td>Wheels</td>
                            <td><i class="far fa-rupee-sign mr5"></i>1001</td>
                          </tr>
                          <tr class="snone ftprice">
                            <td>Footrest</td>
                            <td><i class="far fa-rupee-sign mr5"></i>500</td>
                          </tr> 
                          <tr>
                            <td><strong>Total Pay</strong></td>

                            <td>    
                                    <div class="price_content">
                                     <i class="far fa-rupee-sign"></i>
                                     <input class="price-title price_total" type="texxt" value="" readonly />
                                   </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>    
                    </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">What's included</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
             <div class="">
                    <table class="table table-bordered table-dark mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Desk 140x60 cm</td>
                            <td><i class="far fa-rupee-sign mr5"></i>8000</td>
                          </tr>
                          <tr class="snone smprice">
                            <td>Wireless Charger</td>
                            <td><i class="far fa-rupee-sign mr5"></i>999</td>
                          </tr>
                          <tr class="snone pmprice">
                            <td>Power Management</td>
                            <td><i class="far fa-rupee-sign mr5"></i>1000</td>
                          </tr>
                           <tr class="snone sdprice">
                            <td>Sleek Drawer</td>
                            <td><i class="far fa-rupee-sign mr5"></i>3000</td>
                          </tr>
                           <tr class="snone wsprice">
                            <td>Wheels</td>
                            <td><i class="far fa-rupee-sign mr5"></i>1001</td>
                          </tr>
                          <tr class="snone ftprice">
                            <td>Footrest</td>
                            <td><i class="far fa-rupee-sign mr5"></i>500</td>
                          </tr> 
                          <tr>
                            <td><strong>Total Pay</strong></td>

                            <td>    
                                    <div class="price_content">
                                     <i class="far fa-rupee-sign"></i>
                                     <input class="price-title price_totaltwo" type="texxt" value="" readonly />
                                   </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>    
                    </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login / SignUp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
	    
	    
	       <div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
    </div>

    <div id="login-form">
        <form>
            <labal>Email</labal>
            <input type="text" placeholder="Enter email or username" value="demo@gmail.com"/>
            <br>
            
            <labal>Password</labal>
            <input type="password" placeholder="Enter password"/>
            <br>
            <button type="button" class="btn login">login</button>
            <!--<p><a href="javascript:void(0)">Forgotten account</a></p>-->
            
        </form>
    </div>

    <div id="signup-form">
        <form>
            <labal>User Name</labal>
            <input type="text" placeholder="Enter username"/>
             <labal>Email</labal>
            <input type="email" placeholder="Enter your email" value="demo@gmail.com"/>
            
            <labal>Password</labal>
            <input type="password" placeholder="Create password"/>
            <button type="button" class="btn signup">create account</button>
            
            
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


<!--order-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>


        $( document ).ready(function() {
           set_top_pick();
        });
   
    function set_top_pick(){
         $('.active_input').removeClass('active_input');
          
        $('.row1_col0').addClass('active_input');
       
         let my_id=1+'_aj_'+0;
          $('.checked_inputs').removeClass("checked_inputs");
         $('#'+my_id).addClass("checked_inputs");
         
        //   var count_tops=$('#row1_col0').attr("count_data");
          var count_tops=$('.pickimg').attr("count_data");
           $('.minus_count').attr("minus_topno_data",count_tops);
           $('.plus_count').attr("plus_topno_data",2);
        
    }
    $('body').on('click', '.minus_count', function() {
       // alert($(this).attr("topno_data"));
        var next= $('.plus_count').attr("plus_topno_data");//3
             var row= $(this).attr("minus_topno_data");
            // alert(row+1)
            var coll= $('.pickimg').attr("c_data");
             var count_tops= $( '.pickimg').attr("count_data");
             
           // alert('rrr='+row+'ccc='+coll);
            $('.active_input').removeClass('active_input');
            $('.row'+row+'_col'+coll).addClass('active_input');
            
            let my_id=row+'_aj_'+coll;
             $('.checked_inputs').removeClass("checked_inputs");
             $('#'+my_id).addClass("checked_inputs");
             
            if(parseInt(next,10)==1){
                 //next=parseInt(count_tops,10)+1;
                 $('.plus_count').attr("plus_topno_data",parseInt(count_tops,10));
            }else{
                 $('.plus_count').attr("plus_topno_data",parseInt(next,10)-1);
             }
            if(parseInt(row,10)==1){
                 //row=parseInt(count_tops,10)+1;
                 $(this).attr("minus_topno_data",parseInt(count_tops,10));
            }else{
                 $(this).attr("minus_topno_data",parseInt(row,10)-1);
                }
            
                
     });
     $('body').on('click', '.plus_count', function() {
        //alert($(this).attr("topno_data"));
        
             var row= $(this).attr("plus_topno_data");
             var pre= $('.minus_count').attr("minus_topno_data");
              //  alert(pre)
            var coll= $('.pickimg').attr("c_data");
             var count_tops= $( '.pickimg').attr("count_data");
             
           // alert('rrr='+row+'ccc='+coll);
            $('.active_input').removeClass('active_input');
            $('.row'+row+'_col'+coll).addClass('active_input');
            
            let my_id=row+'_aj_'+coll;
             $('.checked_inputs').removeClass("checked_inputs");
             $('#'+my_id).addClass("checked_inputs");
             
             if(parseInt(row,10)==(count_tops)){ 
                    $(this).attr("plus_topno_data",1);
                }else{
                   $(this).attr("plus_topno_data",parseInt(row,10)+1);
                }
              if(parseInt(pre,10)==(count_tops)){
                  $('.minus_count').attr("minus_topno_data",1);
              }else{
               $('.minus_count').attr("minus_topno_data",parseInt(pre,10)+1);
              }
                
     });
     
  $('body').on('click', '.pickimg', function() {
    var row= $(this).attr("row_data");
    var coll= $(this).attr("c_data");
    //alert('rrr='+row+'ccc='+coll);
    $('.active_input').removeClass('active_input');
      $('.row'+row+'_col'+coll).addClass('active_input');
    // $(this).addClass('active_input');
    
    let my_id=row+'_aj_'+coll;
     $('.checked_inputs').removeClass("checked_inputs");
     $('#'+my_id).addClass("checked_inputs");
     
     console.log(my_id);
});
</script>
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/resources/views/home.blade.php ENDPATH**/ ?>