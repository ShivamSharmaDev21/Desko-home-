

<?php $__env->startSection('body'); ?>

<style>

    .ht100
    {
    height: 100vh;
    align-items: center;
    }
    .smart_feture_img
    {
    margin-top:2px;
    }
    .plus_count , .bottom_minus_count , .bottom_plus_count , .minus_count{
     display:none !important;   
    }
    #calculator
    {
        display:none;
    }
    .inputprice
    {
    font-size: 44px;
    width: 100%;
    color: black;
    letter-spacing: 2px;
    }
    .pricecontent h1
    {
        display: flex;
    align-items: center;
    }
    .pricecontent h3
    {
        font-size: 18px;
        margin-bottom: 1rem;
            cursor: pointer;
        color: #0d6efd;
        margin-top: 4px;
        text-decoration: underline;
    }
    .price {
    position: absolute;
    right: 60px;
    display: flex;
    align-items: center;
    top: -3px;
}
    .pricecontent
    {
    position: absolute;
        margin-top: -40px;
    right: 18%;
    z-index: 1000;
    }
    .btn_back
    {
    position: absolute;
    top: 60px;
    width: 80%;
    }
    .color_choose_table, .colorpicker
    {
      display:none;    
    }

.bg-set {
    background: #F8F8FA !important;
    padding: 2rem 0rem;
    margin-bottom: 7rem;
    margin-top: 0rem;
}
@media  only screen and (min-width: 1200px){
.h4, h4 {
    font-size: 1.8rem;
    line-height: 3rem;
}
}
@media  only screen and (min-width: 992px){
.mb-30 {
    margin-bottom: 2.5rem;
}
.mb--n30 {
    margin-bottom: -2.5rem;
}
.product__items--action__list {
    margin-right: 0.4rem;
}
.product__items--action__btn {
    padding: 0 0.8rem;
    /*height: 3.4rem;*/
    line-height: 2.3rem;
}

}
@media  only screen and (max-width: 768px){
    .pricecontent {
    position: relative;
    margin-top: -90px;
    right: 0%;
    z-index: 1000;
}
.product__items--action {
    opacity: 1 !important;
    visibility: visible !important;
    bottom: 1.2rem;
}
.product__items--action__cart--btn {
    opacity: 1 !important;
    visibility: visible !important;
}
.add__to--cart__text {
    display: none !important;
}
.mb-30 {
    margin-bottom: 2rem;
}
.h4, h4 {
    font-size: 14px !important;
}
  .bg-set {
    margin-top: -6rem !important;
    padding-top: 5rem !important;
    background: #f8f8fa9e !important;
}  
    
.inputprice {
    font-size: 30px !important;
}
}
.product__items--action__btn {
    /*height: 3.2rem;*/
    line-height: 2.3rem;
    padding: 0 0.6rem;
    color: var(--text-gray-color);
    background: var(--white-color);
    border-radius: 0.3rem;
}
.h4, h4 {
    font-size: 1rem;
}
.mb-100 {
    margin-bottom: 37px;
}
.tab_content {
    display: block;
}
.tab_pane.active {
    display: block;
}
.tab_pane.show {
    opacity: 1;
}
.tab_pane {
    display: none;
    -webkit-transition: var(--transition);
    transition: var(--transition);
}
.product__items:hover {
    box-shadow: 0px 0px 38px 0px rgb(6 16 35 / 11%);
}
.bg-set .product__items {
    border-radius: 18px;
    background-color: #fff;
    transition: 0.3s;
    position: relative;
    padding: 2.5rem 0px 0px !important;
}    
.product__items--thumbnail {
    position: relative;
    overflow: hidden;
    line-height: 1;
}
.product__items--link {
    text-align: center;
}
.product__items--link {
    display: block;
}
a, button, img, input, textarea {
    -webkit-transition: var(--transition);
    transition: var(--transition);
}
.product__items:hover .product__items--img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
}
.bg-set .product__items--img {
    width: 160px;
    height: 159px;
    display: inline-block;
}
img {
    max-width: 100%;
    height: auto;
}
.product__items:hover .product__items--action {
    opacity: 1;
    visibility: visible;
    bottom: 1.2rem;
}
ul:last-child {
    margin-bottom: 0;
}
.product__items--action {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0;
    visibility: hidden;
    /*-webkit-transition: var(--transition);*/
    /*transition: var(--transition);*/
}
.justify-content-center {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.justify-content-center {
    justify-content: center!important;
}
.d-flex {
    display: flex!important;
}
ul {
    margin: 0;
    padding: 0;
}
li {
    list-style: none;
    line-height: 1;
}
.product__items--action__list:last-child {
    margin-right: 0;
}
.product__items--content {
    padding: 1.8rem 1rem 1.5rem;
    border: 0px solid var(--border-color);
    border-top: 0;
}
.product__items--content__title {
    margin-bottom: 0.3rem;
}
.product__items--price {
    margin-bottom: 0.8rem;
}
.product__badge {
    position: absolute;
    top: 0;
    left: 1rem;
}
.product__items--action__btn {
    background: #dfdfdf;
}
.product__items--action__cart--btn {
    height: 3.2rem;
    line-height: 3.4rem;
    font-size: 1.4rem;
    padding: 0 1.3rem;
    opacity: 0;
    visibility: hidden;
}
.product__items:hover .product__items--action__cart--btn {
    opacity: 1;
    visibility: visible;
}
.primary__btn {
    font-weight: 600;
    display: inline-block;
    font-size: 1rem;
    line-height: 2.3rem;
    height: 2.4rem;
    padding: 0 1.5rem;
    letter-spacing: .2px;
    border-radius: 0.3rem;
    background: #2b638e;
    color: var(--white-color);
    border: 0;
}
.primary__btn:hover {
    background: #121a25;
    color: #fff;
}
a:hover {
    text-decoration: none;
    color: #2b638e;
}
a:hover {
    color: #0a58ca;
}

a, button {
    display: inline-block;
    cursor: pointer;
    -webkit-transition: var(--transition);
    transition: var(--transition);
    text-decoration: none;
    color: inherit;
}
span {
    display: inline-block;
    /*-webkit-transition: var(--transition);*/
    transition: var(--transition);
}
.product__items--action__btn:hover {
    background: #2b638e;
    color: #fff;
}
.old__price {
    /*font-size: 1.4rem;*/
    color: var(--light-color);
    font-weight: 600;
    text-decoration: line-through;
    margin-left: 0.4rem;
}
.current__price {
    /*font-size: 1.5rem;*/
    color: #2b638e;
    font-weight: 600;
}
.product__badge--items {
    width: 2.4rem;
    height: 4.9rem;
    background: #2b638e;
    color: #fff;
    font-size: 1rem;
    line-height: 4.3rem;
    text-align: center;
    -webkit-clip-path: polygon(0 0,100% 0,100% 100%,50% 74%,0 100%);
    clip-path: polygon(0 0,100% 0,100% 100%,50% 74%,0 100%);
}
.product__items--action__btn--svg {
    vertical-align: middle;
}
.visually-hidden {
    position: absolute!important;
    overflow: hidden;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
    word-wrap: normal!important;
}
.product__items--action__list {
    margin-right: 0.3rem;
}
.modal-content {
    /*width: 160%;*/
    margin-top: 4rem;
}
.product-right .pro-group .qty-box {
    margin-bottom: 15px;
}
.product-right .pro-group .qty-box {
    margin-bottom: 15px;
}
.qty-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.qty-box .input-group button:first-child:before {
    content: "\2d";
}
.qty-box .input-group button:last-child:before {
    content: "\2b";
}
textarea, input {
    letter-spacing: 0.05em;
}
.input-group {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}
.qty-box .input-group {
    -webkit-box-pack: unset;
    -ms-flex-pack: unset;
    justify-content: unset;
    width: unset;
}
.qty-box .input-group {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border: 1px solid #dddddd;
}
.qty-box .input-group button {
    background-color: transparent;
    cursor: pointer;
    line-height: 1;
    background-color: #ffffff;
    font-family: themify;
    padding-left: 10px;
    padding-right: 10px;
    border: none;
}
.qty-box .input-group .form-control {
    border-color: #dddddd;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.qty-box .input-group .form-control {
    text-align: center;
    width: 80px;
    -webkit-box-flex: unset;
    -ms-flex: unset;
    flex: unset;
    border-color: #dddddd;
    border-top: unset;
    border-bottom: unset;
}
.qty-box .input-group button {
    background-color: transparent;
    cursor: pointer;
    line-height: 1;
    background-color: #ffffff;
    font-family: themify;
    padding-left: 10px;
    padding-right: 10px;
    border: none;
}
.product-title {
    color: #333333;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1;
    font-size: calc(16px + (18 - 16) * ((100vw - 320px) / (1920 - 320)));
}
.product-right .pro-group:nth-child(n+2) {
    padding-top: 20px;
    border-top: 1px solid #dddddd;
}
.product-right .pro-group {
    padding-bottom: 20px;
}
.quick-view-img {
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.product-right .pro-group h2 {
    font-size: calc(16px + (22 - 16) * ((100vw - 320px) / (1920 - 320)));
    font-weight: 700;
    line-height: 1.2em;
    color: #333333;
    letter-spacing: 1px;
    margin-bottom: 5px;
    text-transform: capitalize;
}
.product-right .pro-group ul.pro-price {
    font-size: calc(14px + (22 - 14) * ((100vw - 320px) / (1920 - 320)));
    color: #444444;
    margin-bottom: 5px;
    text-transform: uppercase;
    font-weight: 700;
    line-height: 1;
}
.product-right .pro-group ul.pro-price li span {
    color: #8a8a8a;
    font-size: 80%;
}
.product-right .pro-group ul.pro-price span {
    text-decoration: line-through;
    color: #777777;
    font-size: 80%;
    font-weight: 500;
}
.product-right .pro-group ul.pro-price li {
    text-transform: capitalize;
}
li {
    display: inline-block;
}
.modal-body .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
}
.modal .btn-close {
    background-color: white;
    opacity: 001;
    border-radius: 21%;
    float: right;
}
@media (min-width: 576px){
.modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}
}
</style>
 <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
  </head>

  <body>
