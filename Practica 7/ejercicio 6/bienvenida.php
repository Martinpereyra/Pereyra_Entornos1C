<?php
session_start();
if(isset($_SESSION['nombre'])){
    $vNombre = $_SESSION['nombre'];
}
else{
    $error = "No hay alumno buscado. ";
}
session_destroy();
?>

<html>
    <?php

    if(isset($error)){
        echo '<a href="formulario.html">'.$error.'Volver al formulario.</a>';
    }else{
        echo '<h1>Bienvenido '.$vNombre.'</h1>';
    }
    ?>


</html>
