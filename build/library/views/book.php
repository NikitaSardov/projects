<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.каталог</title>
    </head>
    <body>
        <h1>Библиотека</h1>
        Запрошена следующая книга:
        <h2><?=$book['title']?></h2>
        <h3><?=$book['author']?></h3>
        Книга добавлена: <?=$book['date']?><br>
            
		<button class="button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button>
        <button class="button--shy" type="submit"><span class="default__symbols--contactSend"></span>Отмена</button>
    </body>
</html>