<?php
include_once 'controller/db.controller.php';

class Image
{
    private $conn;

    private $img_name;
    private $title;
    private $views;
    private $clicks;

    public function __construct($img_name = null, $title = null, $views = null, $clicks = null)
    {
        $this->img_name = $img_name;
        $this->title = $title;
        $this->views = $views;
        $this->clicks = $clicks;
    }

    public function get_name() {
        return $this->img_name;
    }
    public function get_title() {
        return $this->title;
    }
    public function get_views() {
        return $this->views;
    }
    public function get_clicks() {
        return $this->clicks;
    }

    public function set_name($img_name) {
        $this->img_name = $img_name;
    }
    public function set_title($title) {
        $this->title = $title;
    }
    public function set_views($views) {
        $this->views = $views;
    }
    public function set_clicks($clicks) {
        $this->clicks = $clicks;
    }

    public function get_all_images() {
        $db = new DbManager();
        $this->conn = $db->get_connection();

        $query = 'SELECT * FROM image';
        $result = $this->conn->query($query); 

        if ($result) {
            $images = array(); 
            while($row = $result->fetch_assoc()) 
                $images[] = new Image($row['img_name'], $row['title'], $row['views'], $row['clicks']);
            return $images;
        } else {
            return null;
        }
    }
}
