@extends('layout')

@section('body')
<style>
.carousel-inner img {
    width: 100%;
    height:500px;
  }
@media only screen and (max-width: 768px){
    .h5, h5 {
    font-size: 1.05rem;
}

.manage-slide{
    margin-top:70px;
}
.manage-slide-bottom {
    margin-bottom: 3rem !important;
}
.smart_feture .smart_slider img {
    height: 50px;
    width: 50% !important;
}
.pricesmart{
    width:100% !important;
}
.slick-next {
    right: -15px !important;
}
.slider-top .arrow_coustom .fal{
    margin-top:-25px;
}
.slider-bottom .arrow_coustom .fal{
    margin-top:110px;
}
.color_choose_table{
       margin-top: 5rem !important;
}
#expand{
    color:red;
}

}
.bg-set {
    background: #F8F8FA !important;
    padding: 2rem 0rem;
    margin-bottom: 3rem;
     margin-top: 2rem; 
}
.bg-set .product__items {
    border-radius: 18px;
    background-color: #fff;
    transition: 0.3s;
    position: relative;
    padding: 2.5rem 0px 0px;
}
.product__items:hover {
    box-shadow: 0px 0px 38px 0px rgb(6 16 35 / 11%);
}
.bg-set .product__items {
    padding: 1rem 0px 0px !important;
}
.product__items--action__btn {
    /*height: 3.2rem;*/
    line-height: 2.3rem;
    padding: 0 0.6rem;
    color: var(--text-gray-color);
    background: var(--white-color);
    border-radius: 0.1rem;
}
.h4, h4 {
    font-size: 1rem;
}
.mb-100 {
    margin-bottom: 37px;
}
.tab_content {
    display: block;
}
.tab_pane.active {
    display: block;
}
.tab_pane.show {
    opacity: 1;
}
.tab_pane {
    display: none;
    -webkit-transition: var(--transition);
    transition: var(--transition);
}
.product__items:hover {
    box-shadow: 0px 0px 38px 0px rgb(6 16 35 / 11%);
}
.bg-set .product__items {
    border-radius: 18px;
    background-color: #fff;
    transition: 0.3s;
    position: relative;
    padding: 2.5rem 0px 0px ;
}    
.product__items--thumbnail {
    position: relative;
    overflow: hidden;
    line-height: 1;
}
.product__items--link {
    text-align: center;
}
.product__items--link {
    display: block;
}
a, button, img, input, textarea {
    -webkit-transition: var(--transition);
    transition: var(--transition);
}
.product__items:hover .product__items--img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
}
.bg-set .product__items--img {
    width: 100%;
    max-width:90%;
    height: 159px;
    display: inline-block;
}
img {
    max-width: 100%;
    height: auto;
}
.product__items:hover .product__items--action {
    opacity: 1;
    visibility: visible;
    bottom: 1.2rem;
}
ul:last-child {
    margin-bottom: 0;
}
.product__items--action {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0;
    visibility: hidden;
    /*-webkit-transition: var(--transition);*/
    /*transition: var(--transition);*/
}
.justify-content-center {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.justify-content-center {
    justify-content: center!important;
}
.d-flex {
    display: flex!important;
}
ul {
    margin: 0;
    padding: 0;
}
li {
    list-style: none;
    line-height: 1;
}
.product__items--action__list:last-child {
    margin-right: 0;
}
.product__items--content {
    padding: 1.8rem 1rem 1.5rem;
    border: 0px solid var(--border-color);
    border-top: 0;
}
.product__items--content__title {
    margin-bottom: 0.3rem;
}
.product__items--price {
    margin-bottom: 0.8rem;
}
.product__badge {
    position: absolute;
    top: 0;
    left: 1rem;
}
.product__items--action__btn {
    background: #dfdfdf;
}
.product__items--action__cart--btn {
    height: 3.2rem;
    line-height: 3.4rem;
    font-size: 1.4rem;
    padding: 0 1.3rem;
    opacity: 0;
    visibility: hidden;
}
.product__items:hover .product__items--action__cart--btn {
    opacity: 1;
    visibility: visible;
}
.primary__btn {
    font-weight: 600;
    display: inline-block;
    font-size: 1rem;
    line-height: 2.3rem;
    height: 2.4rem;
    padding: 0 1.5rem;
    letter-spacing: .2px;
    border-radius: 0.1rem;
    background: #3e2b77 !important;
    color: #fff;
    border: 0;
}
.primary__btn:hover {
    background: #121a25;
    color: #fff;
}
a:hover {
    text-decoration: none;
    /*color: #2b638e;*/
}

.product__items--content__title a:hover {
    color: unset!important;
}
a, button {
    display: inline-block;
    cursor: pointer;
    -webkit-transition: var(--transition);
    transition: var(--transition);
    text-decoration: none;
    color: inherit;
}
span {
    display: inline-block;
    /*-webkit-transition: var(--transition);*/
    transition: var(--transition);
}
.product__items--action__btn:hover {
    background: #3e2b77 !important;
    color: #fff;
}
.old__price {
    /*font-size: 1.4rem;*/
    color: var(--light-color);
    font-weight: 600;
    text-decoration: line-through;
    margin-left: 0.4rem;
}
.current__price {
    /*font-size: 1.5rem;*/
    color: #3e2b77 !important;
    font-weight: 600;
}
.product__badge--items {
    width: 2.4rem;
    height: 4.9rem;
    background: #2b638e;
    color: #fff;
    font-size: 1rem;
    line-height: 4.3rem;
    text-align: center;
    -webkit-clip-path: polygon(0 0,100% 0,100% 100%,50% 74%,0 100%);
    clip-path: polygon(0 0,100% 0,100% 100%,50% 74%,0 100%);
}
.product__items--action__btn--svg {
    vertical-align: middle;
}
.visually-hidden {
    position: absolute!important;
    overflow: hidden;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
    word-wrap: normal!important;
}
.product__items--action__list {
    margin-right: 0.3rem;
}
.modal-content {
    /*width: 160%;*/
    margin-top: 4rem;
}
.product-right .pro-group .qty-box {
    margin-bottom: 15px;
}
.product-right .pro-group .qty-box {
    margin-bottom: 15px;
}
.qty-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.qty-box .input-group button:first-child:before {
    content: "\2d";
}
.qty-box .input-group button:last-child:before {
    content: "\2b";
}
textarea, input {
    letter-spacing: 0.05em;
}
.input-group {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}
.qty-box .input-group {
    -webkit-box-pack: unset;
    -ms-flex-pack: unset;
    justify-content: unset;
    width: unset;
}
.qty-box .input-group {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border: 1px solid #dddddd;
}
.qty-box .input-group button {
    background-color: transparent;
    cursor: pointer;
    line-height: 1;
    background-color: #ffffff;
    font-family: themify;
    padding-left: 10px;
    padding-right: 10px;
    border: none;
}
.qty-box .input-group .form-control {
    border-color: #dddddd;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.qty-box .input-group .form-control {
    text-align: center;
    width: 80px;
    -webkit-box-flex: unset;
    -ms-flex: unset;
    flex: unset;
    border-color: #dddddd;
    border-top: unset;
    border-bottom: unset;
}
.qty-box .input-group button {
    background-color: transparent;
    cursor: pointer;
    line-height: 1;
    background-color: #ffffff;
    font-family: themify;
    padding-left: 10px;
    padding-right: 10px;
    border: none;
}
.product-title {
    color: #333333;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1;
    font-size: calc(16px + (18 - 16) * ((100vw - 320px) / (1920 - 320)));
}
.product-right .pro-group:nth-child(n+2) {
    padding-top: 20px;
    border-top: 1px solid #dddddd;
}
.product-right .pro-group {
    padding-bottom: 20px;
}
.quick-view-img {
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #82898f;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /*border-radius: 0.25rem;*/
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.product-right .pro-group h2 {
    font-size: calc(16px + (22 - 16) * ((100vw - 320px) / (1920 - 320)));
    font-weight: 700;
    line-height: 1.2em;
    color: #333333;
    letter-spacing: 1px;
    margin-bottom: 5px;
    text-transform: capitalize;
}
.product-right .pro-group ul.pro-price {
    font-size: calc(14px + (22 - 14) * ((100vw - 320px) / (1920 - 320)));
    color: #444444;
    margin-bottom: 5px;
    text-transform: uppercase;
    font-weight: 700;
    line-height: 1;
}
.product-right .pro-group ul.pro-price li span {
    color: #8a8a8a;
    font-size: 80%;
}
.product-right .pro-group ul.pro-price span {
    text-decoration: line-through;
    color: #777777;
    font-size: 80%;
    font-weight: 500;
}
.product-right .pro-group ul.pro-price li {
    text-transform: capitalize;
}
li {
    display: inline-block;
}
.modal-body .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
.modal .btn-close {
    background-color: white;
    opacity: 001;
    border-radius: 21%;
    float: right;
}
#title-color{
    /*background: linear-gradient(to right, #3e2b77 0%, #00d4d5 100%);*/
   background: linear-gradient(to left, #3e2b77 0%, #00d4d5 100%);
    /*background-image:url("public/assets/img/back-banner-mg.jpg");*/
    /*background-repeat: no-repeat;*/
    /* background-size: cover;*/
    width:100%;
    font-family: 'Poppins', sans-serif !important;
}
#title-color h3{
    font-weight:600;
    font-size:24px;
}
.btn-size{
    margin-right: 11%;
    background-color: #3e2b77 !important;
    border-color:#3e2b77 !important;
}
.btn-size:focus{
    box-shadow: 0 0 0 0.25rem rgb(27.68 19.2 53.13 / 50%) !important;
}

.b-t .btn{
    padding: 0.8rem 1.5rem;
    font-size:1.1rem;
    border-radius: 2px;
}
#btn-w {
    margin-top: -2em;
}
.f-p{
    font-size:20px;
}
.btn-red{
   border-radius: 3px;
}
#staticBackdropLabel {
    color: #000;
    font-size: 18px;
    padding: 15px;
    font-weight: 600;
    
    padding-left: 3%;
}
.modal-footer{
    justify-content:flex-start;
    padding: 1rem;
}
.table>tbody{
    vertical-align: middle;
}
tbody, td, tfoot, th, thead, tr{
    height: 90px;
}

