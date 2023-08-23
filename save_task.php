<?php

//utilizamos este include para enlazar la variable
include("db.php");


    //echo "print";
    if(isset($_POST['save_task'])){
       $title = $_POST['title'];
       $author = $_POST['author'];
       //$genre = $_POST['genre'];
       $publication_date = $_POST['publication_date'];
       $description = $_POST['description'];
       /*echo $title;
       echo $author;
       echo $genre;
       echo $publication_date;
       echo $description;*/
       
       

       $query = "INSERT INTO libro (title, author, publication_date, description) VALUES('$title','$author','$publication_date','$description')";
       $result = mysqli_query($conn, $query);
       echo "no llega aca";
        if(!$result){
            die("Query Failed");
        }
        //echo "saved";

        $_SESSION['message'] = 'Book Saved';
        //$_SESSION['message_type'] = '';



        header("Location: index.php");

    }
?>