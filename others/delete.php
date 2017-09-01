<?php
require_once 'conn.php';

if(intval($_GET['id'])== 0){
	header("Location:select.php");
	exit();
}
$id=$_GET['id'];
try{
		$query ="DELETE FROM customer WHERE id = ? ";
		$stmt=$pdo->prepare($query);

		$stmt->bindValue(1,$id,PDO::PARAM_INT);
		$stmt->execute();
		echo "
		<script>
		alert('Successfully Deleted!');
		window.location ='select.php';
		</script>
		";
		
} catch(PDOException $ex) {
		//echo $ex->getmessage();
		echo "
		<script>
		alert('Failed To delete!');
		window.location ='select.php';
		</script>
"; 
}
?>