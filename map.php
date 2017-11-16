<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/indexstyle.css">
  <script src="js/indexpage.js"></script> 
  
  

  <title>Pluug Map</title>
</head>
<body>

<h1 style="text-align:center;"> plug-related title </h1>

<?php include('staticPageElements/nav_bar.php'); ?>

<div id="map"></div>

<p> <br>

</p>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id = "modalCountryName"></div>
    <div id = "modalVoltage">.</div>
    <div id = "modalFreq"></div>
    <div id = "modalPlug"></div>
  </div>

</div>


<p>TO-DO: <br>
catch exceptions for countries w/o data; <br>
write 'for a full list of countries click /here/' msg; <br>
make map cover all mini countries; <br>
make modal display country_display;
</p>
    
</body>
<footer>
    <script src="js/mappage.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT2XWLfjJof69JsiuMChKsRoT84CY-ao0&callback=initMap"
    async defer></script>
</footer>
</html>

