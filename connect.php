<?php
$fdate = filter_input(INPUT_POST, 'fdate');
$tdate = filter_input(INPUT_POST, 'tdate');
$guests = filter_input(INPUT_POST, 'guests');
$children = filter_input(INPUT_POST, 'children');
$roomtype = filter_input(INPUT_POST, 'roomtype');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "alberghi";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
	}
else{
	$sql = "INSERT INTO ftravel_details (fdate,tdate,guests,children,roomtype)
	values ('$fdate','$tdate','$guests','$children','$roomtype')";
	if ($conn->query($sql)){
		echo "New record is inserted sucessfully";
		}
	else{
		echo "Error: ". $sql ." ". $conn->error;
		}
$conn->close();
	}
?>