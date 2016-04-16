<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<style>
		</style>
		<link href="../css/styles.css" rel="stylesheet" type="text/css" />
        <title>Библиотека.Добавление книги</title>
    </head>
    <body>
        <div class="default__container">
            <div class="default__header">
                <h1 class="default__header--1">Библиотека</h1>
                <h2 class="default__header--2 default--recomended">Новая книга</h2>
            </div>
            <form method="post" action="index.php?action=add<?php if (isset($_GET['admin'])) echo '&admin';?>"  onsubmit="return validateForm()">
                <div class="input">
                    <input class="input__title" name="title" type="search" placeholder="Название книги" required autofocus>
				    <input class="input__author" name="author" type="search" placeholder="Автор">
                    <textarea class="input__description" name="description" placeholder="Фрагмент (по желанию)"></textarea>
                    <input class="input__contributor" name="contributor" type="search" placeholder="Ваше имя (по желанию)">
                </div>
                <input name="date" type="hidden" value="<?=date('d-m-Y H:i:s')?>">
                <input name="contributor_IP" type="hidden" value="<?=$_SERVER['REMOTE_ADDR']?>">
                <div class="default__buttonContainer">
                    <button type="submit" class="default__button default__button--recomended">Сохранить</button>
                    <a class="default__link--nodecoration default__button default__button--warning" href="<?php if (!isset($_GET['admin'])) echo '../';?>index.php">
    <?php                   if (!isset($_GET['admin'])) echo 'Каталог'; 
                            else echo 'Редактор библиотеки';?>
                    </a>
                </div>
			</form>
        
        <script>        
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
        </script>
      </body>
</html>