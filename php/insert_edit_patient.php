<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

         $sql = "UPDATE patients SET last_name='Doe' WHERE uid=30";

if (mysqli_query($link, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($link);
}

mysqli_close($link);
         ?>