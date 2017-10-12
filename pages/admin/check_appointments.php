<?php $title='Check Appointments' ; ob_start(); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$formErr = $start_dateErr = '';
$action = $form = $start_date = '';

if($_SESSION['uid'] === '1'){
  if ($_POST) {

    $valid = true;

    if (empty($_POST["start_date"])) {
      $valid = false;
      $start_dateErr = "Date is required";
    } else {
      $_SESSION['appt_start_date'] = mysqli_real_escape_string($link, $_REQUEST['start_date']);
    }
      $_SESSION['appt_end_date'] = mysqli_real_escape_string($link, $_REQUEST['end_date']);
      $_SESSION['appt_appt_time'] = mysqli_real_escape_string($link, $_REQUEST['appt_time']);
      $_SESSION['appt_services'] = mysqli_real_escape_string($link, $_REQUEST['services']);
      $_SESSION['appt_first_name'] = mysqli_real_escape_string($link, $_REQUEST['first_name']);
      $_SESSION['appt_last_name'] = mysqli_real_escape_string($link, $_REQUEST['last_name']);

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
          <input type='text' class='form-control' id='end_date' name='end_date' placeholder='MM/DD/YYYY'>
          <script>
              $(function() {
                  $('#end_date').datepicker();
              });
          </script>
      </div>
          <div class='form-group'>
             <label>Time</label>
             <select class='form-control' name='appt_time'>
                <option selected>Select Time</option>
                <option>09:00AM - 11:00AM</option>
                <option>11:00AM - 01:00PM</option>
                <option>01:00PM - 03:00PM</option>
                <option>03:00PM - 05:00PM</option>
             </select>
          </div>
         <div class='form-group'>
            <label>Service to be done</label>
            <select class='form-control' name='services'>
               <option selected value=''>Services</option>
               <option>Oral Prophylaxis</option>
               <option>Visible Light Cured (Tooth-Colored) Restorations</option>
               <option>Amalgam (Silver) Restorations</option>
               <option>Jacket Crowns</option>
               <option>Fixed Bridges</option>
               <option>Removable Partial Denture</option>
               <option>Complete Denture</option>
               <option>Tooth Extraction</option>
               <option>Removal of Impacted Wisdom Teeth</option>
               <option>Orthodontic Treatment</option>
               <option>Periapical Dental X-ray</option>
               <option>Root Canal</option>
            </select>
         </div>
         <div class='form-group'>
              <label>First Name</label>
              <input type='text' class='form-control' name='first_name'>
          </div>
          <div class='form-group'>
              <label>Last Name</label>
              <input type='text' class='form-control' name='last_name'>
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