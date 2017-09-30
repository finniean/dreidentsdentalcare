<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$birth_month = mysqli_real_escape_string($link, $_REQUEST['birth_month']);
$birth_day = mysqli_real_escape_string($link, $_REQUEST['birth_day']);
$birth_year = mysqli_real_escape_string($link, $_REQUEST['birth_year']);
$birth_date =  $birth_month ."-". $birth_day ."-". $birth_year;
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
(first_name, last_name, email, password, birth_date, home_address, phone_number, mobile_number, occupation, business_phone, spouse_name, spouse_phone, medical_doctor, last_visit, dentist_visit, referral) 
VALUES 
('$first_name', '$last_name', '$email', '$password', '$birth_date', '$home_address', '$phone_number', '$mobile_number', '$occupation', '$business_phone', '$spouse_name', '$spouse_phone', '$medical_doctor', '$last_visit', '$dentist_visit', '$referral')";

if(mysqli_query($link, $sql)){
    header("Location: /pages/thankyou.php");
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>