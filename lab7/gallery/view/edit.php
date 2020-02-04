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
            <a href="?img=<?php echo $image->get_name();?>">Вернуться к просмотру изображения</a>
            <h1><?php echo $image->get_title(); ?></h1>
            <img src="./img/big/<?php echo $image->get_name(); ?>.jpg" alt="<?php echo $image->get_alt(); ?>" title="<?php echo $image->get_title(); ?>">
            <form method="POST">
              <input type="text" hidden name="img_name" required value="<?php echo $image->get_name(); ?>"><br>
              <label for="title">Title</label><br>
              <input type="text" name="title" id="title" size="128" required value="<?php echo $image->get_title(); ?>"><br>
              <label for="alt">Alt</label><br>
              <input type="text" name="alt" id="alt" size="128" required value="<?php echo $image->get_alt(); ?>"><br>
              <input type="submit" value="Обновить описание">
            </form>
        </div>
    </div>
</body>

</html>