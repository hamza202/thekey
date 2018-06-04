<footer class="footer-key text-center z-index-105">
    <div class="container">
        <div><a href="#" class="footer logo"><img src="img/logofooter.png" alt="" width="140px"></a></div>
        <h3 class="h3-footer">
            Published by
        </h3>
        <p class="footer-det">Osoul Center in cooperation with the Australian Science and Research Academy.
            <br>
            Osoul Center,  2018  All rights reserved.
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
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        "use strict";

        $(window).scroll(function () {
            if ($(this).scrollTop() >= 200) {
                 $('.center-line-to-top').fadeOut();
                $('#scroll-fix').addClass('nav-fix-top');
                $('.two-top').addClass('right-lang');
                // $('.line-to-right').fadeOut();
                $('.right-menu').addClass('fix-menu');
            } else {
                $('.center-line-to-top').fadeIn();
                $('.two-top').removeClass('right-lang');
                $('#scroll-fix').removeClass('nav-fix-top');
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
    $(".dropdown-content .close").on("click", function () {
        $(".right-menu .dropdown").toggleClass("Hoverd")
    });
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
<script>
    function is_touch_device() {
        return 'ontouchstart' in window
            || navigator.maxTouchPoints;
    };
    $(window).on('load', function(){
        if (is_touch_device()) {
            $('html').addClass('touch')
        }
        else {
            $('html').removeClass('touch')
        }
        $('.touch li.haschaid').on('touchstart', function(){
            $(this).toggleClass('openChild');
        });
    });</script>

<script src="js/wow.min.js"></script>
<!-- Go to <a href="http://www.addthis.com/dashboard">www.addthis.com/dashboard</a> to customize your tools --><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aff599bef2f8122"></script>