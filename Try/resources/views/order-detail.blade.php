@extends('layout')

@section('body')
<style>
  *{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body {
    color: #566787;
    background: #f5f5f5;
    
    font-size: 13px;
}

#order-heading {
    background-color: #edf4f7;
    position: relative;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    max-width: 800px;
    padding-top: 20px;
    margin: 30px auto 0px
}

#order-heading .text-uppercase {
    font-size: 0.9rem;
    color: #777;
    font-weight: 600
}

#order-heading .h4 {
    font-weight: 600
}

#order-heading .h4+div p {
    font-size: 0.8rem;
    color: #777
}
.mt-text{
    float:right;
}
.close {
    padding: 10px 15px;
     /*background-color: #777; */
    border-radius: 20%;
    position: absolute;
    /* right: -15px; */
    top: 15px;
    left: 35px;
    /* list-style: none; */
}
nav{
    border-bottom: 1px solid #ccc;
}
.close a{
    /*text-decoration:none;*/
    font-size:20px;
    /*color: #fff;*/
}
.wrapper {
    padding: 0px 50px 50px;
    max-width: 800px;
    margin: 0px auto 40px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px
}

.table th {
    border-top: none
}

.table thead tr.text-uppercase th {
    font-size: 0.8rem;
    padding-left: 0px;
    padding-right: 0px
}

.table tbody tr th,
.table tbody tr td {
    font-size: 0.9rem;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 5px
}

.table-responsive {
    /*height: 100px*/
}

.list div b {
    font-size: 0.8rem
}

.list .order-item {
    font-weight: 600;
    color: #6db3ec
}

.list:hover {
    background-color: #f4f4f4;
    cursor: pointer;
    border-radius: 5px
}

label {
    margin-bottom: 0;
    padding: 0;
    font-weight: 900
}

button.btn {
    font-size: 0.9rem;
    background-color: #66cdaa
}

button.btn:hover {
    background-color: #5cb99a
}

.price1 {
    color: #5cb99a;
    font-weight: 700
}

p.text-justify {
    font-size: 0.9rem;
    margin: 0
}

.row {
    margin: 0px
}

.subscriptions {
    border: 1px solid #ddd;
    border-left: 5px solid #ffa500;
    padding: 10px
}
.ml-auto, .mx-auto {
    margin-left: auto!important;
}
.subscriptions div {
    font-size: 0.9rem
}
#auto{
    float:right;
}
.text-font-h{
    font-size:2rem;
}
p{
    font-size:1rem;
}
.adddres b{
    font-size:1rem;
}
.ft{
    font-size:1rem !important;
}
#pl-3{
    font-size:1rem;
}
@media(max-width:768px) {
    .wrapper {
        padding: 20px
    }

    body {
        font-size: 0.85rem
    }

    .subscriptions div {
        padding-left: 5px
    }

    img+label {
        font-size: 0.75rem
    }
}
@media(max-width:768px){
    .text-font-h {
    font-size: 1.3rem !important;
}
.close {
    padding: 10px 15px;
    /* background-color: #777; */
    border-radius: 20%;
    position: absolute;
    /* right: -15px; */
    top: 0px !important;
    left: 20px !important;
    /* list-style: none; */
}
}


</style>
  </head>

  <body>
<div class="sec-order-detail mt-5">
    <div>
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
    <div class="text-uppercase">
        <p>Order details</p>
    </div>
    <div class="h4 text-font-h">{{date('d-m-Y',strtotime($order->created_at))}}</div>
    <div class="pt-1">
        <p>Order #{{$order->order_id}} is currently<b class="text-dark">  @if($order->order_status==0)
	                    <span class="status text-warning">Pending</span>
	                    @elseif($order->order_status==1)
	                    <span class="status text-info">Shipped</span>
	                    @elseif($order->order_status==2)
	                    <span class="status text-success">Delivered</span>
	                    @else
	                    <span class="status text-danger">Cancelled</span>
	                   @endif</b></p>
    </div>
    <!--<div class="btn close text-white"> <a href="my-order-new.html">Back</a> </div>-->
