<?php
session_start();
$test = false;
if (isset($_SESSION['user'])) {
  $test = true;
}
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
$page_title = "Services";
$inline_style = '';
include 'utilities/layout.php';
?>

<body>
  <?php include 'utilities/preloader.php';
  include 'utilities/offcanvas.php';
  include 'utilities/header.php';
  $title = "Services";
  include 'utilities/breadcrumb.php';
  ?>

  <!-- Services Section Begin -->
  <section class="services-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span>What we do?</span>
            <h2>PUSH YOUR LIMITS FORWARD</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 order-lg-1 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-1.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-2 col-md-6 p-0">
          <div class="ss-text">
            <h4>Personal training</h4>
            <p>
              Achieve your fitness goals with personalized training. Our
              certified trainers create custom plans for your success. Start
              today!
            </p>
          </div>
        </div>
        <div class="col-lg-3 order-lg-3 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-2.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-4 col-md-6 p-0">
          <div class="ss-text">
            <h4>Group fitness classes</h4>
            <p>
              Join our dynamic group fitness classes for a fun workout with
              others!
            </p>
          </div>
        </div>
        <div class="col-lg-3 order-lg-8 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-4.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-7 col-md-6 p-0">
          <div class="ss-text second-row">
            <h4>Body building</h4>
            <p>Transform your physique with our bodybuilding program!</p>
          </div>
        </div>
        <div class="col-lg-3 order-lg-6 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-3.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-5 col-md-6 p-0">
          <div class="ss-text second-row">
            <h4>Strength training</h4>
            <p>
              Build strength and redefine your limits with our strength
              training programs!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Banner Section Begin -->
  <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="bs-text service-banner">
            <h2>Exercise until the body obeys.</h2>
            <div class="bt-tips">Where health, beauty and fitness meet.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <!-- Pricing Section Begin -->
  <section class="pricing-section service-pricing spad">
    <div class="container">
      <!-- plan section -->
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span>Our Plan</span>
            <h2>Choose your pricing plan</h2>
          </div>
        </div>
      </div>


      <div class="row justify-content-center">
        <?php

        include_once 'utilities/autoloader.php';
        $offre_class = new Offre();
        $offre_rows = ($offre_class->findAll())->getData();
        foreach ($offre_rows as $offre_row) {
          ?>

          <div class="col-lg-4 col-md-8">
            <div class="ps-item">
              <h3>
                <?php print ($offre_row->NAME) ?>
              </h3>
              <div class="pi-price">
                <h2>TND
                  <?php print ($offre_row->PRICE) ?>.0
                </h2>

              </div>
              <ul>
                <li>Free riding</li>

                <li>Personal trainer</li>
                <li>Weight losing classes</li>
                <li>No time restriction</li>
                <li>Indoor cycling</li>
                <li>Cardio kickboxing</li>
              </ul>

              <form action="payment.php" method="post">
                <input type="hidden" name="offreDuration" value='<?php echo $offre_row->DURATION ?>'>
                <input type="hidden" name="offreID" value='<?php echo $offre_row->ID; ?>'>
                <input type="hidden" name="offre" value='<?php echo $offre_row->NAME; ?>'>
                <input type="hidden" name="price" value='<?php echo $offre_row->PRICE * 100; ?>'>
                <input class="btn btn-warning" type="submit" value="Enroll now" name="submit">
              </form>

            </div>
          </div>
          <?php
        }
        ?>

      </div>

  </section>
  <!-- Pricing Section End -->

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