@extends('layout')

@section('body')
<style>
body {
    color: #566787;
    background: #f5f5f5;
    
    font-size: 13px;
}
.badge-danger{
    margin-top: 20px;
    margin-left: -5px;

}
.div-pad{
    padding-top: 15px;
}
.price-order h6{
    line-height:1.3;
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
.mt-100 {
    padding-top: 5rem;
    padding-bottom: 5rem;
}
.my-cart-pad {
    margin-right: 0rem;
}
.status {
    font-size: 40px;
    margin: 2px 2px 0 0;
    padding-bottom: 12px;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
/*order*/
.order-list{
    color: #fff;
    background: #4b5366;
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.order .content {
    /*margin-top: 1rem;*/
    border: 1px solid #ccc;
    height: 140px;
    background: #fff;
    border-radius: 5px;
    /*padding-bottom: 1rem;*/
    /*margin-bottom: 5rem;*/
    border-color: #fff;
}
.order-product {
    margin-top:1rem;
}
.order-product img {
    width: 100%;
    max-width: 55%;
    height: 100%;
}
.pagination-right{
    float:right;
}
.profile-mg{
    background:#fff;
    /*height:400px;*/
    display:flex;
    padding: 20px 20px 20px 20px;
    border-radius:5px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.profile-mg1{
    background:#fff;
    /*height:400px;*/
    /*display:flex;*/
    /*padding: 40px;*/
    border-radius:5px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.user-img{
    border-radius:50px;
    
}
.user-name {
    padding-top: 10px;
    padding-left: 15px;
}
.user-name h3,h6{
    line-height:0.8;
}
.profile-btn .btn{
    width:unset;
}
.form-label label{
    font-size:18px;
}
.profile-title h2{
    padding-bottom:10px;
}
/*body {*/
/*    letter-spacing: 0.8px;*/
/*    background: linear-gradient(0deg , #fff , 50% , #74a0ff);*/
/*    background-repeat: no-repeat;    */
/*}*/

/*.container-fluid {*/
/*    margin-top: 80px !important;*/
/*    margin-bottom: 80px !important;*/
/*}*/

p {
    font-size: 14px;
    margin-bottom: 7px;
}

.cursor-pointer {
    cursor: pointer;
}

/*a{*/
/*    text-decoration: none !important;*/
/*    color: #651FFF !important;*/
/*}*/

.bold{
    font-weight: 600;
}

.small{
    font-size: 12px !important;
    letter-spacing: 0.5px !important;
}

.Today{
    color: rgb(83, 83, 83);
}

.btn-outline-primary{
    background-color: #fff !important;
    color:#4bb8a9 !important;
    border:1.3px solid #4bb8a9;
    font-size: 12px;
    border-radius: 0.4em !important;
}

.btn-outline-primary:hover{
    background-color:#4bb8a9  !important;
    color:#fff !important;
    border:1.3px solid #4bb8a9;
}

.btn-outline-primary:focus,
.btn-outline-primary:active {
    outline: none !important;
    box-shadow: none !important;
    border-color: #42A5F5 !important;
}
 
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 33.33%;
    float: left;
    position: relative;
    font-weight: 400;
    color: #455A64 !important;
    
}

#progressbar #step1:before {
    content: "1";
    color: #fff;
    width: 29px;
    margin-left: 15px !important;
    padding-left: 11px !important;
}


#progressbar #step2:before {
    content: "2";
    color: #fff;
    width: 29px;

}

#progressbar #step3:before {
    content: "3";
    color: #fff;
    width: 29px;
    margin-right: 28px !important;
    padding-right: 11px !important;
    padding-left: 10px;
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #455A64 ;
    border-radius: 50%;
    margin: auto;
}

 #progressbar li:after {
    content: '';
    width: 121%;
    height: 2px;
    background: #455A64;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1;
} 

#progressbar li:nth-child(2):after {
    left: 50%;
}

#progressbar li:nth-child(1):after {
    left: 25%;
    width: 121%;
}
#progressbar li:nth-child(3):after {
    left: 25% !important;
    width: 50% !important;
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #4bb8a9; 
}

.card {
    background-color: #fff ;
    box-shadow: 2px 4px 15px 0px rgb(0, 108, 170);
    z-index: 0;
}

small{
    font-size: 12px !important;
}

.a {
    justify-content: space-between !important;
}

.border-line {
    border-right: 1px solid rgb(226, 206, 226)
}

.card-footer img{
    opacity: 0.3;
}

.card-footer h5{
    font-size: 1.1em;
    color: #8C9EFF;
    cursor: pointer;
}
.ml-auto a{
    float:right;
    text-decoration: none;
    margin-top: -29px;
}
.flex-sm-row{
    display:flex;
}
#img-fluid {
    float: right;
    margin-left: 10rem;
}
.media .btn{
    width:unset;
}
.list-order ul li {
    font-weight: 600;
    list-style: none;
    font-size: 17px;
    line-height: 2.5;
}
.list-order ul li a{
    text-decoration:none;
    color:#000;
    opacity: 0.7;
}
.list-order span{
   padding-right: 10px;
}
.list-order span i{
   color:#53b5aa;
}
.order-left a{
    text-decoration: none !important;
    opacity: 0.8;
}
.order-left h5, h6, p{
    color:#000;
}
@media only screen and (max-width: 667px) {
  .order-product img {
    width: 100%;
    max-width: 30% !important;
    height: 100%;
}
nav{
    border-bottom: 1px solid #ccc;
    background: #fff;
}
.mt-100{
    padding-top: 1rem !important;
}
.tab-order{
    width:15%;
}

.tab-order1{
    width:23%;
}
.price-order h6 {
   
    font-size: 10px !important;
}
.order-product h6{
    font-size: 10px !important;
}
.tab-x{
    width:17%;
    margin-left:40px;
}
.status{
    font-size: 20px !important;
    margin: 8px 0px 0px 0px !important;
}
}
</style>
  </head>

  <body>
   
