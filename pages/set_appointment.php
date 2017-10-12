<?php $title='Set Appointment' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$emptyErr =  $formsubmitErr = $appt_dateErr = $appt_timeErr = $servicesErr = '';
$formsubmit = $appt_date = $appt_time = $services = '';

   if ($_POST) {

      $valid = true;

      if (empty($_POST["appt_date"])) {
         $valid = false;
         $appt_dateErr = "Date is required";
      } else {
         $appt_date = mysqli_real_escape_string($link, $_REQUEST['appt_date']);
      }

      if (empty($_POST["appt_time"])) {
         $valid = false;
         $appt_timeErr = "Time is required";
      } else {
         $appt_time = mysqli_real_escape_string($link, $_REQUEST['appt_time']);
      }

      if (empty($_POST["services"])) {
         $valid = false;
         $servicesErr = "Service is required";
      } else {
         $services = mysqli_real_escape_string($link, $_REQUEST['services']);
      }
   
   if ($valid){
      if(isset($_POST['submit'])){
         $validate="SELECT * FROM appointments WHERE appt_date = '$appt_date' AND appt_time = '$appt_time'";
         $result=mysqli_query($link, $validate);

         if (mysqli_num_rows($result)> 0) {
            $formsubmitErr = "<div class='alert alert-danger'>
                 Sorry! The Date or Time selected is not available. Please choose different Date or Time.
               </div>";
         }

         else {
         $sql = "INSERT INTO appointments
         (appt_date, appt_time, service, uid, first_name, last_name, email, mobile_number)
         VALUES 
         ('$appt_date', '$appt_time', '$services', '{$_SESSION['uid']}', '{$_SESSION['username']}', '{$_SESSION['last_name']}', '{$_SESSION['email']}', '{$_SESSION['mobile_number']}')";

         // mail('janrhbautista@gmail.com', 'My Subject', 'My Message', 'My Footer');

            if(mysqli_query($link, $sql)){
               $formsubmit = "<div class='alert alert-success'>
                     <strong>Success!</strong> Appointment has been scheduled.<br>
                     <strong>Date:</strong> " .$appt_date. "<br>
                     <strong>Time:</strong> " .$appt_time. "<br>
                     <strong>For:</strong> " .$services. "
                  </div>";
            } 

            else{
               echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
         }
      }   
   }
   else {
      $emptyErr =  "<div class='alert alert-danger'>
              <strong>Sorry!</strong> Please fill the required fields.
            </div>";
   }
   mysqli_close($link); 
} ?>  
<!-- begin page content -->
<div class='pagebody clearfix'>
   <div class='content-container'>
      <div class='pageheader'>
         <h1>Set Appointment</h1>
      </div>
      <div class='pagecontent clearfix'>
         <?php
         if (isset($_SESSION["username"])) {
         if($_SESSION['uid'] > '1'){
         echo $emptyErr;
         echo $formsubmit;
         echo $formsubmitErr;    
         echo "
         <form action='". htmlspecialchars($_SERVER["PHP_SELF"]) ."' method='post'>
            <div class='form-group'>
   				<label>Date</label>
               <span class='error'>* <?php echo $appt_dateErr;?></span>
               <input type='text' id='datepicker' class='form-control' name='appt_date'>
               <script>
                  $( function() {
                    $( '#datepicker' ).datepicker({ minDate: 0});
                  } );
               </script>
            </div>
            <div class='form-group'>
               <label>Time</label>
               <span class='error'>* <?php echo $appt_timeErr;?></span>
               <select class='form-control' name='appt_time'>
                  <option selected disabled>Select Time</option>
                  <option>09:00AM - 11:00AM</option>
                  <option>11:00AM - 01:00PM</option>
                  <option>01:00PM - 03:00PM</option>
                  <option>03:00PM - 05:00PM</option>
               </select>
            </div>
            <div class='form-group'>
               <label>Service to be done</label>
               <span class='error'>* <?php echo $servicesErr;?></span>
               <select class='form-control' name='services'>
                  <option selected disabled>Services</option>
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
            <input type='submit' class='btn btn-cstm' value='Set Appointment' name='submit'>
         </form>"; }}
         else {
            echo "
            <div class='alert alert-danger'>
              <strong>Sorry!</strong> Please login to view this page.
            </div>";
         } ?>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php');?>