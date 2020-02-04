<?php
include_once("model/image.class.php");

class ImageController
{
    private $model;

    public function __construct()
    {
        $this->model = new Image();
    }

    public function invoke()
    {
        $images = $this->model->get_all_images();
        include 'view/catalog.php';
    }
}
