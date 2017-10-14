<?php $title='Check Appointments' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$deletemsg = $updatebtn = '';

if($_SESSION['uid'] > '1'){

  $datenow = date("d/m/Y");

  $sql="SELECT * FROM appointments
  WHERE uid = '{$_SESSION['uid']}'
  ORDER BY appt_date ASC;" ;

  $result=mysqli_query($link, $sql);

  
}

?>

<!-- begin page content -->
<div class='pagebody clearfix'>
  <div class='content-container'>
    <div class='pageheader'>
      <h1>My Appointments</h1>
    </div>
    <div class='pagecontent clearfix'>
      <div class="show_appt">
        <table>

        <?php
        echo  $deletemsg;
        if (mysqli_num_rows($result)> 0) { echo "
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Service</th>
            <th></th>
          </tr>";
        while($row = mysqli_fetch_assoc($result)) {
          $aid = $row['aid'];
          $status = $row['status'];
          if ($status != 'Done'){
            $updatebtn = "<a href='/php/update_appointment.php?aid=". $row['aid'] ."'>Update</a>";
          }
          else {
            $updatebtn ="Done!";
          }
          echo "
          <tr class='resultsrow'>
            <td>" . $row["appt_date"] . "</td>
            <td>" . $row["appt_time"] . "</td>
            <td>" . $row["service"] . "</td>
            <td>" . $updatebtn . "</td>
            </tr>
            "; } }
        else { echo "<div class='alert alert-danger' role='alert'><p>You have no appointments</p></div>"; }
        ?>

        </table>
      </div>
    </div>
  </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>