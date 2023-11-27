<?php $__env->startSection('body'); ?>
<style>
body {
    font-family: Kumbh Sans, sans-serif !important;

}
p{
     font-family: Kumbh Sans, sans-serif !important;
}

  body {
	/*background: #eee;*/
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}

.content a{
    float:right;
}
.clearfix {
  content: "";
  display: table;
  clear: both;	
}


#site-header, #site-footer {
	background: #fff;
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
	width: 980px;
}

#cart {
	width: 100%;
}

#cart h1 {
	font-weight: 400;
	/*padding-right: 5px;*/
	width: 100px;
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
	border: 1px solid #eee;
	margin: 20px 0;
	width: 100%;
	height: 100px;
	position: relative;

	-webkit-transition: margin .2s linear, opacity .2s linear;
	-moz-transition: margin .2s linear, opacity .2s linear;
	-ms-transition: margin .2s linear, opacity .2s linear;
	-o-transition: margin .2s linear, opacity .2s linear;
	transition: margin .2s linear, opacity .2s linear;
}

.product img {
    width: 85%;
    /* max-width: 85%; */
    height: 100%;
}

.product header, .product .content {
	background-color: #fff;
	border: 1px solid #ccc;
	border-style: none none solid none;
	float: left;
}

.product header {
	/*background: #000;*/
	margin: 0 0% 20px 0;
	overflow: hidden;
	padding: 0;
	position: relative;
	width: 24%;
	height: 100px;
	border-radius: 5px 0px 0px 5px;
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
	display:flex;
	border-radius: 0px 5px 5px 0px;
}

.product h1 {
	color: #000;
	font-size: 18px;
	font-weight: 300;
	margin: 30px 0 20px 0;
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
	width: 40px;
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
	background: #412DB4;
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
	margin: 30px 0 0 0;
}

/*#site-footer {*/
/*	padding: 40px;*/
/*}*/

#site-footer h1 {
    background: #fcfcfc;
    border: 1px solid #ccc;
    border-style: solid none solid none;
    font-size: 24px;
    font-weight: 500;
    margin: 0 0 0px 0;
    padding: 14px 0px;
    text-align: center;
    color: #000;
    width: 460px;
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
    border-color:#412DB4;
}
.btn-primary:focus{
    border-color:#412DB4;
    box-shadow: 0 0 0 0.25rem rgb(62 43 119 / 50%);
}
.btn-primary:active:focus{
    border-color:#412DB4;
    box-shadow: 0 0 0 0.25rem rgb(62 43 119 / 50%);
}
.btn {
    background: #412DB4 !important;
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
    padding-top:35px;
}
#site-header .container{
    width:500px;
}
#cart-id{
     width:500px;
}
#check-out{
    float:right;
    margin-right: 20px;
}
.my-span {
    margin-left: -18rem;
    /* float: left; */
}
label {
    padding-bottom: 6px;
}
.order-md-1 {
    order: 1!important;
    margin-left: -90px;
}
@media  only screen and (max-width: 667px){
    .row1 {
    --bs-gutter-x: 0rem !important;
}
.qt-plus, .qt-minus {

    padding: 0 10px !important;
}
#site-footer h1 {
    width: 350px !important;
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
 

.contact-box button {
    height: 60px;
    border-radius: 8px;
    background: #412DB4 !important;
}
.svg-inline--fa.fa-w-16 {
    width: 1em;
    margin-right: 1rem;
}
.form-group input {
    font-size: 14px;
    height: 50px;
    background-color: #fdfcfb;
    padding: 0 15px;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    -webkit-box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
    box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
    -webkit-transition: 0.5s;
    transition: 0.5s;
}


.form-group textarea {
    font-size: 14px;
    height: 50px;
    background-color: #fdfcfb;
    padding: 0 15px;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    -webkit-box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
    box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
    -webkit-transition: 0.5s;
    transition: 0.5s;
}
</style>
  </head>

  <body>
	<section class="checkout-page py-5">
	   <section id="partner-with-us" class="contact-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                       
         <div class="remove_alert">
 <?php if(Session::get('success')): ?>
        <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <h6 class="alert alert-danger"><?php echo e(Session::get('fail')); ?></h6>
    <?php endif; ?>
</div>
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Contact Us</h2>
                            <p class="d-none d-sm-block mt-4">
                                If you are a company, Let us help design your office space and revolutionize the ways of
                                working for your employees.
                            </p>
                            <p class="d-block d-sm-none mt-4">
                                If you are an Individual, Let us have a one to one conversation to set-up your ergonomic
                                workspace at home
                            </p>
                            <p >
                               Office Address : METADESK PRIVATE LIMITED ,  C/o Sanjay Palm Garden, Gurgaon, Haryana, India, 122004 <br>
                               Register Address :  METADESK PRIVATE LIMITED Ground Floor, Plot No -422 KH No - 9/20, Laxmi Vihar, Najafgarh, New 
Delhi, South West Delhi, Delhi, 110043<br>

Email : getdesko@gmail.com

Phone :  9315966725
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form id="contact-form" method="POST" action="https://devvsh.deskohome.com/contact-us-form">
                                <div class="row">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                      
                                      <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Full Name*" required="required">
                                        </div>
                                       </div>
                                      <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email*" required="required">
                                        </div>
                                       </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" placeholder="Phone*" required="required">
                                        </div>
                                    </div>
                                       <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="profession" placeholder="Profession">
                                        </div>
                                        <style>
                                            .contact-box .form-group textarea {
                                                height: 182px;
                                            }
                                            
                                        </style>
                                        </div>
                                         <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn mt-3" style="    display: inline-block;"><span class="text-white pr-3"><svg class="svg-inline--fa fa-paper-plane fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg><!-- <i class="fas fa-paper-plane"></i> --></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>

  </body>
 <?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/devvsh/resources/views/contact_us.blade.php ENDPATH**/ ?>