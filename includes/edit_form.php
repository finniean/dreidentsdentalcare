<link rel="stylesheet" href="css.css">
<header><title>display</title></header>
<center><div class="nav">
<a href="form.php">HOME</a>
</div></center>
<?php require_once 'conn.php'; // CONNECTION ?>
<?php
	if ( intval( $_GET['id'] ) == 0 ) {
		header("Location:update.php");
		exit();
	}
?>

<div class="container">


	<!-- HEADER -->
	<div class="header">
		<h1>Customer Info</h1>
	</div>

	
	<!-- CONTENT PAGE -->
	<div class="content-page">
		<div class="row">
			<div class="col-sm-6">
				<h2>Edit Customer Info</h2>
				<?php
					$id = $_GET['id'];
					$query = "SELECT * 
							  FROM customer ";
					$query .= "WHERE id=?";

					$stmt = $pdo ->prepare ($query);
					$stmt ->bindValue (1, $id, PDO::PARAM_STR);
					$stmt -> execute();
					$student = $stmt->fetch(PDO::FETCH_ASSOC);
					
				?>
				<center><form method="POST" action="update.php?id=<?php echo $id; ?>">
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" class="form-control" name="firstname" value="<?php echo $student["firstname"]; ?>" required>
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" class="form-control" name="lastname" value="<?php echo $student["lastname"]; ?>" required>
					</div>
					<div class="form-group">
						<label>Address:</label>
						<input type="text" class="form-control" name="address" value="<?php echo $student["address"]; ?>" required>
					</div>
					<button type="submit" class="btn btn-success">Save</button>
					<a href="index.php" class="btn btn-danger">Cancel<a>
				</form></center>
			
			</div>
		</div><!-- END row -->
	</div><!-- END content-page -->
	
	
	<!-- FOOTER -->
	<div class="footer">
		<h5>&copy; </h5>
	</div>
	
	
</div><!-- END Container-->