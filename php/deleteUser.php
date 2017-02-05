<?php
    include('conn.php');
    $uname=$_POST['username'];
    echo $uname."<br>";
    $sql = "DELETE FROM USER WHERE USERNMAE='".$uname."'";
    if($conn->query($sql))
    {
        echo "<script type='text/javascript'>alert('User deleted Successfully');window.location.href='adminPanel.php';</script>";
    }
    else{
        echo "Something Wrong!! Please Try again";
    }
?>