<!--order-->

	<section class="order mt-100">
	    <div class="container">
	        <div class="profile-title">
	            <h2>My Order</h2>
	        </div>
	        <div class="row">
	            <div class="col-md-4">
	               <div class="profile-mg">
	                    <img  height="50px"width="50px" src="{{(!empty($orders[0]->image))?URL::asset('admin/public/user_image/'.$orders[0]->image):URL::asset('public/assets/img/user-icon.png')}}" alt="user" class="user-img">
	                   
	                   <span class="user-name">
	                       <h6> Hello </h6>
	                       <h3>{{session()->get('fname')}}</h3>
	                   </span>
	               </div>
	               <div class="profile-mg mt-3">
	                   <div class="list-order">
	                      <ul>
	                           <li><a href="{{url('/my-profile')}}"><span><i class="fas fa-user"></i></span> My Profile</a></li>
	                           <li><a href="{{url('/my-orders')}}"><span><i class="fas fa-cart-arrow-down"></i></span> My Order</a></li>
	                           <!--<li><a href="{{url('/track-orders')}}"><span><i class="fas fa-bags-shopping"></i></span> Track Order</a></li>-->
	                           <li><a href="{{url('/logout-user')}}"><span><i class="fas fa-sign-out-alt"></i></span> LogOut</a></li>
	                       </ul>
	                   </div>
	               </div>
	            </div>
	            <div class="col-md-8">
	            <div class="profile-mg1">
	               <div class="container">
	        <!--<div class="order-list">-->
	        <!--    <h4>Orders</h4>-->
	        <!--</div>-->
	        @if(isset($orders) && count($orders)>0)
            @foreach($orders as $order)
	        <div class="content order-left">
	            <a href="{{url('/order-detail/'.$order->order_id)}}">
	            <div class="row">
	            <!--<div class="col-md-3 col-sm-4">-->
	                
	                <!--<h5>Product</h5>-->
	                <!--<div class="order-product">-->
	                    <!--<a href="order-detail.html">-->
	                <!--    <img src="assets/img/chair.png" class="avatar" alt="">-->
	                    <!--</a>-->
	                <!--</div>-->
	            <!--</div>-->
	            <!--<div class="col-md-3 col-sm-4">-->
	                
	            <!--    <div class="order-product" id="order-product">-->
	                   <!--<h5>Office Chair</h5>-->
	            <!--       <h6>#{{$order->order_id}}</h6>-->
	                   <!--<p>Seller: abc</p>-->
	            <!--    </div>-->
	                
	            <!--</div>-->
	            <div class="col-md-1 col-sm-4 tab-order">
	                <div class="order-product mt-5 price-order">
	                    <h6>#{{$order->order_id}}</h6>
	                </div>
	            </div>
	            <div class="col-md-2 col-sm-4 tab-order">
	                <div class="order-product mt-5 price-order">
	                    <h6>{{$order->fname.' '.$order->lname}}</h6>
	                </div>
	            </div>
	            <div class="col-md-4 col-sm-4 tab-order">
	                <div class="order-product mt-5 price-order">
	                    <h6>{{$order->email}}</h6>
	                </div>
	            </div>
	           
	            <div class="col-md-2 col-sm-4  tab-x">
	                <div class="order-product mt-5 price-order">
	                    <h6><i class="far fa-rupee-sign"></i>{{$order->sub_total}}</h6>
	                </div>
	            </div>
	            <div class="col-md-3 col-sm-4 tab-order1">
	               <div class="order-product mt-5">
	                    @if($order->order_status==0)
	                    <h6><span class="status text-warning">&#8226;</span>Pending</h6>
	                    @elseif($order->order_status==1)
	                    <h6><span class="status text-info">&#8226;</span>Shipped</h6>
	                    @elseif($order->order_status==2)
	                    <h6><span class="status text-success">&#8226;</span>Delivered</h6>
	                    @else
	                    <h6><span class="status text-danger">&#8226;</span>Cancelled</h6>
	                   @endif
	               </div>
	            </div>
	        </div>
	        </a>
	       </div><hr>
	        @endforeach
            @endif
           
	      
	        <!--<div class="pagination-right mt-4">-->
	        <!--    <div class="pagination">-->
         <!--         <a href="#">&laquo;</a>-->
         <!--         <a href="#">1</a>-->
         <!--         <a class="active" href="#">2</a>-->
         <!--         <a href="#">3</a>-->
         <!--         <a href="#">4</a>-->
         <!--         <a href="#">5</a>-->
                 
         <!--         <a href="#">&raquo;</a>-->
         <!--       </div>-->
	        <!--</div>-->
	   </div>
	            </div>
	            
	        </div>
	    </div>
	    </div>
	    
	</section>

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
  function openNav() {
  document.getElementById("myNav").style.width = "70%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>


  </body>
  
@endsection	