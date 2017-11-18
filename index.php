<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/indexstyle.css">
  <script src="js/indexpage.js"></script> 
  <title>Pluug</title>
</head>
<body>


<?php include('staticPageElements/nav_bar.php'); ?>


<h2> <br> What electric plugs do they use in . . .</h2>
<p> Please enter two countries / territories.</p>
<p> <br>
<?php
    include 'database/base_db.php';
    $dbObj = new databaseObj();
    echo '
    <label for="color">Location 1</label>
    <input list="country_list" id="countryA" placeholder="Country / Territory">
    
    <label for="color">Location 2</label>
    <input list="country_list" id="countryB" placeholder="Country / Territory">';
    
    echo '<datalist id="country_list">';
        echo $dbObj->getCountryOptions();    
    echo '</datalist>';
    
    
    echo '     <button onclick="getPlugFacts()" id="button_compare">Compare</button> ';
    echo '
        <div class="countryDisplay" id="countryAdata">
        </div>
        ';
    ?>
</p>
    
<!--BODY TEXT-->
<p> <br><br> TO-DO: <br>
	check font licences; <br>
    style drop down list entries | datalist can't be styled <br>
    figure out why drop down list doesn't 
    autocomplete from the first letter; | always matches any substring can't be changed <br>
    allow special characters (ô, é) in sql; <br>
    <br>
</p>


<p> Data sourced from 
    <a href="http://www.iec.ch/worldplugs/?ref=extfooter"
    style="color:#fbd562;">The International Electrotechnical Commission</a>. 
    Please <a href="contact.php"
    style="color:#fbd562;">contact us</a> for any corrections or suggestions. </p>

</body>
</html>

