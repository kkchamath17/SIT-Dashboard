<?php
header('Content-Type: application/json');

//database

    $servername = "localhost";
    $username = "gpcvcsjfun";
    $password = "Chamath@1999";
    $dbname = "gpcvcsjfun";

// Create connection
    $conn = new mysqli("localhost", "gpcvcsjfun", "Chamath@1999", "gpcvcsjfun");

        if(!$mysqli){
            die("connection failed:" . $mysqli->error);
        }

//query to get data from table

    $