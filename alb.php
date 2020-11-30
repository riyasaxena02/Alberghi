<?php

$From = $_POST['From'];
$To= $_POST['To'];
$Number_of_guests= $_POST['Number_of_guests'];
$Number_of_children = $_POST['Number_of_children'];
$Type_of_room = $_POST['Type_of_room'];
if(!empty($From)|| !empty($To)|| !empty($Number_of_guests)|| !empty($Number_of_children) || !empty($Type_of_room))
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "al";
$conn = new mysql($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$INSERT = "INSERT Into hotel (From, To, Number_of_guests, Number_of_children, Type_of_room)
VALUES('$From','$To','$Number_of_guests', '$Number_of_children', '$Type_of_room')";
}
if ($conn->query($INSERT) === TRUE)
{
echo "New record created successfully";
}
else
{
    echo "Error: " . $INSERT . "<br>" . $conn->error;
}
$conn->close();
?>
