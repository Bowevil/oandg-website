/**
 * Created by Michael on 5/6/15.
 */
(function ($) {

    Drupal.behaviors.bootstrap_subtheme_oandg = {

        attach: function (context, settings) {

                jQuery(".form-type-bef-checkbox").addClass("col-md-4");
                jQuery( ".page-division.page-division-mason-division div.region" ).removeClass( "well" );
                //jQuery(".region-sidebar-first").attr('id', 'slide-panel');
                jQuery(".expanded.dropdown").attr('id', 'openandmove');
                //jQuery(".expanded.dropdown").addClass('shrink');
                //jQuery(".region-sidebar-first").addClass('shrink');
               jQuery(".dropdown-menu").addClass("mason-dropdown");
                jQuery(".block-title").addClass("mason-block-title");
                //jQuery(".menu.nav").addClass("mason-menu-nav").attr('id', 'slide-panel');
                //jQuery(".dropdown-toggle").addClass('slide-panel');
            // end our js code
                jQuery(".expanded.dropdown").hover(function() {
                    //jQuery(this).next(".toggle-text").toggle("fast", "linear");
                    jQuery(".region-sidebar-first").toggleClass("shrink");
                });            
            
            
  }       
    };})(jQuery);
