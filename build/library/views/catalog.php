<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.каталог</title>
    </head>
    <body>
        <div class="form">
            <h1>Библиотека</h1>
            <h2>Каталог</h2>
            <?php foreach($books as $a): ?>
        
            <div class="book__title">
                <h3 class="title"><a href="book.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <h4 class="author"><?=$a['author']?></h4></div>
            <p class="bookAdded">Книга добавлена: <?=$a['date']?></p><br>
            <?php endforeach ?>
		<button class="button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button>
        <button class="button--shy" type="submit"><span class="default__symbols--contactSend"></span>Отмена</button>
        </div>
    </body>
</html> 