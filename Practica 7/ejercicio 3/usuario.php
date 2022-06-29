<?php 
if(isset($_COOKIE["nombre"])){
    $vUserActual = $_COOKIE["nombre"];    
}else{
    $vUserActual = '';
}
if(isset($_POST["nombre"])){
    setcookie("nombre",$_POST["nombre"],time() + (60 * 60 * 24 * 90));
}
?>


<html>
    <h1>Bienvenido <?php echo $vUserActual; ?></h1>
    <form method="POST" action="usuario.php">
        <label>Nombre</label>
        <input type="TEXT" name="nombre" placeholder="Ingrese un nombre">
        <input type="submit">
    </form>

</html>