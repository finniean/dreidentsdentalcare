<?php
require('includes/db.php');

$sql = "SELECT first_name, last_name, email, password, birth_month, birth_day, birth_year, home_address, phone_number, mobile_number, occupation, business_phone, spouse_name, spouse_phone, medical_doctor, last_visit, dentist_visit, referral FROM patients";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
		echo " Birthday: " . $row["birth_month"]. " " . $row["birth_day"]. " " . $row["birth_year"]. "<br>";
		echo " Home Address: " . $row["home_address"]. "<br>";
		echo " Phone Number: " . $row["phone_number"]. "<br>";
		echo " Mobile Number: " . $row["mobile_number"]. "<br>";
		echo " Occupation: " . $row["occupation"]. "<br>";
		echo " Business Phone: " . $row["business_phone"]. "<br>";
		echo " Spouse's Name: " . $row["spouse_name"]. "<br>";
		echo " Spouse's Phone Number: " . $row["spouse_phone"]. "<br>";
		echo " Medical Doctor: " . $row["medical_doctor"]. "<br>";
		echo " Last Visit: " . $row["last_visit"]. "<br>";
		echo " Last Dentist Visit: " . $row["dentist_visit"]. "<br>";
		echo " Referral: " . $row["referral"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($link);
?>
