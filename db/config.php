<?php

// creating the connection
$host = "localhost";
$user = "root";
$password = "";
$database = "CIT";

$conn = mysqli_connect($host, $user, $password);

// if the database doesnt exist, create a database
$query = "CREATE DATABASE IF NOT EXISTS CIT";

$result = mysqli_query($conn, $query);


// connecting to the database
$conn = mysqli_connect($host, $user, $password, $database);



// creating the tables 
$query = "CREATE TABLE IF NOT EXISTS `USER` (
`user_id` VARCHAR(50) PRIMARY KEY,
`firstname` VARCHAR(50),
`lastname` VARCHAR(50),
`email` VARCHAR(100) UNIQUE,
`phonenumber` INT(11),
`address` VARCHAR(150),
`DOB` VARCHAR(250),
`nationality` VARCHAR(50),
`account_number` INT(10)
)";

$result = mysqli_query($conn, $query);




?>