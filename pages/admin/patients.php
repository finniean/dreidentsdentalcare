<?php $title="Dreident Dental Care - Appointments" ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php'); ?>

<!-- begin page content -->
<div class="pagebody clearfix">
    <div class="content-container">
        <div class="pageheader">
            <h1>Patient's Information</h1>
        </div>
        <div class="pagecontent clearfix">

            <form class="apptform clearfix" id='show_appointment' action='/php/show_patients.php' method='post'>
                <div class="appt_date clearfix">
                    <div class="form-group">
                            <input type="text" id="datepicker" name="first_name">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-cstm" value="Search Appointments">
            </form>

        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>