.table-bordered>:not(caption)>*>*{
   border-width: inherit;

}
.btn-check:focus+.btn, .btn:focus{
    box-shadow: 0 0 0 0.25rem rgb(62 43 119 / 25%);
}
.price_content .far{
    font-size:20px;
}
tr,td:nth-child(2){
    width:20%;
    font-size: 18px;

}
tr,td:nth-child(1){
   padding-left:3rem;

}
#title-color h2 {
    font-weight: 600;
    color:#fff;
}
#header-modal{
    border:1px solid #ddd;
}
.btn-secondary{
    width: 100px;
}
.close-btn {
    float: right;
}
.form-modal .btn{
    font-weight: 400;
}
.form-modal input{ font-weight: 400;}
.form-modal{
    width:530px;
}
.how-img{
    border: 1px solid #ddd;
    height:150px;
}
.how-img h3 {
    font-size: 12px;
    padding-top: 5rem;
}
/*.img-banner{*/
/*    position:relative;*/
/*}*/
/*.img-up{*/
/*    position:absolute;*/
/*}*/
@media (min-width: 576px){
.modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}
#content-with{
     max-width: 600px;
}
}
@media (max-width: 576px){
.card-d {
    display: block;
}
}
@media only screen and (min-width: 992px){
.mb-30 {
    margin-bottom: 2.5rem;
}
.mb--n30 {
    margin-bottom: -2.5rem;
}
.product__items--action__btn {
    padding: 0 0.8rem;
    /* height: 3.4rem; */
    line-height: 2.3rem;
}

element.style {
}
.testclass_created {
    background-color: #0d6efd12;
    box-shadow: 0px 0px 38px 0px rgb(6 16 35 / 5%);
    border: 1px solid #b4d2fd;
}

}
@media only screen and (max-width: 1024px){
.tab-pad {
    margin-top: 1rem;
 }
}
</style>
      <!--<div id="loader">-->
      <!--    <img src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" alt="loader image">-->
      <!--</div> -->
    <div id="page">
      <div class="flr-wrap" style="display:none">

        <div class="">
          <div class="btn-group dropend">
           <!--   <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Frames
            </button> -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item button active" href="#" data-rel="#content-1"><img src="{{asset('public/assets/img/small_desk.JPG')}}"></a></li>
              <li><a class="dropdown-item button" href="#" data-rel="#content-2"><img src="{{asset('public/assets/img/big_desk.JPG')}}"></a></li>
            </ul>
          </div><br>
        </div>
      </div>
    <form method="post" action="{{url('desk-add-leads')}}"id="myForm">
                @csrf 
                <input id='screenshot_image' type="hidden" name="image"   value="">
                <input id='contact_no_input' type="hidden" name="contact_no"   value="">
                <input id='price_input' type="hidden" name="price"   value="">
                           
    </form>
      <form method="post" action="{{url('flagship_workstations')}}"id="indexpage_form">
          @csrf
      <div class="m_mobile" style="width: 100%;">
         <div class="row justify-content-center mb-5" >
                  <div class="col-lg-12" id="title-color">
                      <!--<div class="img-banner"><img src="{{URL::asset('public/assets/img/back-banner-mg.jpg')}}" style="height:100px;width:100%"/>-->
                      <div class="img-up text-center mt-3 mb-3">
                          
                          <h2>Heading / Quote (Dynamic Entry)</h2>
                          
                      </div>
                     
                  </div>
                  <div class="how-img text-center">
                      <h3>How it Works (Static, will provide images)</h3>
                  </div>
              </div>
        <div class="container">
          <div class="">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                  <hr class="mb-5">

              </div>
            </div>
         <hr>
           
               

                <!-- wheels image -->
                     <div class="wheels_img">
                      <img src="https://static.connect2india.com/c2icd/product_resources/images/table-wheel.jpg">
                    </div>
                    <div class="wheels_img" style="width: 35.9%;margin-top: 185px;right: 28px;">
                      <img src="https://static.connect2india.com/c2icd/product_resources/images/table-wheel.jpg">
                    </div>

                   
                      
                    <?php $k=1; ?>
                    @foreach($deskbottoms as $bot)
                      <div>
                      <div class="manage-slide-bottom">
                         <?php $c=0; 	
                             $bot_imges=DB::table('bottom_gallery')->orderBy('id','asc')->where('bottom_id','=',$bot->bottom_id)->select('image')->get(); 
                                if(isset($bot_imges) && count($bot_imges)>0){
                             foreach($bot_imges as $bot_img){ ?>
                          <div class=" imgleg whiteleg  " id="<?=$k.'_ay_'.$c?>" >
                            <img src="{{URL::asset('admin/public/desk_bottom_image/'.$bot_img->image)}}">
                          </div>
                              <?php $c++; } } ?>
                          

                        </div>
                        
                        <div class="plus-popup">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal1">
                            <div class="expand-container" >
                          <div class="plus-area">
                            <div class="plus">
                              <div class="cover ne"></div>
                              <div class="cover nw"></div>
                              <div class="cover se"></div>
                              <div class="cover sw"></div>
                            </div>
                          </div>
                        </div>
                        </a>
                       </div>
                        <div class="color_choose_table">
                          <h5>Bottom Color</h5>
                          <div class="colorpicker">
                               <?php  $gall_clor_ids=DB::table('bottom_gallery')->orderBy('id','asc')->where('bottom_id','=',$bot->bottom_id)->select('*')->get();?>
                              @if(isset($gall_clor_ids) && count($gall_clor_ids)>0)
                              <?php $j=0; ?>
                                 @foreach($gall_clor_ids as $bot_clr)
                                 <?php if (in_array($bot_clr->colour_id, $colour_arr))
                                  { $colour_value= App\Models\Colour::where('id',$bot_clr->colour_id)->first();
                                    //echo "<pre>"; echo($colour_val);die;
                                  ?>
                            <div class="btn-red"style="background-color:{{$colour_value->colour_value}}">
                              <label class="style_color  bottom_active_input bottom_row<?=$k;?>_col<?=$j;?>" data_bottom_price="<?=$bot->bottom_price;?>" data-rel="#checkedb1">
                                <input type="radio" name="bottom_colorradio"class="pickbottom_img "row_data="<?=$k?>" c_data="<?=$j?>" count_data="<?=count($deskbottoms);?>" value="{{$bot_clr->id}}">
                                <span></span>
                              </label>
                            </div>
                             <?php $j++; } ?>
                           
                                @endforeach
                                @endif
                          </div>
                      </div>
                       
                      </div>
                        <?php $k++;?>
                    @endforeach
                    </div>


                  </div>
                  <div class="desk big_desk" id="content-2">
                    <div class="color_choose_table">
                      <h5>Top Color</h5>
                      <div class="colorpicker">


                        <div class="lightgray">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="gray">
                            <span></span>
                          </label>
                        </div>

                        <div class="whitesmoke">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="white">
                            <span></span>
                          </label>
                        </div>

                        <div class="black">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="black">
                            <span></span>
                          </label>
                        </div>

                        <div class="darkblack">
                          <label class="style_color">
                            <input type="radio" name="colorradio" value="darkblackleg">
                            <span></span>
                          </label>
                        </div>
                      </div>

                    </div>

                    <div class="slider  slider-top">

                      <!-- first slide - -->
                      <div>
                        <div class="manage-slide">
                          <div class="imgdesk gray" style="display: block;">
                            <img src="{{asset('public/assets/img/big/top4.png')}}')}}">
                          </div>

                          <div class="imgdesk white">
                            <img src="{{asset('public/assets/img/big/top3.png')}}')}}">
                          </div>

                          <div class="imgdesk black">
                            <img src="{{asset('public/assets/img/big/top2.png')}}')}}">
                          </div>
                          <div class="imgdesk darkblackleg">
                            <img src="{{asset('public/assets/img/big/top1.png')}}')}}">
                          </div>

                          <div class="price">
                            <h3>Price : 15689/-</h3>
                          </div>
                        </div>

                      </div>

                      <!-- second slide - -->
                      <div>
                        <div class="manage-slide">
                          <div class="imgdesk gray" style="display: block;">
                            <img src="{{asset('public/assets/img/big/top4.png')}}')}}">
                          </div>

                          <div class="imgdesk white">
                            <img src="{{asset('public/assets/img/big/top3.png')}}')}}">
                          </div>

                          <div class="imgdesk black">
                            <img src="{{asset('public/assets/img/big/top2.png')}}')}}">
                          </div>
                          <div class="imgdesk darkblackleg">
                            <img src="{{asset('public/assets/img/big/top1.png')}}')}}">
                          </div>

                          <div class="price">
                            <h3>Price : 18589/-</h3>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="slider slider-bottom">

                      <!-- first slide -->
                      <div>
                        <div class="manage-slide-bottom">
                          <div class="imgleg whiteleg" style="display: block;">
                            <img src="{{asset('public/assets/img/big/bot1.png')}}')}}">
                          </div>

                          <div class="imgleg blackleg">
                            <img src="{{asset('public/assets/img/big/bot3.png')}}')}}">
                          </div>

                          <div class="imgleg darkblack">
                            <img src="{{asset('public/assets/img/big/bot1.png')}}')}}">
                          </div>

                        </div>
                      </div>

                      <!-- second slide  -->
                      <div>
                        <div class="manage-slide-bottom">
                          <div class="imgleg whiteleg" style="display: block;">
                            <img src="{{asset('public/assets/img/big/bot1.png')}}')}}">
                          </div>

                          <div class="imgleg blackleg">
                            <img src="{{asset('public/assets/img/big/bot3.png')}}')}}">
                          </div>

                        </div>
                      </div>

                    </div>

                    <div class="color_choose_table">
                      <h5>Bottom Color</h5>
                      <div class="colorpicker">

                        <div class="whitesmoke">
                          <label class="style_color">
                            <input type="radio" name="lagradio" value="whiteleg">
                            <span></span>
                          </label>
                        </div>

                        <div class="black">
                          <label class="style_color">
                            <input type="radio" name="lagradio" value="blackleg">
                            <span></span>
                          </label>
                        </div>

                      </div>

                    </div>

                  </div>
                </div>
              </div>
              
              @if(session('user_id') || session('mobile'))
             <div class="text-end b-t" id="btn-w">
                   
                <!--<a  href="#" class="btn btn-primary "onclick="myfun(event);">Next</a>-->
                <button  type="submit" class="btn btn-primary btn-size">Next <i class="fas fa-chevron-right f-r"></i></button>
                <!--<a href="#" type="button" class="btn btn-primary next_buy" id="btnset">Next</a>-->
                <!--<img id="img" src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif">-->
              </div>
              @else
               <div class="text-end b-t" id="btn-w">
                <a  href="#" class="btn btn-primary  btn-size "onclick="myfun(event);">Next <i class="fas fa-chevron-right f-r"></i></a>
                <!--<button  type="submit" class="btn btn-primary "onclick="myfun(event);">Next</button>-->
                <!--<a href="#" type="button" class="btn btn-primary next_buy" id="btnset">Next</a>-->
                <!--<img id="img" src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif">-->
              </div>
              @endif
              <div class="col-lg-10"><hr></div>
            </div>
          </div>
        </div>
      </div>
      <!--Login/signup Modal -->
