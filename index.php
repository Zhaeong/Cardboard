<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/allstyle.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <script src="js/indexpage.js"></script> 
    <script src="js/navbar.js"></script> 
    <title>World Plug</title>
</head>

<body>

<div id="div_navbar">
    <?php include('staticPageElements/nav_bar.php'); ?>
</div>

<div id="actualbody">
    <div id="div_prompt">
        <h2> 
            Compare the electric plugs <br>
            used in different areas of the world. <br>
        </h2>
        <h1> 
            What plugs do they use in . . . 
        </h1>
        <p> 
            Please enter two countries / territories.
        </p>
    </div>

    <div id="div_input">
        <p> 
            <br>
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
    </div>
</div>

</body>
</html>