<section class="product__section section--padding bg-set">
            <div class="container-fluid">
                <div class="section__heading text-center mb-30">
                    <h2 class="section__heading--maintitle mb-100"></h2>
                </div>
                <div class="tab_content">
                    <div id="chair" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <?php if(isset($products) && count($products)>0): ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#">
                                                <img class="product__items--img product__primary--img" src="<?php echo e(URL::asset('admin/public/feature_image/'.$product->feature_image)); ?>" alt="product-img">
                                                <!-- <img class="product__items--img product__secondary--img" src="assets/img/product/product12.webp" alt="product-img"> -->
                                            </a>
                                            <ul class="product__items--action d-flex justify-content-center">
                                                <li class="product__items--action__list">
                                                    
                                                    <!--<a class="product__items--action__btn" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($product->prod_id); ?>">-->
                                                    <a class="product__items--action__btn" href="<?php echo e(url('/product-detail/'.$product->prod_id)); ?>">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="<?php echo e(url('/add-to-wishlist/'.$product->prod_id)); ?>">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            
                                            <h3 class="product__items--content__title h4"><a href="#"><?php echo e($product->prod_name); ?></a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price"><i class="far fa-rupee-sign mr5"></i><?php echo e($product->offer_price); ?></span>
                                                <span class="old__price"><i class="far fa-rupee-sign mr5"></i><?php echo e($product->mrp_price); ?></span>
                                            </div>
                                            
                                            <a class="product__items--action__cart--btn primary__btn" href="<?php echo e(url('/add-to-cart/'.$product->prod_id)); ?>">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Add to cart</span>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
