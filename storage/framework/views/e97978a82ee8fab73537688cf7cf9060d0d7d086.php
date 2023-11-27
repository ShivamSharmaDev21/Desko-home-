

<?php $__env->startSection('body'); ?>

<style>

    .ht100
    {
    height: 100vh;
    align-items: center;
    }
    .smart_feture_img
    {
    margin-top:2px;
    }
    .plus_count , .bottom_minus_count , .bottom_plus_count , .minus_count{
     display:none !important;   
    }
    #calculator
    {
        display:none;
    }
    .inputprice
    {
    font-size: 44px;
    width: 100%;
    color: black;
    letter-spacing: 2px;
    }
    
    .pricecontent h1
    {
        display: flex;
    align-items: center;
    }
    .pricecontent h3
    {
        font-size: 18px;
        margin-bottom: 1rem;
            cursor: pointer;
        color: #0d6efd;
        margin-top: 4px;
        text-decoration: underline;
    }
    
    .pricecontent
    {
    position: absolute;
        margin-top: -40px;
    right: 18%;
    z-index: 1000;
    }
    .btn_back
    {
    position: absolute;
    top: 60px;
    width: 80%;
    }
    .color_choose_table, .colorpicker
    {
      display:none;    
    }

.bg-set {
    background: #F8F8FA !important;
    padding: 2rem 0rem;
    margin-bottom: 7rem;
    margin-top: 0rem;
}
@media  only screen and (min-width: 1200px){
.h4, h4 {
    font-size: 1.8rem;
    line-height: 3rem;
}
}
@media  only screen and (min-width: 992px){
.mb-30 {
    margin-bottom: 2.5rem;
}
.mb--n30 {
    margin-bottom: -2.5rem;
}
.product__items--action__list {
    margin-right: 0.4rem;
}
.product__items--action__btn {
    padding: 0 0.8rem;
    /*height: 3.4rem;*/
    line-height: 2.3rem;
}

}
@media  only screen and (max-width: 768px){
    .pricecontent {
    position: relative;
    margin-top: -90px;
    right: 0%;
    z-index: 1000;
}
.product__items--action {
    opacity: 1 !important;
    visibility: visible !important;
    bottom: 1.2rem;
}
.product__items--action__cart--btn {
    opacity: 1 !important;
    visibility: visible !important;
}
.add__to--cart__text {
    display: none !important;
}
.mb-30 {
    margin-bottom: 2rem;
}
.h4, h4 {
    font-size: 14px !important;
}
.bg-set{
    margin-top: -5rem !important;
}
.inputprice {
    font-size: 30px !important;
}
}
.product__items--action__btn {
    /*height: 3.2rem;*/
    line-height: 2.3rem;
    padding: 0 0.6rem;
    color: var(--text-gray-color);
    background: var(--white-color);
    border-radius: 0.3rem;
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
    padding: 2.5rem 0px 0px !important;
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
    width: 160px;
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
    border-radius: 0.3rem;
    background: #2b638e;
    color: var(--white-color);
    border: 0;
}
.primary__btn:hover {
    background: #121a25;
    color: #fff;
}
a:hover {
    text-decoration: none;
    color: #2b638e;
}
a:hover {
    color: #0a58ca;
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
    background: #2b638e;
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
    color: #2b638e;
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
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
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
.modal .btn-close {
    background-color: white;
    opacity: 001;
    border-radius: 21%;
    float: right;
}
@media (min-width: 576px){
.modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}
}
.slider-nav
{
     padding: 0.234375rem 20px;
}
.product-gallery--media {
    position: relative;
    margin-bottom: 4px;
    display: inline-block;
    overflow: hidden;
    height: 5.9rem;
    display: flex;
    align-items: center;
    margin-top: 1rem;
    padding: 2px;
    margin-right: 0.1875rem;
    margin-left: 0.1875rem;
    vertical-align: middle;
    border-radius: 2px;
    box-shadow: 0 0 2px transparent;
    transition: box-shadow 100ms cubic-bezier(0.4, 0, 1, 1);
}
.slick-slide.slick-active.is-active .product-gallery--media {
        box-shadow: 0 0 0 1.5px #818181;
    z-index: 1000000;
    position: relative;
}
.slider-single img {
    display: block;
    width: 100%;
    margin: 0 auto;
}
.fa-chevron-left
{
    margin-left: 1.5rem;
    font-size: 22px;
}
.fa-chevron-right
{
     margin-right: 12.5rem;
    position: absolute;
        top: 5px;
    font-size: 22px;
    left: -15px;
    z-index: 10000;
}
.product-title {
    font-size: 1.80625rem;
    margin-top: 0;
    margin-bottom: 0;
    color: #484848;
    line-height: 1.2;
}
.product-main {
    font-size: 0.9375rem;
    display: inline-block;
    width: 100%;
    vertical-align: top;
    transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1);
}

