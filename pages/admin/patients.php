<?php $title='Patient Profiles' ; ob_start(); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

if($_SESSION['uid'] === '1'){

    $first_nameErr = $last_nameErr = '';
    $action = $form = '';

    if ($_POST) {

        $valid = true;

        if (empty($_POST["first_name"])) {
            $valid = false;
            $first_nameErr = "First Name is required";        
        } else {
            $_SESSION['patient_first_name'] = mysqli_real_escape_string($link, $_REQUEST['first_name']);
        }

        if (empty($_POST["last_name"])) {
            $valid = false;
            $last_nameErr = "Last Name is required";            
        } else {
            $_SESSION['patient_last_name'] = mysqli_real_escape_string($link, $_REQUEST['last_name']);
        }
            $_SESSION['patient_email'] = mysqli_real_escape_string($link, $_REQUEST['email']);
            $_SESSION['patient_mobile_number'] = mysqli_real_escape_string($link, $_REQUEST['mobile_number']);

        if ($valid){
            ob_end_flush(header ('Location: /php/show_patients.php'));
        }

    }

    $form = "
        <form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
            <div class='form-group'>
                <label>First Name</label>
                <span class='error'>* " . $first_nameErr . "</span>
                <input type='text' class='form-control' name='first_name'>
            </div>
            <div class='form-group'>
                <label>Last Name</label>
                <span class='error'>* " . $last_nameErr . "</span>
                <input type='text' class='form-control' name='last_name'>
            </div>
            <div class='form-group'>
                <label>Email</label>
                <input type='text' class='form-control' name='email'>
            </div>
            <div class='form-group'>
                <label>Mobile Number</label>
                <input type='text' class='form-control' name='mobile_number'>
            </div>
            <input type='submit' class='btn btn-cstm' value='Search Appointments'>
        </form>
    ";
    }

else {
    $form = "
        <div class='alert alert-danger'>
            You need the <strong>Admin</strong> role to view this page!
        </div>
    ";
} ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Patient's Information</h1>
        </div>
        <div class='pagecontent clearfix'>
            <?php 
                echo $form;
            ?>
        </div>
    </div>
</div>
<!-- end page content -->


<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php');?>