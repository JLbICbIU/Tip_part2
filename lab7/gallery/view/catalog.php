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
                        <a href="click.php?img=<?php echo $image->get_name(); ?>">
                            <img src="./img/<?php echo $image->get_name(); ?>.jpg" alt="<?php echo $image->get_alt(); ?>" title="<?php echo $image->get_title(); ?>">
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="section">
            <div class="column">
                <h3 class="error"><?php if ($error_msg) echo $error_msg; ?></h3>
                <h1>Форма загрузки изображений</h1>
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" required><br>
                    <label for="title">Введите описание изображения</label><br>
                    <input type="text" name="title" id="title" size="35" required><br>
                    <input type="submit" value="Загрузить изображение">
                </form>
            </div>
        </div>
    </div>
</body>

</html>