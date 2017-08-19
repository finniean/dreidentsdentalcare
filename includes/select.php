<html>
<link rel="stylesheet" href="css.css">
<header><title>display</title></header>
<center><div class="nav">
<a href="form.php">HOME</a>
</div></center>
<center><table class="table table-bordered" border="5px";>
<thead>
<tr>

	<th>FirstName</th>
	<th>LastName</th>
	<th>Age</th>
	<th>Address</th>
	<th>Date</th>
	<th>Action</th>
</tr>
</thead>
<tbody>
<?php
include "conn.php";
$query = "SELECT * FROM customer ORDER BY id DESC";



if($patient_set):
	foreach ($patient_set as $patient){
		?>
		<tr>
			<td><?php echo $patient['firstname'];?></td>
			<td><?php echo $patient['lastname'];?></td>
			<td><?php echo $patient['age'];?></td>
			<td><?php echo $patient['address'];?></td>
			<td><?php echo $patient['date'];?></td>
			<td>
			<a href="edit_form.php?lastname=<?php echo urlencode($patient['lastname']);?>"class="btn btn-primary btn-xs">EDIT</a>
			<a href="delete.php?lastname=<?php echo urlencode($patient['id']);?>"class="btn btn-danger btn-xs">DELETE</a>
			</td>
		</tr>
	<?php
	}
	else:
	echo "
	<tr>
	<td colspan='5' style='text-align:center;'> NO Current Appointment</td>
	</tr>
	

</tbody>
</table></center>
</html>