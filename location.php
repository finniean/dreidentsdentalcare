<?php
$title = "Dreident Dental Care - Clinic";
include "templates/header.php";
?>

<!-- begin page content -->
    <div class="header clearfix">
		<div class="pageheader">
            <h1>Dreidents Dental Clinic Location</h1>
        </div>
		<div class="pagecontent clearfix">
        <div id="map" class="gmap"></div>
        <script>
            function initMap() {
                var ddcloc = {
                    lat: 10.709485,
                    lng: 122.569232
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: ddcloc
                });
                var marker = new google.maps.Marker({
                    draggable: true,
                    icon: '../images/gmapmarker.png',
                    position: ddcloc,
                    map: map,
                    title: 'Dreidents Dental Care'
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCob0F8AcmWLSQc9yEVj38DZb8aB1Fh-mU&callback=initMap">
        </script>
        <div class="locationinfo">
            <h3 class="blueline">Address</h3>
            <p>23 Huervana St., La Paz, Iloilo City</p>
            <h3 class="blueline">Contact Number</h3>
            <p>+63 939 529 3484</p>
            <h3 class="blueline">Operating Hours</h3>
            <p>Monday to Saturday 9:00 AM - 5:00PM</p>
            <p>Sunday by appointment</p>
        </div>
		</div>
    </div>
<!-- end page content -->

<?php
include "templates/footer.php";
?>