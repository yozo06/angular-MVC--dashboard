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
$conn->query("CREATE OR REPLACE VIEW MULTIPLE_USERS_REF AS SELECT COUNT(USERNAME) AS NUM_OF_USERS , FILE_ID FROM EVENTS_ON_FILE WHERE BRANCH_ID=1 GROUP BY FILE_ID;");
$request = current($conn->query("select COUNT(*) from FILE_DETAILS;")->fetch_assoc());
echo $request;

$conn->close();
?>