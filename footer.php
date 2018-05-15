<footer class="footer-key text-center z-index-105">
    <div class="container">
        <div><a href="#" class="footer logo"><img src="img/logofooter.png" alt="" width="140px"></a></div>
        <h3 class="h3-footer">
            Published by
        </h3>
        <p class="footer-det">Osoul Global Center in cooperation with the Australian Science and Research Academy.
            <br>
            Copyright © Osoul Global Center, All rights reserved.
        </p>
    </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    AOS.init({
        duration: 1200,
        offset: 100,
        startEvent: 'DOMContentLoaded'
    });

</script>
<!--<script type="text/javascript" src="dist/skrollr.min.js"></script>-->
<script src="js/jquery.nicescroll.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>


<script type="text/javascript">


    $("body").niceScroll({
        cursorcolor: "#09101d", // change cursor color in hex
        cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
        cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
        cursorwidth: "7px", // cursor width in pixel (you can also write "5px")
        cursorborder: "1px solid #fff", // css definition for cursor border
        cursorborderradius: "5px", // border radius in pixel for cursor
        zindex: "999",
        scrollspeed: 20, // scrolling speed
        mousescrollstep: 20, // scrolling speed with mouse wheel (pixel)
        touchbehavior: false, // DEPRECATED!! use "touchemulate"
        emulatetouch: false, // enable cursor-drag scrolling like touch devices in desktop computer
        hwacceleration: true, // use hardware accelerated scroll when supported
        boxzoom: false, // enable zoom for box content
        dblclickzoom: true, // (only when boxzoom=true) zoom activated when double click on box
        gesturezoom: true, // (only when boxzoom=true and with touch devices) zoom activated when pinch out/in on box
        grabcursorenabled: true,// (only when touchbehavior=true) display "grab" icon
        autohidemode: true// how hide the scrollbar works, possible values:

    });
    $(document).ready(function () {
        "use strict";

        $(window).scroll(function () {
            if ($(this).scrollTop() >= 200) {
                // $('.line-to-top').fadeOut();
                $('.two-top').addClass('right-lang');
                // $('.line-to-right').fadeOut();
                $('.right-menu').addClass('fix-menu');
            } else {
                // $('.line-to-top').fadeIn();
                $('.two-top').removeClass('right-lang');
                // $('.line-to-right').fadeIn();
                $('.right-menu').removeClass('fix-menu');
            }

        });
    });
    $('.right-menu li:has(> ul)').addClass("haschaid");

    //
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,

        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
<script>
    $(".right-menu .dropbtn").on("click", function () {
        $(".right-menu .dropdown").toggleClass("Hoverd")
    });
</script>
<script>
    var div_num = $('.lang-list div').length;
    $(".left-lang").on("click", function () {
        $(".two-top").toggleClass("Hoverdlang")
        $('.lang-list').css({'height': 0+'%'})
        $('.Hoverdlang .lang-list').css({'height': div_num*100+'%'})
    });

    $(".left-lang::before").on("click", function () {
        $(".two-top").toggleClass("Hoverdlang")
    });
    $(".menu-contant a:not( a[href$='javascript:void(0)'])").on("click", function () {
        $(".right-menu .dropdown").toggleClass("Hoverd")
    });
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('em').tooltip('enable')
    })
</script>
<script src="js/wow.min.js"></script>
