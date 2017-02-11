<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/2/17
 * Time: 5:57 PM
 */
    session_start();
    if(!isset($_SESSION["user"])){
        header('location: ../index.php');
    }
    $conn=mysqli_connect('localhost','root','atul1234','HACKATHON');
    if(!$conn){
        die("Connection Error".mysqli_connect_error());
    }
    $username=$_SESSION["user"];
    $query='select * from USER where USERNAME="'.$username.'"';
    $retval=mysqli_query($conn,$query);
    if(mysqli_num_rows($retval)>0){
        $data=mysqli_fetch_assoc($retval);
        $name=$data['NAME'];
        $rollno=$data['ROLL_NO'];
        $email=$data['EMAIL'];
        $contact=$data['CONTACT'];
    }
    else{
        //header('location: home.php');
    }
?>

    <div id="profile">
        <div id="ppDiv">
            <img  id="pp" src=<?php echo '"../images/'.$username.'.jpg"' ?> alt="profile Pic" >
        </div>
        <div id="info">
            <p id="ptext">Name : <?php echo $name;?></p>
            <p id="ptext">Roll No : <?php echo $rollno;?></p>
            <p id="ptext">Eamil : <?php echo $email;?></p>
            <p id="ptext">Contact : <?php echo $contact;?></p>
        </div>
        <div id="updatepp">
            <form form action="updatepp.php" method="POST" enctype="multipart/form-data">
            <table style="width:auto;z-index:5;">
                <tr><td><input type="file" name="fileToUpload" id="fileToUpload" /></td><tr>
                <tr><td><input id="sendB" type="submit" name="submit" value="Update Profile Picture"></td></tr>
            </table>
            
            
            
            </form>
        </div>
    </div>

