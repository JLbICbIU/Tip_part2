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
                <div class="img-cell">
                    <img src="./img/299804476.jpg">
                </div>
                <div class="img-cell">
                    <img src="./img/299804476.jpg">
                </div>
            </div>
        </div>
        <div class="section">
            <div class="column">
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="image"><br>
                    <label for="title">Описание изображения</label><br>
                    <input type="text" name="title" id="title" size="35"><br>
                    <input type="submit" value="Загрузить изображение">
                </form>
            </div>
        </div>
    </div>
</body>

</html>