.product__badge--sale {
      color: #fff;
    font-weight: 400;
    padding: 0.134375rem 0.3125rem;
    text-decoration: none;
    font-size: 15px;
    vertical-align: middle;
    background-color: #2a910f;
    margin-top: -7px;
}

.price__compare-at.visible {
    display: inline-block;
}
.product-pricing {
    margin-top: 0.9375rem;
}
.product__price {
    margin-top: 2rem;
     font-size: 1.171875rem;
         color: #949494;
}
.price__compare-at--single s {
    font-size: 1.171875rem;
}

.product__price .price__compare-at, .product__price .price__current {
    font-size: 1.171875rem;
    margin-bottom: 0.234375rem;
    line-height: 1.15;
    white-space: nowrap;
}
.price__current--on-sale .money {
    color: #2a910f;
    font-weight : 600;
    
}

.price__current {
    margin-right: 0.234375rem;
    line-height: 1.4375rem;
        margin-top: 5px;
    margin-bottom: 5px;
    color: #000000c2;
}

.offer-banner {
    margin: 35px 0 30px;
}
.offer-banner-inner {
    display: inline-block;
    background: #f0f0f0;
    padding: 9px 10px;
    border: 3px dashed #cfcfcf;
}
.offer-banner .offer-banner-inner p {
    display: flex;
    align-items: center;
    text-transform: uppercase;
    font-weight: bold;
    font-family: sans-serif;
    font-size: 13px;
    color: #0000009e;
    margin-bottom: 0px;
}
.offer-banner-inner p img {
    max-height: 80px;
    margin: -34px 10px -34px 10px;
}
.form-fields--qty .visible {
    z-index: 1;
    opacity: 1;
    visibility: visible;
}
.form-fields--qty .form-field {
    opacity: 0;
    transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
}
.form-field {
    position: relative;
}
.form-field-title {
    position: absolute;
    font-size: 15px;
    top: 0.25rem;
    left: 0.625rem;
    z-index: 2;
    pointer-events: none;
    transition: 125ms;
    transition-delay: 125ms;
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}

.form-field {
    width: 7.1875rem;
}

.form-field-filled
{
    font-family: Lato,sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: var(--font-size-body);
    z-index: 1;
    width: 100%;
    padding: 1.5rem 0.625rem 0.375rem;
    color: #4d4d4d;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 3px;
}

.product-offer {
    margin: 2rem 0;
}
.product-offer ul {
    padding-left: 0;
    display: flex;
    justify-content: start;
}
.product-offer ul li {
   list-style: none;
    display: flex;
    align-items: center;
    flex-wrap: unset;
    margin: 5px 0;
    font-size: 17px;
    padding-right: 25px;
    color: black !important;
}
.product-offer ul li img {
    margin-right: 5px;
    max-width: 30px;
}
.product-offer ul li strong {
    margin-left: 4px;
}

th, b, strong {
    font-weight: 700;
}

