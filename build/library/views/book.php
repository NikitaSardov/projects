<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <style></style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>БИБЛИОТЕКА.книга</title>
    </head>
    <body>
        <div class="default__container">
            <h1 class="default__header--1<?php if(isset($_GET['admin'])) echo ' warning';?>">Библиотека</h1>
            <h2 class="default__header--1">"<?=$book['title']?>"</h2>
            <h3><?=$book['author']?></h3>

<?php               if(isset($_GET['admin'])) 
                        echo '<small>Исправлена: '.$book['change_date'].'</small><br>
                              <small>Добавлена: '.$book['date'].'</small><br>';
                    else
                        echo '<small>Добавлена: '.intro($book['date'],16).'</small><br>';

                    if(empty($book['description'])) 
                        echo '<i>Нет описания. Вы можете добавить его, нажав кнопку "Редактировать"</i>'; 
                    else 
                        echo '<p class="book_read">'.$book['description'].'</p>';
?>

            <a class="default__link--nodecoration" href="admin/index.php?action=edit&id=<?=$book['id'];?><?php if(isset($_GET['admin'])) echo '&admin'?>"><button class="default__button" type="submit"><span class="default__symbols--contactSend"></span>Редактировать</button></a>
            <a class="default__link--nodecoration" href="index.php"><button class="default__button"><span class="default__symbols--contactSend"></span>Каталог</button></a>
        </div>
    </body>
</html>