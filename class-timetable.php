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
$page_title = "Class Timetable";
$inline_style = '
    #timetable-images {
        display: flex;
        justify-content: center;
        height: 100%;
        padding: 0;
        width: 100%;
    }
';
include 'utilities/layout.php';
?>

<body>
  <?php include 'utilities/preloader.php';
  include 'utilities/offcanvas.php';
  include 'utilities/header.php';
  $title = "Class Timetable";
  include 'utilities/breadcrumb.php';
  ?>

  <!-- Class Timetable Section Begin -->
  <section class="class-timetable-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title">
            <span>Find Your Time</span>
            <h2>Find Your Time</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="table-controls">
            <ul>
              <li class="active" data-tsfilter="all">All event</li>
              <li data-tsfilter="fitness">Fitness tips</li>
              <li data-tsfilter="motivation">Motivation</li>
              <li data-tsfilter="workout">Workout</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Class Timetable Section End -->

  <!-- Timetable Images Section Begin -->
  <div class="col-lg-12 p-0 ">
    <div id="timetable-images"></div>
  </div>
  <!-- Timetable Images Section End -->

  <!-- Script for Image Filtering -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const timetableImages = document.getElementById("timetable-images");
      const filters = {
        all: "image.php?image=emploi1.png",
        fitness: "image.php?image=emploi2.png",
        motivation: "image.php?image=emploi3.png",
        workout: "image.php?image=emploi4.png",
      };

      function updateTimetableImages(filter) {
        const imageUrl = filters[filter];
        timetableImages.innerHTML = `<img 
          style="width: 100%; height: 100%;"
          src="${imageUrl}" alt="${filter}">`;
      }

      const tableControls = document.querySelector(".table-controls ul");
      tableControls.addEventListener("click", function (event) {
        if (event.target.tagName === "LI") {
          const filter = event.target.dataset.tsfilter;
          updateTimetableImages(filter);
        }
      });

      // Initially show all images
      updateTimetableImages("all");
    });
  </script>
  <!-- End Script-->

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