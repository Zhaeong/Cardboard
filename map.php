<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/allstyle.css">
  <link rel="stylesheet" href="css/mapstyle.css">
  <script src="js/indexpage.js"></script> 
  
  

  <title>Map</title>
</head>
<body>

<?php include('staticPageElements/nav_bar.php'); ?>

<div id="map"></div>


<div id="actualbody" style="padding-top: 110px;">

    <div id="div_prompt">
    <h2> View the electric plugs used in different areas of the world. <br>
    </h2>
    <p> Please select a country or territory on the map. <br>
        This option is limited to sovereignties recognised by Google Maps.
        Go <a href="index.php"
    style="color:#fbd562;">here</a> for a more complete list.
    </p>
    </div>

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


    <p style="margin-bottom: 50px;">TO-DO: <br>
    catch exceptions for countries w/o data; <br>
    </p>
</div>

</body>

<footer>
    <script src="js/mappage.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT2XWLfjJof69JsiuMChKsRoT84CY-ao0&callback=initMap"
    async defer></script>
</footer>
</html>

