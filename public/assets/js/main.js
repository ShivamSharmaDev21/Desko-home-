

  $(document).ready(function(){
  $(".arrow_coustom  ").click(function(e){
     $(".arrow_coustom ").addClass('slick-disabled-1');      
    setTimeout(function() { 
     $(".arrow_coustom ").removeClass('slick-disabled-1');      
    }, 300);
    console.log("clickBtn13")
    })
  })
  $(document).ready(function(){
  $(".plus_count").click(function(e){
     let element = document.querySelector(".plus_count"); 
     let plusbtn = element.getAttribute("plus_topno_data");
      $('.ergo_top').removeClass('ergo_top'); 
      
     if(plusbtn == 2)
     {
        $('.ergo_top_xl').addClass('ergo_top_xl_add');
        $('.ergo').removeClass('ergo'); 
     }
     else
     {
        $('.ergo_top_xl').removeClass('ergo_top_xl_add'); 
     }
     if(plusbtn == 3)
     {
        $('.flat_top').addClass('flat_top_add');
     }
     else
     {
        $('.flat_top').removeClass('flat_top_add'); 
     }
     if(plusbtn == 4)
     {
        $('.flat_top_xl').addClass('flat_top_xl_add');
     }
     else
     {
        $('.flat_top_xl').removeClass('flat_top_xl_add'); 
     }
     console.log(plusbtn + "=======123");
    });
  $(".minus_count").click(function(e){
     let element = document.querySelector(".minus_count"); 
     let plusbtnRight = element.getAttribute("minus_topno_data");
      if(plusbtnRight == 3)
     {
         $('.flat_top').addClass('flat_top_add');
         $('.flat_top_xl').removeClass('flat_top_xl_add');
     }
     else
     {
         $('.flat_top').removeClass('flat_top_add');
     }
      if(plusbtnRight == 2)
     {
         $('.ergo_top_xl').addClass('ergo_top_xl_add');
     }
     else
     {
         $('.ergo_top_xl').removeClass('ergo_top_xl_add');
     }
      if(plusbtnRight == 1)
     {
         $('.ergo_top_addclass').addClass('ergo');
     }
     else
     {
         $('.ergo_top_addclass').removeClass('ergo');
     }
     console.log(plusbtnRight + "=======right");
    });
    
  $(".bottom_plus_count").click(function(e){
     $('.electtric_dual_2').removeClass('electtric_dual_2'); 
     let element = document.querySelector(".bottom_plus_count"); 
     let plusbtnbottom = element.getAttribute("plus_bottomno_data");
     
     if(plusbtnbottom == 4)
     {
        $('.sitting').addClass('sitting_add'); 
     }
     else
     {
        $('.sitting').removeClass('sitting_add'); 
     }
     if(plusbtnbottom == 3)
     {
        $('.manual_sit_stand').addClass('manual_sit_stand_add'); 
     }
     else
     {
        $('.manual_sit_stand').removeClass('manual_sit_stand_add'); 
     }
     if(plusbtnbottom == 2)
     {
        $('.electtric_dual_3').addClass('electtric_dual_3_add'); 
     }
     else
     {
        $('.electtric_dual_3').removeClass('electtric_dual_3_add'); 
     }
     
     console.log(plusbtnbottom + "=======123");
    });
  $(".bottom_minus_count").click(function(e){
     $('.electtric_dual_2').removeClass('electtric_dual_2'); 
     let element = document.querySelector(".bottom_minus_count"); 
     let minusbtnbottom = element.getAttribute("minus_bottomno_data");
     
     if(minusbtnbottom == 4)
     {
        $('.sitting').addClass('sitting_add'); 
     }
     else
     {
        $('.sitting').removeClass('sitting_add'); 
     }
     if(minusbtnbottom == 3)
     {
        $('.manual_sit_stand').addClass('manual_sit_stand_add'); 
     }
     else
     {
        $('.manual_sit_stand').removeClass('manual_sit_stand_add'); 
     }
     if(minusbtnbottom == 2)
     {
        $('.electtric_dual_3').addClass('electtric_dual_3_add'); 
     }
     else
     {
        $('.electtric_dual_3').removeClass('electtric_dual_3_add'); 
     }
      if(minusbtnbottom == 1)
     {
        $('.electtric_dual_2_add').addClass('electtric_dual_2'); 
     }
     else
     {
        $('.electtric_dual_2_add').removeClass('electtric_dual_2'); 
     }
     console.log(minusbtnbottom + "=======123");
    });
  });

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
          if(document.getElementById('load')) {
                       document.getElementById('load').style.visibility="hidden";
          }
      });
  }
}

