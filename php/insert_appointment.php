<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
session_start();

$appt_date = mysqli_real_escape_string($link, $_REQUEST['appt_date']);
$appt_time = mysqli_real_escape_string($link, $_REQUEST['appt_time']);
$services = mysqli_real_escape_string($link, $_REQUEST['services']);


$sql = "INSERT INTO appointments
(`appt_date`, `appt_time`, `service`)
VALUES 
('$appt_date', '$appt_time', '$services'";

if(mysqli_query($link, $sql)){
    header("Location: /pages/thankyou.php");
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>