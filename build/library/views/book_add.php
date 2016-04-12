<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<style>
		</style>
		<link href="../css/styles.css" rel="stylesheet" type="text/css" />
        <title>Библиотека</title>
    </head>
    <body>
        <div class="default__container">
            <h1>Библиотека</h1>
            <h2>Новая книга</h2>
            <form method="post" action="index.php?action=add<?php if (isset($_GET['admin'])) echo '&admin';?>">
                <input class="input__title" name="title" type="search" placeholder="Название книги" required autofocus>
				<input class="input__author" name="author" type="search" placeholder="Автор">
                <textarea class="input__description" name="description" placeholder="Фрагмент (по желанию)"></textarea>
                <input class="input__contributor" name="contributor" type="search" placeholder="Ваше имя (по желанию)">
                <input name="date" type="hidden" value="<?=date('d-m-Y H:i:s')?>">
                <input name="contributor_IP" type="hidden" value="<?=$_SERVER['REMOTE_ADDR']?>">
                <button><div class="default__button" type="submit"><span class="default__symbols--contactSend"></span>Сохранить</div></button>
			</form>
            <a class="default__link--nodecoration" href="<?php if (!isset($_GET['admin'])) echo '../';?>index.php"><button>
                <div class="default__button">
                    <!--span class="default__symbols--contactSend"></span-->
<?php              if (!isset($_GET['admin'])) echo 'Каталог'; 
                    else echo 'Редактор библиотеки';?>                
                </div>
                </button>
            </a>
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