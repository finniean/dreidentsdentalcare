<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

$uid = $_GET['uid'];

$sql = mysqli_query($link, "UPDATE `patients` SET `first_name` = '$first_name' , `last_name` = '$last_name' WHERE `worker`.`uid` = '$uid' ;");

header("Location: /patients.php");

mysqli_close($link);

?>
