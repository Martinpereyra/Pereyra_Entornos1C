<?php 
session_start();

?>


<html>
<h1>Bienvenido <?php echo $_SESSION["user"];?></h1>

<p>Su contraseña actual es: <?php echo $_SESSION["pass"];?></p>

</html>