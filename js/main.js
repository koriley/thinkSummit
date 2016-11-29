addToHomescreen.removeSession();
addToHomescreen({
    maxDisplayCount: 0,
    mandatory: false
});
var screenWidth = jQuery(window).width();
var screenHeight = jQuery(window).height();
//console.log(screenHeight);
var page;
jQuery(".page").each(function() {
    jQuery(this).css({
        'height': screenHeight + 'px'
    });
});
jQuery(".mother").css({
    'background-size': screenWidth + 'px ' + screenHeight + 'px',
    'width': screenWidth + 'px',
    'height': screenHeight + 'px'

});
jQuery('.homeButton').attr('src', 'img/homeiconYellow.png');
jQuery('.link').on('touchestart, click', function() {

    page = jQuery(this).attr('name');
    jQuery('.mother').fadeToggle("slow");
    //console.log("."+page);
    jQuery("." + page).toggle("slide", {
        easing: "swing",
        direction: "right"

    }, 500);
    //console.log(screenHeight);
    //console.log(page);

    // jQuery("." + page).css({
    //     'height': screenHeight + 'px !important'
    // });
    //
    // var localHeight = jQuery('.'+page).height();
    // //console.log('localHeight: '+localHeight);
    // //console.log(page+' height:'+ screenHeight + "px");


    jQuery(".yellowBar").css({
        'position': 'relative'
    });
    jQuery('.catch').css({
        'height': '0px'
    });

    var ybaroffset = jQuery("." + page).find(".yellowBar").offset().top;
    jQuery("." + page).scroll(function() {

        ybaroffset = jQuery("." + page).find(".catch").offset().top;
        //  console.log(ybaroffset);
        if (ybaroffset <= 0) {
            jQuery(".yellowBar").css({
                'position': 'fixed',
                'top': '0',
                'left': '0',
                'right': '0'
            });
            jQuery('.catch').css({
                'height': '55px'
            });
            jQuery('.homeButton').attr('src', 'img/homeiconBlack.png');
        } else if (ybaroffset >= 0) {
            jQuery(".yellowBar").css({
                'position': 'relative'
            });
            jQuery('.catch').css({
                'height': '0px'
            });
            jQuery('.homeButton').attr('src', 'img/homeiconYellow.png');
        }
    });

    //jQuery('.mother').toggle();
});
//  alert(page);

jQuery(".page").on("swiperight", function() {
    //alert("here!");
    jQuery(this).find('.link').trigger("click");
});


jQuery('.speaker').on('touchstart', function() {
    jQuery(this).find('.speakerName').toggle("slide", {
        easing: "swing",
        direction: "right"

    });
});
