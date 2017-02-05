<?php
	// $host='localhost';
	// $username="root";
	// $pwd="nitin";
	// $database='HACKTHON';
	// echo "Signup";
	$conn=mysqli_connect('localhost','root','nitin','HACKATHON');
	if(!$conn){
		die("Connection Error".mysqli_connect_error());
	}
	// else{
	// 	echo "<h1>connection Successful</h1>";
	// }
	$name=$_POST["name"];
	$user_name=$_POST["uname"];
	$email=$_POST["email"];
	$pwd=$_POST["psw"];
	$phone=$_POST["contact"];
	$rollno=$_POST["rollno"];
	// echo "insert query";
	// $query='select * from USER where username="'.$user_name.'" and PASSWORD="'.$pwd.'"';
	$query='insert into USER(NAME,USERNAME,ROLL_NO,EMAIL,CONTACT,PASSWORD) values("'.$name.'","'.$user_name.'","'.$rollno.'","'.$email.'",'.$phone.',"'.$pwd.'")';
	
	if(mysqli_query($conn,$query)){
		header('location: ../index.php');
	}
	else{
		echo "<script type='text/javascript'>alert('Registration unsuccessful,either you have already register or some error in database');window.location.href='../index.php';</script>";
	}
?>
