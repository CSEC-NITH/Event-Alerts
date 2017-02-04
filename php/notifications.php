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
        <h1 id="ntext">Notifications : </h1>
        <?php
           
            $username=$_SESSION['user'];
            $query='select * from MESSAGE where SEND_TO="'.$username.'"';
            $retval=mysqli_query($conn,$query);
                   if(mysqli_num_rows($retval)>0){

                    while($row=mysqli_fetch_assoc($retval)){
                ?>
                <div id="notificationDiv">
                    <img src="../images/ext.jpg" width="10%" height="10%">
                    <p><?php echo $row['MESSAGE'];?></p>
                    <p><?php echo $row['DATE'];?></p>
                </div>
                
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
  