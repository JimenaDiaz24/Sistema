<?php
require("../includes/constants.php");
require("../includes/functions.php");

//$joyeria

if(isset($_GET['q']))
{
    $joyeria=query("SELECT * FROM joyeria where nombre LIKE ?",'%'. $_GET['q'].'%');   
}else{
    $joyeria=query("SELECT * FROM joyeria");
}
require("../templates/header.php");
require("../templates/index.php");
?>


