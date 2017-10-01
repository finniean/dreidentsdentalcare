<?php $title='Dreident Dental Care - Set Appointment' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
   <div class='content-container'>
      <div class='pageheader'>
         <h1>Set Appointment</h1>
      </div>
      <div class='pagecontent clearfix'>
         <?php
      
         require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

         if(isset($_POST['submit'])){
         $appt_date = mysqli_real_escape_string($link, $_REQUEST['appt_date']);
         $appt_time = mysqli_real_escape_string($link, $_REQUEST['appt_time']);
         $services = mysqli_real_escape_string($link, $_REQUEST['services']);
         $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
         $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
         $email = mysqli_real_escape_string($link, $_REQUEST['email']);
         $mobile_number = mysqli_real_escape_string($link, $_REQUEST['mobile_number']);

         $sql = "INSERT INTO appointments
         (appt_date, appt_time, service, first_name, last_name, email, mobile_number)
         VALUES 
         ('$appt_date', '$appt_time', '$services', '$first_name', '$last_name', '$email', '$mobile_number')";

         if(mysqli_query($link, $sql)){
             echo "<div class='alert alert-success'>
                 <strong>Success!</strong> Appointment has been scheduled.
               </div>";
         } 

         else{
             echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
         }

         mysqli_close($link);
      }
         ?>
         <form class='apptform clearfix' id='insert_appointment' action='' method='post'>
            <div class='form-group'>
               <label>Date</label>
                 <input type='text' class='form-control' id='appt_date' name='appt_date'>
                 <script>
                     $(function() {
                         $('#appt_date').datepicker();
                     });
                 </script>
             </div>
            <div class='form-group'>
               <label>Time</label>
               <select class='form-control' name='appt_time'>
                  @for ($i = 1; $i
                  <=3 1; $i++)
                  <option selected>Select Time</option>
                  <option>09:00AM - 11:00AM</option>
                  <option>11:00AM - 01:00PM</option>
                  <option>01:00PM - 03:00PM</option>
                  <option>03:00PM - 05:00PM</option>
                  @endfor
               </select>
            </div>
            <div class='form-group'>
               <label>Service to be done</label>
               <select class='form-control' name='services'>
                  <option selected>Services</option>
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
            <div class='clearfix'>
               <div class='form-group'>
                  <label>First name</label>
                  <input type='text' class='form-control' name='first_name'>
               </div>
               <div class='form-group'>
                  <label for='lastname'>Last name</label>
                  <input type='text' class='form-control' name='last_name'>
               </div>
            </div>
            <div class='clearfix'>
               <div class='form-group'>
                  <label>Email</label>
                  <input type='text' class='form-control' name='email'>
               </div>
            </div>
            <div class='clearfix'>
               <div class='form-group'>
                  <label>Mobile Number</label>
                  <input type='text' class='form-control' name='mobile_number'>
               </div>
            </div>
            <input type='submit' class='btn btn-cstm' id='add' value='Set Appointment' name='submit'>
         </form>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>