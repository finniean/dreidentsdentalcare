<?php
require('db.php');
session_start();

	$email = mysqli_real_escape_string($link, $_REQUEST['email']);
	$password = mysqli_real_escape_string($link, $_REQUEST['password']);
    
	$query = "SELECT * FROM `patients` WHERE email='$email' and password='$password'";
	$result = mysqli_query($link,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
        header("Location: /index.php");
         }else{
	echo "<div class='form'>
		<h3>Email/password is incorrect.</h3>
		<br/>Click here to <a href='/home.php'>Login</a></div>";
	}
?>