<?php
   $title = "Dreident Dental Care - Set Appointment";
   include "templates/header.php";
   ?>
<!-- begin page content -->
<div class="header clearfix">
   <div class="pageheader">
      <h1>Set Appointment</h1>
   </div>
   <div class="pagecontent clearfix">
      <h3>Do you have, or have you had, any of the following?</h3>
	  <!-- Allergy -->
      <p style="font-weight: bold" class="blueline">Are you allergic, or have you reacted adversely, to any of the following?</p>
      <div class="radio">
         <p>Local anesthestics ("Novocaine")</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Penicilin or other antibiotocs </p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Sulfa drugs</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Barbiturates, sedatives, or sleeping pills</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Aspirin, Acetaminophen, or Ibuprofen</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Codeine,Demerol, or other narcotics
         <p/>
            <label><input type="radio" name="optradio">Yes</label>
            <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Reaction to metals</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Latex or rubber dam</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Other</p>
         <input type="text" name="form-control">
      </div>
	  <!-- Past 12 months -->
      <p style="font-weight: bold" class="blueline">During the past 12 months, have you taken any of the following?</p>
      <div class="radio">
         <p>Antibiotics or sulfa drugs</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Anticoagulants (e.g., Coumadin)</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>High blood presure medicine</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Tranquilizers</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Insulin, Orinase, or similar drug</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Aspirin</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Diditalis or drugs for heart trouble</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Nitroglycerin</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Cortisone (steroids)</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Natural remedies</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Nonprescription drug/supplements</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Other</p>
         <input type="text" name="form-control">
      </div>
	  <!-- Only for women -->
      <p style="font-weight: bold" class="blueline">Only for Women</p>
      <div class="radio">
         <p>Are you taking contraceptives or other hormones?</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Are you pregnant? </p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="indention">
         <p>If so, expected delivery date:</p>
         <input type="text" name="form-control">
      </div>
      <div class="radio">
         <p>Are you nursing a baby?</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="radio">
         <p>Have you reached menopouse?</p>
         <label><input type="radio" name="optradio">Yes</label>
         <label><input type="radio" name="optradio">No</label>
      </div>
      <div class="indention">
         <p>If so, do you have any symptoms?</p>
         <input type="text" name="form-control">
      </div>
   </div>
</div>
<!-- end page content -->
<?php
   include "templates/footer.php";
   ?>