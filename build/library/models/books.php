<?php

    function books_all($link){
        //запрос
        $query = "SELECT * FROM books ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        //Извлечение из БД
        $n = mysqli_num_rows($result);
        $books = array();
       
        echo $n;
            
        for ($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($result);
            $books[] = $row;
        }
        
        return $books;
    }





    function books_get($link, $id_book)
    {
        //запрос
        $query = sprintf("SELECT *  FROM books WHERE id=%d",(int)$id_book);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $books = mysqli_fetch_assoc($result);
            
        return $books;
    }



function books_new($title, $author, $date){
        
    }
    function books_edit($id, $title, $author, $date){
        
    }
    function books_delete($id){
        
    }
?>