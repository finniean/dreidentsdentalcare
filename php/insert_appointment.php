<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
session_start();

$appt_date = mysqli_real_escape_string($link, $_REQUEST['appt_date']);
$appt_time = mysqli_real_escape_string($link, $_REQUEST['appt_time']);
$services = mysqli_real_escape_string($link, $_REQUEST['services']);

$sql = "INSERT INTO appointments
(appt_date, appt_time, service, first_name, last_name, email, mobile_number)
VALUES 
('$appt_date', '$appt_time', '$services', '{$_SESSION['username']}', '{$_SESSION['last_name']}', '{$_SESSION['email']}', '{$_SESSION['mobile_number']}')";

if(mysqli_query($link, $sql)){
    header("Location: /pages/thankyou.php");
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>