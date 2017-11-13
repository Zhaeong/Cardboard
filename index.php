<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/indexstyle.css">
  <script src="js/indexpage.js"></script> 
  <title>Pluug</title>
</head>
<body>

<h1 style="text-align:center;"> plug-related title </h1>

<?php include('staticPageElements/nav_bar.php'); ?>


<h2> <br> What plug types do they use in . . .</h2>
<p> Please enter two countries / territories.</p>
<p> <br>
<?php
    include 'database/base_db.php';
    $dbObj = new databaseObj();
    echo '
    <label for="color">Location 1</label>
    <input list="countries" id="countryA" placeholder="Country / Territory">
    
    <label for="color">Location 2</label>
    <input list="countries" id="countryB" placeholder="Country / Territory">';
    
    echo '<datalist id="countries">';
        echo $dbObj->getCountryOptions();    
    echo '</datalist>';
    
    
    echo '     <button onclick="getPlugFacts()" id="button_compare">Compare</button> ';
    echo '
        <div class = "countryDisplay" id = "countryAdata">
        </div>
        ';
    ?>
</p>
    
<!--BODY TEXT-->
<p> <br><br> TO-DO: <br>
	check font licences; <br>
    style drop down list entries; <br>
    figure out why drop down list doesn't autocomplete from the first letter;
</p>

</body>
</html>

