<?php

$name = $_POST['name'];
$email =  $_POST['email'];



 $servername= "localhost";
 $user = "root";
 $password ="password";
 $dbname = "schedule"; 

 // Creation of connection
$conn = mysqli_connect($servername, $user, $password, $dbname);

if (!$conn){
	die("Connection failed: " .mysqli_connect_error());

}

echo "connected successfully";
echo $email;

mysqli_query("INSERT INTO test (name, email) VALUES ('$name','$email')");

$registered = mysql_affected_rows();

echo "$registered was inserted";



?>
