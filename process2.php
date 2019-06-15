<?php

session_start();

//connection with BD

include_once ("connection.php");

//Receiving data

$startDatentime2 = $_REQUEST["startDatentime2"]; 
$finishDatentime2 = $_REQUEST["finishDatentime2"];

// Convert variable startDatentime2 date and hour to database format

$startDatentimedb2 = explode(" ", $startDatentime2);
list($date2,$hour2) = $startDatentimedb2;

$date_no_backslash2 = array_reverse(explode("/", $date2));
$date_no_backslash2 = implode("-", $date_no_backslash2);
$date_no_backslash2 = $date_no_backslash2." ".$hour2;

// Convert variable finishDatentime2 date and hour to database format

$finishDatentimedb2 = explode(" ", $finishDatentime2);
list($date3,$hour3) = $finishDatentimedb2;

$date_no_backslash3 = array_reverse(explode("/", $date3));
$date_no_backslash3 = implode("-", $date_no_backslash3);
$date_no_backslash3 = $date_no_backslash3." ".$hour3;

//save in db

$datentimedb2 = "INSERT INTO dateTimeAC (startDatentime2,finishDatentime2) VALUES ('$date_no_backslash2','$date_no_backslash3')";
$dateResult2 = mysqli_query($conn, $datentimedb2);

//verify if date was saved

//if(mysqli_insert_id($conn)){
//	$_SESSION['msg'] = "<div class = 'alert alert-success'>Start Time for Air Conditioner registered successfully </div>";
//	header("Location: index.php");
//}else{

//	$_SESSION['msg'] = "<div class = 'alert alert-danger'> Error to register Start Time </div>";
//	header("Location: index.php");
//}



//echo date_format = ($startTime2,"d/m/Y H:i");

//echo $finishTime2;

//echo $dateNow = date('d/m/Y H:i'); 

//if ($dateNow == $startTime2)
//{
//system("gpio -g mode 22 out");
//system("gpio -g write 22 1");
//}else {
//system("gpio -g mode 22 out");
//system("gpio -g write 22 0");

//}

?><br>

	
	

