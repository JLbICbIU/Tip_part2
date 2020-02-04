<?php
include './controller/filemanager.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>Галерея изображений</title>
</head>

<body>
    <div class="main">
        <div class="main-block">
            <a href="..">К списку лабораторных работ</a>
            <h1>Галерея изображений</h1>
            <div class="img-row">
                <?php foreach ($content_arr as $img_info) : ?>
                    <div class="img-cell">
                        <a target="blank" href="./img/big/<?php echo $img_info[0] ?>"><img src="./img/<?php echo $img_info[0] ?>" alt="<?php echo $img_info[1] ?>" title="<?php echo $img_info[1] ?>"></a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="section">
            <div class="column">
                <?php 
                if (isset($_FILES['image'])) 
                    if (isset($_POST['title']) && $_POST['title']!='')
                        upload_file($_FILES['image'], $_POST['title']);
                    else 
                        echo 'Заполните поле описания изображения.';
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="image"><br>
                    <label for="title">Введите описание изображения</label><br>
                    <input type="text" name="title" id="title" size="35"><br>
                    <input type="submit" value="Загрузить изображение">
                </form>
            </div>
        </div>
    </div>
</body>

</html>