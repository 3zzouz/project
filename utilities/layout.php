<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Gym, unica, creative, html" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        <?= $page_title ?? "Document" ?>
    </title>
    <link rel="icon" href="https://cdn.pixabay.com/photo/2022/02/05/18/53/fitness-6995550_1280.png"
        type="image/x-icon" />
    <!-- Page-specific stylesheets -->
    <?php foreach ($stylesheets as $stylesheet): ?>
        <link rel="stylesheet" href="<?= $stylesheet ?>">
    <?php endforeach; ?>

    <!-- Page-specific inline styles -->
    <?php if (!empty($inline_style)): ?>
        <style>
            <?= $inline_style ?>
        </style>
    <?php endif; ?>

    <!-- Page-specific scripts -->
    <?php foreach ($scripts as $script): ?>
        <script src="<?= $script ?>"></script>
    <?php endforeach; ?>

</head>