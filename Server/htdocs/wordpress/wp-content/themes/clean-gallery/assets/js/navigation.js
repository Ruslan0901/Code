/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var clean_gallery_primary_container, clean_gallery_primary_button, clean_gallery_primary_menu, clean_gallery_primary_links, clean_gallery_primary_i, clean_gallery_primary_len;

    clean_gallery_primary_container = document.getElementById( 'clean-gallery-primary-navigation' );
    if ( ! clean_gallery_primary_container ) {
        return;
    }

    clean_gallery_primary_button = clean_gallery_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof clean_gallery_primary_button ) {
        return;
    }

    clean_gallery_primary_menu = clean_gallery_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof clean_gallery_primary_menu ) {
        clean_gallery_primary_button.style.display = 'none';
        return;
    }

    clean_gallery_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === clean_gallery_primary_menu.className.indexOf( 'nav-menu' ) ) {
        clean_gallery_primary_menu.className += ' nav-menu';
    }

    clean_gallery_primary_button.onclick = function() {
        if ( -1 !== clean_gallery_primary_container.className.indexOf( 'clean-gallery-toggled' ) ) {
            clean_gallery_primary_container.className = clean_gallery_primary_container.className.replace( ' clean-gallery-toggled', '' );
            clean_gallery_primary_button.setAttribute( 'aria-expanded', 'false' );
            clean_gallery_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            clean_gallery_primary_container.className += ' clean-gallery-toggled';
            clean_gallery_primary_button.setAttribute( 'aria-expanded', 'true' );
            clean_gallery_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    clean_gallery_primary_links    = clean_gallery_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( clean_gallery_primary_i = 0, clean_gallery_primary_len = clean_gallery_primary_links.length; clean_gallery_primary_i < clean_gallery_primary_len; clean_gallery_primary_i++ ) {
        clean_gallery_primary_links[clean_gallery_primary_i].addEventListener( 'focus', clean_gallery_primary_toggleFocus, true );
        clean_gallery_primary_links[clean_gallery_primary_i].addEventListener( 'blur', clean_gallery_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function clean_gallery_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'clean-gallery-focus' ) ) {
                    self.className = self.className.replace( ' clean-gallery-focus', '' );
                } else {
                    self.className += ' clean-gallery-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( clean_gallery_primary_container ) {
        var touchStartFn, clean_gallery_primary_i,
            parentLink = clean_gallery_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, clean_gallery_primary_i;

                if ( ! menuItem.classList.contains( 'clean-gallery-focus' ) ) {
                    e.preventDefault();
                    for ( clean_gallery_primary_i = 0; clean_gallery_primary_i < menuItem.parentNode.children.length; ++clean_gallery_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[clean_gallery_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[clean_gallery_primary_i].classList.remove( 'clean-gallery-focus' );
                    }
                    menuItem.classList.add( 'clean-gallery-focus' );
                } else {
                    menuItem.classList.remove( 'clean-gallery-focus' );
                }
            };

            for ( clean_gallery_primary_i = 0; clean_gallery_primary_i < parentLink.length; ++clean_gallery_primary_i ) {
                parentLink[clean_gallery_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( clean_gallery_primary_container ) );
} )();