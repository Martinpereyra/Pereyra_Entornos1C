<?php
if(isset($_COOKIE["contador"])){
    $vContadorActual = $_COOKIE["contador"];
    $vContador = $vContadorActual + 1;
    setcookie("contador",$vContador,time() + (60 * 60 * 24 * 90));
}else{
    $vContador = 1;
    setcookie("contador",$vContador,time() + (60 * 60 * 24 * 90));
    
}
?>
<html>
<?php 
    if($vContador == 1){
        echo '<h1>Bienvenido Usuario, es la primera vez que visitas la pagina</h1>';
    }
    else{
        echo '<h1>El numero de veces que se visito la pagina es: ' . $vContadorActual . '';
    }


?>

</html>