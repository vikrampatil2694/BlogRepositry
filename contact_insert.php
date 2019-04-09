<?php
///input from user
$name=$_POST["visitorName"];
$email=$_POST["visitorEmail"];
$subject=$_POST["subject"];
$message=$_POST["message"];

//database connection
$servername = "localhost";
$username = "vikram";
$pass ="vikram@123";
$dbname = "blogdb";

$conn = new mysqli($servername, $username,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//insert query
$sql="insert into visitorscontact(name,email,subject,message) values ('$name','$email', '$subject','$message')";
if ($conn->query($sql) === TRUE) {
    header("Location: home.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>