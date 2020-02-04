<?php
include_once("model/image.class.php");

class ImageController
{
    private $model;
    public $error_msg=null;

    public function __construct()
    {
        $error_msg = null;
        $this->model = new Image();
    }

    public function invoke()
    {
        if (isset($_FILES['image'])) {
            if ($_FILES['image']['name'] != '')
                if (isset($_POST['title']) && $_POST['title'] != '')
                    if ($this->upload_file($_FILES['image'], $_POST['title']))
                        echo "<meta http-equiv='refresh' content='0'>";
                    else {
                        if ($this->error_msg==null)
                            $this->error_msg = 'Ошибка загрузки фото. Возможно описание слишком длинное.';
                    }
                else
                    $this->error_msg = 'Заполните поле описания изображения.';
            else
                $this->error_msg = 'Файл не выбран';
            $error_msg = $this->error_msg;
            $images = $this->model->get_all_images();
            include 'view/catalog.php';
        } elseif (isset($_POST['title']) && isset($_POST['alt']) && isset($_POST['img_name'])) {
            $this->model->update_description_by_name($_POST['img_name'], $_POST['title'], $_POST['alt']);
            echo "<meta http-equiv='refresh' content='0'>";
        } elseif (isset($_GET['edit']) && isset($_GET['img'])) {
            $image = $this->model->get_image($_GET['img']);
            include 'view/edit.php';
        } elseif (isset($_GET['img'])) {
            $this->model->update_views_by_name($_GET['img']);
            $image = $this->model->get_image($_GET['img']);
            include 'view/image.php';
        } else {
            $error_msg = $this->error_msg;
            $images = $this->model->get_all_images();
            include 'view/catalog.php';
        }
    }

    public function upload_file($file, $title = 'none')
    {
        if (!getimagesize($file['tmp_name']))
        {
            $this->error_msg = 'Файл не является изображением.';
            return false;
        }
        $image = new Image(null, $title, null, null);
        if(!$image->set_to_db())
            return false;
        $img_name = $image->get_name();
        $img_big_name = Image::$img_path_big.$img_name.'.jpg';
        $img_small_name = Image::$img_path.$img_name.'.jpg';

        if (copy($file['tmp_name'], $img_big_name) && $this->img_to_small($img_big_name, $img_small_name, 228, 228)) {
            return true;
        } else {
            return false;
        }
    }

    public function img_to_small($image, $new_image, $new_width, $new_height)
    {
        $imagefile = $image;
        $source_image = imagecreatefromjpeg($imagefile);
        $source_imagex = imagesx($source_image);
        $source_imagey = imagesy($source_image);
        $dest_imagex = $new_width;
        $dest_imagey = $new_height;
        $dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);
        imagecopyresized($dest_image, $source_image, 0, 0, 0, 0, $dest_imagex, $dest_imagey, $source_imagex, $source_imagey);
        imagejpeg($dest_image, $new_image, 100);
        return true;
    }
}
