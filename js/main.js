addToHomescreen.removeSession();
addToHomescreen({
    maxDisplayCount: 0,
    mandatory: false
});

var screenWidth = jQuery(window).width();
var screenHeight = jQuery(window).height();

jQuery(document).ready(function() {
    var yellowImage;
    var escapeMe;
    jQuery('.ticketIframe').css({
        'height': screenHeight + 'px'
    });
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

    jQuery('.homeButton').attr('src', 'img/arrowiconYellow.png');
    jQuery('.link').on('touchestart, click', function() {

        page = jQuery(this).attr('name');

        jQuery('.' + page).scrollTop(0);
        jQuery('.mother').fadeToggle("slow");
        //console.log("."+page);
        jQuery("." + page).toggle("slide", {
            easing: "swing",
            direction: "right"

        }, 500);

        // jQuery(".yellowBar").css({
        //     'position': 'relative'
        // });

        jQuery('.catch').css({
            'height': '0px'
        });


        var ybaroffset = jQuery("." + page).find(".yellowBar").offset().top;
        jQuery("." + page).scroll(function() {

            ybaroffset = jQuery("." + page).find(".catch").offset().top;
            //  console.log(ybaroffset);
            if (ybaroffset < 0) {
                // jQuery(".yellowBar").css({
                //     'position': 'fixed',
                //     'top': '0',
                //     'left': '0',
                //     'right': '0'
                // });
                jQuery(".realYellowBar").removeClass('yellowUnStick').addClass('yellowStick');
                // jQuery('.catch').css({
                //     'height': '55px'
                // });
                jQuery('.homeButton').attr('src', 'img/arrowiconWhite.png');
            } else if (ybaroffset > 0) {
                // jQuery(".yellowBar").css({
                //     'position': 'relative'
                // });
                jQuery(".realYellowBar").removeClass('yellowStick').addClass('yellowUnStick');
                // jQuery('.catch').css({
                //     'height': '0px'
                // });
                jQuery('.homeButton').attr('src', 'img/arrowiconYellow.png');
            }
        });

        yellowImage = jQuery('.' + page).find('.yellowBar').html();
        escapeMe = jQuery('.' + page).find('.escape').html();
        jQuery('.realYellowBar').html(yellowImage).append('<div class="escape2 link2" name="' + page + '">' + escapeMe + '</div>');

        //jQuery('.mother').toggle();
    });

    jQuery('.realYellowBar').on('touchstart click', function() {
        page = jQuery(this).find(".escape2").attr('name');
        jQuery(".realYellowBar").removeClass('yellowStick').addClass('yellowUnStick');
        jQuery('.homeButton').attr('src', 'img/arrowiconYellow.png');
        jQuery('.' + page).find('.link').trigger("click");
    });



    //  alert(page);
    //console.log(page);
    jQuery(".page").on("swiperight", function() {
        //alert("here!");
        jQuery(".realYellowBar").removeClass('yellowStick').addClass('yellowUnStick');
        jQuery(this).find('.link').trigger("click");
    });


    jQuery('.speaker').on('touchstart', function() {
        jQuery(this).find('.speakerName').toggle("slide", {
            easing: "swing",
            direction: "right"

        });
    });




});
