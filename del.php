<?php
require_once("functions.php");
$id=$_GET["id"];
deletePfa($id);
header("location:accueil.php");



?>