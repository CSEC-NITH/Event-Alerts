<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header('location: ../index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/about.css">
</head>
<body>
	<div class="main">
		<div class="about_div">
			<div class="about_img"><img src="../images/ext.jpg" width="300px" height="300px"></div>	
			<div class="about_content" align="center">
				<div class="event_title"><h1>About : </h1></div>
                <div class="event_desc">
                <p>Property crime is a category of crime that includes burglary,
                larceny, theft, motor vehicle theft, arson, shoplifting, and
                vandalism. Property crime only involves the taking of money
                or property, and does not involve force or threat of force
                against a victim.</p>
                </div>
			</div>
		</div>
		<div class="team_div">
			
		</div>
	</div>
</body>
</html>