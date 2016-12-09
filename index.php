<?php
header("Cache-Control: max-age=0, no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
//header('Content-type: text/cache-manifest');
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">

        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">



        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/addtohomescreen.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css?v=<?PHP echo(rand(1,1000));?>">


        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body>
        <div class="blackOut" style="">This app is made for portrait mode.</div>
        <div class="yellowUnStick realYellowBar"></div>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <div class="mother">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <img src="img/ThinkSummitLogoBlack.png" />
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="menuItems" >
                        <div class="link" name="details" style="width:100%"><img src="img/DETAILSbutton.png" /></div>
                        <div class="link" name="agenda" style="width:100%"><img src="img/AGENDAbutton.png" /></div>
                        <div class="link" name="speakers" style="width:100%"><img src="img/SPEAKERSbutton.png" /></div>
                        <div class="ticketModel" style="width:100%" ><img src="img/TICKETStext.png" /></div>
                        <div class="link" name="sponsoring" style="width:100%"><img src="img/SPONSORSbutton.png" /></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="footContent">
                        #417THINKSUMMIT<br/> january 13<br/> springfield art museum

                    </div>
                </div>
            </div>
        </div>
        <div class="details page"  data-next="agenda" style="">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <img src="img/DETAILsphoto.png" />
                        <div class="logo">
                            <img src="img/ThinkSummitLogoBlack.png" />
                        </div>
                        <div class="escape" name="details">
                            <img class="homeButton" src="img/hamburgerWhite.png" />
                        </div>
                        <div class="row">
                            <div class="catch"></div>

                            <div class="yellowBar">
                                <img src="img/DETAILSbutton.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="detailMother">
                        <ul class="detailList">
                            <li>SAM address </li>
                            <li>WIFI password</li>
                            <li>facebook</li>
                            <li>twitter</li>
                            <li>#417Thinksummit</li>
                            <li>SAM address </li>
                            <li>WIFI password</li>
                            <li>facebook</li>
                            <li>twitter</li>
                            <li>#417Thinksummit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="agenda page" data-next="speakers" style="">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <img src="img/AGENDAphoto2.png" />
                        <div class="logo">
                            <img src="img/ThinkSummitLogoBlack.png" />
                        </div>
                        <div class="escape" name="agenda">
                            <img class="homeButton" src="img/hamburgerBlack.png" />
                        </div>
                        <div class="row">
                            <div class="catch"></div>
                            <div class="yellowBar">
                                <img src="img/AGENDAbutton.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agendaMother">
                        <div class="inner"></div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">7:30 A.M. POWER BREAKFAST</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">Arrive early and fuel your mind for back-to-back talks with breakfast provided by Simply Delicious. Get a head start on shaking hands and sharing ideas with fellow early birds.&nbsp;</div>
                            </div>
                        </div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">8 A.M.-4:30 P.M. PEOPLE CENTRIC'S THINK TANK</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">We pack 15 talks from 417-land's biggest thinkers into one dynamic day. Grooms Office Environments sets the stage with innovative spaces.</div>
                            </div>
                        </div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">ALL DAY: INTERACTIVE LIVING ROOM</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">There's no place like home, especially when it's protected by Atlas Security. Get cozy on a couch and talk with the team from Atlas-all without missing a single moment of the big event, because it'll be coming at you via live feed.</div>
                            </div>
                        </div>


                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">ALL DAY: CONVERSATION HALL</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">Brought to you by OTC Workforce Development and Essential Strategies, this area is the hot spot to meet and greet with our speakers. This is what today&rsquo;s all about: starting a conversation about how we can take what we learn today and move our region forward.</div>
                            </div>
                        </div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">ALL DAY: INTERACTIVE LOUNGE</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">We know you&rsquo;re busy. Take your time to reply to emails or catch a conference call without missing out on what&rsquo;s happening in the People Centric Think Tank. We&rsquo;re simulcasting the event here in partnership with MSU College of Business.</div>
                            </div>
                        </div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">ALL DAY: RECHARGING STATION</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">Need more power? Recharge your phone, tablet and mind at PaperWise&rsquo;s Recharging Station. The experts here can help make recommendations for recharging your business&rsquo;s process and workflow. Plug in here.</div>
                            </div>
                        </div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">ALL DAY: #417THINKSUMMIT SOCIAL WALL</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">Engage with the conversation, and see your tweets on the big screen at the #417ThinkSummit Social Wall. We&rsquo;re live tweeting the event and sharing photos all day long. So set your social to public and include the hashtag to be part of it!</div>
                            </div>
                        </div>
                        <div class="agendaEvent">
                            <div class="agendaMarker inline">&nbsp;</div>
                            <div class="time inline">4:30 P.M. DRINK SUMMIT HAPPY HOUR</div>
                            <div class="agendaDesc inline">
                                <div class="eventTitle">Mingle with the city&#39;s biggest minds and grow an action plan with others from the ideas discussed during the day. Over drinks and delicious&nbsp;appetizers from Simply Delicious, of course.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="speakers page" data-next="sponsoring" style="">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <img src="img/SPEAKERSphoto.png" />
                        <div class="logo">
                            <img src="img/ThinkSummitLogoWhite.png" />
                        </div>
                        <div class="escape" name="speakers">
                            <img class="homeButton" src="img/hamburgerWhite.png" />
                        </div>
                        <div class="row">
                            <div class="catch"></div>
                            <div class="yellowBar">
                                <img src="img/SPEAKERSbutton.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="speakerProfiles" style=" ">
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/kayLogsdon.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">KAY LOGSDON</div>
                                            <div class="speakerCompany">CultureWaves</div>
                                            <div class="speakerDesc">Here comes Gen Z: 417-land&#39;s Culturewaves looks into the future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/lockeHilderbrand.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">LOCKE HILDERBRAND</div>
                                            <div class="speakerCompany">CultureWaves</div>
                                            <div class="speakerDesc">Here comes Gen Z: 417-land&#39;s Culturewaves looks into the future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/laurelMckean.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">LAUREL MCKEAN</div>
                                            <div class="speakerCompany">MoDOT</div>
                                            <div class="speakerDesc">Solar Powered Highways: The new frontier for Route 66</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/errinKemper.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">ERRIN KEMPER</div>
                                            <div class="speakerCompany">City of Springfield</div>
                                            <div class="speakerDesc">Creating a Connective City of the Future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/gregBurris.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">GREG BURRIS</div>
                                            <div class="speakerCompany">City of Springfield</div>
                                            <div class="speakerDesc">Creating a Connective City of the Future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/johnJungmann.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">DR. JOHN JUNGMANN</div>

                                            <div class="speakerCompany">Springfield Public Schools</div>

                                            <div class="speakerDesc">The Public Education Revolution</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/stephenKleinsmith.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">DR. STEPHEN KLEINSMITH</div>

                                            <div class="speakerCompany">Nixa Public Schools</div>

                                            <div class="speakerDesc">The Public Education Revolution</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/kurtMedlin.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">DR. KENT MEDLIN</div>

                                            <div class="speakerCompany">Willard Public Schools</div>

                                            <div class="speakerDesc">The Public Education Revolution</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/AmyBlansit400.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">AMY BLANSIT</div>

                                            <div class="speakerCompany">Drew Lewis Foundation</div>

                                            <div class="speakerDesc">How One Woman Brought Hope to a Forgotten Neighborhood</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/siphiweBaleka.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">SIPHIWE BALEKA</div>

                                            <div class="speakerCompany">Fitness Trucking</div>

                                            <div class="speakerDesc">Fit in 4 Minutes a Day: The fast lane to healthy living</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/TomBlair.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">TOM BLAIR</div>

                                            <div class="speakerCompany">MoDOT</div>

                                            <div class="speakerDesc">The Internet of Everything: A mind-blowing glimpse into a more convenient, connected life</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/jeffNene.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">JEFF NENE</div>

                                            <div class="speakerCompany">Convoy of Hope</div>

                                            <div class="speakerDesc">Can Convoy of Hope Save the World?</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/patrickMureithi.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">PATRICK MUREITHI</div>

                                            <div class="speakerCompany">Filmmaker, Speaker, Musician</div>

                                            <div class="speakerDesc">Stop the Noise: Wellness through music and stories</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/phillipWright.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">PHILLIP WRIGHT</div>

                                            <div class="speakerCompany">The Venues</div>

                                            <div class="speakerDesc">God, Gays and the Law: Can we disagree and still get to heaven?</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img" style=""><img alt="" src="img/speakerheadshots/deeWampler.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">DEE WAMPLER</div>

                                            <div class="speakerCompany">Attorney</div>

                                            <div class="speakerDesc">God, Gays and the Law: Can we disagree and still get to heaven?</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/alexEaton.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">ALEX EATON</div>

                                            <div class="speakerCompany">Catalyst</div>

                                            <div class="speakerDesc">Uber-Positive: How ride-sharing could transform our city</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/andyHung.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">ANDY HUNG</div>

                                            <div class="speakerCompany">Uber Technologies, Inc.</div>

                                            <div class="speakerDesc">Uber-Positive: How ride-sharing could transform our city</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/randyBacon.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">RANDY BACON</div>

                                            <div class="speakerCompany">7 Billion Ones</div>

                                            <div class="speakerDesc">Inside a Movement</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/JohnSellars.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">JOHN SELLARS</div>

                                            <div class="speakerCompany">History Museum on the Square</div>

                                            <div class="speakerDesc">Lessons From Our Past That Could Shape Our Future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/louiseHarrison.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">LOUISE HARRISON</div>

                                            <div class="speakerCompany">Liverpool&nbsp;Legends</div>

                                            <div class="speakerDesc">My Kid Brother&#39;s Band: George Harrison&#39;s Sister on growing up&nbsp;with a Beatle</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker">
                                <div class="img"><img alt="" src="img/speakerheadshots/bobZiehmer.png" />
                                    <div class="speakerName">
                                        <div class="innerText">
                                            <div class="theSpeakerName">BOB ZIEHMER</div>

                                            <div class="speakerCompany">Bass Pro Shops</div>

                                            <div class="speakerDesc">The Economic Impact of Bass Pro&#39;s Conservation&nbsp;Mission</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sponsoring page" data-next="details" style="">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <img src="img/SPONSORSphoto2.png" />
                        <div class="logo">
                            <img src="img/ThinkSummitLogoBlack.png" />
                        </div>
                        <div class="escape" name="sponsoring">
                            <img class="homeButton" src="img/hamburgerBlack.png" />
                        </div>
                        <div class="row">

                            <div class="catch"></div>
                            <div class="yellowBar">
                                <img src="img/SPONSORSbutton.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="presentedBy" style="text-align: center;">
                        <div class="presentedByText inline">PRESENTED BY</div>
                        <div class="presentedByImg inline">
                            <a href="https://www.peopleccg.com/" target="_blank"><img src="img/ThinkSummit16-microsite-PCCG.png" /></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sponsors" style="text-align: center;">
                        <div class="sponsorsHosted inline">
                            <div class="hostedText inline">HOSTED BY</div>
                            <div class="hostedImg inline">
                                <a href="http://www.sgfmuseum.org/" target="_blank"><img src="img/ThinkSummit16-microsite-art-museum.png" /></a>
                            </div>
                        </div>
                        <div class="sponsorsNormal inline">
                            <div class="sponsorText inline">SPONSORED BY</div>
                            <div class="sponsorImg inline">
                                <a href="https://business.missouristate.edu/" target="_blank"><img src="img/ThinkSummit16-microsite-MSU.png" /></a>
                            </div>
                            <div class="sponsorImg inline">
                                <a href="http://www.groomsinc.com/" target="_blank"><img src="img/ThinkSummit16-microsite-grooms.png" /></a>
                            </div>
                            <div class="sponsorImg inline">
                                <a href="http://one.paperwise.com/" target="_blank"><img src="img/ThinkSummit16-microsite-paperwise.png" /></a>
                            </div>
                            <div class="sponsorImg inline">
                                <a href="http://atlassecurity.com/" target="_blank"><img src="img/ThinkSummit16-microsite-atlas.png" /></a>
                            </div>
                            <div class="sponsorImg inline">
                                <a href="http://www.esstrat.com/contact-us.html" target="_blank"><img src="img/ThinkSummit16-microsite-essential-strategies.png" /></a>
                            </div>
                            <div class="sponsorImg inline">
                                <a href="https://workforce.otc.edu/" target="_blank"><img src="img/ThinkSummit16-microsite-workforce-OTC.png" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade tix" tabindex="-1" role="dialog" id="ticketModel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        This will open a new browser window to 417tix.com where you can purchas tickets to this event and many others in 417-land.
                        The Think Summit app will still be running in the background so you can quickly get back.<br/><br/>

                        If you don't wish to leave the app, click close and no one will ever know; or will we? muhahahaha
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="closeButton" data-dismiss="modal">Close</button>
                        <button type="button" class="priButton">Take me to 417tix.com</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="openBrowser"><a class="tixLink" id="tixLink" href="https://417tix.com/events/biz-417-s-think-summit-presented-by-people-centric-consulting-group" target="_blank"></a></div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/addtohomescreen.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.min.js??v=<?PHP echo(rand(1,1000));?>"></script>
        <script>




            
            // Initial execution if needed

            if (screenWidth >= 750) {
                //window.location.replace("http://www.biz417.com/Think-Summit/index.php");
            }
            //this is a script I found on the internet to stop zooming
            //Apple, in iOS10, has decided to ignore 'user-scalable=no'
            // document.documentElement.addEventListener('touchstart', function(event) {
            //     if (event.touches.length > 1) {
            //         event.preventDefault();
            //     }
            // }, false);
            //
            // var lastTouchEnd = 0;
            // document.documentElement.addEventListener('touchend', function(event) {
            //     var now = (new Date()).getTime();
            //     if (now - lastTouchEnd <= 300) {
            //         event.preventDefault();
            //     }
            //     lastTouchEnd = now;
            // }, false);
        </script>

    </body>

</html>
