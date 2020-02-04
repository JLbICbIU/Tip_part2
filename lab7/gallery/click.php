<?php
include_once("model/image.class.php");

if (isset($_GET['img'])) {
  $model = new Image();
  $model->update_clicks_by_name($_GET['img']);
  header('Location: ./?img='.$_GET['img']);
} else {
  header('Location: index.php');
}