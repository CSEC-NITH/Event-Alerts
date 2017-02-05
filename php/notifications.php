<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/2/17
 * Time: 5:57 PM
 */
session_start();
$_SESSION['user']="ABHI";
if(isset($_SESSION['user'])){
    $conn=mysqli_connect('localhost','root','nd123.in','HACKATHON');
    if(!$conn){
        die("Connection Error");
    }
    else{
?>
    <div id="notice">
        <!-- <h1 id="ntext">Notifications : </h1> -->
        <?php
           
            $username=$_SESSION['user'];
            $query='select * from MESSAGE where SEND_TO="'.$username.'"';
            $retval=mysqli_query($conn,$query);
                   if(mysqli_num_rows($retval)>0){

                    while($row=mysqli_fetch_assoc($retval)){
                ?>
               <!--  <div id="notificationDiv">
                    <img src="../images/ext.jpg" width="10%" height="10%">
                    <p><?php echo $row['MESSAGE'];?></p>
                    <p><?php echo $row['DATE'];?></p>
                </div> -->
                
                <?php
                    }
                ?>
            </table>
        <?php
            }
            }
        ?>
    </div>
    <?php
        }
        else
        {
            header('Location: ../index.html');
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/home">
</head>
<body>
    <div class="dynamic">
        <div class="content">
            <div class="content_image"><img src="../images/ext.jpg" width="350px" height="350px"></div>
            <div class="desc" align="center">
                <div class="event_title"><h1>Evevt Title</h1></div>
                <div class="event_desc">
                <p>Property crime is a category of crime that includes burglary,
                larceny, theft, motor vehicle theft, arson, shoplifting, and
                vandalism. Property crime only involves the taking of money
                or property, and does not involve force or threat of force
                against a victim.</p>
                </div>
                <div class="link_button"><a href="#">Register</a></div>
            </div>       
        </div>
    </div>

    <div class="dynamic">
        <div class="content">
            <div class="content_image"><img src="../images/ext.jpg" width="350px" height="350px"></div>
            <div class="desc" align="center">
            <div class="event_title"><h1>Evevt Title</h1></div>
                <div class="event_desc">
                <p>Property crime is a category of crime that includes burglary,
                larceny, theft, motor vehicle theft, arson, shoplifting, and
                vandalism. Property crime only involves the taking of money
                or property, and does not involve force or threat of force
                against a victim.</p>
                </div>
                <div class="link_button"><a href="#">Register</a></div>
            </div>       
        </div>
    </div>
</body>
</html>
  