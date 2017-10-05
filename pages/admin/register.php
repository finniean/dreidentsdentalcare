<?php $title='Patient Registration' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
   <div class='content-container'>
      <div class='pageheader'>
         <h1>Registration</h1>
      </div>
      <div class='pagecontent clearfix'>
      <?php

         require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

         $emptyfield = $email = $password = $first_name = $last_name = $birth_month = $birth_day = $birth_year = '';
         $emailErr = $passwordErr = $first_nameErr = $last_nameErr = $birth_dateErr = '';

         if(isset($_POST['submit'])){
            if ($_POST) {

             $valid = true;

             if (empty($_POST["email"])) {
               $valid = false;
               $emailErr = "Email is required";
             } else {
               $email = mysqli_real_escape_string($link, $_REQUEST['email']);
             }

             if (empty($_POST["password"])) {
               $valid = false;
               $passwordErr = "Password is required";
             } else {
               $password = mysqli_real_escape_string($link, $_REQUEST['password']);
             }

             if (empty($_POST["first_name"])) {
               $valid = false;
               $first_nameErr = "First Name is required";
             } else {
               $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
             }

             if (empty($_POST["last_name"])) {
               $valid = false;
               $last_nameErr = "Last Name is required";
             } else {
               $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
             }

             if (empty($_POST["birth_month"])) {
               $valid = false;
               $birth_dateErr = "Birth Day is required";
             } else {
               $birth_month = mysqli_real_escape_string($link, $_REQUEST['birth_month']);
             }

             if (empty($_POST["birth_day"])) {
               $valid = false;
               $birth_dateErr = "Birth Day is required";
             } else {
               $birth_day = mysqli_real_escape_string($link, $_REQUEST['birth_day']);
             }

             if (empty($_POST["birth_year"])) {
               $valid = false;
               $birth_dateErr = "Birth Day is required";
             } else {
               $birth_year = mysqli_real_escape_string($link, $_REQUEST['birth_year']);
             }

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


            if ($valid){

               $birth_date =  $birth_month ."/". $birth_day ."/". $birth_year;
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
            }
            else {
               echo "<div class='alert alert-danger'>
                       <strong>Sorry!</strong> Please fill the required fields.
                     </div>";
            }
            mysqli_close($link);
         }
      }?>
        <h3 class='blueline'>Register a patient</h3>
        <p class='reqfields'><span class = 'error'>*</span> required fields</p>
         <form class='regform clearfix' id='insert_register' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='post'>
            <div class='credentials clearfix'>
               <div class='form-group form-group-half'>
                  <label>Email address</label>
                  <span class='error'>* <?php echo $emailErr; ?></span>
                  <input type='email' class='form-control inputmodified' name='email'>
               </div>
               <div class='form-group form-group-half'>
                  <label>Password</label>
                  <span class='error'>* <?php echo $passwordErr; ?></span>
                  <input type='password' class='form-control inputmodified' name='password'>
               </div>
            </div>
            <div class='fullname clearfix'>
               <div class='form-group form-group-half'>
                  <label>First name</label>
                  <span class='error'>* <?php echo $first_nameErr; ?></span>
                  <input type='text' class='form-control inputmodified' name='first_name'>
               </div>
               <div class='form-group form-group-half'>
                  <label for='lastname'>Last name</label>
                  <span class='error'>* <?php echo $last_nameErr; ?></span>
                  <input type='text' class='form-control inputmodified' name='last_name'>
               </div>
            </div>
            <div class='birthdate clearfix'>
               <div class='form-group' style='width: 100%;'>
                  <label>Birth Day</label>
                  <span class='error'>* <?php echo $birth_dateErr; ?></span>
                     <div class='clearfix'>
                     <?php

                        echo '<select class="form-control" name="birth_month" style="margin-right: 5%;">';
                           echo '<option selected disabled>Month</option>';
                           for($i = 1; $i <= 12; $i++){
                             $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                              echo "<option value='$i'>$i</option>";
                           }
                        echo '</select>';

                        echo '<select  class="form-control" name="birth_day" style="margin-right: 5%;">';
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
            <div class='occupation clearfix'>
               <div class='form-group form-group-half'>
                  <label>Occupation</label>
                  <input type='text ' class='form-control inputmodified' name='occupation'>
               </div>
               <div class='form-group form-group-half'>
                  <label>Business phone</label>
                  <input type='text ' class='form-control inputmodified' name='business_phone'>
               </div>
            </div>
            <div class='spouseinfo clearfix'>
               <div class='form-group form-group-half'>
                  <label>Spouse's name</label>
                  <input type='text ' class='form-control inputmodified' name='spouse_name'>
               </div>
               <div class='form-group form-group-half '>
                  <label>Contact number</label>
                  <input type='text ' class='form-control inputmodified' name='spouse_phone'>
               </div>
            </div>
            <div class='medical_doctor clearfix'>
               <div class='form-group form-group-half'>
                  <label>Medical Doctor's Name</label>
                  <input type='text ' class='form-control  inputmodified' name='medical_doctor'>
               </div>
               <div class='form-group form-group-half'>
                  <label>Date of last visit</label>
                  <input type='text' class='form-control inputmodified' name='last_visit' id='last_visit' placeholder='MM/DD/YYYY'>
                  <script>
                     $( function() {
                       $( '#last_visit' ).datepicker();
                     } );
                  </script>
               </div>
            </div>
            <div class='referral clearfix'>
               <div class='form-group form-group-half'>
                  <label>Last visit to Dentist</label>
                  <input type='text' class='form-control inputmodified' name='dentist_visit'  id='dentist_visit' placeholder='MM/DD/YYYY'>
                  <script>
                     $( function() {
                       $( '#dentist_visit' ).datepicker();
                     } );
                  </script>
               </div>
               <div class='form-group  form-group-half'>
                  <label>Referred to us by</label>
                  <input type='text ' class='form-control inputmodified' name='referral'>
               </div>
            </div>            
         <input type='submit' class='btn btn-cstm' id='submit' value='Submit' name='submit'>
         </form>

      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>