.btnsm
{
     padding: 0.875rem 1.75rem;
    letter-spacing: 0.0em;
    width: 100%;
    transition: 0.3s;
    margin-top: 0.9375rem;
    border-color: #3e2b77;
    margin-left: 0;
    font-size: 0.9375rem;
    text-transform: capitalize;
    font-weight: 700;
}
.btn-red, .btn-red-outline:hover
{
    color: #ffffff;
    box-shadow: 0 3px 8px rgb(0 0 0 / 10%);
    background: #3e2b77;
}
.btn-red:hover
{
    background: #fff !important;
    color : #f04f36;
}
.buttongroup
{
    margin-top: -20px;
}
.btn-red-outline
{
    color : #3e2b77;
}
.custom-field__product-short-desc {
    background: #f5f3ed;
    padding: 1px 20px;
    margin: 20px 0;
}
.social-media i
{
    font-size: 24px;
    margin-right: 5px;
}
.twitter
{
    color : #0077B5;
}
.linkedin
{
    color : #0077B5;
}
.whatsapp
{
    color : #44c854;
}
.facebbook
{
    color : #425dab;
}
.pinterest
{
    color : #bd1c1c;
}
.tab-pane {
    padding: 20px;
    background: #f5f3ed;
}
.nav.nav-tabs li.nav-item {
    list-style: none;
    display: inline-block;
    padding: 7px;
}
.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
.custom-tab {
    margin: 2rem auto;
    max-width: 1000px;
}
.custom-tab .table tr th:first-child {
    width: 250px;
}
.table tr th {
    background: #444444;
    color: #ffffff;
    min-width: 100px;
    text-align: left;
}
.share-buttons--title {
    font-size: 14px;
    margin-top: 0;
    margin-bottom: 0;
    color: black;
    font-weight: 700;
    margin-bottom: 0.6rem;
}
.product-description {
    margin-top: 1.640625rem;
}
.product-description p {
    margin-bottom: 10px;
    font-size: 16px;
    font-weight: 500;
}
.product-static-content img {
    width: 200px;
}
.product--container h6 {
    margin: 1rem 0 0;
    font-weight: 500;
    color: #000000;
    font-size: 1.2rem;
}
.product-static-content h2 {
    margin-bottom: 40px;
}
.text-center {
    text-align: center;
}
.nav.nav-tabs li button.nav-link.active {
    border-bottom: 3px solid #f04f36;
    color: #000000;
}
.nav.nav-tabs li button.nav-link {
        font-size: 17px;
    line-height: 1.6em;
    letter-spacing: 0px;
    padding: 5px;
    color: #48494b;
    background-color: transparent;
    border: none;
    cursor: pointer;
    outline: none;
}
.product--container {
    margin-top: 1.640625rem;
}
.nav.nav-tabs {
   padding-left: 0;
    text-align: center;
    margin-top: 1.640625rem;
    display: flex;
    align-items: center;
    justify-content: center;
        padding-bottom: 1rem;
}
.icon-wrap {
    margin-bottom: 10px;
}
.nav.nav-tabs li.nav-item {
    list-style: none;
    display: inline-block;
    padding: 7px;
}

.custom-tab .tab-pane a {
    color: #f04f36;
    text-decoration: underline;
}
.path {
    /* background: #e3e3e3; */
    border-radius: 2px;
    padding: 4px;
    margin-bottom: 1rem;
    color: black;
    font-size: 15px;
}
.path span {
    margin-right: 4px;
    margin-left: 3px;
}
.colorpicker 
{
    display : inline-flex !important;
}
.radio-toolbar input[type="radio"] {
  display: none;
}

.radio-toolbar label {
     background-color: #ddd;
    padding: 4px 11px;
    font-family: Arial;
    font-size: 16px;
        margin-right: 10px;
    border: 1px solid #dddddd;
    cursor: pointer;
    height: 55px;
    width: 55px;
        transition: box-shadow 150ms cubic-bezier(0.7, 0.18, 1, 1); 
    display: inline-block;
    border-radius: 50%;
}

.radio-toolbar input[type="radio"]:checked+label {
  background-color: #bbb;
      box-shadow: 0 0 0 1.5px rgb(255 255 255), 0 0 0 3px #818181;
}
.chocklet
{
        background-color: #654321 !important;
}
.gray
{
        background-color: #fff !important;
}

.titleclr
{
    margin-top: -11px;
    color: black;
    font-size: 17px;
    margin-bottom: 11px;
}
@media(max-width: 767px){
    .product-offer ul{
        display:block !important;
    }
    .product-static-content img {
    width: 300px;
}
.fetur{
    display:block !important;
}
.fetur .col{
    text-align: center;
}
}
</style>
 <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
  </head>
  <body>
      
      <section class="product__section" style="margin-top: 1rem;margin-bottom: -2rem;">
            <div class="container-fluid" style="padding: 0rem 2rem;">
     <div class="path">
       <span> <i class="far fa-home"></i> Home</span><span>/</span><span><?=$product_details->prod_name?></span>
        </div>
        </div>
</section>

