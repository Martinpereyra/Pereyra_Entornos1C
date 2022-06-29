<?php
if(isset($_POST["estilo"])){
    $vEstilo = $_POST["estilo"];
    setcookie("estilo",$vEstilo,time() + (60 * 60 * 24 * 90));
}else{
    if(isset($_COOKIE["estilo"])){
        $vEstilo = $_COOKIE["estilo"];
    }
}
?>
<html>
    <?php
    if(isset($vEstilo)){
        echo '<link rel="stylesheet" type="text/css" href="' . $vEstilo . '.css">';
    }
    ?>
    <div class="fondo">
        <p>>Elegir estilo</p>
        <form method="POST" action="estilos.php">
            <select name="estilo">
                <option value="oscuro" > Modo oscuro </option>
                <option value="claro" > Modo claro </option>
            </select>
            <input type="submit">

        </form>

    </div>
</html>