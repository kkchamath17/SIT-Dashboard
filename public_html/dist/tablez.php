<?php

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpcvcsjfun";
// Create connection
$mysqli = new mysqli("localhost", "root", "", "gpcvcsjfun");


$query = sprintf("SELECT product_id, product_name, product_price, product_cat, product_details FROM `products`");

$result = $mysqli->query($query);

$datatable = array();
foreach ($result as $row) {
   $datatable[] = $row; 
}

$result->close();

$mysqli->close();

print json_encode($datatable);

?>