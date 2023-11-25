<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Deskohome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="public/frontend/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontend/assets/css/plugins/font-awesome.min.css" rel="stylesheet">
    <link href="public/frontend/assets/css/plugins/lineicons.css" rel="stylesheet">
    <link href="public/vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="public/frontend/assets/css/plugins/animate.css" rel="stylesheet">

    <link href="public/frontend/assets/css/style.css" rel="stylesheet">
    <link href="public/frontend/assets/css/themes/blue-orange.css" rel="stylesheet">
   <style>
    
body {
    margin: 0;
    padding: 0;
    height: 1500px;
}
.header-fixed {
    /*background-color:#292c2f;*/
    background-color:#ffffff;
    box-shadow:0 1px 1px #ccc;
    /*padding: 20px 40px;*/
    height: 0px;
    color: #ffffff;
    box-sizing: border-box;
    top:-100px;

    -webkit-transition:top 0.3s;
    transition:top 0.3s;
}

.header-fixed .header-limiter {
    max-width: 1200px;
    text-align: left;
    margin: 0 auto;
}


.header-fixed-placeholder{
    height: 80px;
    display: none;
}


.header-fixed .header-limiter h1 {
    float: left;
    
    line-height: 40px;
    margin: 0;
}

.header-fixed .header-limiter h1 span {
    color: #5383d3;
}

/* The navigation links */

.header-fixed .header-limiter a {
    color: #ffffff;
    text-decoration: none;
}

.header-fixed .header-limiter nav {
    font:16px Kumbh Sans;
    line-height: 40px;
    float: right;
}

.fixed .header-fixed .header-limiter nav a
{
      color: black !important;  
}


.header-fixed .header-limiter nav a{
    display: inline-block;
    padding: 0 5px;
    text-decoration:none;
    color: #ffffff;
    opacity: 0.9;
}

.header-fixed .header-limiter nav a:hover{
    opacity: 1;
    color:#ffffff;
}

.header-fixed .header-limiter nav a.selected {
    color: #608bd2;
    pointer-events: none;
    opacity: 1;
}

/* Fixed version of the header */

body.fixed .header-fixed {
    padding: 10px 40px;
    height: 90px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 3;
}

body.fixed .header-fixed-placeholder {
    display: block;
}

body.fixed .header-fixed .header-limiter h1 {
    font-size: 24px;
    line-height: 30px;
}

body.fixed .header-fixed .header-limiter nav {
    line-height: 28px;
    font-size: 13px;
}




@media all and (max-width: 600px) {

    .header-fixed {
        padding: 0px 0;
        height: 0px;
    }

    .header-fixed .header-limiter h1 {
        float: none;
        margin: -8px 0 10px;
        text-align: center;
        font-size: 24px;
        line-height: 1;
    }

    .header-fixed .header-limiter nav {
        line-height: 1;
        float:none;
    }

    .header-fixed .header-limiter nav a {
    font-size: 20px;
}
.header-fixed .header-limiter nav a {
    display: block;
    padding: 7px 15px;
    
}
    body.fixed .header-fixed {
        display: none;
    }

}

.feature-note.left.top1.wow.fadeInLeft.show-cont {
    top: 140px;
    left: 170px;
}
.feature-note.left.top2.wow.fadeInLeft.show-cont {
   /*top: 182px;*/
   /* font-size: 10px;*/
   /* left: 150px;*/
   top: 260px;
    left: 420px;
}
.feature-note.right.top1.wow.fadeInRight.show-cont {
    top: 70px;
}
/*.feature-note.right.bottom1.wow.fadeInUp.show-cont {*/
/*    top: 320px;*/
/*}*/

