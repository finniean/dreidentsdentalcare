<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$appt_date = mysqli_real_escape_string($link, $_REQUEST['appt_date']);
$appt_time = mysqli_real_escape_string($link, $_REQUEST['appt_time']);
$services = mysqli_real_escape_string($link, $_REQUEST['services']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile_number = mysqli_real_escape_string($link, $_REQUEST['mobile_number']);

$sql = "INSERT INTO appointments
(appt_date, appt_time, service, first_name, last_name, email, mobile_number)
VALUES 
('$appt_date', '$appt_time', '$services', '$first_name', '$last_name', '$email', '$mobile_number')";

if(mysqli_query($link, $sql)){
    header("Location: /pages/admin/set_appointment.php");
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>