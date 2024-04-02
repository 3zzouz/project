<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../login/admin/index.php');
    exit;
}
require_once '../utilities/autoloader.php';
$off = new Offre();
$offre = $off->findAll()->getdata();
$page_title = "Forfaits";
$stylesheets = [
    'css/majforfait.css'
];
$scripts = [
    'js/majforfait.js'
];
$inline_style = '';

include '../utilities/layout.php';
?>

<body>
    <div class="list">
        <h2>liste des forfaits</h2>
        <ul class="liste">
            <?php foreach ($offre as $row): ?>
                <li style="padding-left : 1rem">name :
                    <?= $row->NAME ?> <br>
                    id:
                    <?= $row->ID ?><br>
                    duration :
                    <?= $row->DURATION ?><br>
                    price:
                    <?= $row->PRICE ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <form method="post" action="./php/insert.php" class="add">
        <input id="in1" name="name" type="text" placeholder="Name"><br>
        <input id="in2" name="duration" type="text" placeholder="Duration"><br>
        <input id="in3" name="price" type="number" placeholder="Price"><br>
        <button type="submit">Add</button>
    </form>
    <form method="post" action="./php/delete.php" class="remove">
        <input id="rm" name="id" type="text" placeholder="Id of the service to remove"><br>
        <button type="submit" id="but">remove</button>
    </form>
</body>