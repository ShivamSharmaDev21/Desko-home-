jQuery(function($) {
    /* -----------------------------------------
    Preloader
    ----------------------------------------- */
    $('#preloader').delay(1000).fadeOut();
    $('#loader').delay(1000).fadeOut("slow");

    /*--------------------------------------------------------------
    # Navigation menu responsive
    --------------------------------------------------------------*/
    $(document).ready(function(){
        var menuToggle = $(".menu-toggle");
        var navigationContainer = $(".main-navigation .navigation-container-wrapper");
        var htmlElement = $('html');
        var isMenuOpen = false;

        menuToggle.click(function() {
            navigationContainer.slideToggle("slow", function() {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    htmlElement.css('overflow', 'hidden');
                } else {
                    htmlElement.css('overflow', 'unset');
                }
            });
        });
    });
    $(document).ready(function() {
        // Set focus on menu-toggle after last menu item loses focus
        var lastMenuItem = $('.main-navigation').find("li").last();
        lastMenuItem.find('a').on('blur', function() {
            $('#masthead .menu-toggle').focus();
        });

        // Handle Shift+Tab focus behavior on menu-toggle
        var primary_menu_toggle = $('#masthead .menu-toggle');
        primary_menu_toggle.on('keydown', function(e) {
            var tabKey = e.keyCode === 9;
            var shiftKey = e.shiftKey;

            if (primary_menu_toggle.hasClass('open')) {
                if (shiftKey && tabKey) {
                    e.preventDefault();
                    $('.main-navigation .navigation-container-wrapper').toggleClass('toggled');
                    primary_menu_toggle.removeClass('open');
                }
            }
        });
    });

    $(window).on('load resize', function() {
        $(document).ready(function() {
            var divHeight = $('.adore-header').outerHeight();
            $('.main-navigation').css('--padding-top-height', divHeight + 'px');
        });
    });

    /*--------------------------------------------------------------
    # Navigation Search
    --------------------------------------------------------------*/
    var searchWrap = $('.navigation-search-wrap');
    $(".navigation-search-icon").click(function(e) {
        e.preventDefault();
        searchWrap.toggleClass("show");
        searchWrap.find('input.search-field').focus();
    });
    $(document).click(function(e) {
        if (!searchWrap.is(e.target) && !searchWrap.has(e.target).length) {
            $(".navigation-search-wrap").removeClass("show");
        }
    });

    $('.navigation-search-wrap').find(".search-submit").bind('keydown', function(e) {
        var tabKey = e.keyCode === 9;
        if (tabKey) {
            e.preventDefault();
            $('.navigation-search-icon').focus();
        }
    });

    $('.navigation-search-icon').on('keydown', function(e) {
        var tabKey = e.keyCode === 9;
        var shiftKey = e.shiftKey;
        if ($('.navigation-search-wrap').hasClass('show')) {
            if (shiftKey && tabKey) {
                e.preventDefault();
                $('.navigation-search-wrap').removeClass('show');
                $('.navigation-search-icon').focus();
            }
        }
    });

    /* -----------------------------------------
    Masonry
    ----------------------------------------- */
    $('.grid-layout').masonry({
    // options
        itemSelector: 'article',
    });

    /* -----------------------------------------
    Scroll Top
    ----------------------------------------- */
    var scrollToTopBtn = $('.cheerful-blog-scroll-to-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 400) {
            scrollToTopBtn.addClass('show');
        } else {
            scrollToTopBtn.removeClass('show');
        }
    });

    scrollToTopBtn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

});