<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="./user.html">
                        <img src="img/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <?php
                        $currentPage = basename($_SERVER['PHP_SELF']);
                        $pages = [
                            'services.php',
                            'team.php',
                            'class-timetable.php',
                            'contact.php'
                        ];
                        foreach ($pages as $page) {
                            $active = ($currentPage == $page) ? 'class="active"' : '';
                            $label = ucfirst(str_replace('.php', '', $page));
                            echo "<li $active><a href='./$page'>$label</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <?php
            if (isset($test) && $test === true) { ?>
                <div class="button-container col-lg-4 mt-5 mx-auto mt-lg-0 ms-lg-0">
                    <a href="./dashboard/index.php" class="primary-btn">Profile </a>
                    <a href="./login/user/accesscard.php" class="primary-btn">Access Card </a>
                    <a href="./logout/index.php" class="primary-btn">sign out </a>
                </div>
            <?php } ?>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->