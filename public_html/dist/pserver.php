<?php
$servername = "localhost";
$username = "gpcvcsjfun";
$password = "Chamath@1999";
$dbname = "gpcvcsjfun";
// Create connection
$conn = new mysqli("localhost", "gpcvcsjfun", "Chamath@1999", "gpcvcsjfun");
if (isset($_POST['reg_p'])) {
// receive all input values from the form
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$price = mysqli_real_escape_string($conn,$_POST['pirce']);
$pcat = mysqli_real_escape_string($conn,$_POST['pcat']);
$product_details = mysqli_real_escape_string($conn,$_POST['pdetails']);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO products (product_name,product_price,product_cat,product_details)
VALUES ('$pname', '$price', '$pcat', '$pdetails');";
if ($conn->query($sql) === TRUE) {
echo "alert('New record created successfully');";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>