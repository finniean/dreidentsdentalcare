   <!-- FOOTER -->
<?php

$successful = $feedback_name = $feedback_subject = $feedback = '';

if(isset($_POST['feedback'])){
    if ($_POST) {
        $feedback_name = mysqli_real_escape_string($link, $_REQUEST['feedback_name']);
        $feedback_subject = mysqli_real_escape_string($link, $_REQUEST['feedback_subject']);
        $feedback = mysqli_real_escape_string($link, $_REQUEST['feedback']);

        $sql = "INSERT INTO feedback
        (feedback_name, feedback_subject, feedback)
        VALUES 
        ('$feedback_name', '$feedback_subject', '$feedback')";

        if(mysqli_query($link, $sql)){
            $successful = "<div class='alert alert-success'>
                           <strong>Thank you!</strong> We appreciate your feedback.
                         </div>";
        } 

        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    mysqli_close($link);
}?>
   <div class="footer">
    <div class="content-container clearfix">
        <div class="column1">
            <h4>Site Navigation</h4>
            <ul class="footer-nav">
                <li>
                    <a href="/index.php">Home</a>
                </li>
                <li>
                    <a href="/pages/testimonials.php">Testimonials</a>
                </li>
                <li>
                    <a href="/pages/dentists.php">Dentists</a>
                </li>
                <li>
                    <a href="/pages/location.php">Clinic</a>
                </li>
                <li>
                    <a href="/pages/services.php">Services</a>
                </li>
                </ul>
        </div>
		<div class="column2">
            <h4>Connect with us</h4>
			<ul class="footer-nav">      
                <li>
                   <a href="https://www.facebook.com/dreidentsdentalcare/">
				<img src="/images/fb-icon.png">
                Like us on Facebook
				</a>
                </li>
                </ul>
        </div>
        <div class="column3">

            <?php 
            if (isset($_SESSION["username"])) {
                if($_SESSION['uid'] > '1'){
            echo $successful;
            echo "
                <h4>Send Us A Feedback</h4>
                <form action='". htmlspecialchars($_SERVER["PHP_SELF"]) ."' method='post'>
                <div class='form-group'>
                    <input type='text' class='form-control' name='feedback_name' placeholder='Your Name'>
                </div>
                <div class='form-group'>
                    <input type='text' class='form-control' name='feedback_subject' placeholder='Subject'>
                </div>
                <div class='form-group'>
                    <textarea class='form-control' rows='4' cols='50' name='feedback' placeholder='Your Feedback'></textarea>
                </div>
                <input type='submit' class='btn btn-cstm' value='Submit' name='feedback'>
             </form>";
         }}
            ?>
        </div>
    </div>
	</div>
    <!-- FOOTER -->
</body>

</html>