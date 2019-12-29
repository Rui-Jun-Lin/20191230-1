<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newblance";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO new (name,phone,email,message) VALUES ('". $_POST["name"]."','". $_POST["phone"]."','".$_POST["email"]."','". $_POST["message"]."')";
if ($conn->query($sql) === TRUE) {
	header("Location:contact.html"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>