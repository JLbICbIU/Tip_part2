<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./view/css/style.css" />
    <title>Галерея изображений</title>
</head>

<body>
    <div class="main">
        <div class="main-block">
            <a href="..">К списку лабораторных работ</a>
            <h1>Галерея изображений</h1>
            <div class="img-row">
                <?php foreach ($images as $key => $image) : ?>
                    <div class="img-cell">
                        <a target="blank" href="./img/big/<?php echo $image->get_name(); ?>.jpg"><img src="./img/<?php echo $image->get_name(); ?>.jpg" alt="<?php echo $image->get_title(); ?>" title="<?php echo $image->get_title(); ?>"></a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="section">
            <div class="column">
                <!-- <?php 
                if (isset($_FILES['image'])) 
                    if (isset($_POST['title']) && $_POST['title']!='')
                        upload_file($_FILES['image'], $_POST['title']);
                    else 
                        echo 'Заполните поле описания изображения.';
                ?> -->
                <h1>Форма загрузки изображений</h1>
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