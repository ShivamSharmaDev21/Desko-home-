<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <!-- Favicon -->
		<!--<link rel="icon" href="{{asset('public/assets/img/favicon.png')}}" type="image/x-icon"/>-->
        <!-- Title -->
		<title>Home Desk</title>
        <!-- Bootstrap css-->
		<link href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
        <!-- Icons css-->
		<link href="{{asset('public/assets/plugins/web-fonts/icons.css')}}" rel="stylesheet"/>
		<link href="{{asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet"/>
        <!-- Style css-->
		<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/css/bootstrap-select.css')}}" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<!----------------bootstrap 5 newest verison ---------->
<style>
.header-brand-img
{
    width: 150px;
    margin-bottom: 40px;
}
.btn-primary
{
	padding: 8px !important;
}

.alert-warning {
    color: #ececec;
    background-color: #f44336;
    border-color: #ffecb5;
    margin-top: 10px;
}
 .error {
            color: red;
        }


</style>  
		 </head>

	<body class="main-body leftmenu">
	<!-- Page -->
		<div class="page main-signin-wrapper">
		<div class="col-md-12">
			<!-- Row -->
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card p-0">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-skysa">
								<div class="mt-5 pt-4 p-2 ">
									<!--<img src="{{asset('public/assets/img/logo-light.png')}}" class="header-brand-img" alt="logo" >-->
									<div class="clearfix"></div>
									<img src="{{asset('public/assets/img/desko_logo.png')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Sign in to Your Account</h5>
									<!--<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>-->
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
									<div class="remove_alert">
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-danger">{{Session::get('fail')}}</h6>
    @endif
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
</script>
							    		<div class="card-body mt-2 mb-2">
											<img src="{{asset('public/assets/img/logo-light.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
										<form action="{{url('login_admin') }}" method="post" >
										    @csrf
												<h5 class="text-left mb-2">Sign in to Your Account</h5>
												<!--<p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to create, discover and connect with the global community</p>-->
												
                                              <div class="form-floating mb-4">
											<input type="email" class="form-control" name = 'email' id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
											 <label for="floatingInput">Email</label>
											  @error('email')
                                                   <span class="error">{{$message}}</span> 
                                              @enderror
											</div>

                                             <div class="form-floating mb-4">
											<input type="password" class="form-control"  name = 'password' id="floatingInput" placeholder="name@example.com" value="{{old('password')}}">
											 <label for="floatingInput">Password</label>
											  @error('password')
                                               <span class="error">{{$message}}</span> 
                                              @enderror
											</div>

											<div class="custom-controls-stacked">
												<!--<label class="ckbox mg-b-10-f"><input  type="checkbox"><span>Remember Me</span></label>-->
												</div>
											
												<button class="btn ripple btn-primary btn-block" type="submit">Login</button>
											</form>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
	<script>
	       //  var alertNode = document.querySelector('.alert')
        //     var alert = bootstrap.Alert.getInstance(alertNode)
        //     alert.close()
	</script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
		
		</body>
  </html>