//$(document).ready(function()
// {
// $('.smart-info.slick-slide:first-child input[type="checkbox"]').attr('checked','checked'); 
// $(".smart-info.slick-slide:first-child .smart_title").addClass("first-smart");
// var id = document.getElementsByClassName("first-smart")[0].value;
// console.log(id)
// var body = document.body;
// body.classList.add(id);
// })

// $(".first-smart .inputbox").click(function(){
//     alert("demo")
//     var id = document.getElementsByClassName("first-smart")[0].value;
//     document.body.remove(id); 
//     alert("demo")
// });



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
        //  $(".pmprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+power_mange_price);
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

       if ($('.footrest_img, .ftprice, .monitor_img').hasClass( 'showarm2')){
        $('.footrest_img, .ftprice, .monitor_img').removeClass('showarm2').addClass('darkmode');
       }
       
       else  {
        $('.footrest_img, .ftprice').removeClass('dark-mode').addClass('showarm2');
       }
       
    //   else if ($('.monitor_img').hasClass( 'moniterNone')){
    //     $('.monitor_img').removeClass('moniterNone').addClass('moniterNone1');
    //   }
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
        //   $(".ftprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+footrest_price);
         
       });
  });
  

// $(document).ready(function(){
//     //   if(localStorage.theme2) {
//     //     $('.footrest_img, .ftprice').addClass( localStorage.theme2 );
//     //   } 
//     //   else{
//     //     $('.footrest_img, .ftprice').addClass('showimg2');
//     //   }
    
//       $(".footrest").click(function(){

//       if ($('.monitor_img, ').hasClass( 'showimg112')){
//         $('.monitor_img').removeClass('showimg112').addClass('darkmode');
//       }
//       else  {
//         $('.monitor_img, .ftprice').removeClass('dark-mode').addClass('showimg12');
//       }
//         // else if ($('.monitor_img').hasClass( 'moniterNone')){
//         // $('.monitor_img').removeClass('moniterNone').addClass('moniterNone1');
//         // }
//         var footrest_price=parseInt($(this).find("input[type='checkbox']").attr('data_smart_price'),10);
//         var top_price=parseInt($('.top_active_input').attr("data_top_price"),10);
//         var bottom_price= parseInt($('.bottom_active_input').attr("data_bottom_price"),10);
//           if($(this).find("input[type='checkbox']").is(":checked")){
//                 var  total_price = parseInt($('.price-title').val()) + footrest_price;
//                 }else{
//                 var total_price = parseInt($('.price-title').val()) - footrest_price;
//             }
//           $('.price-title').val('');
//          $('.price-title').val(total_price);
//           $(".ftprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+footrest_price);
         
