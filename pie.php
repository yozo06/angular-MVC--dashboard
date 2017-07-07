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

$result = $conn->query("SELECT NUM_OF_USERS,FILE_NAME FROM MULTIPLE_USERS_REF NATURAL JOIN FILE_DETAILS HAVING NUM_OF_USERS>1;
");
while($row = $result->fetch_array())
{
$rows[] = $row;
}
$arr = array();
foreach($rows as $row)
{
	$array=array();
array_push($array,$row['NUM_OF_USERS'],$row['FILE_NAME']);
array_push($arr,$array);
}

echo json_encode($arr);

/* free result set */
$result->close();
$conn->close();
?>