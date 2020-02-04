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
        <div class="main-image">
            <a href="..">К списку лабораторных работ</a><br><br>
            <a href="./">Вернуться в каталог</a>
            <h1><?php echo $image->get_title(); ?></h1>
            <p>Количество просмотров: <?php echo $image->get_views(); ?></p>
            <p>Количество нажатий на изображение: <?php echo $image->get_clicks(); ?></p>
            <a href="?edit=t&img=<?php echo $image->get_name(); ?>">Изменить описание изображения</a>
            <img src="./img/big/<?php echo $image->get_name(); ?>.jpg" alt="<?php echo $image->get_alt(); ?>" title="<?php echo $image->get_title(); ?>">
        </div>
    </div>
</body>

</html>