<?php
$page = 'lab1' // current page name for nav-bar
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "../blocks/head.php" ?>
    <title>ЛР1</title>
</head>

<body>
    <header>
        <?php include "../blocks/nav-bar.php" ?>
    </header>
    <div class="main">
        <div class="main-text">
            <h1>Лабораторная работа №1</h1>
            <div>
                <?php include "task123.php" ?>
            </div>
            <div>
                <?php include "task45.php" ?>
            </div>
            <div>
                <?php include "task6.php" ?>
            </div>
            <div>
                <?php include "task7.php" ?>
            </div>
            <div>
                <?php include "task8.php" ?>
            </div>
        </div>
    </div>
    <footer>
        <?php include "../blocks/footer.php" ?>
    </footer>
</body>
</html>