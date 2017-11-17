 <?php

include 'base_db.php';

if(isset($_POST['getPlugFacts']) && isset($_POST['countryA']) && isset($_POST['countryB']))
{
    $dbObj = new databaseObj();
    
    $countryA = $_POST['countryA'];
    $countryB = $_POST['countryB'];
    $countryInfo = $dbObj->getCountryInfo($countryA, $countryB);
    $countryInfoJSON = json_encode($countryInfo);
    echo $countryInfoJSON;
    
}
else if(isset($_POST['getCountryInfo']) && isset($_POST['country_display']))
{
    $dbObj = new databaseObj();
    
    $country = $_POST['country_display'];
    
    $countryInfo = $dbObj->getCountryInfoSingle($country);
    $countryInfoJSON = json_encode($countryInfo);
    echo $countryInfoJSON;
    
}
else
{
    echo "database call failed";
}