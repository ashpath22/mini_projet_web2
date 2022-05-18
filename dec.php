<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["id"]);
$_SESSION["erreur"]="merci pour votre connexion Mr/Mlle";
$_SESSION["type"]="warning";
header("location:connexion.php");



?>