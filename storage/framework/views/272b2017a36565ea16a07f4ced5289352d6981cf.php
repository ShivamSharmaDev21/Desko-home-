<link  rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
<?php $__env->startSection('body'); ?>
<style>
  body {
	/*background: #eee;*/
	margin: 0;
	padding: 0;
	overflow-x: hidden;
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
}

#cart {
	width: 100%;
}

#cart h1 {
    font-weight: 400;
    /* padding-right: 5px; */
    width: 189px;
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

.product img {
    max-width: 100%;
}

.product header, .product .content {
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
    margin-right: 10px;
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
    display: flex;
    align-items: center;
    border-radius: 0px 5px 5px 0px;
}

.product h1 {
    color: #000;
    font-size: 18px;
    font-weight: 300;
    /* margin: 30px 0 20px 0; */
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
    font-size: 16px;
    font-weight: 700;
    line-height: 49px;
    margin: 0;
    margin-top:-40px;
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
	font-size: 15px;
	line-height: 30px;
	width: 65px;
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

.qt-minus {
	    line-height: 30px;
    height: 30px;
	font-weight: 700;
}

#site-footer {
	margin: 0px 0 0 0;
}
/*#site-footer {*/
/*	padding: 40px;*/
/*}*/
#site-footer h1 {
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
    padding-top:2px;
}
#site-header .container{
    
}
#cart-id{
     width:100%;
}

#check-out{
    float:right;
}
.my-span {
     /*float: left;*/
}
label {
    padding-bottom: 6px;
}
.order-md-1 {
    order: 1!important;
    margin-left: -90px;
}
@media    only screen and (max-width: 667px){
  
  .checkout-page .path {
    position: absolute;
    top: 90px;
    width: 98% !important;
}  
    .orderPlace
{
    position: absolute;
    top: 119px;
    width: calc(100% - 37px);
    left: 14px;
}
#site-header 
{
        margin-top: 12rem;
}

    .row1 {
    --bs-gutter-x: 0rem !important;
}
 .product .content
    {
      width: 70%;  
    }
    .payment-method
    {
      margin-top: 1rem;  
    }
    #site-footer h1 {
    width: 100% !important;
}
.my-span {
    width: 100%;
    display: inline-block;
    margin-top: -11px;
    margin-bottom: -6px;
}
 .product header {
    width: 80px;
    padding: 5px;
    background: #d6d6d624;
} 
   .product, .product .content, .product header {
    height: 80px;
} 
.rows1
{
       padding: 0rem 1rem !important; 
}
#cart h1 {
    width: 100px;
    font-size: 13px;
}
.product footer .full-price {
    width: 80px;
    float: right;
    font-size: 13px;
}
.qt-plus, .qt-minus
{
      display: none;  
}
.border-table
{
    margin:auto  !important; 
}
.checkout-page {
    margin-top: 15rem;
}
.rows1
{
    margin-top: 15rem !important;
    display: flex !important;
    flex-direction: column-reverse;
}
/*.payment-method*/
/*{*/
/*       margin-top: 10rem !important; */
/*}*/
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

.wrapper .option {
    background: #fff;
    width: 100%;
    flex-direction: column;
    background: #fff;
    width: 100%;
    display: flex;
    align-items: unset;
    justify-content: space-around;
    margin: 0 0px;
    border-radius: 5px;
    cursor: pointer;
    padding: 10px;
    border: 2px solid lightgrey;
    transition: all 0.3s ease;
}
/*.wrapper .option .dot{*/
/*  height: 20px;*/
/*  width: 20px;*/
/*  background: #d9d9d9;*/
/*  border-radius: 50%;*/
/*  position: relative;*/
/*}*/
/*.wrapper .option .dot::before{*/
/*  position: absolute;*/
/*  content: "";*/
/*  top: 4px;*/
/*  left: 4px;*/
/*  width: 12px;*/
/*  height: 12px;*/
/*  background: #0069d9;*/
/*  border-radius: 50%;*/
/*  opacity: 0;*/
/*  transform: scale(1.5);*/
/*  transition: all 0.3s ease;*/
/*}*/
input[type="radio"]{
  display: none;
}
/*#option-1:checked:checked ~ .option-1,*/
/*#option-3:checked:checked ~ .option-3,*/
/*#option-2:checked:checked ~ .option-2*/
/*{*/
/*     border-color: #3e2b7794;*/
/*    background: #3e2b7757;*/
/*}*/

#option-3:checked:checked ~ .option-3 i,
#option-1:checked:checked ~ .option-1 i
{
  color : white;    
}