<div class="modal fade" id="user_info" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" id="content-with">
    <div class="modal-content" >
        <!--<div class="modal-header">-->
        <!--    <h5 class="modal-title" id="staticBackdropLabel"></h5>-->
        <!--</div>-->
          <div class="modal-header" id="modal-header">
           <h5 class="modal-title" id="staticBackdropLabel">Enter Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
    	    <div class="form-modal">
              <div id="login-form" class="mt-3">
                <!--<labal>User Name</labal>-->
                <!--<input type="text" name="username" placeholder="Enter full name " required/>-->
                <!--<br>-->
                <labal>Mobile</labal>
                <input type="text" id="usermob" name="mobile" onfocusout = "check_Mobile(this.value)" placeholder="Enter mobile number" <?php echo (session('user_id')||session('mobile'))?'':'required'?>/>
                <br>
                <div id="div_mobile" class="text-danger"></div>
               
                <a href="#" class="btn login" style="float: right;">Submit</a>
                 <a type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal" >Close</a>
                
              </div>
            </div>
    	   </div>
     </div>
    </div>
  </div>
<!-- End Login/signup Modal -->      
        </form>

    </div>
    <section class="product__section section--padding bg-set" style="display:none">
        <div class="container-fluid">
                <div class="section__heading text-center mb-30">
                    <h2 class="section__heading--maintitle mb-100">Our Flagship Workstations</h2>
                </div>
                <div class="tab_content">
                    <div id="chair" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                @if(isset($products) && count($products)>0)
                                @foreach($products as $product)
                                <div class="col mb-30">
                                    <div class="product__items tab-pad">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#">
                                                <img class="product__items--img product__primary--img" src="{{URL::asset('admin/public/feature_image/'.$product->feature_image)}}" alt="product-img">
                                                <!-- <img class="product__items--img product__secondary--img" src="assets/img/product/product12.webp" alt="product-img"> -->
                                            </a>
                                            <ul class="product__items--action d-flex justify-content-center">
                                                <li class="product__items--action__list">
                                                    
                                                    <a class="product__items--action__btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->prod_id}}">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="{{url('/add-to-wishlist/'.$product->prod_id)}}">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            
                                            <h3 class="product__items--content__title h4"><a href="#">{{$product->prod_name}}</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price"><i class="far fa-rupee-sign mr5"></i>{{$product->offer_price}}</span>
                                                <span class="old__price"><i class="far fa-rupee-sign mr5"></i>{{$product->mrp_price}}</span>
                                            </div>
                                            
                                            <a class="product__items--action__cart--btn primary__btn" href="{{url('/add-to-cart/'.$product->prod_id)}}">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Add to cart</span>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                
