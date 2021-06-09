<?php
require("../includes/constants.php");
require("../includes/functions.php");

$joya=query("SELECT * FROM joyeria where id=?",$_GET['id'])[0];

require("../templates/header.php");
require("../templates/foreditar.php");
?>