#imgsDiv{
    margin-left:3rem;
    margin-right:3rem;
}
.shad{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.feature-note.right.top .feature-name.pre{
    margin-left: -57px;
}
.feature-note.left.top .feature-name.inte{
    margin-right: -68px;
}
.feature-note.left.top .feature-name.ergo{
   margin-right: -209px;
}
.feature-note.show-cont .indicator .plus-icon.ego:after{
    width: 0px;
}
/*.feature-note .feature-name.ergo:before{*/
/*    left: calc(50% - -153px);*/
/*}*/
.feature-note .feature-name.base:after{
    height: 0px;
}
.feature-note.right.bottom .feature-name.base:before{
    top: -3px;
}
.feature-note.right.bottom .feature-name.base{
    padding-top: 10px;
}
.feature-note .feature-name.slek:before{
    top: 90px;
}
.d-width{
    margin-left:5%;
}
.float{
	position:fixed;
	width:100px;
	height:40px;
	bottom:32px;
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
	margin-top:5px;
	margin-left:10px;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  /*background-color: red;*/
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  /*background-color: #555;*/
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px !important;
  margin-left: 50px;
}
.chat{
    margin-left:5px;
    margin-top:3px;
    color:#ffffff;
}
.navbar-default .nav li.active a{
    color:#ffffff;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@media(max-width:767px) {
    .feature-note .indicator .plus-icon{
        height: 25px;
    width: 48px;
    }
    .feature-note .indicator .plus-icon:before{
        
    }
.feature-note.left.top1.wow.fadeInLeft.show-cont {
    top: -10px;
    left: 0px;
}
.feature-note.right.top1.wow.fadeInRight.show-cont{
    right:0px;
    top: -30px;
}
.feature-note.show-cont .indicator .plus-icon.whit:after {
    width: 37px !important;
}
.feature-note.right.bottom1.wow.fadeInUp.show-cont {
    top: 70px;
    /*font-size: 10px;*/
    /*right: 37px;*/
}
.feature-note.left.top2 .feature-name.ergo {
    margin-right: -56px;
}
.feature-note.left.top1.wow.fadeInLeft.show-cont {
  top: -20px;
    left: 20px;
   
}
.feature-note .feature-name.base:before{
    left: calc(50% - -27px);
}
.feature-note.right.top1 .feature-name.pre {
   margin-left: -40px;
    margin-top: -20px;
}
.feature-note.show-cont .indicator .plus-icon.pre:after {
    width: 0px !important;
}
.feature-note.right.bottom1 .feature-name.base {
    padding-top: 10px;
    margin-left: -3%;
}
.feature-note.right.bottom1 .feature-name.base:before {
    top: 2px;
    left: calc(50% - -27px);
}
.feature-note.show-cont .indicator .plus-icon.base:after {
    width: 36px !important;
}
.feature-note .feature-name.base:after {
    top: -24px !important;
    height: 28px;
    left: calc(50% - -30px);
 
}
.feature-note.left.top2.wow.fadeInLeft.show-cont {
    top: 182px;
    font-size: 10px;
    left: 150px;
    
}
.feature-note.right.top1 {
    top: -30px;
    right: 0px;
    

}
.feature-note.left.top2 {
    top: 182px;
    left: 150px;
}
.feature-name.slek {
    left: 49px;
}
.feature-name.mob {
    left: 15px;
}
.float {
    width: 50px;
    height: 50px;
    right: 15px;
    bottom: 26px;
}
.my-float {
    margin-top: 10px;
    margin-left: 0px;
}
.d-width{
    margin-left:0%;
    text-align: center;
}
.w-1001 {
    margin-top: 60%;
}
.buttonshop {
    margin-left: 0.5rem;
}
.feature-note.right.bottom1 .indicator{
    margin-top: 70px !important;
}
.feature-note.right.bottom1 {
    top: 70px;
    right: 37px;
}
.feature-note.left.top1 {
    top: -20px;
    left:20px;
}
.feature-note .feature-name.slek:after{
    top: 35px;
    left: calc(50% - -2px);
}
.feature-note .feature-name{
    line-height: 12px;
    font-size: 10px;
}
.table-img img{
    width:100% !important;
}
.company-logo img{
    width:100% !important;
}
.section-heading50 h2{
    font-size:26px;
}
.hoverAni{
    width:50%;
}
#myBtn{
    right: 320px;
}
.chat{
    display:none;
}
.dflex{
    display:flex;
}
.feature-note.right.bottom1 .feature-name.slek{
    padding-top: 75px
}
.feature-note .feature-name.slek:after{
    height: 35px;
}
.feature-note .feature-name.slek:before {
    top: 65px;
}
.cat-bot{
    margin-top: 60vh;
}
.msg-home{
    position: absolute;
    margin-top: -85vh;
}
.des{
    margin-top: 40vh;
}
.smart-work{
    padding-top:1rem;
    padding-bottom:1rem;
    margin-left:2rem;
}
.pad-link{
    margin-left: 0px;
}
.section--padding{
    padding-top: 0rem !important;
    margin-top: -2rem;
}
.my-pad-0{
    margin-top: -5rem;
}
.reviews {
    padding: 17px 0 40px !important;
    background: #fff !important;
}
}
@media (min-width: 412px) and (max-width: 768px){
.msg-home {
    position: absolute;
    margin-top: -60vh!important;
}
.banner__items--thumbnail__img {
    width: 100% !important;
    margin-top: -162vh !important;
    position: absolute;
    margin-left: -15px;
}
.section--padding{
    padding-top: 0rem !important;
    margin-top: -2rem;
}

.my-pad-0{
    margin-top: -5rem;
}
.reviews {
    padding: 17px 0 40px !important;
    background: #fff !important;
}
}
</style>
</head>

