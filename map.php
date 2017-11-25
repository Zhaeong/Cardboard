<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/indexstyle.css">
  <script src="js/indexpage.js"></script> 
  
  

  <title>Map</title>
</head>
<body>

<?php include('staticPageElements/nav_bar.php'); ?>

<div id="map"></div>

<div id="actualbody">

    
    <div id="div_prompt" style="margin-top: 110px;">
    <h2> View the electric plugs <br>
        used in different areas of the world. <br>
    </h2>
    <p> Please select a country or territory on the map.</p>
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
    write 'for a full list of countries click /here/' msg; <br>
    make map cover all mini countries; <br>
    </p>
</div>

</body>

<footer>
    <script src="js/mappage.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT2XWLfjJof69JsiuMChKsRoT84CY-ao0&callback=initMap"
    async defer></script>
</footer>
</html>

