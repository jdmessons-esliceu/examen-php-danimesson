<?php
$serverName = "db";
$username   = "administrador";
$password   = "administrador123";
$dbName     = "academia";

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
   die("Error de conexión: " . $conn->connect_error);
}