<body class="home" data-scroll-animation="true" data-spy="scroll" data-target="#main-navbar">

    <!-- <div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_four"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_one"></div>
</div>
</div>
</div> -->

    
    <header class="header-fixed"  id="header">
      <div class="header-limiter">

            <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#header"><img src="public/frontend/assets/img/desko_logo.png"
                            alt=""></a>
                    <button type="button" onclick="openNav()" class="navbar-toggle collapsed" style="border-color:unset !important">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<div class="header-icon">-->
                    <!--    <a href="#" class="d-desk searchcart"><svg xmlns="http://www.w3.org/2000/svg"-->
                    <!--            width="16" height="16" fill="currentColor" class="bi bi-search"-->
                    <!--            viewBox="0 0 16 16">-->
                    <!--            <path-->
                    <!--                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />-->
                    <!--        </svg> </a>-->
                    <!--    <a href="#" class="d-desk cartmobile"><svg xmlns="http://www.w3.org/2000/svg"-->
                    <!--            width="16" height="16" fill="currentColor" class="bi bi-basket3"-->
                    <!--            viewBox="0 0 16 16">-->
                    <!--            <path-->
                    <!--                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />-->
                    <!--        </svg>-->
                    <!--        <span class="cartCount">0</span>-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">Home</a>
 <a href="#flag">Product</a>
  <!--<a href="#">Clients</a>-->
  <!--<a href="#">Contact</a>-->
</div>
                <div class="collapse navbar-collapse" id="main-navbar">
                      <!--<a href="#product-choose" class=" btn btn-warning pull-right hidden-sm hidden-xs">pre-order now</a> -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#flag">Product</a></li>
                        <!--<li><a href="#">Pages</a></li>-->
                        <!--<li><a href="#">Blog</a></li>-->
                        <!--<li><a href="#">contact</a></li>-->
                        <!--<li class="d-desk"><a href="#">Login / Register</a></li>-->
                    </ul>

                    <!--<div class="end_div d-none">-->
                    <!--    <a href="#">Login / Register </a>-->
                    <!--    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
                    <!--            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">-->
                    <!--            <path-->
                    <!--                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />-->
                    <!--        </svg> </a>-->
                    <!--    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
                    <!--            fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">-->
                    <!--            <path-->
                    <!--                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />-->
                    <!--        </svg>-->
                    <!--        <span class="cartCount">0</span>-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>

            </div>

        </nav>
        <div class="top-banner row m0 text-center fadeInOnLoad">

    </div>
</div>
     </header>
<!--<div class="header-fixed-placeholder"></div>-->
    <main>

        @if (Session::get('success'))
            <h4 class="alert alert-success">{{ Session::get('success') }}</h4>
        @endif
        @if (Session::get('fail'))
            <h4 class="alert alert-success">{{ Session::get('fail') }}</h4>
        @endif

        <section class="row the-hero" style="background-image : url('public/slider_image_home/{{ $slider->image }}');
        background-size: cover;background-position: center;height: 608px;
        ">
            <div class="container-fluid w-1001">
                <div class="row d-width">
                    <div class="col-lg-6 col5 wow fadeInDown" data-wow-delay="0.3s">
                        <!--<span>{{ $slider->title }}</span>-->
                        <!--<h3>{{ $slider->description }}</h3>-->
                        <div class="d-flex">
                        <button type="button" onclick="location.href='#flag'"
                            class="btnshop pad-link mar-link">{{ $slider->btn1_caption }}</button>
                        <button type="button" onclick="location.href='{{ $slider->btn2_link }}'"
                            class="btnshop buttonshop pad-link">{{ $slider->btn2_caption }}</button>
                            </div>
                    </div>
                    <div class="col-lg-6"></div>
                    <!--    <img src="public/slider_image_home/{{ $slider->image }}" style="width: 100%;"-->
                    <!--        class="wow fadeInDown" data-wow-delay="0.3s">-->
                    <!--</div>-->
                </div>
            </div>
        </section>


        <section class="row the-product pb-0" id="product">
            <div class="container">
                <div class="row section-header wow fadeInUp">
                    <h2>Featuring : Smart Desk Pro</h2>
                    <p> Experience the ultimate in productivity and ergonomics with the Desko Smart Desk Pro, the all-in-one solution for your work-from-home needs</p>
                </div>
                <div class="row apple-watch-note-feature text-center">
                    <!--<img src="public/frontend/assets/img/apple-watch-2.png" alt="">-->
                    <img src="public/frontend/assets/img/Plus-Sign.png" alt="" width="80%">
