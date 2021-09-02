<?php

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpcvcsjfun";
// Create connection
$mysqli = new mysqli("localhost", "root", "", "gpcvcsjfun");



$query = sprintf("SELECT month, revenue FROM `sales_stats` ORDER BY LENGTH(month),month");

$result = $mysqli->query($query);

$data = array();
foreach ($result as $row) {
   $data[] = $row; 
}

$result->close();

$mysqli->close();

print json_encode($data);

?>