//  input  radio ColorTop localStorage set

    // $(".colortop").click(function(e) {
    //   //e.preventDefault();
    //   setChekeds($(this));
    //   localStorage.setItem('checked_inputs', $(this).data('rel'));
    // });

    // // set Cheked on load
    // localStorage.getItem('checked_inputs') && setChekeds($('.colortop[data-rel="' + localStorage.getItem('checked_inputs') + '"]'));

    // function setChekeds($el) {
    
    //   $(".colortop").removeClass('active_input');
    //   $('.imgdesk').removeClass('checked_inputs');
      

    //   $el.addClass('active_input');
    //   $($el.data('rel')).addClass('checked_inputs');

    // }
    
    // $(".colortop01").click(function(e) {
    
    //   setChekeds01($(this));
    //   localStorage.setItem('checked_inputs1', $(this).data('rel'));
    // });

   
    // localStorage.getItem('checked_inputs1') && setChekeds01($('.colortop01[data-rel="' + localStorage.getItem('checked_inputs1') + '"]'));

    // function setChekeds01($el) {
    //   $(".colortop01").removeClass('active_input1');
    //   $('.imgdesk1').removeClass('checked_inputs1');
      

    //   $el.addClass('active_input1');
    //   $($el.data('rel')).addClass('checked_inputs1');

    // }

// Ajex Load js


//  input bottom slider  radio ColorTop localStorage set
    // $(".colorbot").click(function(e) {
    
    //   setChekedb($(this));
    //   localStorage.setItem('checked_inputb', $(this).data('rel'));
    // });


    // localStorage.getItem('checked_inputb') && setChekedb($('.colorbot[data-rel="' + localStorage.getItem('checked_inputb') + '"]'));

    // function setChekedb($el) {
    //   $(".colorbot").removeClass('active_input');
    //   $('.imgleg').removeClass('checked_inputb');
     
    //   $el.addClass('active_input');
    //   $($el.data('rel')).addClass('checked_inputb');
    // }
//  input  checkbox localStorage set


//  input bottom slider  radio ColorTop localStorage set
    // $(".colorbots").click(function(e) {
     
    //   setcheckedbs($(this));
    //   localStorage.setItem('checked_inputbs', $(this).data('rel'));
    // });

   
    // localStorage.getItem('checked_inputbs') && setcheckedbs($('.colorbots[data-rel="' + localStorage.getItem('checked_inputbs') + '"]'));

    // function setcheckedbs($el) {
    //   $(".colorbots").removeClass('active_input');
    //   $('.imgleg1').removeClass('checked_inputbs');
     
    //   $el.addClass('active_input');
    //   $($el.data('rel')).addClass('checked_inputbs');
    // }
//  input  checkbox localStorage set

 $("#img").hide();
 $('#btnset').click(function(){
       $("#btnset").fadeOut();
        $("#img").fadeIn();
});
  
  $(function() {
    $(".next_buy").click(function() {
        $("#dvloader").show();
        $("#page").load("ajax.html", function(){ $("#dvloader").hide(); });
        return false;
    });
});

$(window).load(function () {
        $("#loader").fadeOut('slow');
    });


  

//  input  checkbox localStorage set

//   (function() {
//       var boxes = document.querySelectorAll("#calculator input[type='checkbox']");
//       for (var i = 0; i < boxes.length; i++) {
//           var box = boxes[i];
//           if (box.hasAttribute("store")) {
//               setupBox(box);
//           }

   // Price total input 
        //   var totalprice = function() {
        //       var totalprice = 5000;
        //       var totalprice0 = 8000;
        //       values       = [];
        //       $("#calculator input[name='addprice']:checked").each(function(){
        //             totalprice= totalprice + parseInt($(this).val());
        //             totalprice0= totalprice0 + parseInt($(this).val());
        //         });
        //         $('.price_total').val(totalprice);
        //         $('.price_totaltwo').val(totalprice0);
        //     };

        //     totalprice(); 
        //     $( "#calculator input[name='addprice']" ).on( "click", totalprice );
            
            
  // end Price total input 
  
  
  
     // }
      
