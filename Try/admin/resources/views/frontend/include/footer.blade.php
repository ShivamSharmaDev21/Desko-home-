

<style>

    .text-reset{
        font-family: Kumbh Sans, sans-serif !important;
    }
    .text-uppercase
    {
        font-family: Kumbh Sans, sans-serif !important;
    }
</style>

<!--Login/signup Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" id="login-sign">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login / SignUp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
	    
	    
	       <div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
    </div>

    <div id="login-form">
        <form method="post" action="{{url('login-user')}}">
          @csrf
            <labal>Email</labal>
            <input type="email" name="email" placeholder="Enter email " required/>
            <br>
            
            <labal>Password</labal>
            <input type="password" name="password" placeholder="Enter password" required/>
            <br>
           
            <button type="submit" class="btn login">login</button>
            <!--<p><a href="javascript:void(0)">Forgotten account</a></p>-->
            
        </form>
    </div>

    <div id="signup-form">
        <form method="post" action="{{url('register')}}">
          @csrf
            <labal>First Name</labal>
            <input type="text" name="fname"  required placeholder="Enter first name"/>
            <labal>Last Name</labal>
            <input type="text" name="lname" required placeholder="Enter last name"/>
             <labal>Email</labal>
            <input type="email" name="email" required placeholder="Enter your email" />
            <labal>Mobile</labal>
            <input type="number" name="mobile" required placeholder="Enter mobile number"/>            
            <labal>Password</labal>
            <input type="password" name="password" required placeholder="Create password"/>
            <button type="submit" class="btn signup">create account</button>
            
            
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

 <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-3">
  <!-- Section: Social media -->
  <section class=" d-flex justify-content-center  p-4 border-bottom">
    <!-- Left -->
    <!--<div class="me-5 d-none d-lg-block">-->
    <!--  <span>Get connected with us on social networks:</span>-->
    <!--</div>-->
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-facebook-f f-circle1"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-twitter f-circle1"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-google f-circle1"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-instagram f-circle1"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-linkedin f-circle1"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-github f-circle1"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="footer-middle">
    <div class="container text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <!--<h6 class="text-uppercase fw-bold mb-4">-->
          <!--  <i class="fas fa-gem me-3"></i>Company name-->
          <!--</h6>-->
          <div class="navbar-header mb-5" style="width:100%">
              <div class="navbar-brand footer-nav" ><a href="{{url('/')}}">
                   <img src="{{URL::asset('public/assets/img/desko_logo.webp')}}" alt="Image" style="width: 110px;
    margin-top: -30px;"/></a></div></div>
          <p class="">
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Products1</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Products2</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Products3</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Products4</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3  f-circle"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 f-circle"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 f-circle"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 f-circle"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Deskohome.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>
  <!--<script src="{{asset('public/frontend/assets/js/main2.js')}}"></script>-->
 <script>
$(document).ready(function(){
     $(".seachproduct").hide();
    $("#txt_search").keyup(function(){
        var search = $(this).val();
        if(search != ""){
            $.ajax({
                url: "{{url('live-search-product')}}",
                type: 'post',
                data: {
                    prod_name:search,
                    _token: "{{ csrf_token() }}"
                    
                },
                dataType: 'json',
                success:function(res){
                    var len = res.length;
                    $("#searchResult").empty();
                    // $("#searchResult").show();
                    $(".seachproduct").show();
                    for( var i = 0; i<len; i++){
                        var name = res[i].prod_name;
                        $("#searchResult").append("<li >"+name+"</li>");
                        }
                         // binding click event to li
                     $("#searchResult li").bind("click",function(){
                        setText(this);
                     });
                     $('body').click(function() {
                       $(".seachproduct").hide();
                    });
                }
            });
        }else{
             $("#searchResult").empty();
            //  $("#searchResult").hide();
             $(".seachproduct").hide();
        }
    });
    // Set Text to search box and get details
function setText(element){
    var value = $(element).text();
    $("#txt_search").val(value);
    $("#searchResult").empty();
     $("#search_form").submit();
 }
});   
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
    function toggleSignup(){
   document.getElementById("login-toggle").style.backgroundColor="#ebebeb";
    document.getElementById("login-toggle").style.color="#222";
    document.getElementById("signup-toggle").style.backgroundColor="#3e2b77";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="#3e2b77";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.backgroundColor="#ebebeb";
    document.getElementById("signup-toggle").style.color="#222";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}
</script>
  </body>
  <!-- JavaScript Bundle with Popper -->
</html>