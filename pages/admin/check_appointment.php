<?php $title='Dreident Dental Care - Appointments' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Check Appointments</h1>
        </div>
        <div class='pagecontent clearfix'>
            <?php
            if($_SESSION['uid'] === '1'){
            echo "
            <form class='apptform clearfix' id='show_appointment' action='/php/show_appointment.php' method='post'>
                <div class='form-group'>
                <label>Start Date</label>
                    <input type='text' class='form-control' id='start_date' name='start_date'>
                    <script>
                        $(function() {
                            $('#start_date').datepicker();
                        });
                    </script>
                </div>
                <div class='form-group'>
                    <label>End Date</label>
                    <input type='text' class='form-control' id='end_date' name='end_date'>
                    <script>
                        $(function() {
                            $('#end_date').datepicker();
                        });
                    </script>
                </div>
                   <div class='form-group'>
                      <label>Service to be done</label>
                      <select class='form-control' name='services'>
                         <option selected value=''>Services</option>
                         <option>Oral Prophylaxis</option>
                         <option>Visible Light Cured (Tooth-Colored) Restorations</option>
                         <option>Amalgam (Silver) Restorations</option>
                         <option>Jacket Crowns</option>
                         <option>Fixed Bridges</option>
                         <option>Removable Partial Denture</option>
                         <option>Complete Denture</option>
                         <option>Tooth Extraction</option>
                         <option>Removal of Impacted Wisdom Teeth</option>
                         <option>Orthodontic Treatment</option>
                         <option>Periapical Dental X-ray</option>
                         <option>Root Canal</option>
                      </select>
                   </div>
                   <div class='form-group'>
                       <label>Time</label>
                       <select class='form-control' name='appt_time'>
                          <option selected>Select Time</option>
                          <option>09:00AM - 11:00AM</option>
                          <option>11:00AM - 01:00PM</option>
                          <option>01:00PM - 03:00PM</option>
                          <option>03:00PM - 05:00PM</option>
                       </select>
                    </div>
                   <div class='form-group'>
                        <label>First Name</label>
                        <input type='text' class='form-control' name='first_name'>
                    </div>
                    <div class='form-group'>
                        <label>Last Name</label>
                        <input type='text' class='form-control' name='last_name'>
                    </div>
                <input type='submit' class='btn btn-cstm' value='Search Appointments'>
            </form>
            ";}
            else{
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