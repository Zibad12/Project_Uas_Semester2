<!--/footer-bottom-->
<div class="contact-w3ls" id="contact">
    <div class="footer-w3lagile-inner">
        <h2>Sign up for our <span>Newsletter</span></h2>
        <div class="footer-contact">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Enter your email...." required=" ">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="footer-grids w3-agileits">
            <div class="col-md-2 footer-grid">
                <h4>Release</h4>
                <ul>
                    <li><a href="#" title="Release 2016">2016</a></li>
                    <li><a href="#" title="Release 2015">2015</a></li>
                    <li><a href="#" title="Release 2014">2014</a></li>
                    <li><a href="#" title="Release 2013">2013</a></li>
                    <li><a href="#" title="Release 2012">2012</a></li>
                    <li><a href="#" title="Release 2011">2011</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Countries</h4>
                <ul>
                    @foreach ($countries as $item)
                        <li><a href="/countries/{{ $item->id }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>


            <div class="col-md-2 footer-grid">
                <h4>Genres</h4>
                <ul class="w3-tag2">
                    @foreach ($genres as $item)
                        <li><a href="/genres/{{ $item->id }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4 class="b-log"><a href="index.html"><span>M</span>ovies <span>P</span>ro</a></h4>
                <div class="footer-grid-instagram">
                    <img src="{{ asset('web/images/m1.jpg') }}" alt=" " class="img-responsive">
                </div>
                <div class="footer-grid-instagram">
                    <img src="{{ asset('web/images/m2.jpg') }}" alt=" " class="img-responsive">
                </div>
                <div class="footer-grid-instagram">
                    <img src="{{ asset('web/images/m3.jpg') }}" alt=" " class="img-responsive">
                </div>
                <div class="footer-grid-instagram">
                    <img src="{{ asset('web/images/m4.jpg') }}" alt=" " class="img-responsive">
                </div>
                <div class="footer-grid-instagram">
                    <img src="{{ asset('web/images/m5.jpg') }}" alt=" " class="img-responsive">
                </div>
                <div class="footer-grid-instagram">
                    <img src="{{ asset('web/images/m6.jpg') }}" alt=" " class="img-responsive">
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <h3 class="text-center follow">Connect <span>Us</span></h3>
        <ul class="social-icons1 agileinfo">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

    </div>

</div>
<div class="w3agile_footer_copy">
    <p>© 2017 Movies Pro. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
    </span></a>

<script src="{{ asset('web/js/jquery-1.11.1.min.js') }}"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="{{ asset('web/js/jquery.zoomslider.min.js') }}"></script>
<!-- search-jQuery -->
<script src="{{ asset('web/js/main.js') }}"></script>
<script src="{{ asset('web/js/simplePlayer.js') }}"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video1").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video2").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video3").simplePlayer();
    });
</script>

<!-- pop-up-box -->
<script src="{{ asset('web/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
<!--//pop-up-box -->

<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="{{ asset('web/js/easy-responsive-tabs.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<link href="{{ asset('web/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('web/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay: true,
            navigation: true,

            items: 5,
            itemsDesktop: [640, 4],
            itemsDesktopSmall: [414, 3]

        });

    });
</script>

<!--/script-->
<script type="text/javascript" src="{{ asset('web/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/easing.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--end-smooth-scrolling-->
<script src="{{ asset('web/js/bootstrap.js') }}"></script>

@php
    $success = session('success');
@endphp

@if (null !== $success)
    <script>
        alert("{{ $success }}");
    </script>
@endif
</body>

</html>
