<?php
    include_once('/otherfiles/conn.php');

    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];

    if(mysql_query("INSERT INTO users (name,email,phone) VALUES ('$name','$email','$phone')"))
    echo"successfully inserted";
    else
    echo "failed";
?>