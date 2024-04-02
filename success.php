<?php
session_start();
$page_title = "Transaction Succeeded";
$stylesheets = ['node_modules/bootstrap/dist/css/bootstrap.min.css'];
$scripts = [];
$inline_style = '
    body {
        text-align: center;
        justify-content: center;
        align-items: center;
    }
';
include 'utilities/layout.php';
?>

<body>
    <h1>TRANSACTION SUCCEEDED</h1>
    <h1>Thank you for payment... </h1>
    <?php
    include_once 'utilities/autoloader.php';
    $RemoteClass = new Remote('offre_client');
    $Response = $RemoteClass->insert(['ID_CLIENT' => $_SESSION['user']['id'], 'ID_OFFRE' => $_SESSION['offreID']]);
    ?>
    <a class="btn btn-warning" href="services.php">Retour</a>
</body>

</html>