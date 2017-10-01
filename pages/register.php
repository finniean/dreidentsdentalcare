<?php $title='Dreident Dental Care - Registration' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
   <div class='content-container'>
      <div class='pageheader'>
         <h1>Registration</h1>
      </div>
      <div class='pagecontent clearfix'>
      <?php

         require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

         if(isset($_POST['submit'])){
         $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
         $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
         $email = mysqli_real_escape_string($link, $_REQUEST['email']);
         $password = mysqli_real_escape_string($link, $_REQUEST['password']);
         $birth_month = mysqli_real_escape_string($link, $_REQUEST['birth_month']);
         $birth_day = mysqli_real_escape_string($link, $_REQUEST['birth_day']);
         $birth_year = mysqli_real_escape_string($link, $_REQUEST['birth_year']);
         $birth_date =  $birth_month ."/". $birth_day ."/". $birth_year;
         $home_address= mysqli_real_escape_string($link, $_REQUEST['home_address']);
         $phone_number= mysqli_real_escape_string($link, $_REQUEST['phone_number']);
         $mobile_number= mysqli_real_escape_string($link, $_REQUEST['mobile_number']);
         $occupation= mysqli_real_escape_string($link, $_REQUEST['occupation']);
         $business_phone= mysqli_real_escape_string($link, $_REQUEST['business_phone']);
         $spouse_name= mysqli_real_escape_string($link, $_REQUEST['spouse_name']);
         $spouse_phone= mysqli_real_escape_string($link, $_REQUEST['spouse_phone']);
         $medical_doctor= mysqli_real_escape_string($link, $_REQUEST['medical_doctor']);
         $last_visit= mysqli_real_escape_string($link, $_REQUEST['last_visit']);
         $dentist_visit= mysqli_real_escape_string($link, $_REQUEST['dentist_visit']);
         $referral= mysqli_real_escape_string($link, $_REQUEST['referral']);

         $sql = "INSERT INTO patients 
         (first_name, last_name, email, password, birth_date, home_address, phone_number, mobile_number, occupation, business_phone, spouse_name, spouse_phone, medical_doctor, last_visit, dentist_visit, referral) 
         VALUES 
         ('$first_name', '$last_name', '$email', '$password', '$birth_date', '$home_address', '$phone_number', '$mobile_number', '$occupation', '$business_phone', '$spouse_name', '$spouse_phone', '$medical_doctor', '$last_visit', '$dentist_visit', '$referral')";

         if(mysqli_query($link, $sql)){
            echo "<div class='alert alert-success'>
                 <strong>Success!</strong> You have been registered. You can login now.
               </div>";
         } 

         else{
             echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
         }

         mysqli_close($link);
         
         }
      ?>
         <h3 class='blueline'>Dont have an account with us yet?</h3>
         <p>We appreciate the confidence you place with us to you with the dental service. To assist us us in serving you better, kindly fill up this form.</p>
         <p class='reqfields'>* required fields</p>
         <form class='regform clearfix' id='insert_register' action='' method='post'>
            <div class='fullname clearfix'>
               <div class='form-group form-group-half'>
                  <label>First name</label>
                  <input type='text' class='form-control inputmodified' name='first_name'>
               </div>
               <div class='form-group form-group-half'>
                  <label for='lastname'>Last name</label>
                  <input type='text' class='form-control inputmodified' name='last_name'>
               </div>
            </div>
            <div class='birthdate clearfix'>
               <div class='form-group'>
                  <label>Birth Day</label>
                  <?php

                     echo '<select class="form-control" name="birth_month">';
                        echo '<option selected disabled>Month</option>';
                        for($i = 1; $i <= 12; $i++){
                          $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                           echo "<option value='$i'>$i</option>";
                        }
                     echo '</select>';

                     echo '<select  class="form-control" name="birth_day">';
                       echo '<option selected disabled>Day</option>';
                        for($i = 1; $i <= 31; $i++){
                          $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                           echo "<option value='$i'>$i</option>";
                        }
                     echo '</select>';

                        echo '<select  class="form-control" name="birth_year">';
                       echo '<option selected disabled>Year</option>';
                        for($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--){
                          echo "<option value='$i'>$i</option>";
                        } 
                     echo '</select> ';

                  ?>
               </div>
            </div>
            <div class='homeadress clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label for='address'>Home Address</label>
                  <input type='text ' class='form-control' style='width: 100%' name='home_address'>
               </div>
            </div>
            <div class='contactnumber clearfix'>
               <div class='form-group form-group-half'>
                  <label for='contactnumber'>Home phone</label>
                  <input type='text' class='form-control inputmodified' name='phone_number'>
               </div>
               <div class='form-group form-group-half'>
                  <label for='contactnumber'>Mobile phone</label>
                  <input type='text' class='form-control inputmodified' name='mobile_number'>
               </div>
            </div>
            <div class='email clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label>Email address</label>
                  <input type='email' class='form-control' style='width: 100%;' name='email'>
               </div>
            </div>
            <div class='occupation clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label>Occupation</label>
                  <input type='text ' class='form-control' style='width: 100%' name='occupation'>
               </div>
               <div class='form-group form-group-half' id='business_phone'>
                  <label>Business phone</label>
                  <input type='text ' class='form-control inputmodified' name='business_phone'>
               </div>
            </div>
            <div class='spouseinfo clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label>Spouse's name</label>
                  <input type='text ' class='form-control' style='width: 100%' name='spouse_name'>
               </div>
               <div class='form-group form-group-half '>
                  <label>Contact number</label>
                  <input type='text ' class='form-control inputmodified' name='spouse_phone'>
               </div>
            </div>
            <div class='medicaldoctor clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label>Name of your Medical Doctor</label>
                  <input type='text ' class='form-control' style='width: 100%' name='medical_doctor'>
               </div>
               <div class='form-group form-group-half'>
                  <label>Date of last visit</label>
                  <input type='text' id='last_visit' class='form-control inputmodified' name='last_visit'>
                  <script>
                     $( function() {
                       $( '#last_visit' ).datepicker();
                     } );
                  </script>
               </div>
            </div>
            <div class='form-group form-group-half'>
               <label>Date of last visit to Dentist</label>
               <input type='text' id='dentist_visit' class='form-control inputmodified' name='dentist_visit'>
               <script>
                  $( function() {
                    $( '#dentist_visit' ).datepicker();
                  } );
               </script>
            </div>
            <div class='referral clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label>Referred to us by</label>
                  <input type='text ' class='form-control' style='width: 100%' name='referral'>
               </div>
            </div>
            <div class='password clearfix'>
               <div class='form-group form-group-half '>
                  <label>Password</label>
                  <input type='password' class='form-control inputmodified' name='password'>
               </div>
            </div>
			<input type='submit' class='btn btn-cstm' id='submit' value='Submit' name='submit'>
         </form>

      </div>
   </div>
</div>

<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>