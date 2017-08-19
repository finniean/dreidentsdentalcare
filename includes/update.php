<?php
require_once 'conn.php';
if(intval($_GET['id'])==0){
	header("Location:select.php");
	exit();
}
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
try{
	$query="UPDATE customer SET firstname =?,lastname =?,address =? WHERE id = ? LIMIT 1";
$stmt = $pdo->prepare($query);
	
	$stmt->bindValue(1, $firstname, PDO::PARAM_STR);
	$stmt->bindValue(2, $lastname, PDO::PARAM_STR);
	$stmt->bindValue(3, $address, PDO::PARAM_STR);
	$stmt->bindValue(4,$id,PDO::PARAM_INT);
	
	$stmt->execute();
	//SUCCESSFULLY SAVED!
	echo "
	<script>
		alert('Successfully UPDATED!');
		window.location ='edit_form.php';
		</script>
		";
} catch (PDOException $ex) {
		//echo $ex->getMessage();
		//Failed to UPDATE!
		echo "
		<script>
		alert('Failed to UPDATE!');
		window.location ='edit_form.php';
		</script>
		";
}
?>