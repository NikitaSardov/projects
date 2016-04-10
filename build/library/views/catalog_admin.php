<!DOCTYPE html lang="ru">
<html>
       
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="../css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.каталог</title>
    </head>
    <body>
        <div class="form">
            <h1>Библиотека</h1>
            <h2 class="warning">Режим Бога =)</h2>
                <div class="book_container">
                <?php $num=0;?>
                <?php foreach($books as $a): ?>
                <span class="adminElement">
                    <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a> | 
                    <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                </span>
                    <a href="../book.php?id=<?=$a['id']?>">
                    <h3 class="title">"<?=intro($a['title'], 36)?>"</h3>
                <h4 class="author"><?=$a['author']?></h4>
                <p class="bookAdded">Книга добавлена: <?=$a['date']?></p><br>
                    </a>
                <?php $num++;?>
                <?php endforeach ?>
            </div>
            Книг в базе: <?php echo $num; ?><br>
            <a href="index.php?action=add&admin"><button class="button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button></a>
            <a href=".."><button class="button"><span class="default__symbols--contactSend"></span>В режим просмотра</button></a>
        </div>
    </body>
</html> 