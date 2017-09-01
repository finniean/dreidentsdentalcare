<?php $title="Dreident Dental Care - Appointments" ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php'); ?>

<!-- begin page content -->
<div class="pagebody clearfix">
    <div class="content-container">
        <div class="pageheader">
            <h1>Set Appointment</h1>
        </div>
        <div class="pagecontent clearfix">

            <form class="apptform clearfix" id='show_appointment' action='/pages/admin/show_appointment.php' method='post'>
                <div class="appt_date clearfix">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type="text" id="datepicker" name="appt_date">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <script>
                                $(function() {
                                    $("#datepicker").datepicker();
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-cstm" value="Set Appointment">
            </form>

        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>