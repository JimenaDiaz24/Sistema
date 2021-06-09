<?php
 require("../includes/constants.php");
 require("../includes/functions.php");
 
 $nombre=$_POST["nombre"];
 
 $precio=$_POST["precio"];
 
 $descrip=$_POST["descrip"];
 
 $stock=$_POST["stock"];
 
 $imagen=$_POST["imagen"];
 
 
 $editar=query("UPDATE `joyeria` SET `nombre` = ?, `precio` = ?, `descrip` = ?, `stock` = ?, `imagen` = ? WHERE `joyeria`.`id` = ?",$nombre,$precio,$descrip,$stock,$imagen,$_GET['id']);
 var_dump($editar);
 
 redirect();
 //echo("Guardado en la base de datos");

?>


