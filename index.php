<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/mainstyle.css">
  <script src="js/mainpage.js"></script> 
</head>
<body>

<h1 style="text-align:center;"> plug-related title </h1>

<!--NAVIGATION BAR-->
<ul >
  <li><a href="index.php">home</a></li>
  <li><a href="map.asp">map</a></li>
  <li><a href="about.asp">about</a></li>
  <li><a href="contact.asp">contact</a></li>
</ul>


<?php
    include 'database/base_db.php';
    $dbObj = new databaseObj();
    echo '
        <label for="color">Country</label>
    <input list="colors" id="countryA">
    <datalist id="colors">';
        echo $dbObj->getCountryOptions();    
    echo '</datalist>';
    echo '     <button onclick="getPlugFacts()">Click me</button> ';
    echo '
        <div class = "countryDisplay" id = "countryAdata">
        </div>
        ';
    ?>

    
<!--BODY TEXT-->
<p> This is just a regular paragraph. <br>
	Remember to check font licences Cynthia.</p>

</body>
</html>

