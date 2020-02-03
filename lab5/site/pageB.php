<?php 
session_start(); 
if (!isset($_SESSION['username'])) header('Location: ./index.php');

setcookie("last_page", "B");

if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}

if (isset($_POST['signout']))
{
    unset($_SESSION['username']);
    session_destroy();
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Страница Б</title>
    <?php include 'style.php'?>
</head>
<body>
    <div class="main">
        <div class="main-text">
            <a href='..'>К списку лабораторных</a>||
            <a href="./pageA.php">Перейти на страницу А</a>||
            <a href="./setting.php">Настройки</a>
            <h1>Страница Б</h1>
            <p>Привет, <?php echo $_SESSION['username'] ?>.</p>
            <form method="POST"><input type="submit" value="Выйти из профиля." name="signout"></form>
        </div>
    </div>
</body>
</html>