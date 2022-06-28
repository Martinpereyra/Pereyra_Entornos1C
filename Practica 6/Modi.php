<head>
<title>Modificacion</title>
</head>
<body>
<?php
session_start();
include ("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_SESSION['ciudad'];
$vPais = $_POST['pais'];
$vSuperficie = $_POST['superficie'];
$vHabitantes = $_POST['habitantes'];
$vTieneMetro = $_POST['tienemetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades set pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie',tieneMetro='$vTieneMetro' where
ciudad='$vCiudad'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La ciudad fue Modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>