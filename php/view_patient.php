<?php require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); $title="Dreident Dental Care - " ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

$uid = $_GET['uid'];

$sql="SELECT * FROM patients
WHERE uid='$uid'";
$result=mysqli_query($link, $sql);


if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_array($result))
        { 
		echo "
			<div style='text-align: center;'>
			    <label>Name</label>
			    <p>" . $row['first_name']. " " . $row['last_name']. "</p>
			</div>
			<div style='text-align: center;'>
			    <label>Birthday</label>
			    <p>" . $row["birth_month"]. " " . $row["birth_day"]. " " . $row["birth_year"]. "</p>
			</div>
			<div style='text-align: center;'>
			    <label>Address</label>
			    <p>" . $row["home_address"] . "</p>
			</div>
			";
        }}
        else{};

include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>