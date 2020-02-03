<?php
$page = 'lab5' // current page name for nav-bar
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "../blocks/head.php" ?>
    <title>ЛР5</title>
</head>

<body vlink="green" alink="green" link="green">
    <header>
        <?php include "../blocks/nav-bar.php" ?>
    </header>
    <div class="main">
        <div class="main-text">
            <h1>Лабораторная работа №5</h1>
            <div>
                <?php include "task.php" ?>
            </div>
        </div>
    </div>
    <footer>
        <?php include "../blocks/footer.php" ?>
    </footer>
</body>

</html>