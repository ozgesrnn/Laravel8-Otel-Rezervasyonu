<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name

                | Designed by templatemo</p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
<script>
    // HTML document is loaded. DOM is ready.
    $(function() {

        $('#hotelCarTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

        $('.date').datetimepicker({
            format: 'MM/DD/YYYY'
        });
        $('.date-time').datetimepicker();

        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });


    $(window).load(function() {


//	For images only
        $('.flexslider').flexslider({
            controlNav: false
        });


    });
</script>
