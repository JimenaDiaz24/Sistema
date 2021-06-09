<?php
require("../includes/constants.php");
require("../includes/functions.php");

$nombre=$_POST["nombre"];

$precio=$_POST["precio"];

$descrip=$_POST["descrip"];

$stock=$_POST["stock"];

$imagen=$_POST["imagen"];


$inserccion=query("INSERT INTO `joyeria` (`id`, `nombre`, `precio`, `descrip`, `stock`, `imagen`) VALUES (NULL, ?, ?, ?, ?, ?)",$nombre,$precio,$descrip,$stock,$imagen);
var_dump($inserccion);

//echo("Guardado en la base de datos");
redirect();
?>


