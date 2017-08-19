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
		<h3 class="blueline">Set an appointment now</h3>
		<p>We appreciate the confidence you place with us to you with the dental service. To assist us us in serving you better, kindly fill up this form.</p>
		<h4 class="blueline">Dental history</h4>
		
		<div class="radio">
			<p>Are you apprehensive about dental treatment?</p>
			<label><input type="radio" name="optradio">Yes</label>
			<label><input type="radio" name="optradio">No</label>
		</div>
		
		<div class="radio">
			<p>Have you had problems with previous dental treatment?</p>
			<label><input type="radio" name="optradio">Yes</label>
			<label><input type="radio" name="optradio">No</label>
		</div>
		
		<div class="radio">
			<p>Do you gag easily?</p>
			<label><input type="radio" name="optradio">Yes</label>
			<label><input type="radio" name="optradio">No</label>
		</div>
		
		<div class="radio">
			<p>do you wear dentures?</p>
			<label><input type="radio" name="optradio">Yes</label>
			<label><input type="radio" name="optradio">No</label>
		</div>
		
		<div class="radio">
			<p>Does food catch between your teeth?</p>
			<label><input type="radio" name="optradio">Yes</label>
			<label><input type="radio" name="optradio">No</label>
		</div>
		
		<div class="radio">
			<p><!-- question here --></p>
			<label><input type="radio" name="optradio">Yes</label>
			<label><input type="radio" name="optradio">No</label>
		</div>
		
		</div>
    </div>
<!-- end page content -->

<?php
include "templates/footer.php";
?>