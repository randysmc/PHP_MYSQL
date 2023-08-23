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


            <div>
                <form action="edit_book.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div>
                        <input type= "text" name= "title" value="<?php echo $title; ?>"
                         placeholder ="Actualiza el titulo" >
                    </div>
                    <div >
                        <input type= "text" name= "author" value="<?php echo $author;?>"
                        placeholder ="Actualiza el autor" >
                    </div>
                    <div>
                        <input type= "text" name= "publication_date" value="<?php echo $publication_date; ?>"
                        placeholder ="Actualiza la fecha de publicacion" >
                    </div>
                    <div>
                        <textarea name="description" rows="2" placeholder="Actualiza descripcion"><?php echo $description?></textarea>
                    </div>
                    <button  onclick="confirm('Esta seguro de actualizar este libro?');" name= "update">
                        Update
                    </button>
                </form>
            </div>


<?php include ("includes/footer.php")?>