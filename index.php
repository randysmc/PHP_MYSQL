<?php include("db.php")?>

<?php include("includes/header.php") ?>

<div>
    <div class= "row">
        <div class = "col-md-4">


            <?php if(isset($_SESSION['message'])){?>
                <div role="alert">
                <?= $_SESSION['message']?>
                <button type= "button" class="close" aria-label ="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>

                </div>
            <?php session_unset();} ?>


            <div>
                <form id= "formulario"action="save_book.php" method="POST">
                    <div>
                        <input type = "text" name= "title"
                        placeholder="Titulo" autofocus>
                    </div>
                    <div class = "form-group">
                        <input type = "text" name= "author"
                        placeholder= "Autor" autofocus>
                    </div>
                    <div class = "form-group">
                        <input type = "text" name= "publication_date"
                        placeholder= "Fecha de publicacion" autofocus>
                    </div>
                    <div class = "form-group">
                        <textarea name="description" rows="2" class= "form-control"
                        placeholder= "Descripcion" autofocus></textarea>
                    </div>
                    <input onclick="confirm('Esta seguro de agregar este libro?');" type= "submit" name="save_task" value ="Guardar">
                </form>
            </div>
        </div>

        <div>
            <h1>Listado de los libros agregados:</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Fecha Publicacion</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM libro";
                        $result_books = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_books)) { ?>
                            <tr>
                                <td><?php echo $row['title']?> </td>
                                <td><?php echo $row['author']?> </td>
                                <td><?php echo $row['publication_date']?> </td>
                                <td><?php echo $row['description']?> </td>
                                <td>
                                    <!-- aqui mandamos como referencia el id que estamos utilizando -->
                                    <a href="edit_book.php?id=<?php echo $row['id_libro']?>">
                                        Editar
                                    </a>
                                    <a onclick="confirm('Esta seguro de borrar este libro?');" href="delete_book.php?id=<?php echo $row['id_libro'] ?>">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>

    