<section class="product__section">
            <div class="container-fluid" style="padding: 0rem 2rem;">
                <div class="section__heading text-center mb-30">
                    <h2 class="section__heading--maintitle mb-100"></h2>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                       <div id="page">
                    	<div class="row">
                    		<div class="column small-11 small-centered">
                    	<div class="slider slider-single">
                    	    <div><img src="https://cws.in.net/deskohome/admin/public/feature_image/<?=$product_details->feature_image?>"></div>
                    			<?php if(isset($prod_gal_imgss)){
                    			foreach($prod_gal_imgss as $prod_gal_imgs) { 
                    			?>
                    				<div><img src="https://cws.in.net/deskohome/admin/public/gallery_image/<?=$prod_gal_imgs->gallery_image?>"></div>
                    				<?php } } ?>
                    				
                    				
                    					
                    				<!--<div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7837copy_669x669.jpg?v=1656485231"></div>-->
                    				<!--<div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/atmosphere-chairs-_0004_MKS_4954-copy_669x669.png?v=1656485231"></div>-->
                    				<!--<div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7838-1500x1500-red_669x669.jpg?v=1656485231"></div>-->
                    				<!--<div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7835copy_669x669.jpg?v=1656485231"></div>-->
                    				<!--<div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_78342copy_669x669.jpg?v=1653924120"></div>-->
                    			 <!--  <div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7837copy_669x669.jpg?v=1656485231"></div>-->
                    			 <!--  	<div><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_78342copy_669x669.jpg?v=1653924120"></div>-->

                    			</div>
                    			<div class="slider slider-nav">
                    			    <div><span class="product-gallery--media">
                    				        <img src="https://cws.in.net/deskohome/admin/public/feature_image/<?=$product_details->feature_image?>"></span>
                    				</div>
                    			<?php if(isset($prod_gal_imgss)){
                    			foreach($prod_gal_imgss as $prod_gal_imgs) { 
                    			?>
                    				<div><span class="product-gallery--media">
                    				        <img src="https://cws.in.net/deskohome/admin/public/gallery_image/<?=$prod_gal_imgs->gallery_image?>"></span>
                    				</div>
                    				<?php } } ?>
                    				
                    				<!--<div><span class="product-gallery--media"><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7837copy_669x669.jpg?v=1656485231"> </span></div>-->
                    				<!--<div><span class="product-gallery--media"><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/atmosphere-chairs-_0004_MKS_4954-copy_669x669.png?v=1656485231"> </span></div>-->
                    				<!--<div><span class="product-gallery--media"><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7838-1500x1500-red_669x669.jpg?v=1656485231"> </span></div>-->
                    				<!--<div><span class="product-gallery--media"><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7835copy_669x669.jpg?v=1656485231"> </span></div>-->
                    				<!--<div><span class="product-gallery--media"><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_78342copy_669x669.jpg?v=1653924120"> </span></div>-->
                    				<!--<div><span class="product-gallery--media"><img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_7837copy_669x669.jpg?v=1656485231"> </span></div>-->
                        <!--       	<div>-->
                    				<!--    <span class="product-gallery--media">-->
                    				<!--    <img src="https://cdn.shopify.com/s/files/1/0560/9517/8944/products/DSC_78342copy_669x669.jpg?v=1653924120">-->
                    				<!--</div>-->
                    			
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="product-main">
                    <div class="product-details">
                       <h1 class="product-title">
                       <?=$product_details->prod_name?>
                      </h1>
                      
                      <div class="product__price price--varies">
                          <span>MRP: </span>
                          <div class="price__compare-at visible">
                         <span class="money price__compare-at--single">
                          <s>₹   <?=$product_details->mrp_price?></s>
                        </span>
                        <span class="product__badge product__badge--sale">
                      <span><?=round((($product_details->mrp_price-$product_details->offer_price)/$product_details->mrp_price)*100,2)?></span>% OFF</span>
                    </span>
                    </div>
                      
                     
                     <div class="price__current  price__current--on-sale" >
                         <span>Discounted Price: </span>
                      <span class="money">
                        ₹ <?=$product_details->offer_price?>
                      </span>
                      <br>
                      <span> (Inclusive of all taxes)</span>
                      <p></p>
                      <span class="you-save-cust">You Save <span>₹ <?=round(($product_details->mrp_price-$product_details->offer_price),2)?></span></span>
                     </div>
                     
                     <!--<div class="offer-banner">-->
                     <!--   <div class="offer-banner-inner">-->
                     <!--    <p>ADDITIONAL <img src="<?php echo e(asset('public/assets/img/5_-Unit.png')); ?>"> DISCOUNT ON CHECKOUT</p> -->
                     <!--          <p> </p>-->
                     <!--   </div>-->
                     <!-- </div>-->
              
              <div class="colorchoose mt-3 mb-3">
                  <label class="titleclr">Choose Color</label>
               <div class="radio-toolbar">
              <input type="radio" id="radio1" name="radios" value="coco" checked>
              <label for="radio1" class="chocklet"></label>
            
              <input type="radio" id="radio2" name="radios" value="gray">
              <label for="radio2" class="gray"></label>
            </div>
              </div>
            </div>
          <form method="get" action="https://devvsh.deskohome.com/development/add-to-cart/<?=$product_id?>" >
              <div class="form-field form-field--qty-input visible">
                <input id="product-quantity-input" class="form-field-input form-field-number form-field-filled" value="1" name="quantity" type="number" pattern="\d*" aria-label="Quantity" data-quantity-input="">
                <label for="product-quantity-input" class="form-field-title">
                  Quantity
                </label>
              </div>
              
              
              <div class="product-offer">
                  <div class="feture-img mt-3 mb-4">
                  <img src="<?php echo e(asset('public/assets/img/Smart_Features_Icons.png')); ?>">
              </div>
                  <ul>
                    <li><img src="<?php echo e(asset('public/assets/img/Icons-01.svg')); ?>"> Free <strong>Shipping</strong></li>
                    <li><img src=<?php echo e(asset('public/assets/img/Icons-02.svg')); ?>> Free <strong>Installation</strong></li>
                    
                    <li class="custom_message"><img src="<?php echo e(asset('public/assets/img/Icons-03.svg')); ?>"> Dispatch Within <strong class="">15-20  Days</strong></li>
                   
                  </ul>
                
                </div>
                </div>
                
                <div class="buttongroup">
                 <!--<a href="https://devvsh.deskohome.com/development/" class="btn btnsm btn-red">Customize Table</a>-->
           
                     <button class="btn btnsm btn-red-outline" type="submit" >  Buy it now</button>
                </div>
                </form>
                
                <div class="tb-text-div mt-5" style="display: inline-block;font-size: 12px; text-align: center;width: 100%;">
              <div class="tb-text" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: bold; text-align: center;">Secured and trusted checkout with:</div>
              <div class="tb-badge-div">
                 <div class="tb-badge" style="width: 65px; display: inline-block; margin: 0px 7px; vertical-align: top;"><img class="tb-svg" src="<?php echo e(asset('public/assets/img/p0.png')); ?>" alt="American Express" style="width: 65px; height: 65px;"></div>
                <div class="tb-badge" style="width: 65px; display: inline-block; margin: 0px 7px; vertical-align: top;"><img class="tb-svg" src="<?php echo e(asset('public/assets/img/p1.png')); ?>" alt="Mastercard" style="width: 65px; height: 65px;"></div>
                <div class="tb-badge" style="width: 65px; display: inline-block; margin: 0px 7px; vertical-align: top;"><img class="tb-svg" src="<?php echo e(asset('public/assets/img/p2.png')); ?>" style="width: 65px; height: 65px;"></div>
                <!--<div class="tb-badge" style="width: 65px; display: inline-block; margin: 0px 7px; vertical-align: top;"><img class="tb-svg" src="<?php echo e(asset('public/assets/img/p3.png')); ?>" alt="Paytm" style="width: 65px; height: 65px;"></div>-->
                <div class="tb-badge" style=" display: inline-block; margin: 0px 7px; vertical-align: top;"><img class="tb-svg" src="<?php echo e(asset('public/assets/img/ssl.png')); ?>" alt="RuPay" style=" height: 65px;"></div>
                <!--<div class="tb-badge" style="width: 65px; display: inline-block; margin: 0px 7px; vertical-align: top;"><img class="tb-svg" src="<?php echo e(asset('public/assets/img/p5.svg')); ?>" alt="Visa" style="width: 65px; height: 65px;"></div>-->
              </div>
            </div>


              <div class="custom-field custom-field__product-short-desc custom-field__type--html">
                  <div class="custom-field--value">
                    <br><p><strong>Please Note:&nbsp;</strong><br>
                  The primary color for this product will be dispatched within <strong>5-7 business days</strong>.</p>
                <p>Since the product is exclusively made to order, the secondary colors will be dispatched within <strong>15 business days</strong>.</p>
                     </div>
                </div>
                
                
                 <div class="social-media">
               <span class="share-buttons--title">    Share this:  </span>
               <br>
                <a href="#" class="facebbook"> <i class="fab fa-facebook"></i> </a>
                <a href="#" class="twitter"> <i class="fab fa-twitter-square"></i> </a>
                <a href="#" class="linkedin"> <i class="fab fa-linkedin"></i> </a>
                <a href="#" class="pinterest"><i class="fab fa-pinterest-square"></i></a>
                <a href="#" class="whatsapp"><i class="fab fa-whatsapp-square"></i></i></a>
               </div>
               <div class="product-description rte" >
            <p><span ><?=$product_details->description?> </span></p>
            <!--<p><span>This height adjustable station is equipped with a dual motor for smooth functioning and is designed such that it can be used while sitting or while standing, by one user and even by two users at once. </span></p>-->
            <!--<p><span>This station is equipped with a swing door storage unit under the worktop as well. </span></p>-->
            <!--<p><span >Additionally, the desk has 3 electrical sockets on the desk and another media outlet to attach a screen of the users choosing. </span></p>-->
            <!--<p><span>The height of this media station can also be adjusted using the AIDESK app, available on both Android and iOS. </span></p>-->
            <!--<p><span >Being technologically advanced, solid build in quality and highly functional, the Zeus media station is an ideal addition to your workplace. </span></p>-->
          </div>
                     
                    </div>
                    </div>
                </div>
               
            </div>
        </section>
        

        
        <div class="container">
            <div class="product--container">
  <div class="custom-tab">
      
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="protab1nkj" data-bs-toggle="tab" data-bs-target="#protab1" type="button" role="tab" aria-controls="product-specification" aria-selected="true">Product Specifications</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="protab2nkj" data-bs-toggle="tab" data-bs-target="#protab2" type="button" role="tab" aria-controls="care-instructions" aria-selected="false">Care Instructions</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="protab3nkj" data-bs-toggle="tab" data-bs-target="#protab3" type="button" role="tab" aria-controls="delivery-returns" aria-selected="false">Return &amp; Cancellation</button>
      </li>


      <li class="nav-item" role="presentation">
        <button class="nav-link" id="protab4nkj" data-bs-toggle="tab" data-bs-target="#protab4" type="button" role="tab" aria-controls="warranty" aria-selected="false">Warranty</button>
      </li>

      <!--<li class="nav-item" role="presentation">-->
      <!--  <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#quality-promise" type="button" role="tab" aria-controls="quality-promise" aria-selected="false">Disclaimer</button>-->
      <!--</li>-->


      <!--<li class="nav-item" role="presentation">-->
      <!--  <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#merchant-info" type="button" role="tab" aria-controls="merchant-info" aria-selected="false">Merchant Info</button>-->
      <!--</li>-->


      <!--<li class="nav-item" role="presentation">-->
      <!--  <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#customer-redressel" type="button" role="tab" aria-controls="merchant-info" aria-selected="false">Customer Redressal</button>-->
      <!--</li>-->

    </ul>
    <div class="tab-content" id="myTabContent">
        
      <!--<div class="tab-pane fade active show" id="protab1" role="tabpanel" aria-labelledby="product-specification">-->
      <!--  <div class="table-responsive">-->
      <!--    <table class="table table-bordered">-->
      <!--      <tbody>-->
      <!--        <tr>-->
      <!--          <th>Range</th>-->
      <!--          <th>Essential</th>-->
      <!--        </tr>-->

      <!--        <tr>-->
      <!--          <td>Product Code:</td>-->
      <!--          <td>AWSL-1076</td>-->
      <!--        </tr>-->


      <!--        <tr>-->
      <!--          <td>Dimensions:</td>-->
      <!--          <td>L 74.80” x D 47.24” x H 70.86"</td>-->
      <!--        </tr>-->



      <!--        <tr>-->
      <!--          <td>Weight:</td>-->
      <!--          <td>103 Kg</td>-->
      <!--        </tr>-->

      <!--        <tr>-->
      <!--          <td>Primary Material:</td>-->
      <!--          <td>Anti-Bacterial Laminate on Engineered Wood</td>-->
      <!--        </tr>-->


      <!--        <tr>-->
      <!--          <td>Secondary Material:</td>-->
      <!--          <td>Powder Coated MS</td>-->
      <!--        </tr>-->



      <!--        <tr>-->
      <!--          <td>Extra Features:</td>-->
      <!--          <td>• AIDESK app for iOs and Android<br>-->
      <!--            • Height Adjustable with Dual motor<br>-->
      <!--            • Dual motor warranty- 5 years<br>-->
      <!--            • Swing door storage<br>-->
      <!--            • Television/computer screen can be attached<br>-->
      <!--            • Electrical socket spaces<br></td>-->
      <!--        </tr>-->

      <!--      </tbody>-->
      <!--    </table>-->
      <!--  </div>-->

      <!--</div>-->
      <?php $i= 1; foreach($prodimgs as $prodimg){ ?>
     <div class="tab-pane fade <?=($i==1)?'show active':''?>" id="protab<?=$i?>" role="tabpanel" aria-labelledby="care-instructions">
          <img src="<?php echo e(asset('admin/public/gallery_image/')); ?>/<?=$prodimg->gallery_image?>">
        <!--<div class="row">-->
        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/01.2-tablecloth.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>Try to use a tablecloth or any thick quality cloth on your dining table or any other table which is subject to daily and heavy use.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/02.1-use_coasters.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>Do not keep warm or cold items directly on a furniture surface; instead use a hot pad or coasters; please do not keep hot items like a tawa or baking dish even on a hot pad.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/03.2-_avoid_direct_sunlight.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>To protect your furniture from fading, avoid keeping your furniture next to windows and other places where it can be exposed to direct sunlight.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/04.2-avoid_minor_scratches.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>To avoid minor scratches which may hamper the finish of your furniture avoid sliding or passing items placed on your tabletop.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/05.1-burning_candles.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>Avoid placing items like burning candles or irons on any furniture as the heat generated from them may affect the life of your furniture in the long run, make use of candle holders to avoid melting wax touching the furniture.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/08.1wiping_moisture.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>Cleaning your furniture regularly will help you maintain them for a long time, make sure that you clean your furniture gently with a soft lightly damp cloth; using a rough rag and pressing it hard against the wood might lead to minor scratches.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/08.1-wiping_the_moisture.png')); ?>">-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>In case of a spill on the furniture, never try to wipe it as it will spread the spill and hamper the polish, instead just blot the spill.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6 mb-2">-->
        <!--    <div class="row">-->
        <!--      <div class="col-sm-2">-->
        <!--        <div class="element-wrap">-->
        <!--          <div class="icon-wrap">-->
        <!--            <img src="<?php echo e(asset('public/assets/img/Icons_Care.png')); ?>">-->
        <!--         </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-sm-10">-->
        <!--        <div class="element-wrap">-->
        <!--          <h5></h5>-->
        <!--          <p>To protect your furniture from moisture, avoid placing it in direct contact with damp walls. We recommend wiping the moisture promptly with a dry, soft &amp; lint-free cloth.</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--</div>-->

      </div>
      <?php  $i++; } ?>
      <!--<div class="tab-pane fade" id="protab3" role="tabpanel" aria-labelledby="delivery-returns">-->
      <!--  <div class="list-style">-->
      <!--    <p><strong>Returns:</strong></p>-->
      <!--    <p><br>For more details on the returns policy please refer to the&nbsp;<a href="#" target="_blank">Return &amp; Cancellation</a> page&nbsp;carefully.</p>-->
      <!--  </div>-->
      <!--</div>-->
      
      <!--<div class="tab-pane fade" id="protab4" role="tabpanel" aria-labelledby="warranty">-->
      <!--  <div class="list-style">-->
      <!--    <p><strong>Assembly:</strong>&nbsp;A carpenter may be required for assembly.<br><br><strong>Warranty Terms:</strong>&nbsp;The product comes with a 24 Months warranty against any manufacturing defect<br><br><strong>This limited warranty does not apply to:</strong><br> • Normal wear and tear, cuts or scratches, or damages caused by impacts or accidents.<br> • Products that have been stored, assembled, or installed incorrectly.<br> • The use of inappropriate cleaning methods or cleaning products on delicate surfaces (e.g. upholstered furniture will lighten/fade over time if it’s exposed to direct sunlight)<br> • No warranty is offered on upholstery/ coverings/ cushion covers.<br> • In case of any issues and claims, please reach out to us at <a href="mailto:deskohome.work"> deskohome.work</a>.</p>-->
      <!--  </div>-->
      <!--</div>-->
      
    </div>
  </div>
