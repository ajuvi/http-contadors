<?php

$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "estadistics";

$conn = new mysqli($servername,$password,$dbname);
if($mysqli->connect_errno){
   echo "Error en connectar a MySQL: " . $mysqli->connect_error;
   exit();
}

$ip=_SERVER['REMOTE_ADDR'];
$sql="INSERT INTO registre(ip) VALUES ('" . $ip . "')";
$conn->query($sql);

$resultat = $conn->query("SELECT COUNT(*) FROM registre");
$row = mysqli_fetch_array($resut);
echo $row[0];

$conn->close();
