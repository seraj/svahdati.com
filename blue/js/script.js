$(document).ready(function () {

    $('.open-switcher').click(function () {

        if ($('.switcher').css('right') === '0px') {
            $('.switcher').css("right", "-60px");
        }
        else {
            $('.switcher').css("right", "0px");
        }
    });


    $(function () {
        $('#nav li a[href^=#]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var $target = $(this.hash);

                var linkto = $target.selector;
                $("#nav").find('a').removeClass('current');
                $("#nav").find('a[href="' + linkto + '"]').addClass('current');




                $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

                if ($target.length) {
                    var targetOffset = $target.offset().top;
                    $('html,body').animate({
                        scrollTop: targetOffset - 100
                    }, 1000);
                    return false;
                }
            }
        });
    });


    $(function () {
        $('.p-arrow a[href^=#]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var $target = $(this.hash);

                var linkto = $target.selector;
                $("#nav").find('a').removeClass('current');
                $("#nav").find('a[href="' + linkto + '"]').addClass('current');




                $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

                if ($target.length) {
                    var targetOffset = $target.offset().top;
                    $('html,body').animate({
                        scrollTop: targetOffset - 100
                    }, 1000);
                    return false;
                }
            }
        });
    });


    /*Smooth Scroll Function*/

    /*Work Process UL*/
    $(".div-workballs ul .li-item1").hover(

        function () {
            $(this).addClass("hovereffect");

            $(".div-workballs ul .li-item2").removeClass("hovereffect");
            $(".div-workballs ul .li-item3").removeClass("hovereffect");
            $(".div-workballs ul .li-item4").removeClass("hovereffect");
            $(".div-workballs ul .li-item5").removeClass("hovereffect");


            $(".div-workdesc.work-item1").show();

            $(".div-workdesc.work-item2").hide();
            $(".div-workdesc.work-item3").hide();
            $(".div-workdesc.work-item4").hide();
            $(".div-workdesc.work-item5").hide();
        });

    $(".div-workballs ul .li-item2").hover(

        function () {

            $(this).addClass("hovereffect");

            $(".div-workballs ul .li-item1").removeClass("hovereffect");
            $(".div-workballs ul .li-item3").removeClass("hovereffect");
            $(".div-workballs ul .li-item4").removeClass("hovereffect");
            $(".div-workballs ul .li-item5").removeClass("hovereffect");


            $(".div-workdesc.work-item2").show();

            $(".div-workdesc.work-item1").hide();
            $(".div-workdesc.work-item3").hide();
            $(".div-workdesc.work-item4").hide();
            $(".div-workdesc.work-item5").hide();

        });

    $(".div-workballs ul .li-item3").hover(

        function () {
            $(this).addClass("hovereffect");

            $(".div-workballs ul .li-item1").removeClass("hovereffect");
            $(".div-workballs ul .li-item2").removeClass("hovereffect");
            $(".div-workballs ul .li-item4").removeClass("hovereffect");
            $(".div-workballs ul .li-item5").removeClass("hovereffect");


            $(".div-workdesc.work-item3").show();

            $(".div-workdesc.work-item1").hide();
            $(".div-workdesc.work-item2").hide();
            $(".div-workdesc.work-item4").hide();
            $(".div-workdesc.work-item5").hide();

        });

    $(".div-workballs ul .li-item4").hover(

        function () {

            $(this).addClass("hovereffect");

            $(".div-workballs ul .li-item1").removeClass("hovereffect");
            $(".div-workballs ul .li-item2").removeClass("hovereffect");
            $(".div-workballs ul .li-item3").removeClass("hovereffect");
            $(".div-workballs ul .li-item5").removeClass("hovereffect");


            $(".div-workdesc.work-item4").show();

            $(".div-workdesc.work-item1").hide();
            $(".div-workdesc.work-item2").hide();
            $(".div-workdesc.work-item3").hide();
            $(".div-workdesc.work-item5").hide();

        });


    $(".div-workballs ul .li-item5").hover(

        function () {

            $(this).addClass("hovereffect");

            $(".div-workballs ul .li-item1").removeClass("hovereffect");
            $(".div-workballs ul .li-item2").removeClass("hovereffect");
            $(".div-workballs ul .li-item3").removeClass("hovereffect");
            $(".div-workballs ul .li-item4").removeClass("hovereffect");


            $(".div-workdesc.work-item5").show();

            $(".div-workdesc.work-item1").hide();
            $(".div-workdesc.work-item2").hide();
            $(".div-workdesc.work-item3").hide();
            $(".div-workdesc.work-item4").hide();

        });

    /*Work Process UL*/

    /*Portfoio filter*/

    $(document).ready(function () {

        // Blur images on mouse over
        $(".portfolio a").hover(function () {
            $(this).children("img").animate({
                opacity: 0.95
            }, "fast");
        }, function () {
            $(this).children("img").animate({
                opacity: 1.0
            }, "slow");
        });

        // Initialize prettyPhoto plugin
        $(".portfolio a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'light_square',
            autoplay_slideshow: false,
            overlay_gallery: false,
            show_title: false
        });

        // Clone portfolio items to get a second collection for Quicksand plugin
        var $portfolioClone = $(".portfolio").clone();

        // Attempt to call Quicksand on every click event handler
        $(".filter a").click(function (e) {

            $(".filter li").removeClass("current");

            // Get the class attribute value of the clicked link
            var $filterClass = $(this).parent().attr("class");

            if ($filterClass == "all") {
                var $filteredPortfolio = $portfolioClone.find("li");
            } else {
                var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
            }

            // Call quicksand
            $(".portfolio").quicksand($filteredPortfolio, {
                duration: 800,
                easing: 'easeInOutQuad'
            }, function () {

                // Blur newly cloned portfolio items on mouse over and apply prettyPhoto
                $(".portfolio a").hover(function () {
                    $(this).children("img").animate({
                        opacity: 0.95
                    }, "fast");
                }, function () {
                    $(this).children("img").animate({
                        opacity: 1.0
                    }, "slow");
                });

                $(".portfolio a[rel^='prettyPhoto']").prettyPhoto({
                    theme: 'light_square',
                    autoplay_slideshow: false,
                    overlay_gallery: false,
                    show_title: false
                });
            });


            $(this).parent().addClass("current");

            // Prevent the browser jump to the link anchor
            e.preventDefault();
        })
    });

    /*Portfoio filter*/



    function initialize() {
        /* Coordinated Here */
        var myLatlng = new google.maps.LatLng(35.711561, 51.407141);

        var mapOptions = {
            zoom: 14,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP /*Map Type */
        }

        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOpt);

        /* Marker Source */
        var image = 'http://svahdati.com/wp-content/themes/svahdati-blue/img/gmaps/gmarker.png';

        /* Coordinated Here */
        var myLatLng = new google.maps.LatLng(35.711561, 51.407141);

        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });
    }

    initialize();



});