</div>

        </div>
        
<div class="container-fluid mt-5" style="padding: 0rem 2rem;">
 <div class="product--container">
  <div class="product-static-content">
    <h2 class="product-section--title text-center">Why buy from Desko <span style="font-family: -webkit-body;">?</span></h2>
    <div class="row fetur">
      <div class="col">
        <div class="mb-4">
          <img src="<?php echo e(asset('public/assets/img/fetur1.png')); ?>">
          <!--<h6>Ergonomic Design</h6>-->
          <!--<p>Our design encapsulates the idea of the modern work space that is agile, and smart</p>-->
          <!--<div class="rte">-->
          <!--  <a href="#"></a>-->
          <!--</div>-->
        </div>
      </div>

      <div class="col">
        <div class="mb-4">
          <img src="<?php echo e(asset('public/assets/img/fetur2.png')); ?>">
          <!--<h6>Sustainable</h6>-->
          <!--<p>We use recycled, recyclable and sustainable materials</p>-->
          <!--<div class="rte">-->
          <!--  <a href=""></a>-->
          <!--</div>-->
        </div>
      </div>


      <div class="col">
        <div class="mb-4">
          <img src="<?php echo e(asset('public/assets/img/fetur3.png')); ?>">
          <!--<h6>24 Months Warranty</h6>-->
          <!--<p>Our furniture comes with 24 months warranty for your complete peace of mind</p>-->
          <!--<div class="rte">-->
          <!--  <a href=""></a>-->
          <!--</div>-->
        </div>
      </div>


      <div class="col">
        <div class="mb-4">
          <img src="<?php echo e(asset('public/assets/img/fetur4.png')); ?>">
          <!--<h6>Anti-Bacterial Surface</h6>-->
          <!--<p>Atmosphere furniture are protected with antibacterial laminate to prevent spread of diseases</p>-->
          <!--<div class="rte">-->
          <!--  <a href=""></a>-->
          <!--</div>-->
        </div>
      </div>
       <div class="col">
        <div class="mb-4">
          <img src="<?php echo e(asset('public/assets/img/fetur5.png')); ?>">
          <!--<h6>Anti-Bacterial Surface</h6>-->
          <!--<p>Atmosphere furniture are protected with antibacterial laminate to prevent spread of diseases</p>-->
          <!--<div class="rte">-->
          <!--  <a href=""></a>-->
          <!--</div>-->
        </div>
      </div>

    </div>
  </div>
