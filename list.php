<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/allstyle.css">
  <link rel="stylesheet" href="css/liststyle.css">


  <title>List</title>
</head>
<body>

<?php include('staticPageElements/nav_bar.php'); ?>


<div id="actualbody" style="padding-top: 140px;">

	<div id="div_prompt">
    <h2> Compare the electric plugs <br>
        used in different areas of the world. <br>
    </h2>
    <p> Use Ctrl + F (⌘ + F on Mac) to find a country.</p>
    </div>

	<table id="listTable">
		<thead>
		<tr>
		    <th>Country</td>
		    <th>Voltage</td>
		    <th>Frequency</td>
		    <th>Plug Type(s)</td>
		</tr>
		</thead>

		<tbody>
		<?php
		$conn = mysqli_connect("914f3017-75eb-4690-820c-a82d0037f145.mysql.sequelizer.com",
			                 "uonbwrkplyfkjcpw",
			                 "F6JCfZFFzW7KmXsJTB5RT4LtTf7dSsUvEBTCJoN7a8LeSWyLMKM4j2iKtpRa2CWh",
			                 "db914f301775eb4690820ca82d0037f145");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$SELECT = mysqli_query($conn, "SELECT * 
			                           FROM powerswitches 
			                           ORDER BY country_display");
		if($SELECT != false) {
		    while($rows = mysqli_fetch_array($SELECT)) {
		        echo "
		        <tr>
		            <td>".$rows["country_display"]."</td>
		            <td>".$rows["voltage"]."</td>
		            <td>".$rows["frequency"]."</td>
		            <td>".$rows["plug"]."</td>
		        </tr>
		        ";
		    }
		}
		else {
		    echo "
		        <tr>
		        <td colspan='3'>Sorry! Something went wrong.</td>
		        </tr>
		    ";
		}
		?>
		</tbody>
	</table>



	<canvas id="PlugCanvas" width="600px" height="300px" style="border:1px solid #000000;">
	</canvas> 
	</body>

	<footer>
	    <script src="js/pluganimation.js"></script> 
	</footer>

</div>


</body>
</html>

