<?php
$page_title = "Thank You";
$stylesheets = [];
$scripts = [];
$inline_style = '
    body {
        font-family: Arial, sans-serif;
        background-color: #222;
        color: #ddd;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: 50px auto;
        text-align: center;
    }

    h1 {
        color: #ff8c00;
    }

    p {
        color: #ccc;
    }
';

include '../utilities/layout.php';
?>


<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Our team has received your message and an answer will be sent soon.</p>
    </div>
</body>

</html>