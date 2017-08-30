<?php
require('db.php');

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$birth_month = mysqli_real_escape_string($link, $_REQUEST['birth_month']);
$birth_day = mysqli_real_escape_string($link, $_REQUEST['birth_day']);
$birth_year = mysqli_real_escape_string($link, $_REQUEST['birth_year']);
$home_address= mysqli_real_escape_string($link, $_REQUEST['home_address']);
$phone_number= mysqli_real_escape_string($link, $_REQUEST['phone_number']);
$mobile_number= mysqli_real_escape_string($link, $_REQUEST['mobile_number']);
$occupation= mysqli_real_escape_string($link, $_REQUEST['occupation']);
$business_phone= mysqli_real_escape_string($link, $_REQUEST['business_phone']);
$spouse_name= mysqli_real_escape_string($link, $_REQUEST['spouse_name']);
$spouse_phone= mysqli_real_escape_string($link, $_REQUEST['spouse_phone']);
$medical_doctor= mysqli_real_escape_string($link, $_REQUEST['medical_doctor']);
$last_visit= mysqli_real_escape_string($link, $_REQUEST['last_visit']);
$dentist_visit= mysqli_real_escape_string($link, $_REQUEST['dentist_visit']);
$referral= mysqli_real_escape_string($link, $_REQUEST['referral']);

$sql = "INSERT INTO patients 
(first_name, last_name, email, password, birth_month, birth_day, birth_year, home_address, phone_number, mobile_number, occupation, business_phone, spouse_name, spouse_phone, medical_doctor, last_visit, dentist_visit, referral) 
VALUES 
('$first_name', '$last_name', '$email', '$password', '$birth_month', '$birth_day', '$birth_year', '$home_address', '$phone_number', '$mobile_number', '$occupation', '$business_phone', '$spouse_name', '$spouse_phone', '$medical_doctor', '$last_visit', '$dentist_visit', '$referral')";

if(mysqli_query($link, $sql)){
	
    header("Location: /home.php");
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>