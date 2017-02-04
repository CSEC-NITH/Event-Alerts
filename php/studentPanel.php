<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/2/17
 * Time: 5:57 PM
 */
    session_start();
    $conn=mysqli_connect('localhost','root','atul1234','HACKATHON');
    if(!$conn){
        die("Connection Error");
    }
    $username=$_SESSION["user"];
    $query='select * from USER where USERNAME="'.$username.'"';
    $retval=mysqli_query($conn,$query);
    if(mysqli_num_rows($retval)==1){
        $data=mysqli_fetch_assoc($retval);
        $name=$data['NAME'];
        $rollno=$data['ROLL_NO'];
        $email=$data['EMAIL'];
    }
    else{
        header('location: home.php');
    }
?>


<!doctype html>
<html>
<head>
    <title>Student Panel</title>
    <link href="../css/main.css" rel="stylesheet" >
</head>
<body>
    <div id="menu">
        <div id="lbutton">
            <p ><a href="logout.php" id="ltext">Logout</a></p>
        </div>
    </div>
    <div id="combine">
        <div id="profile">
            <center><img  id="pp" src="../images/2.jpg" alt="profile Pic" >
            <p id="ptext"><?php echo $name;?></p>
            <p id="ptext">Roll No : <?php echo $rollno;?></p>
            <p id="ptext"><?php echo $email;?></p></center>
        </div>
        <div id="notice">
            <h1 id="ntext">Notices : </h1>
            <table>
                <thead>
                    <td>Sender</td><td>Message</td><td>Date</td>
                </thead>
               <?php
                   $query='select * from MESSAGE where SEND_TO="'.$username.'"';
                   $retval=mysqli_query($conn,$query);
                   if(mysqli_num_rows($retval)>0){

                    while($row=mysqli_fetch_assoc($retval)){
                ?>
                <tr>
                    <td id="sender">ME</td><td id="message"><?php echo $row['MESSAGE'];?></td><td id="date"><?php echo $row['DATE'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>