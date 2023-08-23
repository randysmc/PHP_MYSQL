<?php
//echo "hola";
//Sesión que nos permita guardar un dato
session_start();



$conn = mysqli_connect(
    'localhost',
    'root',
    'password',
    'bookstore'
);

/*if (isset($conn)){
    echo "Conexion a la base de datos bookstore establecida";
}*/

?>