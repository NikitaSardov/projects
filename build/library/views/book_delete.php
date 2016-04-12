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
            <h2 class="warning">Удалить КНИГУ??</h2>
			<form method="post" action="index.php?action=delete&confirm=1&id=<?=$books['id']?>">
                <label><h3 class="book__title"><input type="checkbox" name="id" value="<?=$books['id']?>" required><?=$books['title']?></h3></label>
                <h4 class="book__author"><?=$books['author']?></h4>
                <p class="default__bookAdded">Книга добавлена: <?=$books['date']?></p><br>
                <a class="default__link--nodecoration default__button" href="index.php"><span class="default__symbols--contactSend"></span>Не удалять</a>
				<button class="default__button" type="submit"><span class="default__symbols--contactSend"></span>Да, удалить</button>
			</form>
        </div>
    </body>
</html>