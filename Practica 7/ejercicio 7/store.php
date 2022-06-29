<?php
session_start();
$_SESSION["carrito"] = isset($_POST) ? $_POST : null;


if($_SESSION["carrito"]){
    echo '<a href="catalogo.php">Carrito guardado. Volver al catalogo</a>';
}
else{
    echo '<a href="catalogo.php">No existe carrito. Volver al catalogo</a>';
}


?>

