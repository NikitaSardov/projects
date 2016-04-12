<!DOCTYPE html lang="ru">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.каталог</title>
    </head>
    <body>
        <div class="default__container">
            <h1>Библиотека</h1>
            <h2>Каталог</h2>
            <div class="catalog__listContainer">
                <?php $num=0; foreach($books as $a): ?>

                <a class="default__link--nodecoration" href="book.php?id=<?=$a['id']?>">
                    <div class="catalog__bookCard">
                        <h3 class="catalog__bookTitle">"<?=intro($a['title'], 36)?>"</h3>
                        <h4 class="catalog__bookAuthor"><?=$a['author']?></h4>
                        <p class="default__bookInfo">Книга добавлена: <?=intro($a['date'],16)?>
                        <?php if (!empty($a['contributor'])) echo '<br>Добавил: '.$a['contributor'];?></p>
                    </div>
                </a>
                <?php $num++; endforeach ?>
            </div>
            <div class="default__bookInfo">Книг в базе: <?php echo $num; ?></div><br>
            <a class="default__link--nodecoration" href="admin/index.php?action=add">
                <button class="default__button" type="submit">
                    <span class="default__symbols--contactSend"></span>Добавить книгу
                </button>
            </a>
            <a class="default__link--nodecoration" href="admin">
                <button class="default__button">
                    <span class="default__symbols--contactSend"></span>Редактировать
                </button>
            </a>
        </div>
    </body>
</html> 