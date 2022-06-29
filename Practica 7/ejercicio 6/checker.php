<?php
include("conexion.inc");
if(isset($_POST['mail'])){
    $vMailBuscar = $_POST['mail'];
    $vSQL = "SELECT nombre FROM alumnos WHERE mail LIKE '$vMailBuscar'";
    $vResultado = mysqli_query($link,$vSQL);
    $vNombre = mysqli_fetch_assoc($vResultado);
    session_start();
    if(isset($vNombre)){
        $_SESSION['nombre'] = $vNombre['nombre'];
    }else{
        $error = "No se encuentra el mail en la base. ";
    }
    
}else{
    $error = "Ingrese un email. ";
}
?>
<html>
    <?php
    if(isset($error)){
        echo '<a href="formulario.html">'.$error.' Volver al formulario</a>';
    }
    else{
        echo '<a href="bienvenida.php">Ir a la pagina de bienvenida</a>';   
    }
 ?>
</html>
