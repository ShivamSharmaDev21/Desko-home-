@extends('layout')

@section('body')
<style>
  body {
	/*background: #eee;*/
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}
@media screen and (max-width: 620px)
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
@media only screen and (max-width: 667px){
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
           <h1 class="mb-3">Refund & Cancellation Policy</h1>
           <div class="text-start">
               <h5>1.WARRANTY & REPLACEMENT</h5>
              <p>•	DESKO provides below warranties from date of sale against manufacturing defect to the original purchaser. Warranty Duration as mentioned below: 
<br>•	18 Months on Frame & Motor Components<br>
•	6 Months on Electricals/Electronics<br>
•	24 Months on Manufacturing*<br>
•	For damage on arrival, please inform us within 3 days of receipt over the mail getdesko@gmail.com , for any kind of resolutions/support related to the same from our side. Unboxing Video is compulsory for support related to damage on arrival.<br>
•	For later (After 3 days of delivery), malfunctioning/manufacturing defect, a claim should be made within the warranty period by email to getdesko@gmail.com by giving details of the problem, attaching images to explain the nature of the problem. The claim must also provide a copy of the invoice.<br> 
•	Our engineers will provide telephonic/video call support and try to fix the problem.<br>
•	Basis the information shared over mail, our team will approve/reject the claim within 3-4 working days.<br> 
•	Post approval, Desko shall either send a person to rectify the same OR contact your local carpenter/electrician/SME to fix the problem. In case the customer is directly charged by the local service representative, Desko will reimburse the amount basis the service bill photo shared by the customer. (The amount for service has to be pre-aligned between the customer and Desko before the local service representative leaves for the customer’s place)<br>  
•	First preference shall be to resolve/repair/part-replacement. In case still the issue persists, replacement of the product shall be done by Desko. Minimum duration for replacement for Standard desks will be 3 weeks and for customized desks it shall be 4 weeks.<br>
•	Customer shall be responsible to preserve the existing product in its original condition along with bubble wrap, packaging material, etc until it is not replaced by new product. <br>
*Manufacturing Issues include any problem pertaining to Wood/Steel Material, Connections, Nut/Bolts after successful installation is completed<br>
This warranty does not cover:<br>
•	Normal wear and tear, cuts or scratches, surface finishing such as powder coating/plating, or damages caused by impacts or accidents<br>
•	Alteration or modification of the product by customer<br>
•	Abuse, misuse, negligence, incorrect installation or accident.<br>
•	The use of inappropriate cleaning methods or cleaning products on delicate surfaces <br>
Note: Our warranty is limited to the product only. Any consequential or incidental damages or loss of any nature are not covered by this warranty.<br>
</p>
           </div>
           <div class="text-start">
               <h5>
2.	RETURN & REFUND
</h5>
              <p>•	Our product comes with a 10 Day Return Policy for Select Products* <br>
•	To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging.<br>
•	In case if it was already assembled, then dismantling and re-packing to original boxes have to be done by customer.<br>
•	Shipping to source location shall be customer’s responsibility and expenditure. If you are shipping an item over Rs.5000, you should consider using a trackable shipping service or purchasing shipping insurance since we don’t guarantee that we will receive your returned item.<br>
•	Oce your return is received and inspected; we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund.<br>
•	If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment, within 4 to 5 working days.<br>
•	Desko will deduct cost of parts damaged in transit (if any) and need to be replaced, i.e it will be at the customer’s expense.<br>
•	Any Customized Products/Desks are Non-Refundable<br>
*Select Products :  Desko Smartdesk Pro & Basic<br>

Any dispute is subject to Delhi jurisdiction only.

</p>
           </div>
           <div class="text-start">
               <h5>Late or missing refunds </h5>
              <p>If you haven’t received a refund yet, first check your bank account again.
Then contact your credit card company, it may take some time before your refund is officially posted.
Next contact your bank. There is often some processing time before a refund is posted.
If you’ve done all of this and you still have not received your refund yet, please contact us at getdesko@gmail.com
</p>
           </div>
           <div class="text-start">
               <h5>Sale items </h5>
              <p>Only regular priced items may be refunded, unfortunately sale items cannot be refunded.</p>
           </div>
           <div class="text-start">
               <h5>Shipping </h5>
              <p>To return your product, you should send your product to: Ground Floor, Plot No -422 KH No - 9/20, Laxmi Vihar, Najafgarh, New Delhi, South West Delhi, Delhi, 110043 </p>
           </div>
           <div class="text-start">
               <h5>Cancellation Policy </h5>
              <p>Post payment, cancellation of order can be done upto 1 hr of purchase time, by sending us a mail at getdesko@gmail.com and full refund shall provided to user in 7 working days.
              <br/>
              Post 1 hour no refunds shall be provided.
              </p>
           </div>
          </div>
            </div>
	        </div>
</div>
</section>

  </body>
 @endsection	