<!--show-cont-->
                    <div class="feature-note left top1 wow fadeInLeft ">
                        <div class="indicator">
                            <div class="plus-icon mob">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name mob">
                          Mobile/Tablet<br> Holder
                        </div>
                    </div>
                    <div class="feature-note right top wow fadeInRight">
                        <div class="indicator">
                            <div class="plus-icon whit">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name whit">
                          White Board
                        </div>
                    </div>
                    

                    <div class="feature-note left top wow fadeInLeft">
                        <div class="indicator">
                            <div class="plus-icon int">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name inte">
                           integrated Power<br> 7 Sockets<br> (Top + Base)
                        </div>
                    </div>
                    <div class="feature-note left top2 wow fadeInLeft">
                        <div class="indicator">
                            <div class="plus-icon ego">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name ergo">
                           Ergonomic <br> Curvature
                        </div>
                    </div>
                    <div class="feature-note right top1 wow fadeInRight">
                        <div class="indicator">
                            <div class="plus-icon pre">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name pre">
                           Premium Action<br>TESA Wood
                        </div>
                    </div>

                    <div class="feature-note right bottom wow fadeInUp">
                        <div class="indicator">
                            <div class="plus-icon base">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name base">
                          4 Base Wheels<br> with Lock
                        </div>
                    </div>
                    <div class="feature-note right bottom1 wow fadeInUp">
                        <div class="indicator">
                            <div class="plus-icon slek">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name slek">
                           Sleek Drawer
                        </div>
                    </div>

                   
                    
                        
                        
                    <!--</div>-->
                     <div class="feature-note left bottom wow fadeInLeft">
                        <div class="indicator">
                            <div class="plus-icon Sit">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name Sit">
                            Sit-Stand Dual Moter Frame
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <!--====== Contact Area Start ======-->
        <section class="table_section " id="flag">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Flagship Workstations</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center dflex">
                    @foreach ($products as $product)
                        <div class="col-md-6 text-center hoverAni">
                            <img src="public/feature_image/{{ $product->feature_image }}" class="wow fadeInDown my-fe"
                                data-wow-delay="0.3s">
                               
                                <h6 class="price-99"><span><s>&#8377;{{ $product->mrp_price }}</s></span> <span class="price-del">&#8377;{{ $product->offer_price }}</span></h6>
                            <a href="https://deskohome.com/development/product-detail/<?=$product->prod_id?>" class="button-link wow fadeInUp" 
                                data-wow-delay="0.3s" role="button">
                                Shop Now </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

<section id="partner-with-us partner-section"
            class="mb50 section alter3-features video-section contact-area video-top pb-0">
           
            <div class="">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12 col-lg-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center pb-0 mb-40">
                            <h2 class="text-capitalize">Introducing: Build Your Own Desk <br> As Suiting Your Profession,
                                Age & Space</h2>
                        </div>
                    </div>
                </div>
              
                  
                <div class="row justify-content-center d-flex" style="background: #2f3130;
    padding-bottom: 50px;
    padding-top: 50px;
