<?php
session_start();

$conexion = mysqli_connect("localhost","root");
mysqli_select_db($conexion,"compras");

if(isset($_SESSION["carrito"])){
    $carrito = $_SESSION["carrito"];
}else{
    $carrito = null;
}

$resultado = mysqli_query($conexion,"select * from catalogo");
?>

<html>
<form method="POST" action="store.php">
<table>
<?php
while($row = mysqli_fetch_array($resultado)) {
    if(isset($carrito[$row["producto"]])){
        $valorActual = $carrito[$row["producto"]];
    }else{
        $valorActual=0;
    }

?>
<tr>
                <td><?php echo $row["producto"]?></td>
                <td> <input name="<?php echo $row["producto"]?>" type="number" value="<?php echo $valorActual ?>"> </td>
</tr>
<?php
				}
?>
</table>
<input type="submit" value="Guardar carrito">
</form>
</html>