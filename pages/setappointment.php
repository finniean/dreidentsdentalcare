<?php $title="Dreident Dental Care - Set Appointment" ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); ?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Set Appointment</h1>
      </div>
      <div class="pagecontent clearfix">
         <form class="apptform clearfix" id='insert_appointment' action='/php/insert_appointment.php' method='post'>
            <div class="appt_date clearfix">
               <div class="form-group">
                  <div class='input-group date' id='datetimepicker1'>
					<label>Date</label>
                     <input type="text" id="datepicker" name="appt_date">
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                     </span>
                     <script>
                        $( function() {
                          $( "#datepicker" ).datepicker();
                        } );
                     </script>
                  </div>
               </div>
            </div>
            <div class="apptime clearfix">
               <div class="form-group">
                  <label>Time</label>
                  <select id="selectDate " class="form-control selectWidth" name="appt_time">
                     @for ($i = 1; $i
                     <=3 1; $i++)
                     <option>Select Time</option>
                     <option>09:00AM - 11:AM</option>
                     <option>11:00AM - 01:00PM</option>
                     <option>01:00PM - 03:00PM</option>
                     <option>03:00PM - 05:00PM</option>
                     @endfor
                  </select>
               </div>
            </div>
            <div class="services clearfix">
               <div class="form-group">
                  <label>Service to be done</label>
                  <select id="selectDate " class="form-control selectWidth" name="services">
                     @for ($i = 1; $i
                     <=3 1; $i++)
                     <option>Services</option>
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
                     @endfor
                  </select>
               </div>
            </div>
            <input type="submit" class="btn btn-cstm" value="Set Appointment">
         </form>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>