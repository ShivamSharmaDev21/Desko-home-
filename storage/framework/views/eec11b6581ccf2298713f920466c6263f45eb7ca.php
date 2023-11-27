

<?php $__env->startSection('body'); ?>
<style>
  *{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
/*background: #f4f4f4;*/
background:rgba(244,244,244,0.1);
/*background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);*/
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}
.badge-danger{
    margin-top: 20px;
    margin-left: -5px;

}
.div-pad{
    padding-top: 15px;
}
nav{
    background:#fff;
    border-bottom: 3px solid #f4f4f4;
}
/*.border-bottom {*/
/*    border-bottom: 1px solid #dee2e6!important;*/
/*    border-top: 1px solid #dee2e6!important;*/
/*}*/
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
    border-radius: 0.1rem;
	-webkit-transition: all .2s linear;
	-moz-transition: all .2s linear;
	-ms-transition: all .2s linear;
	-o-transition: all .2s linear;
	/*transition: all .2s linear;*/
}
.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
.wrapper-2 h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.go-home a {
    color: #fff;
    text-decoration: none;
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}
.thankyou-wrapper{
  width:100%;
  height:auto;
  margin:auto;
  background: rgba(219,240,253,0.6);
  padding:10px 0px 50px;
}
.thankyou-wrapper h1{
  font:100px 'Poppins', sans-serif;
  text-align:center;
  color:#333333;
  padding:10px 10px 0px;
}
.thankyou-wrapper p{
  font:36px 'Poppins', sans-serif;
  text-align:center;
  color:#333333;
  padding:0px 10px 0px;
  margin-top:-1.5rem;
}
.thankyou-wrapper a{
  font:26px 'Poppins', sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#E47425;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #F96700;
}
.thankyou-wrapper a:hover{
  font:26px 'Poppins', sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#F96700;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #F96700;
}
.login-main-wrapper .container{
    width:60%;
    
}
.top-100{
    padding-top:5rem;
    padding-bottom:5rem;
}
.logo-header{
    background:#fff;
}
.product-detail{
    padding:15px;
    font-size: 18px;
}
.qty-m{
    margin-left:35%;
}
.pt-100{
    padding-top:10px;
}
.order-id{
    padding-top:5px;
    font-size:14px;
}
@media  screen and (max-width: 620px) {

     .thankyou-wrapper h1{
  font:55px 'Poppins', sans-serif !important;
         padding-bottom: 20px;
}
     }
     .thankyou-wrapper p{
         font-size:25px;
     }
     .product-detail {
         padding:25px !importnat;
     }
     .qty-m {
    margin-left: 50% !important;
    
}
 .px-3{
     float:right !important;
 }  
 .top-100 {
    padding-top: 1rem !important;
    padding-bottom: 2rem !important;
}
hr{
    width:100% !important;
}
}
</style>
  </head>

  <body>
       <div class="remove_alert">
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>
</div>

<section class="login-main-wrapper top-100">
      <div class="container">
          <div class="main-container">
          <div class="login-process">
              <div class="login-main-container">
                  
                  <div class="thankyou-wrapper">
                      <h1>THANK YOU </h1>
                      
                        <p>for shopping with us! </p>
                        
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <img src="https://cws.in.net/deskohome/public/assets/img/desko_logo.png" alt="Image" style="width:200px">
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="product-detail">
                                   <div class="" >
                                       <span>Desk Table</span>
                                       <span class="qty-m">Qty:<?php echo e($order_qty->quantity); ?></span>
                                   </div>
                                   <div class="order-id">
                                       <span>Order Number: <?php echo e($order->order_id); ?></span><br>
                                       <span class="pt-100">Shipping Method: Standard (5-10 Days)</span>
                                       
                                   </div><hr style="width: 75%;margin-top: 22px;margin-bottom: 22px;height: 3px;">
                                   <div class="row">
                                       <div class="col-md-6 w-50">
                                            <span>Subtotal</span><br>
                                            <span>Shipping</span>
                                            <span>Installation</span>
                                       </div>
                                       <div class="col-md-6 w-50">
                                           <span class="px-3">&#8377;<?php echo e($order->sub_total); ?></span><br>
                                           <span class="px-3">Free</span><br>
                                           <span class="px-3"><?php echo e($order->installation==1?"Yes":"No"); ?></span>
                                        </div>
                                        
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
      </div>
    </section>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/main.js"></script>
  
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
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
</script>

  </body>
  <!-- JavaScript Bundle with Popper -->
</html>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cws/public_html/deskohome/resources/views/order_success.blade.php ENDPATH**/ ?>