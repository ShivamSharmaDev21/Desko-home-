(function ($) {
    "use strict"; $('.fadeInOnLoad').css('opacity', 0); $('#loading').on('click', function () { $("#loading").fadeOut(); }); $(window).load(function () { $("#loading").fadeOut(); $("#loading .object").delay(700).fadeOut("slow"); $('.fadeInOnLoad').delay(700).fadeTo("slow", 1); bodyScrollAnimation() })
    function bodyScrollAnimation() { var scrollAnimate = $('body').data('scroll-animation'); if (scrollAnimate === true) { new WOW({ mobile: false }).init() } }
    $('body').scrollspy({ target: '#main-navbar', offset: 100 }); $('nav a[href^="#"]:not([href="#"]), .back_to_top, .explore').on('click', function (event) { var $anchor = $(this); $('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top - 70 }, 1500); event.preventDefault(); }); $(window).scroll(function () { var scroll = $(window).scrollTop(); if (scroll >= 99) { $(".navbar-default").addClass("is-scrolling"); } else { $(".navbar-default").removeClass("is-scrolling"); } }); $(window).scroll(function () { if ($(window).scrollTop() > 1000) { $('.back_to_top').fadeIn('slow'); } else { $('.back_to_top').fadeOut('slow'); } }); if ($('#BGVideo').length) { $("#BGVideo").mb_YTPlayer(); }
    if ($('.video').length) {
        $('.video').magnificPopup({
            type: 'iframe', iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>', patterns: { youtube: { index: 'youtube.com/', id: 'v=', src: '//www.youtube.com/embed/%id%?autoplay=1' }, vimeo: { index: 'vimeo.com/', id: '/', src: '//player.vimeo.com/video/%id%?autoplay=1' }, gmaps: { index: '//maps.google.', src: '%id%&output=embed' } }, srcAction: 'iframe_src',
            }
        });
    }
    if ($('a[href="#product-choose"]').length) { $('a[href="#product-choose"]').magnificPopup({ type: 'inline', mainClass: 'mfp-fade', midClick: true }); }
    $('.gallery').each(function () { $('.gallery').magnificPopup({ delegate: 'a', type: 'image', gallery: { enabled: true }, mainClass: 'mfp-fade' }); }); if ($('.quanity').length) { $('.quanity').TouchSpin({ verticalbuttons: true, verticalupclass: 'glyphicon glyphicon-plus', verticaldownclass: 'glyphicon glyphicon-minus' }); }
    if ($('.selectpicker').length) { $('.selectpicker').selectpicker(); }
    $('.feature-note .plus-icon .plus').on('click', function () { if ($(this).parents('.feature-note').hasClass('show-cont')) { $(this).parents('.feature-note').removeClass('show-cont') } else { $(this).parents('.feature-note').addClass('show-cont') } }); $('.flip-contact-box').on('click', function () { if (!$('.flip-box-container').hasClass('show-form')) { $('.flip-box-container').addClass('show-form') } }); $('.js-close-flip').on('click', function () { $('.flip-box-container').removeClass('show-form'); }); if ($.fn.validator) { $.validator.setDefaults({ highlight: function (element) { $(element).closest('.form-group').addClass('has-error'); }, unhighlight: function (element) { $(element).closest('.form-group').removeClass('has-error'); }, errorPlacement: function (error, element) { } }); }
    if ($.fn.validator) { $("#paypal-regn").validate({ rules: { first_name: "required", last_name: "required", email: { required: true, email: true }, os0: "required", quantity: "required", agree: "required" }, messages: { first_name: "Your first name", last_name: "Your last name", email: "We need your email address", os0: "Choose your Pass", quantity: "How many seats", agree: "Please accept our terms and privacy policy" }, submitHandler: function (form) { $("#reserve-btn").attr("disabled", true); form.submit(); } }); }
    var dataexitpopuop = $('body').data('exit-modal'); if ($('#exit-modal').length && dataexitpopuop === true) { var _ouibounce = ouibounce($('#exit-modal')[0], { aggressive: true, timer: 0, callback: function () { } }); $('body').on('click', function () { $('#exit-modal').hide(); }); $('#exit-modal .modal-footer').on('click', function () { $('#exit-modal').hide(); }); $('#exit-modal .exit-modal').on('click', function (e) { e.stopPropagation(); }); }
})(jQuery);



$('.products.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: ['<button type="button" class="owl-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg></button>', '<button type="button" class="owl-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/></svg></button>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true,
                    smartSpeed: 1000,
                    autoplay: true,
                    autoplayTimeout: 4000
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });


          $('.reviews.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/><svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>'],
            dots: false,
            autoplay: false,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true,
                    smartSpeed: 1000,
                    autoplay: true,
                    autoplayTimeout: 4000
                },
                576: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });





