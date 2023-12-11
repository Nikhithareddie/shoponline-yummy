<?php
session_start();
$servername = "yummyfood.mysql.database.azure.com";
$server_user = "yummyfood";
$server_pass = "Nikkicloud@123";
$dbname = "yummyfood";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
