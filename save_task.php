<?php
    //echo "print";
    if(isset($_POST['save_task'])){
       $title = $_POST['title'];
       $author = $_POST['author'];
       $genre = $_POST['genre'];
       $publication_date = $_POST['publication_date'];
       $description = $_POST['description'];
       echo $title;
       echo $author;
       echo $genre;
       echo $publication_date;
       echo $description;

    }
?>