//       });
//   });


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
            // $(".smprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+wirles_charge_price);

     
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

       if ($('.drawer_img, .sdprice').hasClass( 'showimg12')){

        $('.drawer_img, .sdprice').removeClass('showimg12').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.drawer_img, .sdprice').removeClass('dark-mode').addClass('showimg12');
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
            // $(".sdprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });






$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#whiteboard").click(function(){

       if ($('.whiteboard_img, .wtprice').hasClass( 'showimg1')){

        $('.whiteboard_img, .wtprice').removeClass('showimg1').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.whiteboard_img, .wtprice').removeClass('dark-mode').addClass('showimg1');
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
            // $(".wtprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });
$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#monitor").click(function(){

       if ($('.monitor_img, .sdprice').hasClass( 'moniter')){

        $('.monitor_img, .sdprice').removeClass('moniter').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.monitor_img, .sdprice').removeClass('dark-mode').addClass('moniter');
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
            // $(".sdprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });

$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#arm").click(function(){

       if ($('.arm_img, .sdprice').hasClass( 'arm')){

        $('.arm_img, .sdprice').removeClass('arm').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.arm_img, .sdprice').removeClass('dark-mode').addClass('arm');
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
            // $(".sdprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });
  
$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#phonehold").click(function(){

       if ($('.phonehold_img, .phprice').hasClass( 'phonehold')){

        $('.phonehold_img, .phprice').removeClass('phonehold').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.phonehold_img, .phprice').removeClass('dark-mode').addClass('phonehold');
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
            // $(".phprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });
$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#phone").click(function(){

       if ($('.phone_img, .phoneprice').hasClass( 'phone')){

        $('.phone_img, .phoneprice').removeClass('phone').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.phone_img, .phoneprice').removeClass('dark-mode').addClass('phone');
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
            // $(".phoneprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });
  

$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#Cup").click(function(){

       if ($('.Cup_img, .cupprice').hasClass( 'Cup')){

        $('.Cup_img, .cupprice').removeClass('Cup').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.Cup_img, .cupprice').removeClass('dark-mode').addClass('Cup');
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
            // $(".cupprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });
$(document).ready(function(){
    //   if(localStorage.theme4) {

    //     $('.drawer_img, .sdprice').addClass( localStorage.theme4 );
    //   } 
    //   else{

    //     $('.drawer_img, .sdprice').addClass('showimg2');
    //   }
      $("#headphone").click(function(){

       if ($('.Cup_img, .headprice').hasClass( 'headphone')){

        $('.headphone_img, .headprice').removeClass('headphone').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.headphone_img, .headprice').removeClass('dark-mode').addClass('headphone');
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
            // $(".headprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
       });
  });




$(document).ready(function(){
      $("#led").click(function(){
       if ($('.led_img, .ledprice').hasClass( 'showled')){

        $('.led_img, .ledprice').removeClass('showled').addClass('darkmode');
       // localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.led_img, .ledprice').removeClass('dark-mode').addClass('showled');
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
            // $(".ledprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+drawer_price);
         
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
        //   $(".wsprice td:nth-child(2)").html('<i class="far fa-rupee-sign mr5"></i>'+wheels_price);
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
      speed : 200,
      infinite: false,
      arrows: true,
      fade: false,
      prevArrow: '<button  type="button" class="slick-prev slick-arrow arrow_coustom "><i class="fal fa-chevron-circle-left"></i></button>',
      nextArrow: '<button type="button"  class="slick-next slick-arrow arrow_coustom "><i class="fal fa-chevron-circle-right"></i></button>',
      focusOnSelect: true,
      responsive: [{
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          arrows: true,
        }
      }]
    });

// End Smart Fearures Slider

 
   $(".smart_features").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      arrows: true,
      speed : 200,
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
    
    
  $(".customercreation").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      arrows: false,
      dots : true,
       autoplay: true,
       autoplaySpeed: 2000,
      fade: false,
    //   prevArrow: '<button  type="button" class="slick-prev slick-arrow arrow_coustom "><i class="fal fa-chevron-circle-left"></i></button>',
    //   nextArrow: '<button type="button"  class="slick-next slick-arrow arrow_coustom "><i class="fal fa-chevron-circle-right"></i></button>',
      focusOnSelect: true,
      responsive: [{
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          arrows: false,
        }
      }]
    });
  
    
    

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
        infinite: false,
        prevArrow: '<a class="slick-prev slick-arrow arrow_coustom minus_count smallbutton"><i class="fal fa-chevron-circle-left smallbutton"></i></a>',
        nextArrow: '<a class="slick-next slick-arrow arrow_coustom plus_count smallbutton"><i class="fal fa-chevron-circle-right smallbutton"></i></a>',
        useTransform: true,
        speed: 200,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        // asNavFor: '.nav-top.slider-' + numSlick,
        responsive: [{
          breakpoint: 800,
          settings: {
            arrows: true,
            prevArrow: '<a   class="slick-prev slick-arrow arrow_coustom minus_count smallbutton"><i class="fal fa-chevron-circle-left smallbutton"></i></a>',
            nextArrow: '<a  class="slick-next slick-arrow arrow_coustom plus_count smallbutton"><i class="fal fa-chevron-circle-right smallbutton"></i></a>',
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

$(".smallbutton").click(function(){
if($('.slick-active .small').hasClass('small') === true ) 
{
 $('body').addClass('smallsize');
 $('body').removeClass('large');
}
if($('.slick-active .small').hasClass('small') === false ) 
{
 $('body').removeClass('smallsize');  
 $('body').addClass('large');  
}
});

// // $(".smallbutton").click(function(){
// // alert("Hello\nHow are you?");
// // });

//  $('.smallbutton').click(function(){
//     //  alert("suniul");
// if( $('.slick-active .small').hasClass('small') === true ) 
// {
//  $('body').addClass('pos-change');
// }
// )}




  // <!-- Slider bottom script -->
  
    var numSlick = 0;
    $('.slider-bottom').each(function() {
      numSlick++;
      $(this).addClass('slider-' + numSlick).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        speed : 200,
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

