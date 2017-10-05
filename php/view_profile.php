<?php $title="View Profile" ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');?>

<div class='pagebody clearfix'>
   <div class='content-container'>
      <div class='pageheader'>
         <h1>Edit Account</h1>
      </div>
      <div class='pagecontent clearfix'>
      	<form class='regform clearfix' id='insert_register' action='' method='post'>
      	<?php

      	require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); 

		$uid = $_GET['uid'];

		if(isset($_POST['update'])) {
	         $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
	         $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
	         $email = mysqli_real_escape_string($link, $_REQUEST['email']);
	         $birth_date = mysqli_real_escape_string($link, $_REQUEST['birth_date']);
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

	         $update = "UPDATE `patients` SET `first_name` = '$first_name' , `last_name` = '$last_name' , `email` = '$email' , `birth_date` = '$birth_date' , `home_address` = '$home_address' , `phone_number` = '$phone_number' , `mobile_number` = '$mobile_number' , `occupation` = '$occupation' , `business_phone` = '$business_phone', `spouse_name` = '$spouse_name', `medical_doctor` = '$medical_doctor', `last_visit` = '$last_visit', `dentist_visit` = '$dentist_visit', `referral` = '$referral' WHERE `patients`.`uid` = '$uid' ;";

	         if(mysqli_query($link, $update)){
	            echo "<div class='alert alert-success'>
	                 <strong>Success!</strong> You have updated the profile.
	               </div>";
         } 

         else{
             echo "ERROR: Could not able to execute $update. " . mysqli_error($link);
         } }

		$sql="SELECT * FROM patients
		WHERE uid='$uid'";

		$result=mysqli_query($link, $sql);

		if (mysqli_num_rows($result)> 0) {
			while($row = mysqli_fetch_array($result)) {

		         echo "
		            <div class='fullname clearfix'>
		               <div class='form-group form-group-half'>
		                  <label>First name</label>
		                  <input type='text' class='form-control inputmodified' value='" .$row['first_name']. "' name='first_name'>
		               </div>
		               <div class='form-group form-group-half'>
		                  <label for='lastname'>Last name</label>
		                  <input type='text' class='form-control inputmodified' value='" .$row['last_name']. "' name='last_name'>
		               </div>
		            </div>
		            <div class='birthdate clearfix'>
		               <div class='form-group  form-group-half'>
		                  <label>Email address</label>
		                  <input type='email' class='form-control inputmodified' value='" .$row['email']. "' name='email'>
		               </div>
		               <div class='form-group form-group-half'>
		                  <label>Birth Day</label>
		                  <input type='text' id='birth_date' class='form-control inputmodified' value='" .$row['birth_date']. "' name='birth_date'>
		                  <script>
		                     $( function() {
		                       $( '#birth_date' ).datepicker();
		                     } );
		                  </script>
		               </div>
		            </div>
		            <div class='homeadress clearfix'>
		               <div class='form-group' style='width: 100%;'>
		                  <label for='address'>Home Address</label>
		                  <input type='text ' class='form-control' style='width: 100%' value='" .$row['home_address']. "' name='home_address'>
		               </div>
		            </div>
		            <div class='contactnumber clearfix'>
		               <div class='form-group form-group-half'>
		                  <label for='contactnumber'>Home phone</label>
		                  <input type='text' class='form-control inputmodified' value='" .$row['phone_number']. "' name='phone_number'>
		               </div>
		               <div class='form-group form-group-half'>
		                  <label for='contactnumber'>Mobile phone</label>
		                  <input type='text' class='form-control inputmodified' value='" .$row['mobile_number']. "' name='mobile_number'>
		               </div>
		            </div>
		            <div class='occupation clearfix'>
		               <div class='form-group form-group-half'>
		                  <label>Occupation</label>
		                  <input type='text ' class='form-control inputmodified' value='" .$row['occupation']. "' name='occupation'>
		               </div>
		               <div class='form-group form-group-half' id='business_phone'>
		                  <label>Business phone</label>
		                  <input type='text ' class='form-control inputmodified' value='" .$row['business_phone']. "' name='business_phone'>
		               </div>
		            </div>
		            <div class='spouseinfo clearfix'>
		               <div class='form-group form-group-half'>
		                  <label>Spouse's name</label>
		                  <input type='text ' class='form-control inputmodified' value='" .$row['spouse_name']. "' name='spouse_name'>
		               </div>
		               <div class='form-group form-group-half '>
		                  <label>Contact number</label>
		                  <input type='text ' class='form-control inputmodified' value='" .$row['spouse_phone']. "' name='spouse_phone'>
		               </div>
		            </div>
		            <div class='medicaldoctor clearfix'>
		               <div class='form-group form-group-half'>
		                  <label>Name of your Medical Doctor</label>
		                  <input type='text ' class='form-control  inputmodified' value='" .$row['medical_doctor']. "' name='medical_doctor'>
		               </div>
		               <div class='form-group form-group-half'>
		                  <label>Date of last visit</label>
		                  <input type='text' id='last_visit' class='form-control inputmodified' value='" .$row['last_visit']. "' name='last_visit'>
		                  <script>
		                     $( function() {
		                       $( '#last_visit' ).datepicker();
		                     } );
		                  </script>
		               </div>
		            </div>
		            <div class='referral clearfix'>
		            <div class='form-group form-group-half'>
		               <label>Date of last visit to Dentist</label>
		               <input type='text' id='dentist_visit' class='form-control inputmodified' value='" .$row['dentist_visit']. "' name='dentist_visit'>
		               <script>
		                  $( function() {
		                    $( '#dentist_visit' ).datepicker();
		                  } );
		               </script>
		            </div>
		            
		               <div class='form-group  form-group-half'>
		                  <label>Referred to us by</label>
		                  <input type='text ' class='form-control   inputmodified' value='" .$row['referral']. "' name='referral'>
		               </div>
		            </div>";

		         } }
		        else{};
		        ?>

		       	<input type='submit' class='btn btn-cstm' id='update' value='Update' name='update'>
			</form>
		</div>
	</div>
</div>

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>