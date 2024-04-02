<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location:../login/admin/index.php');
  exit;
}
$page_title = "Planning";
$stylesheets = [
  'css/maj_planning.css'
];
$scripts = [];
$inline_style = '';
include '../utilities/layout.php';
?>

<body>
  <form class="file-upload" enctype="multipart/form-data" action="process.php" method="post">
    <div class="container">
      <table>
        <tbody>
          <tr>
            <td>Titre</td>
            <td>drop</td>
            <td>emploi</td>
          </tr>
          <tr>
            <td>All event</td>
            <td>
              <div class="image-upload-wrap">
                <input class="file-upload-input" type="file" onchange="readURL(this,1);" accept="image/*"
                  name="emploi1" />
                <div class="drag-text">
                  <h3>Drop an Image</h3>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Fitness Tips</td>
            <td>
              <div class="image-upload-wrap">
                <input class="file-upload-input" type="file" onchange="readURL(this,2);" accept="image/*"
                  name="emploi2" />
                <div class="drag-text">
                  <h3>Drop an Image</h3>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Motivation</td>
            <td>
              <div class="image-upload-wrap">
                <input class="file-upload-input" type="file" onchange="readURL(this,3);" accept="image/*"
                  name="emploi3" />
                <div class="drag-text">
                  <h3>Drop an Image</h3>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Workout</td>
            <td>
              <div class="image-upload-wrap">
                <input class="file-upload-input" type="file" onchange="readURL(this,4);" accept="image/*"
                  name="emploi4" />
                <div class="drag-text">
                  <h3>Drop an Image</h3>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div>
      <button type="submit" style="
            margin-top: 30px;
            margin-inline : auto;
            width: 80px;
            height: 30px;
          ">
        save
      </button>
    </div>
  </form>
  <script src="js/maj_planning.js"></script>
</body>

</html>