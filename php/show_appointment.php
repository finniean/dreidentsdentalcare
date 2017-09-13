<?php require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); $title="Dreident Dental Care - " ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

$date=mysqli_real_escape_string($link, $_REQUEST[ 'appt_date']);
$sql="SELECT * FROM appointments
WHERE appt_date = '$date'
ORDER BY appt_time ASC;" ;
$result=mysqli_query($link, $sql);
?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Check Appointments</h1>
      </div>
      <div class="pagecontent clearfix">
        <div class="search_results">
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
               </tr>"; }} else { echo "<div class='alert alert-success' role='alert'><p>0 results</p></div>"; }
            ?>

         </table>
         </div>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>