<!-- Modal Quick View -->
<div class="modal fade" id="exampleModal<?php echo e($product->prod_id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       <div class="row">
               <div class="col-lg-6 col-xs-12">
                  <div class="quick-view-img bg-size" >
                     <img id="ajimg_src" src="<?php echo e(URL::asset('admin/public/feature_image/'.$product->feature_image)); ?>" alt="" class="img-fluid bg-img" style="display: block;">
                  </div>
               </div>
               <div class="col-lg-6 rtl-text">
                  <div class="product-right">
                     <div class="pro-group">
                        <h2 class="pro_name"><?php echo e($product->prod_name); ?></h2>
                        <ul class="pro-price">
                           <li id="ajpro_price">Rs <?php echo e($product->offer_price); ?></li>
                           <li><span id="mrppro_price">mrp Rs <?php echo e($product->mrp_price); ?></span></li>
                           <!--<li>50% off</li>-->
                        </ul>
                       
                     </div>
                     <div class="pro-group">
                        <h6 class="product-title">product infomation</h6>
                        <p id="ajpro_info"><p><?php echo e(strip_tags($product->description)); ?></p></p>
                     </div>
                     <div class="pro-group pb-0">
               
                        <h6 class="product-title">quantity</h6>
                        <form method="post" action="<?php echo e(url('add_cart')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="qty-box">
                           <!--<div class="input-group">-->
                           <!--   <button class="qty-minus"></button>-->
                           <!--   <input id="prodQty" name="qty" class="qty-adj form-control" type="number" value="5">-->
                           <!--   <button class="qty-plus"></button>-->
                           <!--</div>-->
                           <div class="input-group" >
                                <button type="button" id="sub" class="sub"></button>
                                <input type="number"  name="qty" class="qty-adj form-control prodQty" value="1" min="1"/>
                                <button type="button" id="add" class="add"></button>
                            </div>
                        </div>
                        
                        <div class="product-buttons">
                             <input type="hidden" id="prodId" name="prod_id" value="<?php echo e($product->prod_id); ?>">
                             
                            <button type="submit">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                           </button>
                         
                                                      <!--<a href="javascript:void(0)" class="btn btn-normal tooltip-top"  data-tippy-content="view detail">-->
                           <!--   view detail-->
                           <!--</a>-->
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
       <!-- Button trigger modal -->



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
<script type='text/javascript'>
       function screenshot(e){
            e = e || window.event;
    e.preventDefault();
     let div_element = document.getElementById('screenshot');
        
       html2canvas(div_element).then(function(canvas){

      // document.body.appendChild(canvas);

         // Get base64URL
         var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
          // alert(canvas.toDataURL());
         // AJAX request
         $.ajax({
            url:  "<?php echo e(url('capture_image_script')); ?>",
            type: 'post',
            data: {
                image: base64URL,
                _token: "<?php echo e(csrf_token()); ?>"
                
            },
            
            success: function(data){
               console.log('Upload successfully');
                $("#captured_desk_image").val(data);
                //alert($("#captured_desk_image").val());
                $("#myForm").submit();
            }
         });
       });  
        
       }
     </script>
       
        <script>
           
            $('.add').click(function () {
               
                var plsqty=parseInt($('.prodQty').val());
                $('.prodQty').val((plsqty+1));
            	
            });
            $('.sub').click(function () {
                 var qty=parseInt($('.prodQty').val());
            		if (qty == 1) {
            		}else{
            		   $('.prodQty').val((qty-1));  
            		}
            });
        </script>
