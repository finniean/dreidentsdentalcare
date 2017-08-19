<?php
$title = "Dreident Dental Care - Register";
include "templates/header.php";
?>

<!-- begin page content -->
    <div class="header clearfix">
		<div class="pageheader">
            <h1>Registration</h1>
        </div>
		<div class="pagecontent clearfix">
		<h3 class="blueline">Dont have an account with us yet?</h3>
			<p>We appreciate the confidence you place with us to you with the dental service. To assist us us in serving you better, kindly fill up this form.</p>
			<p class="reqfields">* required fields</p>
		<form class="regform clearfix" id='register' action='register.php' method='post' accept-charset='UTF-8'>
			<div class="form-group form-group-half" id="namegroup">
				<label for="firstname">First name</label>
				<input type="text" class="form-control inputmodified" id="firstname" name="First name">
			</div>
			<div class="form-group form-group-half" id="namegroup">
				<label for="lastname">Last name</label>
				<input type="text" class="form-control inputmodified" id="lastname" name="lastname">
			</div>
			<div class="form-group" id="birthgroup">
					<label>Date of Birth</label>
					<select id="selectDate " class="form-control selectWidth ">
						@for ($i = 1; $i
						<=3 1; $i++)
							<option class=" ">Month</option>
							<option class=" ">January</option>
							<option class=" ">February</option>
							<option class=" ">March</option>
							<option class=" ">April</option>
							<option class=" ">May</option>
							<option class=" ">June</option>
							<option class=" ">July</option>
							<option class=" ">August</option>
							<option class=" ">September</option>
							<option class=" ">October</option>
							<option class=" ">November</option>
							<option class=" ">December</option>
							@endfor
					</select>
					<input type="number" class="form-control " placeholder="Day " maxlength="2">
					<input type="number" class="form-control " placeholder="Year ">
				</div>
				<div class="form-group clearfix" id="address" style="width: 100%; padding-right: 10px;">
               <label for="address">Home Address</label>
					<input type="text " class="form-control" style="width: 100%">
				</div>
				<div class="form-group form-group-half" id="homephone">
				<label for="contactnumber">Home phone</label>
				<input type="text" class="form-control inputmodified" id="contactnumber phone">
				</div>
				<div class="form-group form-group-half" id="mobilephone">
				<label for="contactnumber">Mobile phone</label>
				<input type="text" class="form-control inputmodified" id="contactnumber mobile">
			</div>
            <div class="form-group" id="email"  style="width: 50%; margin-right:50%; padding-right: 10px;">
               <label>Email address</label>
                <input type="email" class="form-control" style="width: 100%;">
            </div>
            <div class="form-group form-group-half" id="occupation">
               <label>Occupation</label>
                <input type="text " class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half" id="businessphone">
               <label>Business phone</label>
                <input type="text " class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half">
               <label>Spouse's Name</label>
                <input type="text " class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half ">
               <label>Phone number</label>
                <input type="text " class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half ">
               <label>Name of your Medical Doctor</label>
                <input type="text " class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half ">
               <label>Date of last visit</label>
                <input type="text " class="form-control inputmodified" placeholder="MM/DD/YYYY ">
            </div>
            <div class="form-group form-group-half ">
               <label>Date of last visit to Dentist</label>
                <input type="text " class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half ">
               <label>Referred to us by</label>
                <input type="text " class="form-control inputmodified">
            </div>
			<div class="form-group form-group-half ">
               <label>Password</label>
                <input type="password" class="form-control inputmodified">
            </div>
            <div class="form-group form-group-half ">
               <label> Confirm Password</label>
                <input type="password" class="form-control inputmodified">
            </div>
				
				
			</form>
			<input type="submit" class="btn btn-cstm" id="regsubmit" value="Submit">
		</div>
    </div>
<!-- end page content -->

<?php
include "/templates/footer.php";
?>