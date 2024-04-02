<?php
if (isset($_SESSION['user'])) {
    header('Location: ../../index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['email'])) {
        die("Email is required");
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        die("Email is invalid");
    }
    if (!isset($_POST['password'])) {
        die("Password is required");
    }
    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20) {
        die("Password must be between 8 and 20 characters");
    }
    $regex = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/';
    if (!preg_match($regex, $_POST['password'])) {
        die("Password must contain at least one number and one uppercase and lowercase letter");
    }
    include_once '../../utilities/autoloader.php';
    $client = new client();
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $res = $client->login($email, $password);
    if ($res->getStatus()) {
        header('Location: ../../index.php');
        exit();
    } else {
        $message = json_encode($res->getMessage());
        echo "<script>
    alert($message);
    window.location.href='index.php';
            </script>";
        exit();
    }
} else {
    echo "Invalid request";
    header('Refresh:5 url: ../../index.php');
    exit();
}
