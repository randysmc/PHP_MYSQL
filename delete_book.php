<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $query = "DELETE FROM libro WHERE id_libro = $id";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Libro borrado';
        header("Location: index.php");

    }


?>