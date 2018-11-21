<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--RESPONSIVE NAVIGATION BAR-->
<div class="topnav" id="navBar">
    <a href="index.php" style="float: left;"> 
        <img src="../images/title.png" height="100px" width="600px">
    </a>
    <div class="topnav-links">
        <a href="about.php" >ABOUT</a>
        <a href="list.php">LIST</a>
        <a href="map.php">MAP</a>
        <a href="index.php">HOME</a>
        <div class="dropdown">
            <!-- this link opens and closes the topnav on small screens -->
            <a href="javascript:void(0);" class="burgerIcon" onclick="toggleMenuDropdown()">
                 <i class="fa fa-bars"></i>
            </a>
            <div class="dropdown-content" id="dropdownLinks">
                <a href="index.php">HOME</a>
                <a href="map.php">MAP</a>
                <a href="list.php">LIST</a>
                <a href="about.php" >ABOUT</a>
            </div>
        </div>
    </div>
</div>

<!--FOOTER-->
<div id="footer">
Data sourced from 
    <a href="http://www.iec.ch/worldplugs/?ref=extfooter"
    style="color:#fbd562;">The International Electrotechnical Commission</a>. 
    Please <a href="mailto:thiadeliria@gmail.com?Subject=Worldplugs"
    style="color:#fbd562;">contact us</a> for any corrections or suggestions.
</div>