/*#option-1:checked:checked ~ .option-1 .dot,*/
/*#option-3:checked:checked ~ .option-3 .dot,*/
/*#option-2:checked:checked ~ .option-2 .dot{*/
/*  background: #fff;*/
/*}*/
#option-1:checked:checked ~ .option-1 .dot::before,
#option-3:checked:checked ~ .option-3 .dot::before,
#option-2:checked:checked ~ .option-2 .dot::before{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 20px;
  color: #808080;
      margin-top: 0.6rem;
}
#option-1:checked:checked ~ .option-1 span,
#option-3:checked:checked ~ .option-3 span,
#option-2:checked:checked ~ .option-2 span{
  color: #fff;
}

.wrapper
{
    display : inline-flex;
    width : 100%;
}

.option i
{
 font-size: 40px;
}
.rows1
{
       margin-top: 8rem !important;
    display: flex;
    align-items: initial;
    padding: 0rem 3rem;
}
.smart_features_added li:last-child {
    border: none;
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
    text-transform: capitalize;
    border-radius: 0px;
    border-bottom: 1px solid #3e2b772e;
}


.trusted_icons
{
    padding: 11px;
    border-radius: 4px;
    
}
.icon-style img {
    border-radius: 10px;
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
.navbar-default ul, .navbar-default .div-pad {
    opacity: 0;
    pointer-events: none;
}

.border-table
{
    border: 1px solid #b09d9d;
    border-radius: 10px;
    padding: 15px;

}

.qt-plus, .qt-minus
{
    opacity: 0;
    pointer-events: none;
}
.main-logo
{
     width: 95px;
    margin-top: -70px;
    margin-left: -19px;
    margin-bottom: 7px;
}
.checkout-page:before {
    /* background: #F8F8F8; */
    content: '';
    background: #2b628e08;
    position: fixed;
    top: 0;
    width: 45%;
    height: calc(100%);
    right: 0;
    z-index: -1;
    border-left: 1px solid #d7d7d7;
}.btn {
    background: #3e2b77 !important;
    border: 1px solid #999;
    border-style: none none solid none;
    cursor: pointer;
    display: inline-block;
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
    /* transition: all .2s linear; */
    border-radius: 6px;
}

.option-1 img
{
    max-width: 100%;
    margin: 1;
    width: 130px;
}
.trusted_icons .col-lg-2 {
    flex: 0 0 auto;
    width: 19.966667%;
}
.icon-style img {
    border-radius: 10px;
    width: 61px;
}
.icon-left
{
    float: right;
    font-size: 31px;
    margin-top: -4px;
    color: #0e325c;
}
.orderBtn
{
    font-weight: 700;
    font-size: 19px;
    color: #0e325c;
    cursor : pointer;
}

.ordersummary.divHideShow
{
   display: block !important;
    transition: 0.3s;
}
.ordersummary
{
     display: none;
     transition: 0.3s;
}

.left.mt-3.w-100 {
    border-top: 1px solid #ddd;
    margin-top: 0 !important;
    padding-top: 25px;
}

@media  screen and (min-width: 720px)

{
    .ordersummary.divHideShow {
    display: none !important;
    transition: 0.3s;
}

}
.ordersummary.divHideShow {
    display: block !important;
    transition: 0.3s;
}
</style>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
 

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes  fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media  only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

 <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PFDRCBF');</script>
    <!-- End Google Tag Manager --> 
    
    <!-- Event snippet for Abandoned Checkout conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-458884695/d2JZCKnvj-8YENeM6NoB'});
</script>

  </head>

  <body>
      
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFDRCBF"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
      
	<section class="checkout-page">
	    <div class="container mt-5 mb-5">
	        <div class="row rows1">
	            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(URL::asset('public/assets/img/desko_logo.webp')); ?>" alt="Image" class="main-logo" /> </a>

	        <!--<img src="<?php echo e(URL::asset('public/assets/img/desko_logo.webp')); ?>" alt="Image" class="main-logo" />-->
	           <div class="path">
           <span> <i class="far fa-home"></i> Home</span><span>/</span><span>Product Detail</span><span>/</span><span>Shipping Address</span><span>/</span><span>Choose Payment</span>
       </div>
         <div class="col-md-6">
	        <div class="payment-method">
	            
	              <!--<h3 style="font-size: 23px; padding: 17px;">Contact Info</h3>-->
	                  <div class="border-table mt-3">
	                      <p>Contact Info : <?=$address->email?></p>
	                      <p>Contact No : <?=$address->mobile?></p>
	                      <hr>
	                      <p>Shipping Address : <span><?=$address->address.'('.$address->pincode.')' ?></span></p>
	                  </div>
	             
	             
	            
	            <h3 style="font-size: 23px; padding: 0px;margin-top: 2rem;">Pay Via</h3>
	            <form action='https://deskohome.com/order_success/<?=$order_id?>' >
	                <div class="wrapper">
                 <input type="radio" name="select" id="option-1" checked>
                 <!--<input type="radio" name="select" id="option-3">-->
                   <label for="option-1" class="option option-1 p-0" style=" pointer-events: none;">
                     <!--<div class="dot"></div>-->
                    <div class="d-flex align-items-center">
                        <!--<img src="https://cws.in.net/deskohome/public/assets/img/ssl.png" alt="" class="mr-2" style="margin-right:20px">-->
                        <img class="p-0"src="https://deskohome.com/public/assets/img/payment1.1.png" style="width:50% "> 
                        <img class="p-0"src="https://deskohome.com/public/assets/img/payment2.jpeg" style="width:49%">                        

                        <!--<div class="hrline"></div>-->
                        <!--<section class="pt-4 pb-3">-->
                        <!--<div class="row justify-content-center">-->
                        <!--    <div class="col-lg-6">-->
                        <!--        <div class="customercreation">-->
                        <!--            <div class="customercreation-item">-->
  
                        <!--            </div>-->
                        <!--       </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="slideshow-container">-->
                        <!--    <div class="mySlides fade">-->
                        <!--      <div class="numbertext">1 / 3</div>-->
                        <!--      <img src="https://deskohome.com/public/assets/img/payment1.jpeg" style="width:30%">-->
                              <!--<div class="text">Caption Text</div>-->
                        <!--    </div>-->
                            
                        <!--    <div class="mySlides fade">-->
                        <!--      <div class="numbertext">2 / 3</div>-->
                        <!--      <img src="https://deskohome.com/public/assets/img/payment2.jpeg" style="width:30%">-->
                              <!--<div class="text">Caption Two</div>-->
                        <!--    </div>-->
                            
                        <!--    <div class="mySlides fade">-->
                        <!--      <div class="numbertext">3 / 3</div>-->
                        <!--      <img src="https://deskohome.com/public/assets/img/payment3.jpeg" style="width:30%">-->
                              <!--<div class="text">Caption Three</div>-->
                        <!--    </div>-->
                            
                        <!--</div>-->
                        <!--<br>-->
                        
                        <!--<div style="text-align:center">-->
                        <!--  <span class="dot" onclick="currentSlide(1)"></span> -->
                        <!--  <span class="dot" onclick="currentSlide(2)"></span> -->
                        <!--  <span class="dot" onclick="currentSlide(3)"></span> -->
                        <!--</div>-->
                        
                    </div>
                      <!--<span> -->
                      <!--Online </span>-->
                      <!--<button id="rzp-button1"  >Pay</button>-->
                      </label>
                      
                  
                   <!--<label for="option-3" class="option option-3">-->
                   <!--  <div class="dot"></div>-->
                   <!--   <i class="fal fa-truck-container"></i>-->
                   <!--   <span> -->
                     
                   <!--   Cash on Delivery</span>-->
                      
                   <!--</label>-->
                </div>
                <div class="text-end mt-4">
                <!--<button class="btn btn-primary btn-lg btn-block" type="submit" style="display: inline-block">Place Oreder</button>-->
                <button id="rzp-button1" class="btn">Place Order</button>
                </div>
	            </form>
	        </div>
	           <div class="trusted_icons mt-3">
            <div class="row">
                <div class="col-lg-2">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/p-1.png')); ?>" alt="payment icon">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/p-2.png')); ?>" alt="payment icon">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/p-3.png')); ?>" alt="payment icon">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/p-4.png')); ?>" alt="payment icon">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="icon-style">
                        <img src="<?php echo e(URL::asset('public/assets/img/p-5.png')); ?>" alt="payment icon">
                    </div>
                </div>
                
            </div>
        </div>
	    </div>
	    <div class="col-lg-1"></div>
      <div class="col-md-5" style="    margin-top: -16rem;">
     	<header id="site-header">
    		<div class="container p-0">
    		<h5 class="orderBtn">Order Summary  <span class="icon-left">
		         <i class="fal fa-angle-down"></i>
		         </span>
		         </h5>
    		</div>
	    </header>
	    
     	<div class="" id="cart-id">

		<section id="cart" class="ordersummary"> 
	
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
					<span class="qt"><span>Qty</span> : <?php echo e($desk->desk_qty); ?></span>
					<span class="qt-plus"data_cartId="<?php echo e($desk->desk_cart_id); ?>"data_item_type="desk"data_offerPrice="<?php echo e(($desk->desk_price/$desk->desk_qty)); ?>">+</span>

					<h2 class="full-price"id="<?php echo e($desk->desk_cart_id); ?>_<?php echo e(($desk->desk_price / $desk->desk_qty)); ?>">
					   <i class="far fa-rupee-sign"></i><?php echo e($desk->desk_price); ?>

					</h2>
					<!--<h2 class="price">-->
					<!--<i class="far fa-rupee-sign"></i> <?php echo e($desk->desk_price); ?>-->
					<!--</h2>-->
				    </footer>
				 <!--   <a class="remove" href="<?php echo e(url('remove_cart_checkout/'.'desk'.'/'.$desk->desk_cart_id)); ?>">-->
					<!--	<h3><i class="fa fa-trash mb-1 text-danger"></i></h3>-->
					<!--</a>-->
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
					<span class="qt-minus"data_cartId="<?php echo e($cart->order_id); ?>"data_item_type="prod"data_offerPrice="<?php echo e($cart->offer_price); ?>">-</span>
					<span class="qt"><span>Qty</span> : <?php echo e($cart->quantity); ?></span>
					<span class="qt-plus"data_cartId="<?php echo e($cart->order_id); ?>"data_item_type="prod"data_offerPrice="<?php echo e($cart->offer_price); ?>">+</span>

					<h2 class="full-price"id="<?php echo e($cart->order_id); ?>_<?php echo e($cart->offer_price); ?>">
					   <i class="far fa-rupee-sign"></i><?php echo e(($cart->quantity*$cart->offer_price)); ?>

					</h2>
				
				    </footer>
				 <!--   <a class="remove" href="<?php echo e(url('remove_cart_checkout/'.'prod'.'/'.$cart->iteam_id)); ?>">-->
					<!--	<h3><i class="fa fa-trash mb-1 text-danger"></i></h3>-->
					<!--</a>-->
				</div>
			</article>
			<?php $sub_total=$sub_total+($cart->quantity*$cart->offer_price);?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            
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
		    
		</section>		
		<div id="site-footer">
		<div class="clearfix" id="cart-id">
		        <?php 
                    // $fakePrice = ceil($sub_total / 10) * 10; ;
                    // $sub_total = $fakePrice  - ($fakePrice/10 );
                    // $sub_total = ceil($sub_total / 10) * 10;
                   ?>
		    
		     <!--<hr class="mb-4 text-right" style="width:460px">-->

			<div class="left mt-3 w-100">
				<h2 class="subtotal">Subtotal: <span style="float:right"><i class="far fa-rupee-sign"></i><span id="check-out-1" class="sub_1"> <?php echo e($sub_total); ?></span></span></h2>
    			<?php if( isset($order_details->installation) && $order_details->installation==1 ): ?> 
    				<div style="display: flex; width: 100%;  justify-content: space-between;">
        				<h3 class="shipping">	<input id='Installation' disabled <?php if(isset($order_details->installation) && $order_details->installation==1) echo 'checked'?> name =''  value='1' style="margin-right: 1px; height: 17px; width: 17px;" type='checkbox'/> Installation</h3>
        				<?php if(isset($order_details->installation) && $order_details->installation==1){ ?>
        				    <h3 style="text-align: right;" class="sub_1" id="check-out-installment"><i class="far fa-rupee-sign"></i> 900</h3>
        				<?php } ?>
    				 </div>
    			<?php endif; ?>
				<h3 class="shipping">Shipping: <span id="check-out">Free</span></h3>
				<h1 class="total"><span class="my-span">Total:<span style="float:right"> <i class="far fa-rupee-sign"></i> <span id="check-out-2" class="sub_1"><?php if(isset($order_details->installation) && $order_details->installation==1) echo $sub_total = $sub_total+900; else echo $sub_total; ?> </span></span></span></h1>
			</div>

			<!--<div class="right mt-2">-->
				
			<!--	<a href="#" class="btn">Proceed to Pay</a>-->
			<!--</div>-->

		</div>
	</div>

	</div>
	    </div>
  	   
	  
	    
	   
	   
	        </div>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).ready(function(){
    localStorage.setItem('hasRun', 'true');
    $(".orderBtn").click(function(){
    $(".ordersummary").toggleClass("divHideShow", 1000);
    $(".orderBtn").toggleClass("openicon", 1000);
     });
});
</script>
     <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>
<script>
var options = {
    "key": "rzp_live_dlwX7vaqsiXvQv", // Enter the Key ID generated from the Dashboard
    "amount": "<?=$sub_total*100?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Desko",
    "description": "Test Transaction",
    "image": "https://deskohome.com/public/assets/img/desko_logo.webp",
    // "image": "https://deskohome.com/public/assets/img/desko_logo.webp,
    // "order_id": "order_9A33XWu170gUtm",
    //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://deskohome.com/payment/payment.php?order_id=<?=$order_id?>",
    "prefill": {
        "name": "<?=$user_details['fname']?>",
        "email": "<?=$user_details['email']?>",
        "contact": "<?=$user_details['mobile']?>"
    },
    "notes": {
        "address": "<?=$address_details?>"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

  </body>
 <?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/resources/views/payment-method.blade.php ENDPATH**/ ?>