</div>

        </div>
 <!-- Button trigger modal -->

 </body>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   <script>
       $('.slider-single').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	arrows: false,
 	fade: false,
 	adaptiveHeight: true,
 	infinite: false,
	useTransform: true,
 	speed: 400,
 	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 $('.slider-nav')
 	.on('init', function(event, slick) {
 		$('.slider-nav .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
 		slidesToShow: 7,
 		slidesToScroll: 7,
 		dots: false,
 		 prevArrow: '<button  type="button" class="slick-prev slick-arrow arrow_coustom "><i class="far fa-chevron-left"></i></i></button>',
         nextArrow: '<button type="button"  class="slick-next slick-arrow arrow_coustom "><i class="far fa-chevron-right"></i></button>',
 		focusOnSelect: false,
 		infinite: false,
 		responsive: [{
 			breakpoint: 1024,
 			settings: {
 				slidesToShow: 5,
 				slidesToScroll: 5,
 			}
 		}, {
 			breakpoint: 640,
 			settings: {
 				slidesToShow: 4,
 				slidesToScroll: 4,
			}
 		}, {
 			breakpoint: 420,
 			settings: {
 				slidesToShow: 3,
 				slidesToScroll: 3,
		}
 		}]
 	});

 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
 	$('.slider-nav').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
 	$('.slider-nav .slick-slide.is-active').removeClass('is-active');
 	$(currrentNavSlideElem).addClass('is-active');
 });

 $('.slider-nav').on('click', '.slick-slide', function(event) {
 	event.preventDefault();
 	var goToSingleSlide = $(this).data('slick-index');

 	$('.slider-single').slick('slickGoTo', goToSingleSlide);
 });
   </script>
   <?php $__env->stopSection(); ?>	
   
   
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/development/resources/views/product-detail.blade.php ENDPATH**/ ?>