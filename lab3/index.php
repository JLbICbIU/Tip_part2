<?php
$page = 'lab3' // current page name for nav-bar
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "../blocks/head.php" ?>
    <title>ЛР3</title>
</head>

<body>
    <header>
        <?php include "../blocks/nav-bar.php" ?>
    </header>
    <div class="main">
        <div class="main-text">
            <h1>Лабораторная работа №3</h1>
            <div>
                <?php include "task1.php" ?>
            </div>
            <div>
                <?php include "task2.php" ?>
            </div>
            <div>
                <?php include "task3.php" ?>
            </div>
            <div>
                <?php include "task4.php" ?>
            </div>
            <div>
                <?php include "task5.php" ?>
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