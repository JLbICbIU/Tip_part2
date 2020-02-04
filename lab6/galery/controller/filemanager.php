<?php
$file_path = '../img/data.csv';
$file_path = __DIR__ . '/' . $file_path;

function get_file_content($file_path)
{
  $content = file($file_path);
  return $content;
}

function append_file($file_path, $text) {
  $file = fopen($file_path, 'a');//opens file in append mode  
  fwrite($file, $text);  
  fclose($file); 
  }

function content_to_dict($content)
{
  for ($i = 0; $i < count($content); $i++) {
    // get split by first comma
    $line_arr = explode(',', $content[$i], 2);
    $content_arr[] = [$line_arr[0], $line_arr[1]];
  }
  return $content_arr;
}

function view_content($content)
{
  foreach ($content as $line) {
    echo "$line<br>";
  }
}

function img_to_small($image, $new_width, $new_height) {
  $imagefile = __DIR__ . '/' . '../img/big/'.$image;
  $source_image = imagecreatefromjpeg($imagefile);
  $source_imagex = imagesx($source_image);
  $source_imagey = imagesy($source_image);
  $dest_imagex = $new_width;
  $dest_imagey = $new_height;
  $dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);
  imagecopyresized($dest_image, $source_image, 0, 0, 0, 0, $dest_imagex, $dest_imagey, $source_imagex, $source_imagey);
  imagejpeg($dest_image,__DIR__ . '/' . '../img/'.$image,100);
  return true;
}

function upload_file($file, $title='none')
{
  if ($file['name'] == '') {
    echo 'Файл не выбран!';
    return;
  }
  $file_path = $GLOBALS['file_path'];
  $img_name = count($GLOBALS['content']).".jpg";

  if (copy($file['tmp_name'], 'img/big/' . $img_name) && img_to_small($img_name, 100, 100)) {
    $text = "\n".$img_name.",$title";
    append_file($file_path, $text);
    
    echo "<meta http-equiv='refresh' content='0'>";
  } else  {
    echo 'Ошибка загрузки файла';
  }
}

$content = get_file_content($file_path);
$content_arr = content_to_dict($content);
