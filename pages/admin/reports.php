<?php $title='Check Appointments' ; ob_start(); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');
require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
?>

<!-- begin page content -->
<div class='pagebody clearfix'>
	<div class='content-container'>
		<div class='pageheader'>
			<h1>Print Reports</h1>
		</div>
		<div class='pagecontent clearfix'>
			<div class="show_appt">
				<form action='<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='post'>
					<div class='form-group'>
						<label>Start Date</label>
						<span class='error'>* <?php $start_dateErr ?></span>
						<input type='text' class='form-control' id='start_date' name='start_date' placeholder='MM/DD/YYYY'>
						<script>
						$(function() {
							$('#start_date').datepicker();
						});
						</script>
					</div>
					<div class='form-group'>
						<label>End Date</label>
						<span class='error'>* <?php $end_dateErr ?></span>
						<input type='text' class='form-control' id='end_date' name='end_date' placeholder='MM/DD/YYYY'>
						<script>
						$(function() {
							$('#end_date').datepicker();
						});
						</script>
					</div>
					<input type='submit' class='btn btn-cstm' value='Search Appointments' name='submit'>
				</form>

			<?php
			$start_date = $end_date = '';
			if (isset($_POST['submit'])) {
				$valid = true;
				if (empty($_POST["start_date"])) {
					$valid = false;
					$start_dateErr = "Date is required";
				}
				else {
					$start_date = mysqli_real_escape_string($link, $_REQUEST['start_date']);
				}
				if (empty($_POST["end_date"])) {
					$valid = false;
					$start_dateErr = "Date is required";
				}
				else {
					$end_date = mysqli_real_escape_string($link, $_REQUEST['end_date']);
				}
				if ($valid){
					$sql = "SELECT * FROM appointments WHERE appt_date BETWEEN '$start_date' AND '$end_date' ORDER BY appt_date ASC;" ;
					$result = mysqli_query($link, $sql);
					echo "
					<input type='submit' class='btn btn-cstm' value='Print' onclick='PrintDiv();'>
					<div id='divToPrint'>
						<table>
							<h1 align='center'>Dreidents Dental Care Reports</h1>
							<h3 align='center'>Date From: " . $start_date . " To: " . $end_date . "</h3>
					";

					if (mysqli_num_rows($result)> 0) { echo "
							<tr>
								<th>Date</th>
								<th>Time</th>
								<th>Service</th>
								<th>Full Name</th>
								<th>Email</th>
							</tr>";
						while($row = mysqli_fetch_assoc($result)) { echo "
							<tr class='resultsrow'>
								<td>" . $row["appt_date"] . "</td>
								<td>" . $row["appt_time"] . "</td>
								<td>" . $row["service"] . "</td>
								<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>
								<td>" . $row["email"] . "</td>
							</tr>";
							}
					}
					echo "</table>
					</div>";
				}
			}
			?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">     
function PrintDiv() {    
	var divToPrint = document.getElementById('divToPrint');
	var popupWin = window.open('', '_blank', 'width=500,height=500');
	popupWin.document.open();
	popupWin.document.write('<html><head><style type="text/css" media="print">tr.resultsrow td {border-bottom: black 1px solid;}th {text-align: left;}</style></head><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
	popupWin.document.close();
}
</script>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>