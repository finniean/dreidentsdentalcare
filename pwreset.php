<?php
$title = "Dreident Dental Care - Password Reset";
include "templates/header.php";
?>

<!-- begin page content -->
    <div class="header clearfix">
		<div class="pageheader">
            <h1>Forgot Password</h1>
        </div>
		<div class="pagecontent clearfix">
			<h3 class="blueline">Need help with your password?</h3>
			<p>Enter the email you use for Dreident Dental Care, and we’ll help you create a new password.</p>
		<form class="pwform clearfix" action="insert.php " method="POST">
		<div class="form-group">
			<label for="pwresetEmail">Email address</label>
			<input type="email" class="form-control" id="pwresetEmail">
		</div>
		<button type="submit" class="btn btn-cstm">Submit</button>
		</form>
		</div>
    </div>
<!-- end page content -->

<?php
include "templates/footer.php";
?>