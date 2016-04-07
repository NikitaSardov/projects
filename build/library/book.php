<?php
    require_once("database.php");
    require_once("views/catalog.php");
    
    $link = db_connect();
    $book = books_get($link, $_GET['id']);

    include("views/book.php");
?>