<?php
require("../includes/constants.php");
require("../includes/functions.php");

$eliminar=query("DELETE FROM `joyeria` WHERE `joyeria`.`id` = ?",$_GET["id"]);
var_dump($eliminar);

/*echo("Borrado de la base de datos");*/
redirect();
?>



