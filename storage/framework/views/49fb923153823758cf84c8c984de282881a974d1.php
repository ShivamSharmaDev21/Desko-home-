<?php $__env->startSection('body'); ?>
<style>
  body {
	/*background: #eee;*/
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}
@media  screen and (max-width: 620px)
{
.checkout-page {
    margin-top: 1rem;
}
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
 

</style>
  </head>

  <body>
	<section class="checkout-page">
	    <div class="container-fluid">
	        <div calss="row" style="justify-content: center;display: flex;">
	            <div class="col-lg-10">
	               
          <div class="py-5 text-center">
           <h1 class="mb-3">Domestic Shipping Policy</h1>
           <div class="text-start">
               <h5>Shipment processing time</h5>
              <p>All orders are processed within 1 Day excluding Sunday and National Holidays. In case of any delays customer will be informed via email id or phone call.

We Use Best Quality Shipping Facilities for your Product. We mainly execute Shipping via Shiprocket OR DP World depending on your location and pincode
</p>
           </div>
           <div class="text-start">
               <h5>Shipping rates and delivery estimates</h5>
              <p>
Shipment method	Estimated delivery time	Shipment cost
Standard	5-7 business days	2250

*Shipping charges might be very depending on order size. Changes in any shipping charges will be informed to customer
</p>
           </div>
           <div class="text-start">
               <h5>Shipment confirmation and order tracking</h5>
              <p>Customers will receive and email or phone call regarding their shipment confirmation</p>
           </div>
           <div class="text-start">
               <h5>Customs, duties, and taxes</h5>
              <p>Metadesk Private Limited (Desko) is not responsible for any customs and taxes applied to your order. All fees imposed during or after shipping are the responsibility of the customer (tariffs, taxes, etc.).</p>
           </div>
           <div class="text-start">
               <h5>Damages</h5>
              <p>Metadesk Private Limited (Desko) is not liable for any products damaged or lost during shipping. If you received your order damaged, please contact the shipment carrier or our support team directly to file a claim. Please save all packaging material and damaged goods before filing a claim.</p>
           </div>
           <div class="text-start">
               <h5>International Shipping Policy</h5>
              <p>Orders Outside India will not be accepted </p>
           </div>
           <div class="text-start">
               <h5>Returns Policy</h5>
              <p>In case of any return or other product issues kindly reach out to us via Contact Us Page or check-out our Return Policy 

For more information, email support [getdesko@gmail.com]
</p>
           </div>
          </div>
            </div>
	        </div>
</div>
</section>

  </body>
 <?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/devvsh/resources/views/shipping.blade.php ENDPATH**/ ?>