">
                    <div class="col-12 col-md-10 text-center wow fadeInDown" data-wow-delay="0.3s">
                        <!-- <img src="https://www.vari.com/dw/image/v2/BDFT_PRD/on/demandware.static/-/Library-Sites-VariGlobalContentLibrary/default/dwd26c8f48/electric-standing-desk/vari-esd-gen2_animation_lores.gif" width="100%"> -->
                        <iframe width="560" height="315"   
                          
                            src="https://www.youtube.com/embed/{{$video->url}}?mute=1&autoplay=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay;mute; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            
                            allowfullscreen
                            
                            >
                            
                        </iframe>
                    </div>
                </div>
                <div class="btngroup text-center">
                    <a href="{{ $video->btn_link }}" type="button" class="btnshop ">{{ $video->btn_caption }}</a>
                </div>
                <div class="powered-design">
                    <div class="shapes-container">
                        <div class="shape shape-triangle shape-animated">
                            <div class="animation--rotating"></div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="shapes-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="shape shape-ring shape-ring-1">
                    <div class="animation animation--rotating"></div>
                </div>
                <div class="shape shape-ring shape-ring-2">
                    <div class="animation animation--rotating"></div>
                </div>
                <div class="shape shape-circle animation--clockwise">
                    <div></div>
                </div>
            </div>
        </section>
       



        <!--====== Contact Area Start ======-->
         <section class="row left-right-contents" style="background-image : url('public/feature_image_home/{{ $feature->image }}');
          background-size: cover;border: 1px solid #80808024;background-position: center;    padding-bottom: 99px;padding-top: 0;position: inherit">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12 col-md-4 col-md-push-4 text-center wow fadeIn">
                        <!--<img src="public/feature_image_home/{{ $feature->image }}" class="alt="">-->
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-pull-4 left-content">
                        <div class="media wow fadeInUp">
                            <div class="media-left">
                                <span><i class="li_key"></i></span>
                            </div>
                            <div class="media-body">
                                <h4>{{ $feature->heading1 }}</h4>
                                <p>{{ $feature->description1 }}</p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.3s">
                            <div class="media-left">
                                <span><i class="li_megaphone"></i></span>
                            </div>
                            <div class="media-body">
                                <h4>{{ $feature->heading2 }}</h4>
                                <p>{{ $feature->description2 }}</p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.6s">
                            <div class="media-left">
                                <span><i class="li_diamond"></i></span>
                            </div>
                            <div class="media-body">
                                <h4>{{ $feature->heading3 }}</h4>
                                <p>{{ $feature->description3 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 right-content">
                        <div class="media wow fadeInUp">
                            <div class="media-left">
                                <span><i class="li_like"></i></span>
                            </div>
                            <div class="media-body">
                                <h4>{{ $feature->heading4 }}</h4>
                                <p>{{ $feature->description4 }}</p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.3s">
                            <div class="media-left">
                                <span><i class="li_user"></i></span>
                            </div>
                            <div class="media-body">
                                <h4>{{ $feature->heading5 }}</h4>
                                <p>{{ $feature->description5 }}</p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.6s">
                            <div class="media-left">
                                <span><i class="li_clock"></i></span>
                            </div>
                            <div class="media-body">
                                <h4>{{ $feature->heading6 }}</h4>
                                <p>{{ $feature->description6 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Contact Area Start ======-->
        <section id="partner-with-us partner-section" class="contact-area ptb_70">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Trusted by folks @</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12 ">
                        <!--<ul class="partner">-->


                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.1s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo2.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.2s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo3.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.3s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo4.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.3s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo5.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.4s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo6.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.5s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo7.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.6s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo8.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.7s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo9.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.8s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo10.png" alt="img">-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="annimestion wow fadeInDown" data-wow-delay="0.3s">-->
                        <!--        <a href="#">-->
                        <!--            <img src="public/frontend/assets/img/logo11.png" alt="img"-->
                        <!--                style="width: 80px !important; ">-->
                        <!--        </a>-->
                        <!--    </li>-->

                        <!--</ul>-->
                        <div class="company-logo">
                            <img src="public/frontend/assets/img/Company-Logos.png" alt="" width="1100px"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Contact Area Start ======-->
        <section id="partner-with-us partner-section review-section" class="contact-area ptb_60 pb-0">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12 col-lg-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center pb-0 mb-40">
                            <h2 class="text-capitalize">Reviews</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12">
                        <div class="reviews owl-carousel wow fadeInDown" data-wow-delay="0.3s">

                            @foreach ($review as $r)
                                <!-- Product Card -->
                                <div class="card text-center rounded">
                                    <div class="row align-items-center d-flex">
                                        <div class="col-lg-6">
                                            <div class="box_frame"
                                                style="background-image: url('public/review_image_home/{{ $r->image }}');">
                                                <img src="public/review_image_home/{{ $r->image }}">

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>{{ $r->description }}</p>
                                            <h4>{{ $r->name }}</h4>
                                            <h5>{{ $r->designation }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <!-- <div class="card text-center rounded">
                     <img src="public/frontend/assets/img/r2.png">
                    </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->









        <section class="categories__section color-scheme-2 section--padding">
            <div class="container">
                <h2 class="categories__content--title wow fadeInUp" data-wow-delay="0.2s">How Does Desko improve my
                    Health &amp; Productivity?</h2>
                <div class="categories__inner d-flex align-items-center cat-bot">
                    <div class="categories__content">

                        <p class="categories__content--desc wow fadeInUp" data-wow-delay="0.2s">
                            Features like Sit-Stand Mechanism, Focus Zones &amp; Height
                            Flexibility Promote Active Working. This also comes with key benefits as below</p>
                        <ul class="categories__product d-flex">
                            <li class="categories__product--list wow fadeInDown" data-wow-delay="0.1s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon1.png">
                                    <span class="visually-hidden">Categories</span>
                                </a>
                                <h5>46 % Rise in Productivity</h5>
                                <p>Backed by Texas A&amp;M Research <br> on Sit-Stand Mechanisms</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.2s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon3.png">
                                    <span class="visually-hidden">Categories 2</span>
                                </a>
                                <h5>2X Calories Burnt</h5>
                                <p>Twice Calorie Consumption in a Day by Changing Modes.(NCBI Research)</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.3s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon2.png">
                                    <span class="visually-hidden">Categories 3</span>
                                </a>
                                <h5>REDUCED BACK ISSUES</h5>
                                <p>Sitting Is the New Smoking</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.3s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon4.png">
                                    <span class="visually-hidden">Categories 4</span>
                                </a>
                                <h5>IMPROVED POSTURE</h5>
                                <p>Longer Work Stamina</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.4">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon5.png">
                                    <span class="visually-hidden">Categories 5</span>
                                </a>
                                <h5>INCREASED FOCUS</h5>
                                <p>Our In-Built Focus Zones &amp; <br> Ergonomic Features Ensure the Same</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.5s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon6.png">
                                    <span class="visually-hidden">Categories 6</span>
                                </a>
                                <h5>SWITCH MODES</h5>
                                <p>Stand in Meetings Sit in Detail Works</p>
                            </li>

                        </ul>

                    </div>
                    <div class="categories__sidebar">
                        <div class="categories__sidebar--inner">
                            <div class="banner__items position__relative">
                                <a class="banner__items--thumbnail" href="#">
                                    <img class="banner__items--thumbnail__img wow fadeInDown" data-wow-delay="0.3s"
                                        src="public/frontend/assets/img/Desko-productivity.jpg" alt="banner-img"
                                        style="width: 520px;    margin-top: 5rem;"></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Contact Area Start ======-->
        <section class="imgsDiv ptb_60 pb-0 my-pad-0">
            <div class="container-fluid" id="imgsDiv">
                     <div class="justify-content-center smart-work">
                          <h3 class="ds-title">Design For Smart Work</h3>
                     </div>
                @foreach ($msg as $m)
                    @if ($m->id % 2 == 0)
                        <div class="row justify-content-center d-flex flex-top shad my-bott">
                           
                            <div class="col-md-7 p-0">
                                <div class="box-watch wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="public/msg_image_home/{{ $m->image }}">
                                </div>
                            </div>
                            <div class="col-md-5 p-0">
                                <div class="module-style">
                                    <h3 class="title-module wow fadeInUp" data-wow-delay="0.3s">
                                        {{ $m->title }}
                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s" >{{ $m->description }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row justify-content-center d-flex align-items-center shad my-bott">
                            <div class="col-md-6 p-0 ">
                                <div class="module-style des">
                                    <h3 class="title-module wow fadeInDown" data-wow-delay="0.3s">
                                        {{ $m->title }}
                                    </h3>
                                    <p class="wow fadeInUp " data-wow-delay="0.2s" >{{ $m->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <img src="public/msg_image_home/{{ $m->image }}" class="msg-home">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!--
                <div class="row justify-content-center d-flex flex-top">
                    <div class="col-md-7 p-0">
                        <div class="box-watch wow fadeInUp" data-wow-delay="0.3s">
                            <img src="public/frontend/assets/img/w_2.jpg">
                        </div>
                    </div>
                    <div class="col-md-5 p-0">
                        <div class="module-style">
                            <h3 class="title-module wow fadeInUp" data-wow-delay="0.3s">
                                Six different <br /> massage modes
                            </h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">By combination of far infrared heating,
                                Electric Impulse, Vibration Massage, give you a special feeling.</p>
                        </div>
                    </div>

                </div>

            -->
            </div>
        </section>
        <!--====== Contact Area End ======-->


        <!-- ***** Products Area Start ***** -->
        <section id="products2" class="products-area pt-100">
            <div class="container wow fadeInDown" data-wow-delay="0.3s">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">One Stop Solution for All Your Working Needs</h2>
                            <p class="d-none d-sm-block mt-4">
                                Accessories & Chairs. Set-up your complete workspace or let us
                                manage the same. We are just a call away.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="products owl-carousel">
                        <!-- Product Card -->
                        @foreach ($productss as $product)
                            <div class="card product-card text-center rounded">
                                <!-- Product Thumb -->
                                <div class="product-image">
                                    <img loading="lazy" class="product-thumb mx-auto pt-3"
                                        src="public/feature_image/{{ $product->feature_image }}" alt="">
                                </div>
                                <!-- Card Body -->
                                <div class="card-body py-4">
                                    <h3>{{ $product->prod_name }}</h3>
                                   
                                    <h4 class="text-primary py-2">&#8377;{{ $product->offer_price }}</h4>
                                </div>
                                <!-- Product Order -->
                                <div class="product-order">
                                    <!-- Order Button -->
                                    <div class="order-btn d-flex flex-wrap justify-content-center">
                                        <a class="prolend-primary style-two m-2" href="https://deskohome.com/development/product-detail/<?=$product->prod_id?>">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Product Card -->
                        <!-- Product Card -->

                        <!-- Product Card -->

                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Products Area End ***** -->

        <!-- ***** Products Area End ***** -->

        <section class="products-area pt-100">
            <img src="https://deskohome.com/img/home/banner.png" width="100%" class="wow fadeInUp"
                data-wow-delay="0.3s">
        </section>


        <section class="comparison-area pr-4 overflow-scroll">
            <div class="container">
                <div class="row justify-content-center d-flex wow fadeInDown" data-wow-delay="0.4s">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="section-heading50 text-center">
                            <h2 class="text-capitalize">Product-Wise Smart Features</h2>
                            <p class="d-none d-sm-block mt-4">Each Product is designed for its unique usage</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-12 ">
                        <!--<table class="table table-responsive-lg table-bordered table-striped">-->
                        <!--    <thead>-->
                        <!--        <tr>-->
                        <!--            <th class="h3 text-primary" scope="col" style="min-width:200px">-->
                        <!--                <div class="card-body product-body">-->
                        <!--                    <h3 class="pb-2">Smart Features</h3>-->
                        <!--                </div>-->
                        <!--            </th>-->
                        <!--            <th class="text-primary text-center" scope="col">-->
                        <!--                <div class="product-thumb mx-auto text-center">-->
                        <!--                    <img loading="lazy"-->
                        <!--                        src="https://deskohome.com/products/large/1651121182-desko-smartdesk-pro.png"-->
                        <!--                        alt="">-->
                        <!--                </div>-->
                        <!--                <div class="card-body product-body">-->
                        <!--                    <h3 class="pb-2">Desko SmartDesk Pro</h3>-->
                        <!--                </div>-->
                        <!--            </th>-->
                        <!--            <th class="text-primary text-center" scope="col">-->
                        <!--                <div class="product-thumb mx-auto text-center">-->
                        <!--                    <img loading="lazy"-->
                        <!--                        src="https://deskohome.com/products/large/1646709504-desko-bedworx.png"-->
                        <!--                        alt="">-->
                        <!--                </div>-->
                        <!--                <div class="card-body product-body">-->
                        <!--                    <h3 class="pb-2">Desko Bedworx</h3>-->
                        <!--                </div>-->
                        <!--            </th>-->
                        <!--            <th class="text-primary text-center" scope="col">-->
                        <!--                <div class="product-thumb mx-auto text-center">-->
                        <!--                    <img loading="lazy"-->
                        <!--                        src="https://deskohome.com/products/large/1612596528-boomerang-l-shaped-desk.png"-->
                        <!--                        alt="">-->
                        <!--                </div>-->
                        <!--                <div class="card-body product-body">-->
                        <!--                    <h3 class="pb-2">Desko Boomerang</h3>-->
                        <!--                </div>-->
                        <!--            </th>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th class="h3 text-primary" scope="col">Designed For</th>-->
                        <!--            <th class="h3 text-primary text-center" scope="col">8-14 Hours Work/day</th>-->
                        <!--            <th class="h3 text-primary text-center" scope="col">4-6 Hours Work/Day</th>-->
                        <!--            <th class="h3 text-primary text-center" scope="col">6-10 Hours Work/Day</th>-->
                        <!--        </tr>-->
                        <!--    </thead>-->
                        <!--    <tbody>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Sit-Stand Convertible</th>-->
                        <!--            <td class="text-center">Automatic</td>-->
                        <!--            <td class="text-center">Manual</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">USB + Socket on Table Top</th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes , both sides</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built Cable Management</th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Portable(Wheels With Locking)</th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Mobile/Tablet Holder </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">White Board Area </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Utility Drawer </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built Wireless Charger </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built Laptop Recliner </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Accessory Hanger </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">3 m Power Cable Included </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built Plantation Zone </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Wedge/Curved Table Top </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Color Customization</th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Footrest Bar & Cushion </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built Cup-Warmer </th>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built LED lighting </th>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">Focus Zone Uplift </th>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <th scope="row">In-built Bluetooth Speakers </th>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--            <td class="text-center">Yes</td>-->
                        <!--            <td class="text-center">No</td>-->
                        <!--        </tr>-->
                        <!--    </tbody>-->
                        <!--</table>-->
                        <div class="table-img">
                            <img src="public/frontend/assets/img/DeskoComparative.png" width="1180" >
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!--====== Contact Area Start ======-->
        <section id="partner-with-us" class="contact-area partnerdesign">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Partner With Us</h2>
                            <p class="d-none d-sm-block mt-4">
                                If you are a company, Let us help design your office space and revolutionize the ways of
                                working for your employees.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                           <form id="contact-form" method="POST" action="https://deskohome.com/development/admin/contact-us-form">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group wow fadeInUp" data-wow-delay="0.3s">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Company/Individual Name*" required="required">
                                            @error('name')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-delay="0.3s">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email*" required="required">
                                            @error('email')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group wow fadeInUp" data-wow-delay="0.4s">
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="Phone*" required="required">
                                            @error('phone')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="profession"
                                                placeholder="Profession">
                                            @error('profession')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <style>
                                            .contact-box .form-group textarea {
                                                height: 182px;
                                            }
                                        </style>
                                        <div class="form-group wow fadeInUp" data-wow-delay="0.6s">
                                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn mt-3 wow fadeInUp"
                                            data-wow-delay="0.3s"><span class="text-white pr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                                </svg>
                                            </span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
                <div class="powered-design">
                    <div class="shapes-container wow fadeInDown" data-wow-delay="0.5s">
                        <div class="shape shape-triangle shape-animated">
                            <div class="animation--rotating"></div>
                        </div>
                    </div>
                    <div class="shape pattern-dots-1 wow fadeInDown" data-wow-delay="0.3s"></div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->


        <section class="row faqs">
            <div class="container">
                <div class="row section-header wow fadeInUp">
                    <h2>faq</h2>
                    <p>Got questions? We’ve got answers. If you have some other questions, feel free to send us an email
                        to
                        <a href="#"><span class="__cf_email__"
                                data-cfemail="7c14191010133c0c0e1318091f08521f1311">[email&#160;protected]</span></a>
                    </p>
                </div>
                <div class="row">
                    @foreach ($faq as $f)
                        <div class="col-sm-6 faq wow fadeInUp">
                            <h4>{{ $f->question }}</h4>
                            <p>{{ $f->ans }}</p>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>




        <footer class="row">
            <div class="container">
                <div class="row m0 social-links">
                    <ul class="nav">
                        <li class="wow fadeInUp"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><i
                                    class="fa fa-youtube"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#"><i
                                    class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.5s"><a href="#"><i
                                    class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="row m0 menu-rights">
                    <ul class="nav footer-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Mobile App</a></li>
                        <li><a href="#">PressKit</a></li>
                    </ul>
                    <p>Copyright © 2022. DESKO UP YOUR GAME.
                        <br class="small-divide"> All rights reserved
                    </p>
                </div>
            </div>
        </footer>

    </main>
    <button onclick="topFunction()" id="myBtn"  class="back_to_top" title="Go to top"><img src="public/images/back_to_top.png" alt="back to top"></button>
    <!--<a href="#header" class="back_to_top"></a>-->
    <div class="float">
        <a href="https://api.whatsapp.com/message/JKIJWZUNVBQBE1?autoload=1&app_absent=0" class=" d-flex" target="_blank">
        <i class="fa fa-whatsapp my-float"></i><div class="chat"><h5>Chat Us</h5></div>
        </a>
    </div>
    <script src="public/js/lib/jquery-2.2.0.min.js"></script>
    <script src="public/js/lib/bootstrap.min.js"></script>
    <script src="public/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="public/js/plugins/wow.min.js"></script>
    <!--     <script src="public/js/includes/contact.js"></script>
 -->
    <script src="public/js/main.js"></script>
    <script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){

        var showHeaderAt = 500;

        var win = $(window),
                body = $('body');
        
        if(win.width() > 400){

            win.on('scroll', function(e){

                if(win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                }
                else {
                    body.removeClass('fixed');
                }
            });

        }

    });

</script>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "220px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>

</body>

</html>