<!-- Modal Quick View -->
<div class="modal fade" id="exampleModal{{$product->prod_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       <div class="row">
               <div class="col-lg-6 col-xs-12">
                  <div class="quick-view-img bg-size" >
                     <img id="ajimg_src" src="{{URL::asset('admin/public/feature_image/'.$product->feature_image)}}" alt="" class="img-fluid bg-img" style="display: block;">
                  </div>
               </div>
               <div class="col-lg-6 rtl-text">
                  <div class="product-right">
                     <div class="pro-group">
                        <h2 class="pro_name">{{$product->prod_name}}</h2>
                        <ul class="pro-price">
                           <li id="ajpro_price">Rs {{$product->offer_price}}</li>
                           <li><span id="mrppro_price">mrp Rs {{$product->mrp_price}}</span></li>
                           <!--<li>50% off</li>-->
                        </ul>
                       
                     </div>
                     <div class="pro-group">
                        <h6 class="product-title">product infomation</h6>
                        <p id="ajpro_info"><p>{{strip_tags($product->description)}}</p></p>
                     </div>
                     <div class="pro-group pb-0">
               
                        <h6 class="product-title">quantity</h6>
                        <form method="post" action="{{url('add_cart')}}">
                        @csrf
                        <div class="qty-box">
                           <!--<div class="input-group">-->
                           <!--   <button class="qty-minus"></button>-->
                           <!--   <input id="prodQty" name="qty" class="qty-adj form-control" type="number" value="5">-->
                           <!--   <button class="qty-plus"></button>-->
                           <!--</div>-->
                           <div class="input-group" >
                                <button type="button" id="sub" class="sub"></button>
                                <input type="number"  name="qty" class="qty-adj form-control prodQty" value="1" min="1"/>
                                <button type="button" id="add" class="add"></button>
                            </div>
                        </div>
                        
                        <div class="product-buttons">
                             <input type="hidden" id="prodId" name="prod_id" value="{{$product->prod_id}}">
                             
                            <button type="submit">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                           </button>
                         
                                                      <!--<a href="javascript:void(0)" class="btn btn-normal tooltip-top"  data-tippy-content="view detail">-->
                           <!--   view detail-->
                           <!--</a>-->
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>
                                @endforeach
                                @endif
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
</section>
  <!-- Button trigger modal -->
          <!--<section class="warranty border-bottom">-->
          <!--      <div class="">-->
          <!--          <div class="text-center">-->
          <!--              <h3>Warranty / Benefit Icons (Static will Provide Images)</h3>-->
          <!--              <span class="pt-3"><strong><p>Why buy from Atmosphere</p></strong></span>-->
          <!--          </div>-->
          <!--          <div class="card-d">-->
          <!--              <div class="card-w">-->
          <!--               <div class="warrnt-mg">-->
          <!--                  <img src="{{URL::asset('public/assets/img/tab.png')}}">-->
          <!--                 </div>-->
          <!--                  <h5>Ergonomic Design</h5>-->
          <!--                  <p>Our design encapsulates the idea of the modern work space  that is agile, and smart</p>-->
          <!--              </div>-->
          <!--              <div class="card-w">-->
          <!--                  <div class="warrnt-mg">-->
          <!--                 <img src="{{URL::asset('public/assets/img/gg.png')}}">-->
          <!--             </div>-->
          <!--             <h5>Sustainble</h5>-->
          <!--             <p>We use recycled, recyclable and sustainble materials</p>-->
          <!--             </div>-->
          <!--              <div class="card-w"><div class="warrnt-mg">-->
          <!--                  <img src="{{URL::asset('public/assets/img/24.png')}}">-->
          <!--             </div>-->
          <!--              <h5>24 Months Warranty</h5>-->
          <!--              <p>Our furniture comes with 24 months warrenty for your complete peace of mind</p>-->
          <!--              </div>-->
          <!--              <div class="card-w">-->
          <!--                  <div class="warrnt-mg ">-->
          <!--                  <img src="{{URL::asset('public/assets/img/anti.png')}}">-->
          <!--             </div>-->
          <!--              <h5>Anti-Bacterial Surface</h5>-->
          <!--              <p>Atmosphere furniture are protected with antibacterial laminate to prevent spread of diseases</p>-->
          <!--              </div>-->
          <!--              <div class="card-w">-->
          <!--                 <div class="warrnt-mg">-->
          <!--                  <img src="{{URL::asset('public/assets/img/100.png')}}">-->
          <!--                </div>-->
          <!--                  <h5>100 days free trial</h5>-->
          <!--                  <p>Take a free trial of the product for the first 100 days from the date of delivery.if unsatified, you can return the product within 100 days, no questions asked.</p>-->
          <!--              </div>-->
                        
          <!--          </div>-->
               
                
          <!--  </div>-->
            
          <!--  </section> -->
