<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.книга</title>
    </head>
    <body>
        <div class="form">
        <h1>Библиотека</h1>
        <h2>"<?=$book['title']?>"</h2>
        <h3><?=$book['author']?></h3>
        Книга добавлена: <?=$book['date']?><br>
        
        <p class="book_container"><?=$book['content']?></p>
            
		<a href="index.php?action=add"><button class="button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button></a>
        <a href="index.php"><button class="button--shy"><span class="default__symbols--contactSend"></span>В каталог</button></a>
        </div>
    </body>
</html>