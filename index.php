<?phpinclude("db.php")?>

<?php include("includes/header.php") ?>
<div>
    <div class= "row">
        <div class = "col-md-4">
            <div>
                <form action="save_task.php" method="POST">
                    <div class= "form-group">
                        <input type = "text" name= "title"
                        placeholder="Titulo" autofocus>
                    </div>
                    <div class = "form-group">
                        <input type = "text" name= "author"
                        placeholder= "Autor" autofocus>
                    </div>
                    <div class = "form-group">
                        <input type = "text" name= "genre"
                        placeholder= "Genero" autofocus>
                    </div>
                    <div class = "form-group">
                        <input type = "text" name= "publication_date"
                        placeholder= "Fecha de publicacion" autofocus>
                    </div>
                    <div class = "form-group">
                        <textarea name="description" rows="2" class= "form-control"
                        placeholder= "Descripcion" autofocus></textarea>
                    </div>

                    <input type= "submit" name="save_task" value ="Guardar">
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>

    
