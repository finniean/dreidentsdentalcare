<?php $title='Dreident Dental Care - Patients' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Patient's Information</h1>
        </div>
        <div class='pagecontent clearfix'>
            <?php
            if($_SESSION['uid'] === '1'){
            echo "
            <form class='clearfix' id='show_appointment' action='/php/show_patients.php' method='post'>
                <div class='form-group'>
                    <label>First Name</label>
                    <input type='text' class='form-control' name='first_name'>
                </div>
                <div class='form-group'>
                    <label>Last Name</label>
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
            ";}
            else {
            echo "
            <div class='alert alert-danger'>
              You need the <strong>Admin</strong> role to view this page!
            </div>
            ";}
            ?>
        </div>
    </div>
</div>
<!-- end page content -->


<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>