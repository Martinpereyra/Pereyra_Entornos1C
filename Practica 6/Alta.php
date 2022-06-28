<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$vNomCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTieneMetro = $_POST['tienemetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(id) as canti FROM ciudades WHERE ciudad LIKE '%$vNomCiudad%' AND pais LIKE '%$vPais%' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCiudades ['canti']!=0){
 echo ("La ciudad ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO `ciudades`(`ciudad`, `pais`, `habitantes`, `superficie`, `tieneMetro`) VALUES ('$vNomCiudad','$vPais','$vHabitantes','$vSuperficie','$vTieneMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("La ciudad fue Registrado, Pronto recibirás un email, confirmandote la actualizaciòn a
nuestra pagina<br>");
 echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>