<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/mainstyle.css">
  <script src="js/mainpage.js"></script> 
  <script src="js/mappage.js"></script> 
  

  <title>Pluug Map</title>
</head>
<body>

<h1 style="text-align:center;"> plug-related title </h1>

<?php include('staticPageElements/nav_bar.php'); ?>


<p> This is map page</p>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT2XWLfjJof69JsiuMChKsRoT84CY-ao0&callback=initMap"
    async defer></script>
<p> <br>
<?php
    //AIzaSyDT2XWLfjJof69JsiuMChKsRoT84CY-ao0 
    ?>
</p>
    
</body>
</html>

