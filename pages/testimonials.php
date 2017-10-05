<?php $title='Testimonials' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); 
$sql = "SELECT * FROM feedback" ;
$result=mysqli_query($link, $sql);
?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Patient's Testimonials</h1>
        </div>
        <div class='pagecontent clearfix'>
            <?php
            if (mysqli_num_rows($result)> 0) {
                while($row = mysqli_fetch_assoc($result)) { echo "
                   <div class='testimonials'>
                        <div class='testi-body'>
                            <h4 class='testi-heading'>' " . $row["feedback_subject"]. " '</h4>
                            <p class='testi-name'>By: ". $row["feedback_name"] ."</p>
                            <p>" . $row["feedback"]. "
                            </p>
                        </div>
                    </div>";
                } 
            } ?>
        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>