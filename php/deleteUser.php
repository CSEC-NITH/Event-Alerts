<?php
   
    include('conn.php');
    $uname=$_POST['username'];
    $mname=$_POST['title'];
    //echo $uname."<br>";
    if(isset($_POST['username'])){
    $sql = "DELETE FROM USER WHERE USERNAME='".$uname."'";
    }
    elseif (isset($_POST['title'])) {
        $sql = "DELETE FROM MESSAGE WHERE TITLE='".$mname."'";
    }
    if($conn->query($sql))
    {
        echo "<script type='text/javascript'>alert('User/Message deleted Successfully');window.location.href='adminPanel.php';</script>";
    }
    else{
        echo "Something Wrong!! Please Try again";
    }
?>