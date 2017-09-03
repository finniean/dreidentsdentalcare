<?php require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); $title="Dreident Dental Care - " ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/admin_navigation.php');

$first_name=mysqli_real_escape_string($link, $_REQUEST[ 'first_name']);
$sql = "SELECT * FROM patients
WHERE first_name = '$first_name'
ORDER BY first_name ASC;" ;
$result=mysqli_query($link, $sql);
?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Patient's Information</h1>
      </div>
      <div class="pagecontent clearfix">
         <table>
            <?php if (mysqli_num_rows($result)> 0) { echo "
			<tr>
				   <th>First Name</th>
				   <th>Last Name</th>
				   <th>Birthday</th>
				   <th>Home Address</th>
				   <th>Phone Number</th>
				   <th>Mobile Number</th>
				   <th>Occupation</th>
				   <th>Business Phone</th>
				   <th>Spouse's Name</th>
				   <th>Spouse's Contanct Number</th>
				   <th>Medical Doctor</th>
				   <th>Last Visit</th>
				   <th>Last Visit Dentist</th>
				   <th>Referral</th> 
				</tr>
			";while($row = mysqli_fetch_assoc($result)) { echo "
               <tr class='resultsrow'>
                   <td>" . $row["first_name"]. "</td>
                   <td>" . $row["last_name"]. "</td>
                   <td>" . $row["birth_month"]. " " . $row["birth_day"]. " " . $row["birth_year"]. "</td>
				   <td>" . $row["home_address"] . "</td>
				   <td>" . $row["phone_number"] . "</td>
				   <td>" . $row["mobile_number"] . "</td>
				   <td>" . $row["occupation"] . "</td>
				   <td>" . $row["business_phone"] . "</td>
				   <td>" . $row["spouse_name"] . "</td>
				   <td>" . $row["spouse_phone"] . "</td>
				   <td>" . $row["medical_doctor"] . "</td>
				   <td>" . $row["last_visit"] . "</td>
				   <td>" . $row["dentist_visit"] . "</td>
				   <td>" . $row["referral"] . "</td>
               </tr>"; } } else { echo "<div class='alert alert-success' role='alert'><p>0 results</p></div>"; } ?>
         </table>
      </div>
   </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>