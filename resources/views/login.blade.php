@extends('layout')

@section('body')
<!--Login/signup Modal -->
<style>
    .badge-danger{
    margin-top: 20px;

}
.div-pad{
    padding-top: 15px;
}
.modal-content {
    width: 100%;
}
</style>
<div class="" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      </div>
      <div class="remove_alert">
 @if (Session::get('success'))
        <h6 class="alert alert-success">{{Session::get('success')}}</h6>
    @endif
    @if (Session::get('fail'))
        <h6 class="alert alert-danger">{{Session::get('fail')}}</h6>
    @endif
</div>
<script>
    setTimeout(function(){
       $('.remove_alert').fadeOut();;
         },3000);
</script>
      <div class="modal-body">
      
	    
	    
	       <div class="form-modal">
    
   

    <div >
       <form method="post" action="{{url('login-user')}}">
          @csrf
            <labal>Email</labal>
            <input type="email" name="email" placeholder="Enter email " required/>
            <br>
            
            <labal>Password</labal>
            <input type="password" name="password" placeholder="Enter password" required/>
            <br>
           
            <button type="submit" class="btn login">login</button>
            <p>Yet not sign up?<a href="{{url('register')}}">sign up</a></p>
            
        </form>
    </div>

    

</div>

	        
	    </div>
	    
	
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Understood</button>-->
      <!--</div>-->
    </div>
  </div>
<!-- End Login/signup Modal -->
@endsection	