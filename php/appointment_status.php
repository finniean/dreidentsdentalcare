<?php $title="View Profile" ; ob_start(); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');?>

<!-- begin page content -->
<div class='pagebody clearfix'>
   <div class='content-container'>
      	<div class='pageheader'>
        	<h1>View Appointment</h1>
      	</div>
      	<div class='pagecontent clearfix'>
      		<div class="show_appt">
	      		<table width= '100%'>
	      		<?php
	      		require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
	  			$aid = $_GET['aid'];
	  			$sql="SELECT * FROM appointments WHERE aid = '$aid'";
	  			$result=mysqli_query($link, $sql);
	  			if (mysqli_num_rows($result)> 0) { echo "
		            <tr>
		              <th>Date</th>
		              <th>Time</th>
		              <th>Service</th>
		              <th>First Name</th>
		              <th>Last Name</th>
		              <th>Email</th>
		              <th>Mobile Number</th>
		            </tr>";
		          	while($row = mysqli_fetch_assoc($result)) {
			           echo "
			            <tr class='resultsrow'>
			              <td>" . $row["appt_date"] . "</td>
			              <td>" . $row["appt_time"] . "</td>
			              <td>" . $row["service"] . "</td>
			              <td>" . $row["first_name"] . "</td>
			              <td>" . $row["last_name"] . "</td>
			              <td>" . $row["email"] . "</td>
			              <td>" . $row["mobile_number"] . "</td>
			            </tr>"; } }
	      		?>
	      		</table>
	      		<form method="post">
	      			<?php
	      			if(isset($_POST['finished'])) {
	                	$statusdone = "UPDATE `appointments` SET `status` = 'Done' WHERE aid = '$aid'";
	                	$result=mysqli_query($link, $statusdone);
	                	ob_end_flush(header('Location: /pages/admin/current_appointments.php'));
	              	}
	              	if(isset($_POST['cancel'])) {
	                  	$delete = "DELETE FROM appointments WHERE aid = '$aid'";
	                  	$result=mysqli_query($link, $delete);
	                  	ob_end_flush(header('Location: /pages/admin/current_appointments.php'));
	              	}
	              	?>
		      		<input type='submit' class='btn btn-cstm' value='Done' name="finished">
		      		<input type='submit' class='btn btn-cstm ' value='Cancelled' name="cancel">
	      		</form>
	      	</div>
		</div>
	</div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>