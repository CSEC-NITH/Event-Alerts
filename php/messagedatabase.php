<?php
// Start the session
session_start();
		$servername = "localhost";
		$username = "root";
		$password = "nd123.in";
		$dbname = "HACKATHON";
		$conn = new mysqli($servername, $username, $password, $dbname);
		//echo "Mukesh";
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$msg = $_GET['msg'];
		$usrname=$_SESSION['user'];
		//exit();
		
		$sql = "INSERT INTO CHATTABLE(USERNAME,MESSAGE) VALUES('".$usrname."','".$msg."')";

		if($conn->query($sql) === TRUE)
		{
			$sqr="SELECT USERNAME,MESSAGE,DATE from CHATTABLE";
			$result = $conn->query($sqr);
			if ($result->num_rows > 0) {?>
			<table>
				<?php
				while($row = $result->fetch_assoc()) {
           
					echo "<div class = 'msg'><tr  style='background-color:#909090;font-size:16px;'><td style='width:20%;'>".$_SESSION['user']."</td><td style='width:60%;'>".$row["MESSAGE"]."</td><td> ".$row[DATE]."</td></tr></div>";
				
				}
			}
			// header("Location: /app/adminDashboard.html");
 
		}
		?>
         </table>
		<?php

	
		$conn->close();
		//echo $drname."<br>";
	?>