<script>
        $( document ).ready(function() {
           set_table_pick();
        });
    function set_table_pick(){
         $('.top_active_input').removeClass('top_active_input');
         $('.bottom_active_input').removeClass('bottom_active_input');
          
        $('.row1_col0').addClass('top_active_input');
        $('.bottom_row1_col0').addClass('bottom_active_input');
        
         $(".row1_col0 input[name='top_colorradio']").prop('checked', true);
         $(".bottom_row1_col0 input[name='bottom_colorradio']").prop('checked', true);
     
         let top_id=1+'_aj_'+0;
         let bottom_id=1+'_ay_'+0;
          $('.checked_inputs').removeClass("checked_inputs");
          $('.checked_inputb').removeClass("checked_inputb");
         $('#'+top_id).addClass("checked_inputs");
         $('#'+bottom_id).addClass("checked_inputb");
         
          var count_tops=$('.pickimg').attr("count_data");
          $('.minus_count').attr("minus_topno_data",count_tops);
          $('.plus_count').attr("plus_topno_data",2);
          
          var count_bottoms=$('.pickbottom_img').attr("count_data");
          $('.bottom_minus_count').attr("minus_bottomno_data",count_bottoms);
          $('.bottom_plus_count').attr("plus_bottomno_data",2);
                //   $("#calculator input[name='addprice[]']:checked").each(function(){
                      if($( ".power_mange" ).prop("checked") == true){
                          $('.power_mange_img,.pmprice').removeClass('dark-mode').addClass('showimg1'); 
                          var power_mange_price=parseInt($(".power_mange" ).attr('data_smart_price'));
                       $('.pmprice td:nth-child(2)').html('<i class="fa-solid fa-indian-rupee-sign mr5"></i>'+power_mange_price);
                      }
                      if($( ".footrest" ).prop( "checked") == true){
                          $('.footrest_img, .ftprice').removeClass('dark-mode').addClass('showimg1'); 
                          var footrest_price=parseInt($( ".footrest" ).attr('data_smart_price'),10);
                        $('.ftprice td:nth-child(2)').html('<i class="far fa-rupee-sign mr5"></i>'+footrest_price);
                      }
                      if($( ".wirles_charge" ).prop( "checked") == true){
                          $('.smart_feture_img, .smprice').removeClass('darkmode').addClass('showimg1'); 
                           var wirles_charge_price=parseInt($( ".wirles_charge" ).attr('data_smart_price'),10);
                        $('.smprice td:nth-child(2)').html('<i class="far fa-rupee-sign mr5"></i>'+wirles_charge_price);
                      }
                      if($( ".drawer" ).prop( "checked") == true){
                          $('.drawer_img, .sdprice').removeClass('dark-mode').addClass('showimg1');
                           var drawer_price=parseInt($( ".drawer" ).attr('data_smart_price'),10);
                            $('.sdprice td:nth-child(2)').html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
                      }
                      if($( ".wheels" ).prop( "checked") == true){
                          $('.wheels_img, .wsprice').removeClass('').addClass('showimg1');
                           var wheels_price=parseInt($( ".wheels" ).attr('data_smart_price'),10);
                             $('.wsprice td:nth-child(2)').html('<i class="far fa-rupee-sign mr5"></i>'+wheels_price);
                      }
                      
        
         var  total_price = ((top_price)?top_price:0 )+ ((bottom_price)?bottom_price:0) + ((power_mange_price)?power_mange_price:0 )+ ((footrest_price)?footrest_price:0) + ((wirles_charge_price)?wirles_charge_price:0) + ((drawer_price)?drawer_price:0) + ((wheels_price)?wheels_price:0);
       
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".basic_desk td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+(top_price+bottom_price));
                   
                // });
    }

</script>
 </body>
   <?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cwsinnim/public_html/deskohome/resources/views/view-products.blade.php ENDPATH**/ ?>