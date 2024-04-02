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
$page_title = "Gym World";
include 'utilities/layout.php';
?>

<body>
  <?php include 'utilities/preloader.php';
  include 'utilities/offcanvas.php';
  include 'utilities/header.php'; ?>

  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hs-slider owl-carousel">
      <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-6">
              <div class="hi-text">
                <span>Shape your body</span>
                <h1>Be <strong>strong</strong> traning hard</h1>
                <?php if (!$test) { ?>
                  <a href="./login/user/index.php" class="primary-btn">sign in
                  </a>
                  <a href="./signup/index.php" class="primary-btn">sign up</a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-6">
              <div class="hi-text">
                <span>Shape your body</span>
                <h1>Be <strong>strong</strong> traning hard</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- ChoseUs Section Begin -->
  <section class="choseus-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span>Why chose us?</span>
            <h2>PUSH YOUR LIMITS FORWARD</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="cs-item">
            <span class="flaticon-034-stationary-bike"></span>
            <h4>Modern equipment</h4>
            <p>
              Discover modern fitness! Our gym's high-tech equipment makes
              workouts effective and engaging. Join us for the future of
              fitness!
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="cs-item">
            <span class="flaticon-033-juice"></span>
            <h4>Healthy nutrition plan</h4>
            <p>
              Revamp your diet with our balanced nutrition plan, featuring a
              variety of nutrient-rich foods for optimal health and energy.
              Experience the benefits of healthy eating with us!
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="cs-item">
            <span class="flaticon-002-dumbell"></span>
            <h4>Profesional training plan</h4>
            <p>
              Achieve your fitness goals with our personalized professional
              training plan, tailored to your needs and guided by expert
              trainers.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="cs-item">
            <span class="flaticon-014-heart-beat"></span>
            <h4>Unique to your needs</h4>
            <p>
              Achieve your fitness goals with our personalized training plan,
              designed uniquely for you.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ChoseUs Section End -->

  <!-- Classes Section Begin -->
  <section class="classes-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span>Our Classes</span>
            <h2>WHAT WE CAN OFFER</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="class-item">
            <div class="ci-pic">
              <img src="img/classes/class-1.jpg" alt="" />
            </div>
            <div class="ci-text">
              <span>STRENGTH</span>
              <h5>Weightlifting</h5>
              <a><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="class-item">
            <div class="ci-pic">
              <img src="img/classes/class-2.jpg" alt="" />
            </div>
            <div class="ci-text">
              <span>Cardio</span>
              <h5>Indoor cycling</h5>
              <a><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="class-item">
            <div class="ci-pic">
              <img src="img/classes/class-3.jpg" alt="" />
            </div>
            <div class="ci-text">
              <span>STRENGTH</span>
              <h5>Kettlebell power</h5>
              <a><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="class-item">
            <div class="ci-pic">
              <img src="img/classes/class-4.jpg" alt="" />
            </div>
            <div class="ci-text">
              <span>Cardio</span>
              <h4>Indoor cycling</h4>
              <a><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="class-item">
            <div class="ci-pic">
              <img src="img/classes/class-5.jpg" alt="" />
            </div>
            <div class="ci-text">
              <span>Training</span>
              <h4>Boxing</h4>
              <a><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section Begin -->
  <section class="team-section spad">
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
        <div class="ts-slider owl-carousel">
          <div class="col-lg-4">
            <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
              <div class="ts_text">
                <h4>Refka Mahjoub</h4>
                <span>Gym Trainer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
              <div class="ts_text">
                <h4>Oussama Grami</h4>
                <span>Gym Trainer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
              <div class="ts_text">
                <h4>Aziz Dhouibi</h4>
                <span>Gym Trainer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
              <div class="ts_text">
                <h4>Youcef Afli</h4>
                <span>Gym Trainer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
              <div class="ts_text">
                <h4>Maram benrhouma</h4>
                <span>Gym Trainer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
              <div class="ts_text">
                <h4>Lina saoud</h4>
                <span>Gym Trainer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section End -->
  <!-- Gallery Section Begin -->
  <div class="gallery-section">
    <div class="gallery">
      <div class="grid-sizer"></div>
      <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
        <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
      </div>
      <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
        <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
      </div>
      <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
        <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
      </div>
      <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
        <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
      </div>
      <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
        <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
      </div>
      <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
        <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
      </div>
    </div>
  </div>
  <!-- Gallery Section End -->
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