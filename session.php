<?php
session_start();
$_SESSION["username"]="cyber warriors";
echo $_SESSION["username"];

$session_unset();
$_SESSION["username"]="cyber warriors";


?>