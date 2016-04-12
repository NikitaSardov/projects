<!DOCTYPE html lang="ru">
<html>
       
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="../css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.редактор</title>
    </head>
    <body>
        <div class="default__container">
            <h1 class="default__header--1 default--warning">Библиотека</h1>
            <div class="catalog__listContainer">
                <?php $num=0; foreach($books as $a): ?>
                
                <div class="catalog__bookCard">
                    <a class="default__link--nodecoration" href="../book.php?id=<?=$a['id']?>&admin">
                    <h3 class="catalog__bookTitle">"<?=intro($a['title'], 36)?>"</h3>
                    <h4 class="catalog__bookAuthor"><?=$a['author']?></h4>
                    <p class="default__bookAdded">Книга добавлена: <?=$a['date']?>        
                    <br>Добавил: <?php if (!empty($a['contributor_IP'])) echo 'Доброжелатель, опознанный по IP'; 
                                          elseif (!empty($a['contributor'])) echo $a['contributor'];
                                                else echo 'Неизвестный'?>;
                    <br>Изменена: <?=$a['change_date']?></p>
                    <div class="default__line"></div>
                    <a class="default__link--nodecoration catalog__editButton" href="index.php?action=edit&id=<?=$a['id']?>&admin">Редактировать</a> | 
                    <a class="default__link--nodecoration catalog__deleteButton" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    </a>
                </div>
                <?php $num++; endforeach ?>
            </div>
            <div class="default__bookInfo">Книг в базе: <?php echo $num; ?></div><br>
            <a class="default__link--nodecoration" href="index.php?action=add&admin"><button class="default__button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button></a>
            <a class="default__link--nodecoration" href=".."><button class="default__button"><span class="default__symbols--contactSend"></span>Каталог</button></a>
        </div>
    </body>
</html> 