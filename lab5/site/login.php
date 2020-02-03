<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ./index.php');
    echo 'error';
} elseif (isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
</head>
<body>
    <div class="main">
        <div class="main-text">
            <a href='..'>К списку лабораторных</a>
            <h1>Авторизация пользователя</h1>
            <form method="POST">
                <p>Введите имя пользователя</p>
                <input type="text" name="username"><br>
                <input type="password" name="password"><br>
                <input type="submit" value="Войти">
            </form>
        </div>
    </div>
</body>
</html>