<section class="pt-4 pb-3">
    <div class="text-center pt-3 pb-4" id="slide-title"><h2>See What  Our Customer Needs</h2></div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">

        @if(isset($sliders) && count($sliders)>0)
      <?php $i=1; ?>
      @foreach($sliders as $s)
    <div class="carousel-item <?php echo ($i==1)?'active':''?>">
      <img src="{{URL::asset('admin/public/slider_image/'.$s->image)}}" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <?php $i++;?>
    @endforeach
    @endif
    <!--<div class="carousel-item">-->
    <!--  <img src="{{URL::asset('public/assets/img/hh.png')}}" alt="Chicago" class="d-block" style="width:100%">-->
    <!--</div>-->
    <!--<div class="carousel-item">-->
    <!--  <img src="{{URL::asset('public/assets/img/hh.png')}}" alt="New York" class="d-block" style="width:100%">-->
    <!--</div>-->
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
        <div class="col-md-3"></div>
    </div>
            </section>
            
<!--Model-->
<div class="modal" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Whats included</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="slider slider-bottom" id="slider-bottom">

                      <!-- first slide  -->
                      <div>

                      <div class="manage-slide-bottom">

                          <div class="imgleg whiteleg checked_inputb"  id="checkedb1">
                            <img src="{{asset('public/assets/img/bot2.png')}}">
                          </div>

                          <div class="imgleg blackleg" id="checkedb2">
                            <img src="{{asset('public/assets/img/bot1.png')}}"> 
                          </div>

                          <div class="imgleg darkblack" id="checkedb3">
                            <img src="{{asset('public/assets/img/bot4.png')}}">
                          </div>

                        </div>
                        
                       
                      </div>

                      <!-- second slide  -->
                      <div>

                        <div class="manage-slide-bottom">
                          <div class="imgleg1 botblue checked_inputbs" id="checkedbs1">
                            <img src="{{asset('public/assets/img/botblue.png')}}" >
                          </div>

                          <div class="imgleg1 botgreen" id="checkedbs2">
                            <img src="{{asset('public/assets/img/botgreen.png')}}" >
                          </div>

                          <div class="imgleg1 botyellow" id="checkedbs3">
                            <img src="{{asset('public/assets/img/botyellow.png')}}" >
                          </div>

                        </div>
                        
                        
                      </div>
                      
                       
                    </div>
                </div>
                 <div class="col-sm-6">
                    <h5>Desk</h5>
                    <h6>Leg, adjustable</h6>
                    <span>Black</span>
                    <span>Min. height: 60 cm, Max. height: 90 cm, Max. load: 13 kg</span>
                    <span class="price-pop"><h1>&#8377;550</h1></span>
                    <a href="#">View more product information</a>
                 </div>
                       
            </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
      <div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="content-with">
          <div class="modal-content">
            <div class="modal-header" id='header-modal'>
              <h5 class="modal-title" id="exampleModalLabel" style="color:#000;padding: 1rem;font-size: 22px;"><strong>What's included?</strong></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
             <div class="my-table">
                    <table class="table table-bordered  mb-0 ">
                        <!--<thead>-->
                        <!--  <tr>-->
                        <!--    <th scope="col">Item</th>-->
                        <!--    <th scope="col">Price</th>-->
                        <!--  </tr>-->
                        <!--</thead>-->
                        <tbody>
                          <tr class="basic_desk">
                              
                            <td>Desk 120x60 cm</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>5000</td>-->
                          </tr>
                          <tr class="snone smprice">
                            <td>Wireless Charger</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>999</td>-->
                          </tr>
                          <tr class="snone pmprice">
                            <td>Power Management</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>1000</td>-->
                          </tr>
                           <tr class="snone sdprice">
                            <td>Sleek Drawer</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>3000</td>-->
                          </tr>
                           <tr class="snone wsprice">
                            <td>Wheels</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>1001</td>-->
                          </tr>
                          <tr class="snone ftprice">
                            <td>Footrest</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>500</td>-->
                          </tr> 
                          <!--<tr>-->
                          <!--  <td><strong>Total Pay</strong></td>-->

                          <!--  <td>    -->
                          <!--          <div class="price_content">-->
                          <!--           <i class="far fa-rupee-sign"></i>-->
                          <!--           <input class="price-title price_total" style="color:#000" type="texxt" value="" readonly />-->
                          <!--         </div>-->
                          <!--  </td>-->
                          <!--</tr>-->
                        </tbody>
                        
                      </table>    
                    </div>
      </div>
      <div class="modal-footer">
          <div class="total-with">
              <!--<strong>Total Pay</strong>-->
          </div>
         <div class="price_content ">
         <!--<i class="far fa-rupee-sign"></i>-->
         <input class="price-title price_total" style="color:#000;font-size:20px" type="hidden" value="" readonly />
       </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modelfor_plus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
          <div class="modal-content">
            <div class="modal-header" id='header-modal'>
              <h5 class="modal-title" id="exampleModalLabel" style="color:#000;padding: 1rem;font-size: 22px;"><strong>Product contain</strong></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
             <div class="my-table">
                    <img src="https://picsum.photos/200/300" alt="Italian Trulli" style="float: left;">
                    <p style="display: flex;padding: 31px;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries
                    </p>
                    </div>
      </div>
      <div class="modal-footer">
          <div class="total-with">
              <!--<strong>Total Pay</strong>-->
          </div>
         <div class="price_content ">
         <!--<i class="far fa-rupee-sign"></i>-->
         <input class="price-title price_total" style="color:#000;font-size:20px" type="hidden" value="" readonly />
       </div>
      </div>
    </div>
  </div>
