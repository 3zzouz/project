<?php
session_start();
$test = isset($_SESSION['user']);
$stylesheets = [
    'https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap',
    'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap',
    'css/bootstrap.min.css',
    'css/font-awesome.min.css',
    'css/flaticon.css',
    'css/owl.carousel.min.css',
    'css/barfiller.css',
    'css/magnific-popup.css',
    'css/slicknav.min.css',
    'css/style.css'
];
$scripts = [];
$inline_style = '';
$page_title = "Contact Us";
include 'utilities/layout.php';
?>

<body>
    <?php include 'utilities/preloader.php';

    include 'utilities/offcanvas.php';

    include 'utilities/header.php';

    $title = "Contact Us";
    include 'utilities/breadcrumb.php';
    ?>

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>Centre Urbain Nord ,Tunisie <br />index 1082</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>28 435 459</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>gymworld135@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form method="post" action="./contact/mail.php">
                            <input type="text" name="email" placeholder="Email" required>
                            <input type="text" name="objet" placeholder="objet">
                            <textarea name="message" placeholder="message" required minlength="10"></textarea>

                            <button class="btn py-3 w-100 mb-4 text-dark" type="submit">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.914216989487!2d10.195020919250708!3d36.84296048004507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34c6d1e93bef%3A0x4153c4733f285343!2sINSAT%20Institut%20National%20des%20Sciences%20Appliqu%C3%A9es%20et%20de%20Technologie!5e0!3m2!1sen!2stn!4v1631312201931!5m2!1sen!2stn"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php include 'utilities/footer.php'; ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>