//       function setupBox(box) {
//           var storageId = box.getAttribute("store");
//           var oldVal    = localStorage.getItem(storageId);
//           console.log(oldVal);
//           box.checked = oldVal === "true" ? true : false;
          
//           box.addEventListener("change", function() {
//               localStorage.setItem(storageId, this.checked); 
//           });
//       }
//   })();



// Add Smart Features

  $(document).ready(function(){
    //   if(localStorage.theme1) {

    //     $('.power_mange_img, .pmprice').addClass( localStorage.theme1 );
    //   } 
    //   else{

    //     $('.power_mange_img, .pmprice').addClass('showimg2');
    //   }
      $("#power_mange").click(function(){

       if ($('.power_mange_img, .pmprice').hasClass( 'showimg1')){

        $('.power_mange_img, .pmprice').removeClass('showimg1').addClass('darkmode');
        //localStorage.theme1 = 'darkmode';
       }
       else  {
        $('.power_mange_img, .pmprice').removeClass('dark-mode').addClass('showimg1');
       // localStorage.theme1 = 'showimg1';

       }
        var power_mange_price=parseInt($(this).find("input[type='checkbox']").attr('data_smart_price'),10);
     var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
           if($(this).find("input[type='checkbox']").is(":checked")){
                 var  total_price = parseInt($('.price-title').val()) + power_mange_price;
                  
                }else{
                    var  total_price = parseInt($('.price-title').val()) - power_mange_price;
                }
        
           $('.price-title').val('');
         $('.price-title').val(total_price);
         $(".pmprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+power_mange_price);
        //  $('.pmprice').removeClass('dark-mode').addClass('showimg1');
       });
  });

 $(document).ready(function(){
    //   if(localStorage.theme2) {

    //     $('.footrest_img, .ftprice').addClass( localStorage.theme2 );
    //   } 
    //   else{

    //     $('.footrest_img, .ftprice').addClass('showimg2');
    //   }
      $(".footrest").click(function(){

       if ($('.footrest_img, .ftprice').hasClass( 'showimg1')){

        $('.footrest_img, .ftprice').removeClass('showimg1').addClass('darkmode');
        //localStorage.theme2 = 'darkmode';
       }
       else  {
        $('.footrest_img, .ftprice').removeClass('dark-mode').addClass('showimg1');
       // localStorage.theme2 = 'showimg1';

       }
       
        var footrest_price=parseInt($(this).find("input[type='checkbox']").attr('data_smart_price'),10);
     var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
           if($(this).find("input[type='checkbox']").is(":checked")){
                 var  total_price = parseInt($('.price-title').val()) + footrest_price;
                  
                }else{
                    var  total_price = parseInt($('.price-title').val()) - footrest_price;
                }
        
           $('.price-title').val('');
         $('.price-title').val(total_price);
          $(".ftprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+footrest_price);
         
       });
  });


  $(document).ready(function(){
    //   if(localStorage.theme3) {

    //     $('.smart_feture_img, .smprice').addClass( localStorage.theme3 );
    //   } 
    //   else{

    //     $('.smart_feture_img, .smprice').addClass('showimg2');
    //   }
      $("#wirles_charge").click(function(){

       if ($('.smart_feture_img, .smprice').hasClass( 'showimg1')){

        $('.smart_feture_img, .smprice').removeClass('showimg1').addClass('darkmode');
       // localStorage.theme3 = 'darkmode';
       }
       else  {
        $('.smart_feture_img, .smprice').removeClass('darkmode').addClass('showimg1');
      //  localStorage.theme3 = 'showimg1';

       }
     
    var wirles_charge_price=parseInt($(this).find("input[type='checkbox']").attr('data_smart_price'),10);
           if($(this).find("input[type='checkbox']").is(":checked")){
                   var  total_price = parseInt($('.price-title').val()) + wirles_charge_price;
                }else{
                    var  total_price =parseInt($('.price-title').val()) - wirles_charge_price;
                }
        
           $('.price-title').val('');
         $('.price-title').val(total_price);
            $(".smprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+wirles_charge_price);

     
       });
  });


$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#drawer").click(function(){

       if ($('.drawer_img, .sdprice').hasClass( 'showimg1')){

        $('.drawer_img, .sdprice').removeClass('showimg1').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.drawer_img, .sdprice').removeClass('dark-mode').addClass('showimg1');
       // localStorage.theme4 = 'showimg1';

       }
       
        var drawer_price=parseInt($(this).find("input[type='checkbox']").attr('data_smart_price'),10);
     var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
           if($(this).find("input[type='checkbox']").is(":checked")){
                 var  total_price = parseInt($('.price-title').val()) + drawer_price;
                  
                }else{
                    var  total_price = parseInt($('.price-title').val()) - drawer_price;
                }
        
           $('.price-title').val('');
         $('.price-title').val(total_price);
            $(".sdprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });


  $(document).ready(function(){
    //   if(localStorage.theme5) {

    //     $('.wheels_img, .wsprice').addClass( localStorage.theme5 );
    //   } 
    //   else{

    //     $('.wheels_img, .wsprice').addClass('showimg2');
    //   }
      $("#wheels").click(function(){

       if ($('.wheels_img, .wsprice').hasClass( 'showimg1')){

        $('.wheels_img, .wsprice').removeClass('showimg1').addClass('darkmode');
       // localStorage.theme5 = 'darkmode';
       }
       else  {
        $('.wheels_img, .wsprice').removeClass('').addClass('showimg1');
      //  localStorage.theme5 = 'showimg1';

       }
       
        var wheels_price=parseInt($(this).find("input[type='checkbox']").attr('data_smart_price'),10);
     var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
          var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
           if($(this).find("input[type='checkbox']").is(":checked")){
                 var  total_price = parseInt($('.price-title').val()) + wheels_price;
                  
                }else{
                    var  total_price = parseInt($('.price-title').val()) - wheels_price;
                }
        
           $('.price-title').val('');
         $('.price-title').val(total_price);
           $(".wsprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+wheels_price);
       });

  });


// End Smart Features



// $(document).ready(function(){
//       if(localStorage.theme6) {

//         $('.price_content').addClass( localStorage.theme6 );
//       } 
//       else{

//         $('.price_content').addClass('showimg2');
//       }
//       $(".price02").click(function(){

//        if ($('.price_content').hasClass( 'showimg1')){

//         $('.price_content').removeClass('showimg1').addClass('darkmode');
//         localStorage.theme6 = 'darkmode';
//        }
//        else  {
//         $('.price_content').removeClass('').addClass('showimg1');
//         localStorage.theme6 = 'showimg1';

//        }
//        });

//   });


// $(document).ready(function(){
//       if(localStorage.theme6) {

//         $('.price_content').addClass( localStorage.theme6 );
//       } 
//       else{

//         $('.price_content').addClass('showimg2');
//       }
//       $(".price01").click(function(){

//        if ($('.price_content').hasClass( 'showimg01')){

//         $('.price_content').removeClass('showimg01').addClass('darkmode');
//         localStorage.theme6 = 'darkmode';
//        }
//        else  {
//         $('.price_content').removeClass('').addClass('showimg01');
//         localStorage.theme6 = 'showimg01';

//        }
//        });

//   });



// Add Slide Color 
  
    $(document).ready(function() {
    //   $('input[name="colorradio"]').click(function() {
    //     var inputValue = $(this).attr("value");
    //     var targetBox = $("." + inputValue);
    //     $(".imgdesk").not(targetBox).hide();
    //     $(targetBox).show();

    //   });
    
      // $('input[name="imgradio"]').click(function() {
      //   var inputValue = $(this).attr("value");
      //   var targetBox = $("." + inputValue);
      //   $(".imgdesk1").not(targetBox).hide();
      //   $(targetBox).show();
      // });
    });



  
    $(document).ready(function() {
      // $('input[name="lagradio"]').click(function() {
      //   var inputValue = $(this).attr("value");
      //   var targetBox = $("." + inputValue);
      //   $(".imgleg").not(targetBox).hide();
      //   $(targetBox).show();

      // });

      // $('input[name="lagradio_one"]').click(function() {
      //   var inputValue = $(this).attr("value");
      //   var targetBox = $("." + inputValue);
      //   $(".imgleg1").not(targetBox).hide();
      //   $(targetBox).show();

      // });
    });


// End Slide Color 

  
// Smart Fearures Slider
$(".smart_slider").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      infinite: false,
      arrows: true,
      fade: false,
      prevArrow: '<button  type="button" class="slick-prev slick-arrow arrow_coustom "><i class="fal fa-chevron-circle-left"></i></button>',
      nextArrow: '<button type="button"  class="slick-next slick-arrow arrow_coustom "><i class="fal fa-chevron-circle-right"></i></button>',
      focusOnSelect: true,
      responsive: [{
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          arrows: true,
        }
      }]
    });


// End Smart Fearures Slider


// Slider Top Start 
//   var $status = $('.sliderQty');
//       var $slickElement = $('.slider-top');

//       $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, 
//       nextSlide) {
        
//         if(!slick.$dots){
//           return;
//         }

    

//         var i = (currentSlide ? currentSlide : 0) + 1;
//         $status.text(i + '/' + (slick.$dots[0].children.length));
//       });
     var numSlick = 0;

    $('.slider-top').each(function() {
      numSlick++;
      $(this).slick({
        slidesToScroll: 1,
        // infinite: true,
        prevArrow: '<a class="slick-prev slick-arrow arrow_coustom minus_count"><i class="fal fa-chevron-circle-left"></i></a>',
        nextArrow: '<a class="slick-next slick-arrow arrow_coustom plus_count"><i class="fal fa-chevron-circle-right"></i></a>',
        useTransform: true,
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        // asNavFor: '.nav-top.slider-' + numSlick,
        responsive: [{
          breakpoint: 800,
          settings: {
            arrows: true,
            prevArrow: '<a   class="slick-prev slick-arrow arrow_coustom minus_count"><i class="fal fa-chevron-circle-left"></i></a>',
            nextArrow: '<a  class="slick-next slick-arrow arrow_coustom plus_count"><i class="fal fa-chevron-circle-right"></i></a>',
          }
        }]
      });
    });
// $('.slider-top').on('slid.bs.carousel', function () {
//     var currentSlide = $('.slider-top div.active').index();
//     sessionStorage.setItem('lastSlide', currentSlide);
// });
// if(sessionStorage.lastSlide){
//     $(".slider-top").carousel(sessionStorage.lastSlide*1);
// }



  // <!-- Slider bottom script -->
  
    var numSlick = 0;
    $('.slider-bottom').each(function() {
      numSlick++;
      $(this).addClass('slider-' + numSlick).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // infinite: true,
        arrows: true,
        fade: false,
        // asNavFor: '.nav-bottom.slider-' + numSlick,
        prevArrow: '<button  type="button" class="slick-prev slick-arrow arrow_coustom bottom_minus_count"><i class="fal fa-chevron-circle-left"></i></button>',
        nextArrow: '<button  type="button" class="slick-next slick-arrow arrow_coustom bottom_plus_count"><i class="fal fa-chevron-circle-right"></i></button>',
        focusOnSelect: true,
        responsive: [{
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            arrows: true,
          }
        }]
      });

    });




  
    // set content on click

    $('.button').click(function(e) {
      e.preventDefault();
      setContent($(this));
      localStorage.setItem('active-desk', $(this).data('rel'));
    });

    // set content on load
    localStorage.getItem('active-desk') && setContent($('.button[data-rel="' + localStorage.getItem('active-desk') + '"]'));

    function setContent($el) {
      $('.button').removeClass('active');
      $('.desk').removeClass('active_desk');

      $el.addClass('active');
      $($el.data('rel')).addClass('active_desk');
    }

