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
			<form method="post" class="form" action="index.php?action=delete&confirm=1&id=<?=$books['id']?>">
                <h1>Библиотека</h1>
                <h2 class="warning">Удалить КНИГУ??</h2>
                <div class="book__title">
                <label><h3 class="title"><input type="checkbox" name="id" value="<?=$books['id']?>" required><?=$books['title']?></h3></label>
                <h4 class="author"><?=$books['author']?></h4></div>
                <p class="bookAdded">Книга добавлена: <?=$books['date']?></p><br>
                <a href="index.php" class="button"><span class="default__symbols--contactSend"></span>Не удалять</a>
				<button class="button--shy" type="submit"><span class="default__symbols--contactSend"></span>Да, удалить</button>
			</form>

    </body>
</html>