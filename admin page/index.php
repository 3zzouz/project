<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../login/admin/index.php');
    exit;
}
$page_title = "Admin Dashboard";
$stylesheets = [
    'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css'
];
$scripts = [];
$inline_style = '
    * {
        font-family: "Oswald", sans-serif !important;
    }

    body {
        margin: 0;
        padding: 0;
        background-image: url("../img/login/pexels-victor-freitas-703016.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .centered-section {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        margin: 10px;
    }

    button {
        text-align: center;
        margin: 10px;
        padding: 10px 150px;
        background-color: #ac5824;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .welcome-text {
        color: #8a6b61;
        font-size: 24px;
        margin-bottom: 20px;
    }
';
include '../utilities/layout.php';
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section">
                <div class="welcome-text">Welcome admin</div>

                <button onclick="window.location.href='./clients/client.php'"
                    class="btn py-3 w-100 mb-4 text-dark">Consulter les clients</button>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section">
                <button onclick="window.location.href='./maj_planning.php'"
                    class="btn py-3 w-100 mb-4 text-dark">Consulter les horaires</button>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section">
                <button onclick="window.location.href='./majforfait.php'"
                    class="btn py-3 w-100 mb-4 text-dark">Consulter les forfaits</button>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section">
                <button onclick="window.location.href='../logout/index.php'" class="btn py-3 w-100 mb-4 text-dark">Log
                    out</button>
            </div>
        </div>
    </div>
</body>

</html>