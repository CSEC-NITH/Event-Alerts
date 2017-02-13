<?php
	

	session_start();
	include('conn.php');
	
	$username = $_SESSION['user'];
	$target_dir = "../images/";
	//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir .$username.".jpg";
	$uploadOk = 1;
	echo "target_file : ".$target_file;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	//echo $imageFileType;
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists

	if (file_exists($target_file)) {
	    //echo "Sorry, file already exists.";
	    unlink($target_file);
	    $uploadOk = 1;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
	        //echo "<img src=\"".$target_file."\" />";
	        echo "<script type='text/javascript'>alert('Profile Updated Successfully');window.location.href='./studentDashboard.php';</script>";

	    } 
	    else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
?>