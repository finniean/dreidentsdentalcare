<?php $title='Check Appointments' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');
require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
if($_SESSION['uid'] === '1'){
	$datenow = date("m/d/Y");
	$sql="SELECT * FROM appointments WHERE appt_date = '$datenow' ORDER BY appt_time DESC;" ;
	$result=mysqli_query($link, $sql);
}
?>

<!-- begin page content -->
<div class='pagebody clearfix'>
	<div class='content-container'>
		<div class='pageheader'>
			<h1>Current Appointments</h1>
		</div>
		<div class='pagecontent clearfix'>
			<div class="show_appt">
			<table>
				<?php
				if (mysqli_num_rows($result)> 0) { echo "
				<tr>
					<th>Date</th>
					<th>Time</th>
					<th>Service</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Mobile Number</th>
					<th>Status</th>
				</tr>";
					while($row = mysqli_fetch_assoc($result)) {
						if(empty($row["status"])){
							$status = "<a href='/php/appointment_status.php?aid=". $row['aid'] ."'>View</a>";
						}
						else{
							$status = $row["status"];
						}
						echo "
						<tr class='resultsrow'>
							<td>" . $row["appt_date"] . "</td>
							<td>" . $row["appt_time"] . "</td>
							<td>" . $row["service"] . "</td>
							<td>" . $row["first_name"] . "</td>
							<td>" . $row["last_name"] . "</td>
							<td>" . $row["email"] . "</td>
							<td>" . $row["mobile_number"] . "</td>
							<td>" . $status . "</td>
						</tr>";
					}
				}
				else {
					echo "<div class='alert alert-danger' role='alert'><p>No appointments today</p></div>";
				}
				?>
			</table>
			<a href='/pages/admin/check_appointments.php'><input type='submit' class='btn btn-cstm search_again' value='Search More'></a>
			</div>
		</div>
	</div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>