<?php

include 'base_db.php';

if(isset($_POST['getPlugFacts']) && isset($_POST['countryA']))
{
    $dbObj = new databaseObj();
    
    $countryA = $_POST['countryA'];
    $countryInfo = $dbObj->getCountryInfo($countryA);
    $countryInfoJSON = json_encode($countryInfo);
    echo $countryInfoJSON;
    
}
else
{
    echo "database call failed";
}