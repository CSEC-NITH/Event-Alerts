<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/4/17
 * Time: 3:05 PM
 */
include('conn.php');
$sendto = $_POST['to'];
$message = $_POST['noticetext'];
$link =$_POST['link'];
$imgname=basename($_FILES["fileToUpload"]["name"]);
$sql="insert into MESSAGE(SEND_TO,MESSAGE,IMAGE_NAME,LINK) VALUES('".$sendto."','".$message."','".$imgname."','".$link."')";

//$result=$conn->query($sql);

if($conn->query($sql) === TRUE)
{
	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
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
	    $uploadOk = 1;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg"
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
	        echo "<script type='text/javascript'>alert('Message Sent');window.location.href='adminPanel.php';</script>";

	    } 
	    else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}    
}
else{ echo "ERROR:".$conn->error; exit;}
