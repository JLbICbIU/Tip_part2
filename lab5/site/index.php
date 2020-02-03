<?php 
session_start(); 
if (isset($_SESSION['username'])) {
    if (isset($_COOKIE['last_page'])) {
        switch ($_COOKIE['last_page']) {
            case 'A': header('Location: ./pageA.php'); break;
            case 'B': header('Location: ./pageB.php'); break;
            case 'settings': header('Location: ./setting.php'); break;
        }
    } else  {
        header('Location: ./pageA.php');
    }
} else {
    header('Location: ./login.php');
}