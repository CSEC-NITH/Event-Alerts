<?php
	// $host='localhost';
	// $username="root";
	// $pwd="nitin";
	// $database='HACKTHON';
	$conn=mysqli_connect('localhost','root','atul1234','HACKATHON');
	if(!$conn){
		die("Connection Error".mysqli_connect_error());
	}
	// else{
	// 	echo "<h1>connection Successful</h1>";
	// }
	$user_name=$_POST["uname"];
	$pwd=$_POST["psw"];
	$query='select * from USER where USERNAME="'.$user_name.'" and PASSWORD="'.$pwd.'"';
	$retval=mysqli_query($conn,$query);
	if(mysqli_num_rows($retval)>0){
		session_start();
		$_SESSION["user"]=$user_name;
		header("location: ./studentPanel.php");
	}
	else{
		echo "User not found";
	}
?>