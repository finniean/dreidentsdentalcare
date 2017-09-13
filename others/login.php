<html>
<head></head>


<center>
<form action="#" method="POST" name="form">
<h1>Email:
<input name="email"> <?php echo $optcol1; ?>
</input>
<br>
Password:<input type="password" name="password"><br/><br>

 <input type="submit" name="submit" value="LOGIN">
</form>

</body>
</html>
<?php
include'conn.php';
session_start();

if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$password=$_POST['password'];

	$login="SELECT * FROM tbl_login WHERE email='$email' AND password='$password'";
	$reslogin=mysql_query($login);
	$data=mysql_fetch_assoc($reslogin);
	$rows=mysql_num_rows($reslogin);
	$email=$data['email'];

	if($rows>0){

	


	if($data['email']){

		$_SESSION['email']=$email;
		Header("Location:home.php");
	
	}
	else{
		echo"";
	}

}


}



?>