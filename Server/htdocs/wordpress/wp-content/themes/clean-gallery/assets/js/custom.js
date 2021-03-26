jQuery(document).ready(function($) {

    if(clean_gallery_ajax_object.primary_menu_active){

    if(clean_gallery_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var clean_gallery_sticky_navtop = $('.clean-gallery-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var clean_gallery_sticky_nav = function(){
        var clean_gallery_scroll_top = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(clean_gallery_ajax_object.sticky_menu_mobile){
            if (clean_gallery_scroll_top > clean_gallery_sticky_navtop) {
                $('.clean-gallery-primary-menu-container').addClass('clean-gallery-fixed');
            } else {
                $('.clean-gallery-primary-menu-container').removeClass('clean-gallery-fixed');
            }
        } else {
            if(window.innerWidth > 1206) {
                if (clean_gallery_scroll_top > clean_gallery_sticky_navtop) {
                    $('.clean-gallery-primary-menu-container').addClass('clean-gallery-fixed');
                } else {
                    $('.clean-gallery-primary-menu-container').removeClass('clean-gallery-fixed'); 
                }
            }
        }
    };

    clean_gallery_sticky_nav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        clean_gallery_sticky_nav();
    });
    }

    $(".clean-gallery-nav-primary .clean-gallery-primary-nav-menu").addClass("clean-gallery-primary-responsive-menu");

    $(".clean-gallery-primary-responsive-menu-icon").click(function(){
        $(this).next(".clean-gallery-nav-primary .clean-gallery-primary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1206) {
            $(".clean-gallery-nav-primary .clean-gallery-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".clean-gallery-primary-responsive-menu > li").removeClass("clean-gallery-primary-menu-open");
        }
    });

    $(".clean-gallery-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('clean-gallery-submenu-toggle').parent().toggleClass("clean-gallery-primary-menu-open");
        $(this).find(".children:first").toggleClass('clean-gallery-submenu-toggle').parent().toggleClass("clean-gallery-primary-menu-open");
    });

    $("div.clean-gallery-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('clean-gallery-submenu-toggle').parent().toggleClass("clean-gallery-primary-menu-open");
    });

    }

    if(clean_gallery_ajax_object.backtotop_active){
    var scrollButtonEl = $( '.clean-gallery-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.clean-gallery-scroll-top' ).fadeOut();
        } else {
            $( '.clean-gallery-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );
    }

    $(".clean-gallery-social-icon-search").on('click', function (e) {
        e.preventDefault();
        $('.social-search-box').slideToggle(400);
    });

    $(".entry-content").fitVids();

    if(clean_gallery_ajax_object.sticky_sidebar_active){
    $(".clean-gallery-sitemain-wrapper, .clean-gallery-sidebar-wrapper").theiaStickySidebar({
      // Settings
      containerSelector: ".clean-gallery-site-content-inside",
      additionalMarginTop: 0,
      additionalMarginBottom: 0,
      minWidth: 1206,
    });
    }

    $(".clean-gallery-postbox-content").attr("tabindex",0);

});