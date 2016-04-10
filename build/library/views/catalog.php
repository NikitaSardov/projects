<!DOCTYPE html lang="ru">
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
            <div class="book_container">
            <?php $num=0;?>
            <?php foreach($books as $a): ?>
        
            <div class="book__title">
                <a href="book.php?id=<?=$a['id']?>">
                    <h3 class="title">"<?=intro($a['title'], 36)?>"</h3>
                    <h4 class="author"><?=$a['author']?></h4></div>
                    <p class="bookAdded">Книга добавлена: <?=$a['date']?></p><br>
                </a>
                <?php $num++;?>
            <?php endforeach ?>
            </div>
            Книг в базе: <?php echo $num; ?><br>
		<a href="index.php?action=add"><button class="button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button></a>
            <a href="admin"><button class="button--shy"><span class="default__symbols--contactSend"></span>Администрировать</button></a>
            
        </div>
    </body>
</html> 