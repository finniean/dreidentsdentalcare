<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
session_start();


$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$sql="SELECT * FROM patients
WHERE email='$email' and password='$password'";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) {
			while($row = mysqli_fetch_assoc($result)) {	
			header("Location: /index.php");
} } else { echo "<div class='alert alert-success' role='alert'><p>0 results</p></div>"; }
	
?>