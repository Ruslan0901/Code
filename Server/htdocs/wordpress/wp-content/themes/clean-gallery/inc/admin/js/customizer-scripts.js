jQuery( document ).ready( function( $ ) {

        var customizeInfo = $( "#customize-info" );

        if ( customizeInfo.length ) {
            customizeInfo.append( "<div class='customizer-proupgrade-wrap'></div>");
            var customizerUpgradeWrap = $(".customizer-proupgrade-wrap");

            var upgradeButton = $("<a />", {
                class:  "customizer-prolink customizer-proupgrade",
                target: "_blank",
                href :  "//themesdna.com/",
                text :  clean_gallery_customizerjs.visitus_text
            });

            var docButton = $("<a />", {
                class:  "customizer-prolink customizer-prodoc",
                target: "_blank",
                href :  "//themesdna.com/contact/",
                text :  clean_gallery_customizerjs.contactus_text
            });

            customizerUpgradeWrap.append( upgradeButton );
            customizerUpgradeWrap.append( docButton );
        }

} );