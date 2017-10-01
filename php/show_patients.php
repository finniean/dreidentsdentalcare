<?php require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); $title="Dreident Dental Care - " ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

$first_name=mysqli_real_escape_string($link, $_REQUEST[ 'first_name']);
$last_name=mysqli_real_escape_string($link, $_REQUEST[ 'last_name']);
$email=mysqli_real_escape_string($link, $_REQUEST[ 'email']);
$mobile_number=mysqli_real_escape_string($link, $_REQUEST[ 'mobile_number']);

$sql = "SELECT * FROM patients
WHERE (first_name LIKE '%" .$first_name. "%'
OR last_name LIKE '%" .$last_name. "%')
AND email LIKE '%" .$email. "%'
AND mobile_number LIKE '%" .$mobile_number. "%'
ORDER BY last_name ASC;" ;

$result=mysqli_query($link, $sql);
?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Patient's Information</h1>
      </div>
      <div class="pagecontent clearfix">
         <table class='show_patients'>

        <?php
        if (mysqli_num_rows($result)> 0) { echo "
			     <tr>
  				   <th>First Name</th>
  				   <th>Last Name</th>
  				   <th>Email</th>
  				   <th>Mobile Number</th>
  				   <th>Veiw</th>
  				   <th>Edit</th>
				  </tr>" ;
        while($row = mysqli_fetch_assoc($result)) { echo "
           <tr class='resultsrow'>
              <td>" . $row["first_name"]. "</td>
              <td>" . $row["last_name"]. "</td>
              <td>" . $row["email"]. "</td>
		          <td>" . $row["mobile_number"] . "</td>
		          <td><a href='view_patient.php?uid=". $row['uid'] ."'>View</td>
       		     <td><a href='edit_patient.php?uid=". $row['uid'] ."'>Edit</td>
       		     <td><a href='delete.php?uid=". $row['uid'] ."'>Delete</td>
           </tr>"; } } 
        else { echo "<div class='alert alert-success' role='alert'><p>0 results</p></div>" ; } 
        ?>

          </table>
        <a href='/pages/admin/patients.php'><input type='submit' class='btn btn-cstm' value='Search Again'></a>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>