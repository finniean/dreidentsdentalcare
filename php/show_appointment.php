<?php $title="Appointments" ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$start_date = $_SESSION['appt_start_date'];
$end_date = $_SESSION['appt_end_date'];
$appt_time = $_SESSION['appt_appt_time'];
$services = $_SESSION['appt_services'];
$first_name = $_SESSION['appt_first_name'];
$last_name = $_SESSION['appt_last_name'];

$sql="SELECT * FROM appointments
WHERE appt_date = '$start_date' AND service = '$services'
OR '$end_date'
OR '$services'
AND first_name LIKE '%" .$first_name. "%'
AND last_name LIKE '%" .$last_name. "%'
ORDER BY appt_date ASC;" ;

$result=mysqli_query($link, $sql);

?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Check Appointments</h1>
      </div>
      <div class="pagecontent clearfix">
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
            </tr>";
          while($row = mysqli_fetch_assoc($result)) { echo "
            <tr class='resultsrow'>
              <td>" . $row["appt_date"] . "</td>
              <td>" . $row["appt_time"] . "</td>
              <td>" . $row["service"] . "</td>
              <td>" . $row["first_name"] . "</td>
              <td>" . $row["last_name"] . "</td>
              <td>" . $row["email"] . "</td>
              <td>" . $row["mobile_number"] . "</td>
            </tr>"; } }
          else { echo "<div class='alert alert-danger' role='alert'><p>0 results</p></div>"; }
          ?>

          </table>
          <a href='/pages/admin/check_appointments.php'><input type='submit' class='btn btn-cstm search_again' value='Search Again'></a>
         </div>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); 

unset ($_SESSION['appt_start_date']);
unset ($_SESSION['appt_end_date']);
unset ($_SESSION['appt_appt_time']);
unset ($_SESSION['appt_services']);
unset ($_SESSION['appt_first_name']);
unset ($_SESSION['appt_last_name']);

mysqli_close($link); ?>