<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header('location: ../index.php');
	}
?>

	<div class="about_main">
		<div class="about_div">
			<div class="about_img"><img src="../images/hack1.0.jpg" width="100%" height="100%"></div>	
			<div class="about_content" align="center">
				<div class="event_title"><h1>About</h1></div>
                <div class="event_desc">
                <p>Developed in hackathon HACK 1.0 organized by CSEC. Event-Alerts alerts about all the events and workshops organized in NITH by various clubs, to every registered user on our web application(Event-Alerts).</p>
                <br /><p><b>Stack Used : HTML, CSS, MySQL, PHP, AJAX, JS</b></p><br />
               	<p><a href="https://github.com/narendra36/Event-Alerts">Source Code(GitHub)</a></p>
               	<p><a href="https://github.com/narendra36/Event-Alerts/graphs/contributors">Developers</a></p>
                </div>
			</div>
		</div>
		<div class="team_div">
			
		</div>
	</div>