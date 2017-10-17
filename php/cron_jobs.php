<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$today= date('m/d/y');
$update = "UPDATE appointments SET status = 'Expired' WHERE appt_date <= '$today' and status != 'Done';";
$result=mysqli_query($link, $update);

$sql="SELECT * FROM appointments";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)) {
   while($row = mysqli_fetch_array($result)) {

	$setdate = $row['appt_date'];

	$datetime1 = new DateTime($today) ;
	$datetime2 = new DateTime($setdate) ;
	$interval = $datetime1->diff($datetime2);
    $diff = $interval->format('%a');

		if($diff == '1'){
		    $to = $row['email'];
			$subject = 'Appointment Reminder';
			$message = "Good Morning ". $row['first_name'] ."!\n\nWe want to remind you of your appointment tomorrow ". $row['app_time'] ." for ". $row['service'] ."";
			mail( $to, $subject, $message );
		}
   }
}
	
?>