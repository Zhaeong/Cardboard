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
<p> Please enter two countries/states/territories.</p>
<p> <br>
<?php
    include 'database/base_db.php';
    $dbObj = new databaseObj();
    echo '
    <label for="color">Location 1</label>
    <input list="countries" id="countryA" placeholder="Country / State / Territory">
    
    <label for="color">Location 2</label>
    <input list="countries" id="countryB" placeholder="Country / State / Territory">';
    
    echo '<datalist id="countries">';
        echo $dbObj->getCountryOptions();    
    echo '</datalist>';
    
    
    echo '     <button onclick="getPlugFacts()">Compare</button> ';
    echo '
        <div class = "countryDisplay" id = "countryAdata">
        </div>
        ';
    ?>
</p>
    
<!--BODY TEXT-->
<p> <br><br> This is just a regular paragraph. <br>
	Remember to check font licences Cynthia.</p>

</body>
</html>

