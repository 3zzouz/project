<?php
session_start();
if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
  header('location:../index.php');
  exit;
}
$stylesheets = [
  '../node_modules/bootstrap/dist/css/bootstrap.min.css',
  'https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap'
];
$scripts = [];
$page_title = "Logging out";
$inline_style = '
    body {
        font-family: "Muli", sans-serif !important;
    }

    .container {
        text-align: center;
    }

    h3 {
        color: #444;
    }

    #counter {
        font-size: 3em;
        color: #ff6347;
    }
';
include '../utilities/layout.php';
?>

<body class="d-flex justify-content-center align-items-center">
  <div class="container w-25 d-flex justify-content-between align-items-center min-vh-100">
    <h3 class="text-capitalize text-warning">Logging out...</h3>
    <span id="counter">3</span>
  </div>
</body>
<script>
  const ref = setInterval(() => {
    let counter = document.getElementById("counter").innerHTML;
    if (counter === "0") {
      clearInterval(ref);
      return;
    }
    counter--;
    document.getElementById("counter").innerHTML = counter;
  }, 800);
</script>

</html>
<?php
$i = isset($_SESSION['admin']);
session_unset();
session_destroy();
setcookie(session_name(), session_id(), time() - 1, '/');
if ($i == 1) {
  header('Refresh:3;url=../login/admin/index.php');
} else {
  header('Refresh:3;url=../login/user/index.php');
}
exit;
?>