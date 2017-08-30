<?php
   $title = "Dreident Dental Care - Register";
   include "templates/header.php";
   include "templates/navigation.php";
   ?>
<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Registration</h1>
      </div>
      <div class="pagecontent clearfix">
         <h3 class="blueline">Dont have an account with us yet?</h3>
         <p>We appreciate the confidence you place with us to you with the dental service. To assist us us in serving you better, kindly fill up this form.</p>
         <p class="reqfields">* required fields</p>
         <form class="regform clearfix" id='register' action='/includes/register.php' method='post' accept-charset='UTF-8'>
            <div class="fullname clearfix">
               <div class="form-group form-group-half">
                  <label>First name</label>
                  <input type="text" class="form-control inputmodified" name="first_name">
               </div>
               <div class="form-group form-group-half">
                  <label for="lastname">Last name</label>
                  <input type="text" class="form-control inputmodified" name="last_name">
               </div>
            </div>
            <div class="birthdate clearfix">
               <div class="form-group">
                  <label>Date of Birth</label>
                  <select id="selectDate " class="form-control selectWidth" name="birth_month">
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
                  <input type="number" class="form-control " placeholder="Day" name="birth_day">
                  <input type="number" class="form-control " placeholder="Year" name="birth_year">
               </div>
            </div>
            <div class="homeadress clearfix">
               <div class="form-group" style="width: 100%;">
                  <label for="address">Home Address</label>
                  <input type="text " class="form-control" style="width: 100%" name="home_address">
               </div>
            </div>
            <div class="contactnumber clearfix">
               <div class="form-group form-group-half">
                  <label for="contactnumber">Home phone</label>
                  <input type="text" class="form-control inputmodified" name="phone_number">
               </div>
               <div class="form-group form-group-half">
                  <label for="contactnumber">Mobile phone</label>
                  <input type="text" class="form-control inputmodified" name="mobile_number">
               </div>
            </div>
            <div class="email clearfix">
               <div class="form-group" style="width: 100%;">
                  <label>Email address</label>
                  <input type="email" class="form-control" style="width: 100%;" name="email">
               </div>
            </div>
            <div class="occupation clearfix">
               <div class="form-group" style="width: 100%;">
                  <label>Occupation</label>
                  <input type="text " class="form-control" style="width: 100%" name="occupation">
               </div>
               <div class="form-group form-group-half" id="business_phone">
                  <label>Business phone</label>
                  <input type="text " class="form-control inputmodified" name="business_phone">
               </div>
            </div>
            <div class="spouseinfo clearfix">
               <div class="form-group" style="width: 100%;">
                  <label>Spouse's name</label>
                  <input type="text " class="form-control" style="width: 100%" name="spouse_name">
               </div>
               <div class="form-group form-group-half ">
                  <label>Contact number</label>
                  <input type="text " class="form-control inputmodified" name="spouse_phone">
               </div>
            </div>
            <div class="medicaldoctor clearfix">
               <div class="form-group" style="width: 100%;">
                  <label>Name of your Medical Doctor</label>
                  <input type="text " class="form-control" style="width: 100%" name="medical_doctor">
               </div>
               <div class="form-group form-group-half ">
                  <label>Date of last visit</label>
                  <input type="text " class="form-control inputmodified" placeholder="MM/DD/YYYY" name="last_visit">
               </div>
            </div>
            <div class="dentistvisit clearfix">
               <div class="form-group form-group-half ">
                  <label>Date of last visit to Dentist</label>
                  <input type="text " class="form-control inputmodified" placeholder="MM/DD/YYYY" name="dentist_visit">
               </div>
            </div>
            <div class="referral clearfix">
               <div class="form-group" style="width: 100%;">
                  <label>Referred to us by</label>
                  <input type="text " class="form-control" style="width: 100%" name="referral">
               </div>
            </div>
            <div class="password clearfix">
               <div class="form-group form-group-half ">
                  <label>Password</label>
                  <input type="password" class="form-control inputmodified" name="password">
               </div>
            </div>
			<input type="submit" class="btn btn-cstm" id="regsubmit" value="Submit">
         </form>
         
      </div>
   </div>
</div>
<!-- end page content -->
<?php
   include "templates/footer.php";
   ?>