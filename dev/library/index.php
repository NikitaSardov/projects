<?php
    require_once("database.php");
    require_once("models/books.php");

    $link = db_connect();
    $books = books_all($link);

    include("views/catalog.php");
?>