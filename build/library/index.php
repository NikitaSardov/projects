<?php
    require_once("database.php");
    require_once("models/functions.php");

    $link = db_connect();
    $books = books_all($link);

 if(isset($_GET['action']))
        $action = $_GET['action'];
        else 
        $action = "";

    if($action == "add") {
        if(!empty($_POST)){
            books_new($link, $_POST['title'], $_POST['author'], $_POST['content'], $_POST['date']);
            header("Location: index.php");
        }
        include("views/book_add.php");
    }   else {
        $books = books_all($link);
        include("views/catalog.php");
    }

?>