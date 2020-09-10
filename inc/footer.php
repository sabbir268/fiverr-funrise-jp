<footer class="footer sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-widget about-widget">
                    <h3 class="title">Get in touch</h3>
                    <ul class="contact">
                        <li><i class="fa fa-map-marker"></i> <span>3797 East Tremont Ave
                                Bronx, NY 10465</span></li>
                        <li><i class="fa fa-phone"></i> <span>+1-646-882-1080</span></li>
                        <li><i class="fa fa-envelope-o"></i> <span>contact@jplegalfunding.co</span></li>
                    </ul>

                    <br>
                    <img src="img/logo-main.png" style="height: 100px;" alt="Awesome Image" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget quick-links">
                    <h3 class="title">Pages</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="how-it-works.php">How it works</a></li>
                        <li><a href="types-of-cases.php">Type of cases</a></li>
                        <li><a href="apply.php">Apply Now</a></li>
                        <li><a href="faq.php">Faq</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-widget contact-widget">
                    <h3 class="title">Contact Us</h3>
                    <form action="forms/contact.php" method="post">
                        <input type="text" name="name" placeholder="Full Name">
                        <input type="text" name="email" placeholder="Email Address">
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<section class="footer-bottom">
    <div class="container text-center">
        <p> All rights reserved <b class="text-thm">&copy; J.P. Legal Funding LLC</b> | 2020</p>
    </div>
</section>


<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- appear js -->
<script src="js/jquery.appear.js"></script>
<!-- circle progress -->
<script src="js/circle-progress.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/jquery-parallax.js"></script>
<!-- validate -->
<script src="js/validate.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- easyPieChart -->
<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- gmap main script -->
<script src="js/gmap.js"></script>

<!-- isotope script -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>

<!-- revolution scripts -->

<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- thm custom script -->
<script src="js/custom.js"></script>


</body>



</html>


<?php
if (isset($_SESSION['status'])) {


    if ($_SESSION['status'] == 'ok') {

        echo "<script>Swal.fire({
        title: 'Success!',
        text: 'Mail send successfully!',
        icon: 'success',
        confirmButtonText: 'Close'
        })</script>";
        session_unset();
        session_destroy();
    }

    if ($_SESSION['status'] == 'error') {
        echo "<script>Swal.fire({
        title: 'Error!',
        text: 'Something went wrong!',
        icon: 'error',
        confirmButtonText: 'Close'
        })</script>";
        session_unset();
        session_destroy();
    }
}
//sabbir11235