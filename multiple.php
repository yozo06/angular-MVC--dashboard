<?php
$servername = "10.10.113.1:3306";
$username = "probuddy";
$password = "ProBuddy123";
$dbname = "probuddyDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$request = current($conn->query("SELECT COUNT(NUM_OF_USERS) FROM MULTIPLE_USERS_REF  WHERE NUM_OF_USERS>1;")->fetch_assoc());
echo $request;

$conn->close();
?>