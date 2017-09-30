<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$uid = $_GET['uid'];

$sql="SELECT * FROM patients
WHERE uid='$uid'";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_array($result))
        { 
		echo "
			<form class='' id='' action='/php/insert_edit_patient.php?uid=". $row['uid'] ."' method='post' accept-charset='UTF-8'>
			<div class='form-group'>
	                <label>Worker's Unique ID</label>
	                <input type='text' class='form-control' name='workers_uniqid' value=". $row['workers_uniqid'] ." disabled>
	            </div>
	            <div class='form-group'>
	                <label>First Name</label>
	                <input type='text' class='form-control' name='first_name' value=". $row['first_name'] .">
	            </div>
	            <div class='form-group'>
	                <label>Last Name</label>
	                <input type='text' class='form-control' name='last_name' value=". $row['last_name'] .">
	            </div>
	        </form>
	        ";
        }}
        else{}

include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>