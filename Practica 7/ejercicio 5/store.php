<?php
session_start(); 
if(isset($_POST["user"])){
    $_SESSION["user"] = $_POST["user"];
}
if(isset($_POST["pass"])){
    $_SESSION["pass"] = $_POST["pass"];
}
?>

<html>
    <a href="inicio.php">
        Ir a home
    </a>
</html>