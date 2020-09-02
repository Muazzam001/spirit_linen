 
 <!-- footer -->
        <footer>
            <div class="footer-content container-custom">
            <p>Copyright &copy; 2017 Spirit Linen</p>
        <div class="row">
            <!-- <div class="col-sm-4">
                
                <ul class="navbar-nav navbar-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="brands.php">Brands</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="supplier.php">Supplier's</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="location.php">Location</a>
                                    </li>
                                </ul>
            </div> -->
     <!--    <div class="col-sm-4 col-flex">

            <div class="social-icons">
            <a  class="btn btn-primary" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
            Like <span class="badge">78</span></a>
            
            <a type="button" class="btn btn-primary" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
            Tweet</a>

            <a type="button" class="btn btn-primary" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> <span class="badge">4</span></a>
            </div>
            </div>
            <div class="col-sm-4">
                
            <p>SPIRIT LINEN 2017</p>
            <p><a href="#">Terms &amp; Conditions</a></p>
            </div>

            </div>
            </div> -->
<!--             <div class="footer-bottom">
            </div> -->
        </footer>
    </div>
   <div class="scroll-buttons">
   <button class="btn btn-default" id="buttonTop"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
   <button class="btn btn-default" id="buttonBtm"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
       </div>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- fancy-box -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
    <!-- custom script -->
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/scroll-snap-polyfill.js"></script>
    <script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            navigation: true,
        });
    });
    </script>
    <script>
    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).fadeIn();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).fadeOut();
    });
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
    </script>
    <script>
    $(function() {
        $("#upBtn").click(function() {
            $('body').scrollTop($('body').scrollTop() - 20);
        });

        $("#downBtn").click(function() {
            $('body').scrollTop($('body').scrollTop() + 20);;
        });

    });
    </script>
    <script>
    var y = $(window).scrollTop();
    $("#button").click(function() {
        $("body, html").scrollTop(y + 150);
        console.log("clicked");
    });
    </script> 
    <script>
        $(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.navbar-custom .navbar-nav li.nav-item .nav-link').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(".navbar-custom .navbar-nav li.nav-item .nav-link").removeClass("active");
                $(this).addClass('active');
            }
        });

});
    </script>
</body>
</html>