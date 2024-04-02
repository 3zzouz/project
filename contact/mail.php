<?php
$email = htmlentities($_POST['email']);
$subject = htmlentities($_POST['objet']);
$message = $email . PHP_EOL . htmlentities($_POST['message']);
$name = "contact-form-user";
$emailToSend = "gymworld135@gmail.com";
include_once '../utilities/sendMail.php';
header('Location: successmail.php');


