<html>
<head>
    <title>Галерея изображений</title>
</head>
<body>
    <a href="..">Назад</a>
    <h2>Какое-то описание картинки</h2> 
    <?php for ($i = 1; $i <= 4; $i++) echo "<a href = photo.php?id=$i >Картинка №$i</a><br/>"; ?>
</body>
</html>