<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM libro WHERE id_libro = $id";
        $result = mysqli_query($conn, $query);
        //se verifica el resultado
        if(mysqli_num_rows($result) == 1){
            $row= mysqli_fetch_array($result);
            $title = $row ['title'];
            $author = $row ['author'];
            $date_publication = $row['date_publication'];
            $description = $row['description'];
            echo $title ;
            echo $author ;
            echo $date_publication ;
            echo $description ;
        }
    }
    
?>

<?php include ("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card_body">
                <form action="">
                    <div class = "form-group">
                        <input type= "text" name= "title" value="<?php echo $title; ?>"
                        class= "form-control" placheholder ="Actualiza el titulo" >
                    </div>
                    <div class = "form-group">
                        <input type= "text" name= "author" value="<?php echo $author;?>"
                        class= "form-control" placheholder ="Actualiza el autor" >
                    </div>
                    <div class = "form-group">
                        <input type= "text" name= "date_publication" value="<?php echo $date_publication; ?>"
                        class= "form-control" placheholder ="Actualiza la fecha de publicacion" >
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Actualiza descripcion"><?php echo $description?></textarea>
                    </div>
                    <button class= "btn btn-success" name= "update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php")?>