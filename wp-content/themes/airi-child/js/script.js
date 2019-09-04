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


    var today = new Date().toLocaleDateString('en', {weekday:'short'});
    var listItems = jQuery("#opening li");
    listItems.each(function(idx, li) {
        //console.log(jQuery(li).text() + ':' + jQuery(li).text().indexOf(today));
        if (jQuery(li).text().indexOf(today) == 0) {
            jQuery(li).addClass("open");
        }
    });

});

