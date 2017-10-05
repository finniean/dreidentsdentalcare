<?php $title="Home" ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); ?>

<!-- begin page content -->
<div class="pagebody clearfix">
    <div class="content-container">
        <div class="home-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../images/slideshow1.jpg" alt="First Slide">
                    </div>
                    <div class="item">
                        <img src="../images/slideshow2.jpg" alt="Second Slide">
                    </div>
                    <div class="item">
                        <img src="../images/slideshow3.jpg" alt="Third Slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>