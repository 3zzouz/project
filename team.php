<?php
session_start();
$test = false;
if (isset($_SESSION['user'])) {
    $test = true;
}
$page_title = "Our Team";
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
include 'utilities/layout.php';
?>

<body>
    <?php include 'utilities/preloader.php';
    include 'utilities/offcanvas.php';
    include 'utilities/header.php';
    $title = "Our Team";
    include 'utilities/breadcrumb.php';
    ?>

    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="ts_text">
                            <h4>Refka Mahjoub</h4>
                            <span>Gym Trainer</span>
                            <p>RefkaMahjoub@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="ts_text">
                            <h4>Oussama Grami</h4>
                            <span>Gym Trainer</span>
                            <p>OussamaGrami@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="ts_text">
                            <h4>Aziz Dhouibi</h4>
                            <span>Gym Trainer</span>
                            <p>AzizDhouibi@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="ts_text">
                            <h4>Youcef Afli</h4>
                            <span>Gym Trainer</span>
                            <p>YoucefAfli@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
                        <div class="ts_text">
                            <h4>Maram benrhouma</h4>
                            <span>Gym Trainer</span>
                            <p>Marambenrhouma@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
                        <div class="ts_text">
                            <h4>Lina Saoud</h4>
                            <span>Gym Trainer</span>
                            <p>LinaSaoud@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
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