


  $(document).ready(function(){
      if(localStorage.theme1) {

        $('.power_mange_img').addClass( localStorage.theme1 );
      } 
      else{

        $('.power_mange_img').addClass('showimg2');
      }
      $("#power_mange").click(function(){

       if ($('.power_mange_img').hasClass( 'showimg1')){

        $('.power_mange_img').removeClass('showimg1').addClass('darkmode');
        localStorage.theme1 = 'darkmode';
       }
       else  {
        $('.power_mange_img').removeClass('dark-mode').addClass('showimg1');
        localStorage.theme1 = 'showimg1';

       }
       });
  });

 $(document).ready(function(){
      if(localStorage.theme2) {

        $('.footrest_img').addClass( localStorage.theme2 );
      } 
      else{

        $('.footrest_img').addClass('showimg2');
      }
      $(".footrest").click(function(){

       if ($('.footrest_img').hasClass( 'showimg1')){

        $('.footrest_img').removeClass('showimg1').addClass('darkmode');
        localStorage.theme2 = 'darkmode';
       }
       else  {
        $('.footrest_img').removeClass('dark-mode').addClass('showimg1');
        localStorage.theme2 = 'showimg1';

       }
       });
  });


  $(document).ready(function(){
      if(localStorage.theme3) {

        $('.smart_feture_img').addClass( localStorage.theme3 );
      } 
      else{

        $('.smart_feture_img').addClass('showimg2');
      }
      $("#wirles_charge").click(function(){

       if ($('.smart_feture_img').hasClass( 'showimg1')){

        $('.smart_feture_img').removeClass('showimg1').addClass('darkmode');
        localStorage.theme3 = 'darkmode';
       }
       else  {
        $('.smart_feture_img').removeClass('darkmode').addClass('showimg1');
        localStorage.theme3 = 'showimg1';

       }
       });
  });


$(document).ready(function(){
      if(localStorage.theme4) {

        $('.drawer_img').addClass( localStorage.theme4 );
      } 
      else{

        $('.drawer_img').addClass('showimg2');
      }
      $("#drawer").click(function(){

       if ($('.drawer_img').hasClass( 'showimg1')){

        $('.drawer_img').removeClass('showimg1').addClass('darkmode');
        localStorage.theme4 = 'darkmode';
       }
       else  {
        $('.drawer_img').removeClass('dark-mode').addClass('showimg1');
        localStorage.theme4 = 'showimg1';

       }
       });
  });


  $(document).ready(function(){
      if(localStorage.theme5) {

        $('.wheels_img').addClass( localStorage.theme5 );
      } 
      else{

        $('.wheels_img').addClass('showimg2');
      }
      $("#wheels").click(function(){

       if ($('.wheels_img').hasClass( 'showimg1')){

        $('.wheels_img').removeClass('showimg1').addClass('darkmode');
        localStorage.theme5 = 'darkmode';
       }
       else  {
        $('.wheels_img').removeClass('').addClass('showimg1');
        localStorage.theme5 = 'showimg1';

       }
       });

  });


  
    $(document).ready(function() {
      $('input[name="colorradio"]').click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".imgdesk").not(targetBox).hide();
        $(targetBox).show();

      });
      $('input[name="imgradio"]').click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".imgdesk1").not(targetBox).hide();
        $(targetBox).show();
      });
    });



  
    $(document).ready(function() {
      $('input[name="lagradio"]').click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".imgleg").not(targetBox).hide();
        $(targetBox).show();

      });

      $('input[name="lagradio_one"]').click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".imgleg1").not(targetBox).hide();
        $(targetBox).show();

      });
    });




  
    $(".smart_slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: false,
      arrows: true,
      fade: false,
      prevArrow: '<button class="slick-prev slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-left"></i></button>',
      nextArrow: '<button class="slick-next slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-right"></i></button>',
      focusOnSelect: true,
      responsive: [{
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          arrows: true,
        }
      }]
    });




  
    var numSlick = 0;

    $('.slider-top').each(function() {
      numSlick++;
      $(this).addClass('slider-' + numSlick).slick({
        slidesToScroll: 1,
        infinite: true,
        prevArrow: '<button class="slick-prev slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-left"></i></button>',
        nextArrow: '<button class="slick-next slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-right"></i></button>',
        useTransform: true,
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        // asNavFor: '.nav-top.slider-' + numSlick,
        responsive: [{
          breakpoint: 800,
          settings: {
            arrows: true,
            prevArrow: '<button class="slick-prev slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-left"></i></button>',
            nextArrow: '<button class="slick-next slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-right"></i></button>',
          }
        }]
      });
    });




  // <!-- Slider bottom script -->
  
    var numSlick = 0;
    $('.slider-bottom').each(function() {
      numSlick++;
      $(this).addClass('slider-' + numSlick).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        fade: false,
        // asNavFor: '.nav-bottom.slider-' + numSlick,
        prevArrow: '<button class="slick-prev slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-left"></i></button>',
        nextArrow: '<button class="slick-next slick-arrow arrow_coustom"><i class="fal fa-chevron-circle-right"></i></button>',
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

