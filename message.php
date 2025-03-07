<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bbc";
$Name=$_POST['fname'];
$mail=$_POST['email'];
$phone=$_POST['contactno'];
$message=$_POST['message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact ( name, mail, phone, message)
VALUES ('$Name', '$mail', '$phone','$message')";

if ($conn->query($sql) === TRUE) {
include 'submission.html';
} else {
  echo "Error: Try Again! " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>