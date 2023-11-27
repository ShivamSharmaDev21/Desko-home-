<?php $__env->startSection('body'); ?>
<style>
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
@media  screen and (max-width: 620px)
{
.checkout-page {
    margin-top: 1rem;
}
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
           <h1 class="mb-3">Privacy Policy</h1>
           <div class="text-start">
               
               <h5>WHAT DO WE DO WITH YOUR INFORMATION?</h5>
               
              <p>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.

When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.

Email marketing (if applicable): With your permission, we may send you emails about our store, new products and other updates.</p>
           </div>
           
           <div class="text-start">
               <h5>SECTION 2 - CONSENT</h5>
               <h5>How do you get my consent?</h5>
              <p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.

If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.
</p>
           </div>
           <div class="text-start">
               <h5>How do I withdraw my consent?</h5>
              <p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at any time, by contacting us at getdesko@gmail.com or mailing us at: Ground Floor, Plot No -422 KH No - 9/20, Laxmi Vihar, Najafgarh, New Delhi, South West Delhi, Delhi, 110043.</p>
           </div>
           <div class="text-start">
               <h5>SECTION 3 - DISCLOSURE</h5>
               
              <p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p>
           </div>
           <div class="text-start">
               <h5>SECTION 4 - PAYMENT</h5>
               
              <p>We use Razorpay for processing payments. We/Razorpay do not store your card data on their servers. The data is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS) when processing payment. Your purchase transaction data is only used as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is not saved.

Our payment gateway adheres to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.

PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.

For more insight, you may also want to read terms and conditions of razorpay on https://razorpay.com
</p>
           </div>
           <div class="text-start">
               <h5>SECTION 5 - THIRD-PARTY SERVICES</h5>
               
              <p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.

However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.

For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.

In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.

Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service. 

Links

When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.

</p>
           </div>
           <div class="text-start">
               <h5>SECTION 6 - SECURITY</h5>
               
              <p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.
              </p>
           </div>
           <div class="text-start">
               <h5>SECTION 7 - COOKIES</h5>
               
              <p>We use cookies to maintain session of your user. It is not used to personally identify you on other websites.</p>
           </div>
           <div class="text-start">
               <h5>SECTION 8 - AGE OF CONSENT</h5>
               
              <p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>
           </div>
           <div class="text-start">
               <h5>SECTION 9 - CHANGES TO THIS PRIVACY POLICY</h5>
               
              <p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.

If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.

</p>
           </div>
           <div class="text-start">
               <h5>QUESTIONS AND CONTACT INFORMATION</h5>
               
              <p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at getdesko@gmail.com or by mail at Ground Floor, Plot No -422 KH No - 9/20, Laxmi Vihar, Najafgarh, New Delhi, South West Delhi, Delhi, 110043 

</p>
           </div>
           <div class="text-start">
              
               
              <p> [Re: Privacy Compliance Officer]

[Ground Floor, Plot No -422 KH No - 9/20, Laxmi Vihar, Najafgarh, New Delhi, South West Delhi, Delhi, 110043 
]

----
</p>
           </div>
          </div>
            </div>
	        </div>
</div>
</section>

  </body>
 <?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/development/resources/views/privacy-policy.blade.php ENDPATH**/ ?>