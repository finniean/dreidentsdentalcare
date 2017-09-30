<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
session_start();

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql="SELECT * FROM patients
WHERE email='$email' and password='$password'";

$result=mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

$_SESSION['username'] = $row['first_name'];
$_SESSION['uid'] = $row['uid'];
$_SESSION['last_name'] = $row['last_name'];
$_SESSION['email'] = $row['email'];
$_SESSION['mobile_number'] = $row['mobile_number'];

if($_SESSION['uid'] === '1'){
 	header("Location:/pages/admin/patients.php");
}
else{
	header("Location:/index.php");
};
?>