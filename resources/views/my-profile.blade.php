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
.btn-success:hover{
    	background: #3e2b77;
    	border-color:#3e2b77;
}
.btn {
	background: #3e2b77;
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
    margin-top: 1rem;
    border: 1px solid #ccc;
    height: 140px;
    background: #fff;
    border-radius: 5px;
    /*padding-bottom: 1rem;*/
    /*margin-bottom: 5rem;*/
    border-color: #fff;
}
.order-product {
    margin-top:2rem;
}
.order-product img{
    width: 100%;
    max-width: 30%;
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
    padding: 40px;
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
</style>
  </head>

  <body>
    
<!--order-->
	<section class="order mt-100">
	    <div class="container">
	        <div class="profile-title">
	            <h2>My Profile</h2>
	        </div>
	        <div class="row">
	            <div class="col-md-4">
	               <div class="profile-mg">
	                   <img  height="50px"width="50px" src="{{(!empty($address->image))?URL::asset('admin/public/user_image/'.$address->image):URL::asset('public/assets/img/user-icon.png')}}" alt="user" class="user-img">
	                   
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
	                <div class="remove_alert">
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-danger">{{Session::get('fail')}}</h6>
    @endif
</div>

	                  <form method="post" action="{{url('update_user_profile')}}" enctype="multipart/form-data">
                         @csrf
	                <div class="profile-mg1">
	                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">First name</label>
                            <input type="text" name="fname" value="{{(isset($address->fname))?$address->fname:''}}" id="form3Example1" class="form-control" placeholder=""required/>
                             <input type="hidden" name="address_id" value="{{(isset($address->address_id))?$address->address_id:''}}" class="form-control" id="" placeholder="" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">Last name</label>
                            <input type="text"name="lname" value="{{(isset($address->lname))?$address->lname:''}}" id="form3Example1" class="form-control" placeholder=""required />
                            
                          </div>
                        </div>
                        
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">Email</label>
                            <input type="email"name="email" value="{{(isset($address->email))?$address->email:''}}"required id="form3Example1" class="form-control" placeholder=""/>
                            
                          </div>
                        </div>
                        
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">Mobile No.</label>
                            <input type="number"name="mobile" value="{{(isset($address->mobile))?$address->mobile:''}}"required id="form3Example1" class="form-control" placeholder=""/>
                            
                          </div>
                        </div>
                        <div class="col-md-12 mt-2">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">Address</label>
                            <input type="text" name="address" value="{{(isset($address->address))?$address->address:''}}"required id="form3Example1" class="form-control" placeholder="1/10 "/>
                            
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                              <label for="country"class="form-label">Country</label>
                                <select name="country" class="custom-select d-block w-100 form-control" id="country" required>
                                  <option selected disabled>Choose...</option>
                                  <option value="India"{{(isset($address->country)&&($address->country=='India'))?'selected':''}}>India</option>
                                </select>
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                            <label for="state"class="form-label">State</label>
                                <select name="state"onchange="get_city(this.value)" class="custom-select d-block w-100 form-control" id="state" required>
                                  <option selected disabled>Choose...</option>
                                  @if(isset($state) && count($state)>0)
                                  @foreach($state as $st)
                                  <option value="{{$st->s_id}}"{{(isset($address->state)&&($address->state==$st->s_id))?'selected':''}}>{{$st->name}}</option>
                                  @endforeach
                                  @endif
                                </select>
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                              <label for="state" class="form-label">City</label>
                                <select name="city" class="custom-select d-block w-100 form-control" id="city-dd" required>
                                  <option selected disabled>Choose...</option>
                                  @if(isset($city) && count($city)>0)
                                  @foreach($city as $ct)
                                  <option value="{{$ct->id}}"{{(isset($address->city)&&($address->city==$ct->id))?'selected':''}}>{{$ct->name}}</option>
                                  @endforeach
                                  @endif
                                </select>
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">Pincode</label>
                            <input type="number"name="pincode" value="{{(isset($address->pincode))?$address->pincode:''}}" required id="form3Example1" class="form-control" placeholder="123456"/>
                            
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                              <label class="form-label" for="form3Example1">Image</label>
                            <input type="file"name="image" value="" id="form3Example1" class="form-control" />
                            <input type="hidden"name="hidden_image" value="{{(!empty($address->image))?$address->image:''}}" id="form3Example1" class="form-control" placeholder="123456"/>
                            
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline form-label">
                               <label class="form-label" for="form3Example1">Profile Image</label><br>
                             <img src="{{(!empty($address->image))?URL::asset('admin/public/user_image/'.$address->image):URL::asset('public/assets/img/user-icon.png')}}" alt="user" height="50px"width="50px">
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <div class="form-outline">
                              <div class="profile-btn">
                                  <button class="btn btn-success">Update</button>
                              </div>
                            
                          </div>
                        </div>
	                </div>
	            </div>
	            </form>
	            
	        </div>
	    </div>
	    </div>
	    
	</section>
<!--order-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
		    function  get_city(state_id){
		        //alert(state_id);
		         $("#city-dd").html('');
		      $.ajax({
                url: "{{url('get_city')}}",
                type: 'post',
                data: {
                  
                    state_id:state_id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success:function(res){
                  $('#city-dd').html('<option selected disabled>Choose...</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                }
		      });

		    }
		</script>
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

   @endsection	