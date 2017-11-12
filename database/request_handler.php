<?php

include 'base_db.php';

if(isset($_POST['getPlugFacts']) && isset($_POST['countryA']))
{
    $dbObj = new databaseObj();
    $countryInfo = $dbObj->getCountryOptions();
    echo "yayyaa";
    echo $countryInfo;
}
else
{
    echo "database call failed";
}