</div>
<div class="wrapper bg-white">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col">Iteam</th>
                    <th scope="col">Iteam Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col" class="text-right mt-text">total</th>
                </tr>
            </thead>
            <tbody>
                 <?php $sub_total=0;?> 
                 @if(isset($prod_details) && count($prod_details)>0)
                 @foreach($prod_details as $prod)
                <tr>
                    <th scope="row" class="ft">{{$prod->prod_name}}</th>
                    <td ><img src="{{URL::asset('admin/public/feature_image/'.$prod->feature_image)}}" alt="chair" width="70" height="70"></td>
                    <td style="padding-left:30px"><b>{{$prod->quantity}}</b></td>
                    <td class="text-right mt-text ft"><b>{{($prod->quantity*$prod->offer_price)}}</b></td>
                </tr>
                	<?php $sub_total=$sub_total+($prod->quantity*$prod->offer_price);?>
                 @endforeach
                @endif
                 @if(isset($desk_details) && count($desk_details)>0)
                 @foreach($desk_details as $desk)
                 <tr>
                    <th scope="row" class="ft">Desk</th>
                    <td ><img src="{{URL::asset('admin/public/capture_desk_image/'.$desk->captured_desk_img)}}" alt="chair" width="70" height="70"></td>
                    <td style="padding-left:30px"><b>{{$desk->desk_qty}}</b></td>
                    <td class="text-right mt-text ft"><b>{{($desk->desk_qty*$desk->desk_price)}}</b></td>
                </tr>
                	<?php $sub_total=$sub_total+($desk->desk_qty*$desk->desk_price);?>
                 @endforeach
            @endif
             
            </tbody>
        </table>
    </div>
    
    
    
    <!--<div class="d-flex justify-content-start align-items-center list my-2 py-1">-->
        
    <!--    <div class=""> <img src="assets/img/chair.png" alt="chair" class="rounded-circle" width="70" height="70"> </div>-->
        
       
    <!--    <div class="order-item"><b>Color: Black</b></div>-->
    <!--    <div class="ml-auto" id="auto"> <label>1 pc</label> </div>-->
    <!--</div>-->
    <div class="pt-2 border-bottom mb-3"></div>
    <!--<div class="d-flex justify-content-start align-items-center pl-3" id="pl-3">-->
    <!--    <div class="text-muted">Payment Method</div>-->
    <!--    <div class="ml-auto justify-content-end" id="auto"> <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt="" width="30" height="30"> <label>Mastercard ******5342</label> </div>-->
    <!--</div>-->
    <div class="d-flex justify-content-start align-items-center py-1 pl-3" id="pl-3">
        <div class="text-muted">Shipping</div>
        <div class="ml-auto" id="auto"> <label>Free</label> </div>
    </div>
    <!--<div class="d-flex justify-content-start align-items-center pb-4 pl-3 border-bottom" id="pl-3">-->
    <!--    <div class="text-muted"> <button class="text-white btn">50% Discount</button> </div>-->
    <!--    <div class="ml-auto price1" id="auto"> -$34.94 </div>-->
    <!--</div>-->
    <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom" id="pl-3">
        <div class="text-muted"> Total Amount </div>
        <div class="ml-auto h5" id="auto"><i class="far fa-rupee-sign"></i> {{$sub_total}} </div>
    </div>
    <div class="row border rounded p-1 my-3">
        <!--<div class="col-md-6 py-3">-->
        <!--    <div class="d-flex flex-column align-items start adddres"> <b>Billing Address</b>-->
        <!--    <h6 classs="pt-1">Pushpak</h6>-->
        <!--        <p class="text-justify pt-1"> 56 Jonathon Apt.220,</p>-->
        <!--        <p class="text-justify">Indore</p>-->
        <!--        <p class="text-justify">+91 1234567890</p>-->
        <!--    </div>-->
        <!--</div>-->
         @if(isset($address) && count($address)>0)
                 @foreach($address as $add)
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start adddres"> <b>Shipping Address</b>
            <h6 classs="pt-1">{{$add->fname.' '.$add->lname}}</h6>
                <p class="text-justify pt-1">{{$add->address}},{{$add->city_name}},{{$add->state_name}},{{$add->pincode}}</p>
                <p class="text-justify">{{$add->country}}</p>
                <p class="text-justify">+91 {{$add->mobile}}</p>
            </div>
        </div>
         @endforeach
            @endif
    </div>
  
</div>
    </div>
    </div>
</div>
 

        <!--Latest compiled and minified JavaScript-->
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

  </body>
   @endsection	
