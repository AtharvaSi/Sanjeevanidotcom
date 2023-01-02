<?php 
error_reporting(0);

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$connection = mysqli_connect("localhost","root", "","sanjeevani") or die ("connection failed");
$sql = "INSERT INTO sanjeevanidot(name,  email , number ,  subject , message) VALUES ('{$name}','{$email}','{$number}','{$subject}','{$message}' ) ";

$result = mysqli_query($connection, $sql) or die ("query failed");


mysqli_close($connection)

?>