</div>

<!--Model-->
<div class="modal" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">What's included</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
             <div class="">
                    <table class="table table-bordered table-dark mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Desk 140x60 cm</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>8000</td>-->
                          </tr>
                          <tr class="snone smprice">
                            <td>Wireless Charger</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>999</td>-->
                          </tr>
                          <tr class="snone pmprice">
                            <td>Power Management</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>1000</td>-->
                          </tr>
                           <tr class="snone sdprice">
                            <td>Sleek Drawer</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>3000</td>-->
                          </tr>
                           <tr class="snone wsprice">
                            <td>Wheels</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>1001</td>-->
                          </tr>
                          <tr class="snone ftprice">
                            <td>Footrest</td>
                            <!--<td><i class="far fa-rupee-sign mr5"></i>500</td>-->
                          </tr> 
                          <tr>
                            <td><strong>Total Pay</strong></td>

                            <td>    
                                    <div class="price_content">
                                     <i class="far fa-rupee-sign"></i>
                                     <input class="price-title price_totaltwo" type="texxt" value="" readonly />
                                   </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>    
                    </div>
      </div>
    </div>
  </div>
</div>


<!--order-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script>


        $( document ).ready(function() {
           set_table_pick();
       
        });
        function myfun(e){
             e = e || window.event;
             e.preventDefault();
              $('#user_info').modal('show');
        //       var delete_iteam=$(obj).attr('data-target');
        //       $('#'+delete_iteam).modal('show');
        //         $(".hide_model").click(function(){
        //     $('#'+delete_iteam).modal('hide');
        // });
           }
    
    function set_table_pick(){
         $('.top_active_input').removeClass('top_active_input');
         $('.bottom_active_input').removeClass('bottom_active_input');
          
        $('.row1_col0').addClass('top_active_input');
        $('.bottom_row1_col0').addClass('bottom_active_input');
        
         $(".row1_col0 input[name='top_colorradio']").prop('checked', true);
         $(".bottom_row1_col0 input[name='bottom_colorradio']").prop('checked', true);
     
         let top_id=1+'_aj_'+0;
         let bottom_id=1+'_ay_'+0;
          $('.checked_inputs').removeClass("checked_inputs");
          $('.checked_inputb').removeClass("checked_inputb");
         $('#'+top_id).addClass("checked_inputs");
         $('#'+bottom_id).addClass("checked_inputb");
         
          var count_tops=$('.pickimg').attr("count_data");
          $('.minus_count').attr("minus_topno_data",count_tops);
          $('.plus_count').attr("plus_topno_data",2);
          
          var count_bottoms=$('.pickbottom_img').attr("count_data");
          $('.bottom_minus_count').attr("minus_bottomno_data",count_bottoms);
          $('.bottom_plus_count').attr("plus_bottomno_data",2);
          
          var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
         var  total_price = top_price + bottom_price;
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".basic_desk td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+total_price);
        
    }
    $('body').on('click', '.bottom_minus_count', function() {
     
        var next= $('.bottom_plus_count').attr("plus_bottomno_data");
             var row= $(this).attr("minus_bottomno_data");
          
            var coll= $('.pickimg').attr("c_data");
             var count_bottoms= $( '.pickbottom_img').attr("count_data");
             
         
            $('.bottom_active_input').removeClass('bottom_active_input');
            $('.bottom_row'+row+'_col'+coll).addClass('bottom_active_input');
            
             $('.bottom_row'+row+'_col'+coll+" input[name='bottom_colorradio']").prop('checked', true);
            
            let my_id=row+'_ay_'+coll;
             $('.checked_inputb').removeClass("checked_inputb");
             $('#'+my_id).addClass("checked_inputb");
             
            if(parseInt(next,10)==1){
             
                 $('.bottom_plus_count').attr("plus_bottomno_data",parseInt(count_bottoms,10));
            }else{
                 $('.bottom_plus_count').attr("plus_bottomno_data",parseInt(next,10)-1);
             }
            if(parseInt(row,10)==1){
               
                 $(this).attr("minus_bottomno_data",parseInt(count_bottoms,10));
            }else{
                 $(this).attr("minus_bottomno_data",parseInt(row,10)-1);
                }
             var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
         var  total_price = top_price + bottom_price;
          var totalprice = function() {
              $("#calculator input[name='addprice[]']:checked").each(function(){
                    total_price= total_price + parseInt($(this).attr('data_smart_price'));
                });
            };
            totalprice();
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".basic_desk td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+(top_price + bottom_price));   
                
     });
     $('body').on('click', '.bottom_plus_count', function() {
    
        
             var row= $(this).attr("plus_bottomno_data");
             var pre= $('.bottom_minus_count').attr("minus_bottomno_data");
         
            var coll= $('.pickbottom_img').attr("c_data");
             var count_bottoms= $( '.pickbottom_img').attr("count_data");
             
         
            $('.bottom_active_input').removeClass('bottom_active_input');
            $('.bottom_row'+row+'_col'+coll).addClass('bottom_active_input');
            
             $('.bottom_row'+row+'_col'+coll+" input[name='bottom_colorradio']").prop('checked', true);
            
            let bottom_id=row+'_ay_'+coll;
           // alert(my_id);
             $('.checked_inputb').removeClass("checked_inputb");
             $('#'+bottom_id).addClass("checked_inputb");
             
             if(parseInt(row,10)==(count_bottoms)){ 
                    $(this).attr("plus_bottomno_data",1);
                }else{
                   $(this).attr("plus_bottomno_data",parseInt(row,10)+1);
                }
              if(parseInt(pre,10)==(count_bottoms)){
                  $('.bottom_minus_count').attr("minus_bottomno_data",1);
              }else{
               $('.bottom_minus_count').attr("minus_bottomno_data",parseInt(pre,10)+1);
              }
               var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
         var  total_price = top_price + bottom_price;
          var totalprice = function() {
              $("#calculator input[name='addprice[]']:checked").each(function(){
                    total_price= total_price + parseInt($(this).attr('data_smart_price'));
                });
            };
            totalprice();
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".basic_desk td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+(top_price + bottom_price));       
     });
     $('body').on('click', '.pickbottom_img', function() {
    var row= $(this).attr("row_data");
    var coll= $(this).attr("c_data");
 
    $('.bottom_active_input').removeClass('bottom_active_input');
      $('.bottom_row'+row+'_col'+coll).addClass('bottom_active_input');
   
    
    let my_id=row+'_ay_'+coll;
     $('.checked_inputb').removeClass("checked_inputb");
     $('#'+my_id).addClass("checked_inputb");
     
    
});

    $('body').on('click', '.minus_count', function() {
     
        var next= $('.plus_count').attr("plus_topno_data");
             var row= $(this).attr("minus_topno_data");
          
            var coll= $('.pickimg').attr("c_data");
             var count_tops= $( '.pickimg').attr("count_data");
             
         
            $('.top_active_input').removeClass('top_active_input');
            $('.row'+row+'_col'+coll).addClass('top_active_input');
            
             $('.row'+row+'_col'+coll+" input[name='top_colorradio']").prop('checked', true);
            
            let my_id=row+'_aj_'+coll;
             $('.checked_inputs').removeClass("checked_inputs");
             $('#'+my_id).addClass("checked_inputs");
             
            if(parseInt(next,10)==1){
             
                 $('.plus_count').attr("plus_topno_data",parseInt(count_tops,10));
            }else{
                 $('.plus_count').attr("plus_topno_data",parseInt(next,10)-1);
             }
            if(parseInt(row,10)==1){
               
                 $(this).attr("minus_topno_data",parseInt(count_tops,10));
            }else{
                 $(this).attr("minus_topno_data",parseInt(row,10)-1);
                }
            
             var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
         var  total_price = top_price + bottom_price;
         var totalprice = function() {
              $("#calculator input[name='addprice[]']:checked").each(function(){
                    total_price= total_price + parseInt($(this).attr('data_smart_price'));
                });
            };
            totalprice();
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".basic_desk td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+(top_price + bottom_price));   
            
                
     });
     
     $('body').on('click', '.plus_count', function() {
    
        
             var row= $(this).attr("plus_topno_data");
             var pre= $('.minus_count').attr("minus_topno_data");
         
            var coll= $('.pickimg').attr("c_data");
             var count_tops= $( '.pickimg').attr("count_data");
             
         
            $('.top_active_input').removeClass('top_active_input');
            $('.row'+row+'_col'+coll).addClass('top_active_input');
            
            $('.row'+row+'_col'+coll+" input[name='top_colorradio']").prop('checked', true);
            
            let top_id=row+'_aj_'+coll;
           // alert(my_id);
             $('.checked_inputs').removeClass("checked_inputs");
             $('#'+top_id).addClass("checked_inputs");
             
             if(parseInt(row,10)==(count_tops)){ 
                    $(this).attr("plus_topno_data",1);
                }else{
                   $(this).attr("plus_topno_data",parseInt(row,10)+1);
                }
              if(parseInt(pre,10)==(count_tops)){
                  $('.minus_count').attr("minus_topno_data",1);
              }else{
               $('.minus_count').attr("minus_topno_data",parseInt(pre,10)+1);
              }
              
             var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
         var  total_price = top_price + bottom_price;
             var totalprice = function() {
              $("#calculator input[name='addprice[]']:checked").each(function(){
                    total_price= total_price + parseInt($(this).attr('data_smart_price'));
                });
            };
            totalprice();
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".basic_desk td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+(top_price + bottom_price));
                
     });
     
  $('body').on('click', '.pickimg', function() {
    var row= $(this).attr("row_data");
    var coll= $(this).attr("c_data");
   
    $('.top_active_input').removeClass('top_active_input');
      $('.row'+row+'_col'+coll).addClass('top_active_input');
   
    
    let my_id=row+'_aj_'+coll;
     $('.checked_inputs').removeClass("checked_inputs");
     $('#'+my_id).addClass("checked_inputs");
     
    
});
</script>
 <script>
           
            $('.add').click(function () {
               
                var plsqty=parseInt($('.prodQty').val());
                $('.prodQty').val((plsqty+1));
            	
            });
            $('.sub').click(function () {
                 var qty=parseInt($('.prodQty').val());
            		if (qty == 1) {
            		}else{
            		   $('.prodQty').val((qty-1));  
            		}
            });
        </script>
          <script type='text/javascript'>
       function screenshot(e){
            e = e || window.event;
    e.preventDefault();
     let div_element = document.getElementById('screenshot');
        
       html2canvas(div_element).then(function(canvas){

      // document.body.appendChild(canvas);

         // Get base64URL
         var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
          // alert(canvas.toDataURL());
         // AJAX request
         $.ajax({
            url:  "{{url('capture_image_script')}}",
            type: 'post',
            data: {
                image: base64URL,
                _token: "{{ csrf_token() }}"
            },
            success: function(imagedata){
              console.log('Upload successfully');
                $("#screenshot_image").val(imagedata);
              save_leads(e);
              
                //alert($("#captured_desk_image").val());
                // $("#myForm").submit();
            }
         });
       });  
        
       }
       function save_leads(e){
           let contact = $("#contact_no_input").val();
           let image = $("#screenshot_image").val();;
            e = e || window.event;
            e.preventDefault();
            console.log('test function created by shubham');
            $.ajax({
                url: "{{url('desk-add-leads')}}", 
                type: 'post',
                data: { 
                _token: "{{ csrf_token() }}",
                image: image,
                contact_no: contact,
                },
                success: function(result) {
                    $("#indexpage_form").submit();
                }
            });  
       }
     </script>
        <script>
        function check_Mobile(str) {
          
  // Regular expression to check if string is a Indian mobile number
  const regexExp = /^[6-9]\d{9}$/gi;
var res;
  res = regexExp.test(str);
   // alert(res);
  if(res==false){
      $('#div_mobile').html('Please Enter a valid mobile number.');
       $("#usermob").click(function(){
            $('#div_mobile').html('') ;
        });
  }else{
       $("#contact_no_input").val(str);
      screenshot(event);
    //   $('#div_mobile').html('') ;
    //   $("#indexpage_form").submit();
  }
}
function test_function(e){
     var temp = $(this).prop('checked');
    //  alert(temp);
let smart =   JSON.parse(localStorage.getItem("smart_feature"));
    // console.log('smart loacl'+smart)
    let test  = smart;
    console.log('test array '+test.indexOf(e.value))
    if(test.indexOf(e.value)<0){
    test.push(e.value);
    }
    console.log('test loacl after push'+test)
    localStorage.setItem("smart_feature", JSON.stringify(test));
    // console.log(e.value)
    // alert(e.value);
}
localStorage.setItem("smart_feature", JSON.stringify([]));
    </script>
  
@endsection	