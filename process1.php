
<?php 



$startTime2 = $_REQUEST["startDatentime2"]; 
//$finishTime2 = $_REQUEST["finishDatentime2"]; 

//to remove the seconds from the date
$dateLedON = substr($startTime2, 0, strlen($startTime2)-3);
//$dateLedOFF = substr($startTime2, 0, strlen($startTime2)-3);

//echo $dateLedON;


$dateNOW =  date("d/m/Y H:i");
$interval = new DateInterval ('PT1M');
//$period = new 
echo $dateNOW;

//if ($dateNOW == $dateLedON)
//{
//	system("gpio -g mode 22 out");
//	system("gpio -g write 22 1");

//}else ($dateNOW == $dateLedOFF){

//	system("gpio -g mode 22 out");
//	system("gpio -g write 22 0");

//}

//do {

//$dateNOW = date("d/m/Y H:i");
//echo $dateNOW;

//} while($dateNOW =! $dateLedON);

//system("gpio -g mode 22 out");
//system("gpio -g write 22 1");


?>
