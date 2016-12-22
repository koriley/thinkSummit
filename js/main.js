//methods to be moved to seperate js file for cleanliness.

function gotoPage(nextPage, currentPage) {
    jQuery(".realYellowBar").removeClass('yellowStick').addClass('yellowUnStick');
    jQuery('.' + nextPage).scrollTop(0);
    //  jQuery('.'+nextPage).css({'position':'initial'});
    var screenWidth = jQuery(window).width();
    var screenHeight = jQuery(window).height();
    if (currentPage === nextPage) {
        nextPage = 'mother';
    }
    ////console.log("."+nextPage);
    // jQuery("." + currentPage).toggle("slide", {
    //     easing: "linear",
    //     direction: "left"
    //
    // }, 500);
    jQuery('.' + nextPage).css({
        'right': '0px'
    });
    jQuery('.' + nextPage).toggle("slide", {
        easing: "linear",
        direction: "right"

    }, 300);




    // jQuery("." + nextPage).show("slow", function() {
    //     jQuery().animate({
    //         left: 0
    //     }, "slow");
    //     //console.log("ran next page");
    // });



    jQuery("." + currentPage).animate({
        right: screenWidth
    }, "slow", function() {
        ////console.log("ran current page");
        jQuery(this).hide();
    });




    //jQuery('.'+currentPage).fadeToggle("slow");

    jQuery('.catch').css({
        'height': '0px'
    });


    var ybaroffset = jQuery("." + nextPage).find(".yellowBar").offset().top;
    jQuery("." + nextPage).scroll(function() {

        ybaroffset = jQuery("." + nextPage).find(".catch").offset().top;

        if (ybaroffset < 0) {

            jQuery(".realYellowBar").removeClass('yellowUnStick').addClass('yellowStick');

            jQuery('.homeButton').attr('src', 'img/arrowiconWhite.png');
        } else if (ybaroffset > 0) {

            jQuery(".realYellowBar").removeClass('yellowStick').addClass('yellowUnStick');

            jQuery('.homeButton').attr('src', 'img/arrowiconYellow.png');
        }
    });

    yellowImage = jQuery('.' + nextPage).find('.yellowBar').html();
    escapeMe = jQuery('.' + nextPage).find('.escape').html();
    jQuery('.realYellowBar').html(yellowImage).append('<div class="escape2" name="' + nextPage + '">' + escapeMe + '</div>');

}


function escapeHome(page) {
    //this method activates when the user wants to go home.
    jQuery('.' + page).scrollTop(0);
    jQuery('.mother').css({
        'left': '0px'
    });

    jQuery('.mother').toggle("slide", {
        easing: "linear",
        direction: "left"

    }, 300);
    //jQuery('.mother').css({'position':'inherit'});
    //console.log(num);
    jQuery("." + page).toggle("slide", {
        easing: "linear",
        direction: "right"

    }, 300);
    if (jQuery(".realYellowBar").hasClass('yellowStick')) {
        jQuery(".realYellowBar").removeClass('yellowStick').addClass('yellowUnStick');
    }
}

function doOnOrientationChange() {
    //found on the web, this detects if the mobile device is turned
    switch (window.orientation) {
        case -90:
        case 90:
            //alert('tlandscape');
            jQuery('.blackOut').show();
            break;
        default:
            //alert('tportrait');
            jQuery('.blackOut').hide();
            break;
    }
}

//handling orientation change
window.addEventListener('orientationchange', doOnOrientationChange);
doOnOrientationChange();


//addToHomescreen.removeSession();
addToHomescreen({
    maxDisplayCount: 1,
    mandatory: false
});

var screenWidth = jQuery(document).width();
var screenHeight = jQuery(document).height();

//alert(screenWidth);
var yellowImage;
var escapeMe;
var i = 0;
var k = 0;
var yellowPage = undefined;
var t = 0;
var linkPage = undefined;

////console.log(screenHeight);

//set all the pages to the screen height.
var page;
jQuery(".page").each(function() {
    jQuery(this).css({
        'height': screenHeight + 'px', 'width':screenWidth+'px'
    });
});

//build the mother page(home page) so it sets a size presidence.
jQuery(".mother").css({
    'background-size': screenWidth + 'px ' + screenHeight + 'px',
    'width': screenWidth + 'px',
    'height': screenHeight + 'px'

});

//change how the home button looks, because I was too lazy to do a find and replace and it seemed to be changing a lot.
jQuery('.homeButton').attr('src', 'img/arrowiconYellow.png');

//handler for when a user clicks on a link on the home page
jQuery('.link').on('touchstart, click', function() {

    page = jQuery(this).attr('name');
    console.log(t);
    if (linkPage != page) {
        t = 0;
    }
    if (t === 0) {
        gotoPage(page, "mother");
        t = 1;
        linkPage = page;
    } else {
        t = 0;
    }
});

//handler for when a user clicks home on the sticky bar.
jQuery('.realYellowBar').on('touchstart click', function() {

    page = jQuery(this).find(".escape2").attr('name');
    if (yellowPage != page) {
        k = 0;
    }
    if (k === 0) {
        escapeHome(page);
        k += 1;
        yellowPage = page;
    } else {
        k = 0;
    }
    //console.log(yellowPage);
});

//hander for when user clicks homebutton.
jQuery('.escape').unbind();
jQuery('.escape').on("touchstart click", function(event) {
    if (i === 0) {
        page = jQuery(this).attr('name');
        escapeHome(page);
        i += 1;
        t = 0;
    } else {
        i = 0;
    }
    //console.log(i);


});



//handler for when user swipes right
jQuery(".page").on("swiperight", function() {
    page = jQuery(this).attr('class').split(" ")[0];
    escapeHome(page);
    t = 0;
});

//handler for when a user swipes left
jQuery(".page").on("swipeleft", function() {
    var nextPage = jQuery(this).attr("data-next");
    var currentPage = jQuery(this).attr('class').split(" ")[0];
    gotoPage(nextPage, currentPage);
    t = 0;
});

//handler for when  user touches a speaker
jQuery('.speaker').on('touchstart', function() {
    jQuery(this).find('.speakerName').toggle("slide", {
        easing: "swing",
        direction: "right"

    });

});


//this is bootstrap modal stuff and also the button to launch to the tix site
jQuery('.ticketModel').on('touchstart click', function() {
    jQuery('#ticketModel').modal({
        backdrop: false
    });
});
// jQuery('.priButton').on('touchstart click', function() {
//     //console.log('click');
//
//     var link = document.getElementById('tixLink'),
//         event = document.createEvent('HTMLEvents');
//
//     event.initEvent('click', true, true);
//     link.dispatchEvent(event);
//
// });
