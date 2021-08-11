<?php
session_start();
$_SESSION["carid"]=$_POST['id'];
echo $_SESSION["carid"];
?>