<?php $title='Set Appointment' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$emptyErr =  $formsubmitErr = $appt_dateErr = $appt_timeErr = $servicesErr = '';
$selected1 = $selected2 = $selected3 = $selected4 = $selected5 = $selected6 = $selected7 = $selected8 = $selected9 = $selected10 = $selected11 = $selected12 = $selected13 = $selected14 = $selected15 = $selected16 = 
$loggedin = $notloggedin = $formsubmit = $appt_date = $appt_time = $services = '';

$aid = $_GET['aid'];

if (isset($_SESSION["username"])) {
   if($_SESSION['uid'] > '1'){
         
      if(isset($_POST['update'])){

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

            $validate="SELECT * FROM appointments WHERE appt_date = '$appt_date' AND appt_time = '$appt_time' AND aid != '$aid'";
            $result=mysqli_query($link, $validate);

            if (mysqli_num_rows($result)> 0) {

               $formsubmitErr = "<div class='alert alert-danger'>
                    Sorry! The Date or Time selected is not available. Please choose different Date or Time.
                  </div>";
            }
            else {

               $update = "UPDATE INTO appointments SET appt_date = '$appt_date', appt_time = '$appt_time', service = '$services' WHERE aid = '$aid';";

               if(mysqli_query($link, $update)){
                  $formsubmit = "<div class='alert alert-success'>
                        <strong>Success!</strong> Appointment has been updated.<br>
                        <strong>Date:</strong> " .$appt_date. "<br>
                        <strong>Time:</strong> " .$appt_time. "<br>
                        <strong>For:</strong> " .$services. "
                     </div>";
               } 

               else{

                  echo "ERROR: Could not able to execute $update. " . mysqli_error($link);
               }
            }
         }
         else {

            $emptyErr =  "<div class='alert alert-danger'>
                    <strong>Sorry!</strong> Please fill the required fields.
                  </div>";
         }
      }
   }
   else {
      $notloggedin = "
      <div class='alert alert-danger'>
        <strong>Sorry!</strong> Please login to view this page.
      </div>";
   }

   $sql="SELECT * FROM appointments WHERE aid='$aid'";

   $result=mysqli_query($link, $sql);

   if (mysqli_num_rows($result)> 0) {
      while($row = mysqli_fetch_array($result)) {

         if($row['appt_time'] === '09:00AM - 11:00AM') { $selected1 = "selected"; };
         if($row['appt_time'] === '11:00AM - 01:00PM') { $selected2 = "selected"; };
         if($row['appt_time'] === '01:00PM - 03:00PM') { $selected3 = "selected"; };
         if($row['appt_time'] === '03:00PM - 05:00PM') { $selected4 = "selected"; };

         if($row['service'] === 'Oral Prophylaxis') { $selected5 = "selected"; };
         if($row['service'] === 'Visible Light Cured (Tooth-Colored) Restorations') { $selected6 = "selected"; };
         if($row['service'] === 'Amalgam (Silver) Restorations') { $selected7 = "selected"; };
         if($row['service'] === 'Jacket Crowns') { $selected8 = "selected"; };
         if($row['service'] === 'Fixed Bridges') { $selected9 = "selected"; };
         if($row['service'] === 'Removable Partial Denture') { $selected10 = "selected"; };
         if($row['service'] === 'Complete Denture') { $selected11 = "selected"; };
         if($row['service'] === 'Tooth Extraction') { $selected12 = "selected"; };
         if($row['service'] === 'Removal of Impacted Wisdom Teeth') { $selected13 = "selected"; };
         if($row['service'] === 'Orthodontic Treatment') { $selected14 = "selected"; };
         if($row['service'] === 'Periapical Dental X-ray') { $selected15 = "selected"; };
         if($row['service'] === 'Root Canal') { $selected16 = "selected"; };

         $loggedin = 
         "<form action='". htmlspecialchars($_SERVER["PHP_SELF"]) ."' method='post'>
            <div class='form-group'>
               <label>Date</label>
               <span class='error'>* ". $appt_dateErr ."</span>
               <input type='text' id='datepicker' class='form-control' name='appt_date' value='". $row['appt_date'] ."'>
               <script>
                  $( function() {
                    $( '#datepicker' ).datepicker({ minDate: 0});
                  } );
               </script>
            </div>
            <div class='form-group'>
               <label>Time</label>
               <span class='error'>* ". $appt_timeErr ."</span>
               <select class='form-control' name='appt_time'>
                  <option disabled>Select Time</option>
                  <option ". $selected1 .">09:00AM - 11:00AM</option>
                  <option ". $selected2 .">11:00AM - 01:00PM</option>
                  <option ". $selected3 .">01:00PM - 03:00PM</option>
                  <option ". $selected4 .">03:00PM - 05:00PM</option>
               </select>
            </div>
            <div class='form-group'>
               <label>Service to be done</label>
               <span class='error'>* ". $servicesErr ."</span>
               <select class='form-control' name='services'>
                  <option disabled>Services</option>
                  <option ". $selected5 .">Oral Prophylaxis</option>
                  <option ". $selected6 .">Visible Light Cured (Tooth-Colored) Restorations</option>
                  <option ". $selected7 .">Amalgam (Silver) Restorations</option>
                  <option ". $selected8 .">Jacket Crowns</option>
                  <option ". $selected9 .">Fixed Bridges</option>
                  <option ". $selected10 .">Removable Partial Denture</option>
                  <option ". $selected11 .">Complete Denture</option>
                  <option ". $selected12 .">Tooth Extraction</option>
                  <option ". $selected13 .">Removal of Impacted Wisdom Teeth</option>
                  <option ". $selected14 .">Orthodontic Treatment</option>
                  <option ". $selected15 .">Periapical Dental X-ray</option>
                  <option ". $selected16 .">Root Canal</option>
               </select>
            </div>
            <input type='submit' class='btn btn-cstm' value='Update' name='update'>
         </form>";
      }
   }
} ?>  
<!-- begin page content -->
<div class='pagebody clearfix'>
   <div class='content-container'>
      <div class='pageheader'>
         <h1>Set Appointment</h1>
      </div>
      <div class='pagecontent clearfix'>
         <?php
            echo $formsubmit;
            echo $formsubmitErr;
            echo $emptyErr;
            echo $loggedin;
            echo $notloggedin;
         ?>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php');?>