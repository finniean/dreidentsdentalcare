<?php $title='Check Appointments' ; ob_start(); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$formErr = $start_dateErr = $end_dateErr = '';
$action = $form = $start_date = $end_date = '';


if($_SESSION['uid'] === '1'){
  if ($_POST) {

    $valid = true;

    if (empty($_POST["start_date"])) {
      $valid = false;
      $start_dateErr = "Start date is required";
    } else {
      $_SESSION['appt_start_date'] = mysqli_real_escape_string($link, $_REQUEST['start_date']);
    }
    if (empty($_POST["end_date"])) {
      $valid = false;
      $end_dateErr = "End date is required";
    } else {
      $_SESSION['appt_end_date'] = mysqli_real_escape_string($link, $_REQUEST['end_date']);
    }

    if ($valid){
      ob_end_flush(header ('Location: /php/show_appointment.php'));
    }
}


$form = "
  <form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
      <div class='form-group'>
      <label>Start Date</label>
      <span class='error'>* " . $start_dateErr . "</span>
          <input type='text' class='form-control' id='start_date' name='start_date' placeholder='MM/DD/YYYY'>
          <script>
              $(function() {
                  $('#start_date').datepicker();
              });
          </script>
      </div>
      <div class='form-group'>
          <label>End Date</label>
          <span class='error'>* " . $end_dateErr . "</span>
          <input type='text' class='form-control' id='end_date' name='end_date' placeholder='MM/DD/YYYY'>
          <script>
              $(function() {
                  $('#end_date').datepicker();
              });
          </script>
      </div>
      <input type='submit' class='btn btn-cstm' value='Search Appointments'>
  </form>
  ";}
else{
  $formErr = "
    <div class='alert alert-danger'>
      You need the <strong>Admin</strong> role to view this page!
    </div>
  ";}
?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Check Appointments</h1>
        </div>
        <div class='pagecontent clearfix'>
          <?php 
            echo $form;
            echo $formErr;    
          ?>
        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>