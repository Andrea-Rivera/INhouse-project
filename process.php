<?php

session_start();

//connection with BD

include_once ("connection.php");

//Receiving data

$startDatentime = $_REQUEST["startDatentime"]; 
$finishDatentime = $_REQUEST["finishDatentime"];


// Convert variable startDatentime date and hour to database format

$startDatentimedb = explode(" ", $startDatentime);
list($date,$hour) = $startDatentimedb;

$date_no_backslash = array_reverse(explode("/", $date));
$date_no_backslash = implode("-", $date_no_backslash);
$date_no_backslash = $date_no_backslash." ".$hour;

// Convert variable finishDatentime date and hour to database format

$finishDatentimedb = explode(" ", $finishDatentime);
list($date1,$hour1) = $finishDatentimedb;

$date_no_backslash1 = array_reverse(explode("/", $date1));
$date_no_backslash1 = implode("-", $date_no_backslash1);
$date_no_backslash1 = $date_no_backslash1." ".$hour1;

//save in db

$datentimedb = "INSERT INTO dateTimeWM (startDatentime,finishDatentime) VALUES ('$date_no_backslash','$date_no_backslash1')";
$dateResult = mysqli_query($conn, $datentimedb);



//verify if date was saved

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<div class = 'alert alert-success'>Start Time for washing machine registered successfully </div>";
	header("Location: index.php");
}else{

	$_SESSION['msg'] = "<div class = 'alert alert-danger'> Error to register Start Time </div>";
	header("Location: index.php");
}






?>

