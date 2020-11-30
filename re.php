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
$dbName = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli($host, $dbName, $dbPassword, $dbEmail);
if($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$INSERT = "INSERT Into reg_form (Name, Password, Gender, Email, Phone)
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