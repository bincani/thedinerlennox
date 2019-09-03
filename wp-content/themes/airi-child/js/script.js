/**
*/
jQuery(document).ready(function() {

    jQuery("ul.sub-menu").css('display', 'block');
    jQuery(".subnav-toggle").css('display', 'none');

    //jQuery(".subnav-toggle").slideToggle();

    // prevent the menu nav going anywhere
    jQuery("#menu-item-487 > a").click(function(e) {
        e.preventDefault();
    });
});
