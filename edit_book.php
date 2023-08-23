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
            $publication_date= $row['publication_date'];
            $description = $row['description'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title= $_POST['title'];
        $author = $_POST['author'];
        $publication_date = $_POST['publication_date'];
        $description = $_POST['description'];

        $query = "UPDATE libro set title = '$title', author = '$author', publication_date = '$publication_date', description = '$description' WHERE id_libro = $id ";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'libro actualizado';
        header("Location: index.php");
    }
    
?>

<?php include ("includes/header.php")?>
<h3>Ingrese los cambios que desee:</h3>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card_body">
                <form action="edit_book.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div class = "form-group">
                        <input type= "text" name= "title" value="<?php echo $title; ?>"
                        class= "form-control" placeholder ="Actualiza el titulo" >
                    </div>
                    <div class = "form-group">
                        <input type= "text" name= "author" value="<?php echo $author;?>"
                        class= "form-control" placeholder ="Actualiza el autor" >
                    </div>
                    <div class = "form-group">
                        <input type= "text" name= "publication_date" value="<?php echo $publication_date; ?>"
                        class= "form-control" placeholder ="Actualiza la fecha de publicacion" >
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