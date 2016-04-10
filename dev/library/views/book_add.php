<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<style>
		</style>
		<link href="<?php if (isset($_GET['admin'])) echo '../';?>css/styles.css" rel="stylesheet" type="text/css" />
        <title>Библиотека</title>
    </head>
    <body>
			<form method="post" class="form" action="index.php?action=add">
                <h1>Библиотека</h1>
                <h2>Новая книга</h2>
                <input class="inputField--description focused" name="title" type="search" placeholder="Название книги" required autofocus>
				<input class="inputField--author focused" name="author" type="search" placeholder="Автор">
                <textarea class="inputField--content focused" name="content" placeholder="Фрагмент (по желанию)"></textarea>
                <input name="date" type="hidden" value="<?=date('Y-m-d H:i:s')?>">
				<button class="button" type="submit"><span class="default__symbols--contactSend"></span>Добавить книгу</button>
                <a href="index.php"><div class="button--shy"><span class="default__symbols--contactSend"></span>В каталог</div></a>
			</form>
                <!--button class="button--shy"><span class="default__symbols--contactSend"></span>Отмена</button-->

    </body>
</html>