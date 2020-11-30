<html>
<?php
$Name = $_POST['Name'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Phone_number = $_POST['Phone_number'];
if(!empty($Name)|| !empty($password)|| !empty($Gender)|| !empty($Email)|| !empty($Phone_number))
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$INSERT = "INSERT Into reg_form (Name, password, Gender, Email, Phone_number)
VALUES('$Name','$password','$Gender','$Email',$Phone_number)";
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
