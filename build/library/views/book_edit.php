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
			<form method="post" class="form" action="index.php?action=edit&id=<?=$books['id']?>">
                <h1>Библиотека</h1>
                <h2>Редактировать</h2>
                <input class="inputField--description focused" name="title" type="text" placeholder="Название книги" value="<?=$books['title']?>" required>
				<input class="inputField--author focused" name="author" type="text" placeholder="Автор" value="<?=$books['author']?>" required><br>
                <textarea class="inputField--content focused" name="content" placeholder="Фрагмент (по желанию)"><?=$books['content']?></textarea>
                <small>Дата последнего изменения: <?=$books['date']?></small>
                <input name="date" type="hidden" value="<?=date('Y-m-d H:i:s')?>">
                <a href="index.php" class="button"><!--span class="default__symbols--contactSend"></span-->Отмена</a>            
				<button class="button--shy" type="submit"><span class="default__symbols--contactSend"></span>Сохранить изменения</button>
			</form>

    </body>
</html>