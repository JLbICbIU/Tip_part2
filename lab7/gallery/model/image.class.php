<?php
include_once 'controller/db.controller.php';

class Image
{
    private $conn;

    public static $img_path = './img/';
    public static $img_path_big = './img/big/';

    private $img_name;
    private $title;
    private $alt;
    private $views;
    private $clicks;

    public function __construct($img_name = null, $title = null, $alt=null, $views = null, $clicks = null)
    {
        $this->img_name = $img_name;
        $this->title = $title;
        $this->alt = $alt;
        $this->views = $views;
        $this->clicks = $clicks;
    }

    public function get_name() {
        return $this->img_name;
    }
    public function get_title() {
        return $this->title;
    }
    public function get_alt() {
        return $this->alt;
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
    public function set_alt($alt) {
        $this->alt = $alt;
    }
    public function set_views($views) {
        $this->views = $views;
    }
    public function set_clicks($clicks) {
        $this->clicks = $clicks;
    }

    public function get_image($img_name) {
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = 'SELECT * FROM image WHERE img_name = '.$img_name;
        $result = $this->conn->query($query); 
        $row = $result->fetch_assoc();
        return new Image($row['img_name'], $row['title'], $row['alt'], $row['views'], $row['clicks']);
    }

    public function get_all_images() {
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = 'SELECT * FROM image ORDER BY clicks DESC';
        $result = $this->conn->query($query); 

        if ($result) {
            $images = array(); 
            while($row = $result->fetch_assoc()) 
                $images[] = new Image($row['img_name'], $row['title'], $row['alt'], $row['views'], $row['clicks']);
            return $images;
        } else {
            return null;
        }
    }

    public function set_to_db() {
        if (strlen($this->title)>128) {
            return false;
        }
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = "INSERT INTO gallery.image (title, alt) VALUES ('".$this->get_title()."','".$this->get_title()."')";
        $this->conn->query($query); 
        $this->img_name = $this->conn->insert_id;
        return true;
    }

    public function update_views() {
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = "UPDATE gallery.image SET views = views+1 WHERE (img_name = ".$this->img_name.");";
        $this->conn->query($query); 
    }

    public function update_views_by_name($img_name) {
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = "UPDATE gallery.image SET views = views+1 WHERE (img_name = ".$img_name.");";
        $this->conn->query($query); 
    }

    public function update_clicks_by_name($img_name) {
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = "UPDATE gallery.image SET clicks = clicks+1 WHERE (img_name = ".$img_name.");";
        $this->conn->query($query); 
    }

    public function update_description_by_name($img_name, $title, $alt) {
        $db = new DbManager();
        $this->conn = $db->get_connection();
        $query = "UPDATE gallery.image SET title = '".$title."', alt = '".$alt."' WHERE (img_name = ".$img_name.");";
        $this->conn->query($query); 
    }
}
