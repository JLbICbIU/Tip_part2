<?php 
session_start(); 
if (!isset($_SESSION['username'])) header('Location: ./index.php');
setcookie("last_page", "settings");

if (isset($_POST['theme'])){
    switch ($_POST['theme']) {
        case 'Черным по белому': setcookie("theme", "style1"); break;
        case 'Белым по черному': setcookie("theme", "style2"); break;
        case 'Цветная': setcookie("theme", "style3"); break;
    }
    header('Location: ./setting.php');
}

if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Настройки</title>
    <?php include 'style.php'?>
</head>
<body>
    <div class="main">
        <div class="main-text">
            <a href='..'>К списку лабораторных</a>||
            <a href="./pageA.php">Перейти на страницу A</a>||
            <a href="./pageB.php">Перейти на страницу Б</a>||
            <h1>Оформление сайта</h1>
            <form method="POST">
                <p>Вaберите тему:</p>
                <input type="submit" name="theme" value="Черным по белому">
                <input type="submit" name="theme" value="Белым по черному">
                <input type="submit" name="theme" value="Цветная">
            </form>
        </div>
    </div>
</body>
</html>