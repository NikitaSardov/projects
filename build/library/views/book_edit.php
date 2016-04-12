<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<style>
		</style>
		<link href="../css/styles.css" rel="stylesheet" type="text/css" />
        <title>Библиотека</title
    </head>
    <body>
        <div class="default__container">
            <h2>Редактировать книгу</h2>
            <form method="post" action="index.php?action=edit&id=<?=$books['id']?>">
                <input class="input__title input" name="title" type="text" placeholder="Название книги" value="<?=$books['title']?>" required>
				<input class="input__author input" name="author" type="text" placeholder="Автор" value="<?=$books['author']?>"><br>
                <textarea class="input__description input" name="description" placeholder="Фрагмент (по желанию)"><?=$books['description']?></textarea>
                <div class="default__bookInfo">Исправление: <?=$books['change_date']?><br>
                Добавление: <?=$books['date']?></div>
                <input name="change_date" type="hidden" value="<?=date('d-m-Y H:i:s')?>">
                <input name="editor_IP" type="hidden" value="<?=$_SERVER['REMOTE_ADDR']?>">
				<button class="default__button" type="submit"><span class="default__symbols--contactSend"></span>Сохранить</button>
			</form>
            <a class="default__link--nodecoration default__button" href="<?php if(isset($_GET['admin'])) echo 'index.php'; 
                        else echo '../index.php';?>"><!--span class="default__symbols--contactSend"></span-->Отмена</a>
        </div>
        <!--script>        
        if (window.localStorage) {
          var elements = document.querySelectorAll('[name]');

          for (var i = 0, length = elements.length; i < length; i++) {
            (function(element) {
              var name = element.getAttribute('name');

              element.value = localStorage.getItem(name) || '';

              element.onkeyup = function() {
                localStorage.setItem(name, element.value);
              };
            })(elements[i]);
          }
        }
        </script-->        
    </body>
</html>